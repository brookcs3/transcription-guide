#!/usr/bin/env python3
"""
Generalized Wireshark Lab Agent
Automatically analyzes Wireshark trace files and answers lab questions using tshark.

Supports:
- Intro Lab (Basic protocol identification)
- HTTP Lab (GET/POST, conditional GET, authentication, etc.)
- TCP Lab (Sequence numbers, RTT, congestion control)
- IP Lab (IPv4, IPv6, fragmentation, traceroute)
- Ethernet/ARP Lab (MAC addresses, ARP messages)
"""

import subprocess
import re
import json
from pathlib import Path
from typing import Dict, List, Any, Optional

class WiresharkLabAgent:
    def __init__(self, trace_dir: str, tshark_path: str = "/Applications/Wireshark.app/Contents/MacOS/tshark"):
        self.trace_dir = Path(trace_dir)
        self.tshark = tshark_path
        self.current_trace = None

    def load_trace(self, trace_file: str):
        """Load a specific trace file"""
        self.current_trace = self.trace_dir / trace_file
        if not self.current_trace.exists():
            raise FileNotFoundError(f"Trace file not found: {self.current_trace}")
        print(f"✓ Loaded trace: {trace_file}")

    def run_tshark(self, filter_expr: str = "", fields: List[str] = None,
                   output_mode: str = "fields", limit: int = None) -> List[str]:
        """
        Run tshark command and return output

        Args:
            filter_expr: Wireshark display filter (e.g., "http", "tcp.port==80")
            fields: List of fields to extract (e.g., ["frame.number", "ip.src"])
            output_mode: "fields", "text", "json", or "pdml"
            limit: Limit number of packets
        """
        if not self.current_trace:
            raise ValueError("No trace file loaded")

        cmd = [self.tshark, "-r", str(self.current_trace)]

        if filter_expr:
            cmd.extend(["-Y", filter_expr])

        if output_mode == "fields" and fields:
            cmd.extend(["-T", "fields"])
            for field in fields:
                cmd.extend(["-e", field])
        elif output_mode in ["json", "pdml"]:
            cmd.extend(["-T", output_mode])

        result = subprocess.run(cmd, capture_output=True, text=True)

        if result.returncode != 0:
            print(f"⚠ tshark error: {result.stderr}")
            return []

        lines = result.stdout.strip().split('\n')
        return [l for l in lines if l] if limit is None else lines[:limit]

    def get_protocols(self) -> List[str]:
        """Get all unique protocols in trace"""
        protocols = self.run_tshark(fields=["_ws.col.Protocol"])
        return sorted(set(protocols))

    def find_packet(self, filter_expr: str, packet_num: int = 1) -> Optional[int]:
        """Find the nth packet matching a filter, return frame number"""
        frames = self.run_tshark(filter_expr, fields=["frame.number"])
        if len(frames) >= packet_num:
            return int(frames[packet_num - 1])
        return None

    def get_field(self, frame_num: int, field: str) -> Optional[str]:
        """Get a specific field from a specific frame"""
        result = self.run_tshark(f"frame.number=={frame_num}", fields=[field])
        return result[0] if result else None

    def calculate_time_delta(self, frame1: int, frame2: int) -> float:
        """Calculate time difference between two frames"""
        time1 = float(self.get_field(frame1, "frame.time_relative") or 0)
        time2 = float(self.get_field(frame2, "frame.time_relative") or 0)
        return abs(time2 - time1)

    # ============== INTRO LAB METHODS ==============

    def intro_q1_protocols(self, protocol_list: List[str]) -> List[str]:
        """Question 1: Which protocols appear in trace?"""
        trace_protocols = set(self.get_protocols())
        return [p for p in protocol_list if p in trace_protocols]

    def intro_q2_http_response_time(self) -> str:
        """Question 2: Time from HTTP GET to OK"""
        # Find HTTP GET
        get_frame = self.find_packet("http.request.method==GET")
        if not get_frame:
            return "HTTP GET not found"

        # Find corresponding HTTP OK (200)
        ok_frame = self.find_packet("http.response.code==200")
        if not ok_frame:
            return "HTTP OK not found"

        delta = self.calculate_time_delta(get_frame, ok_frame)
        rounded = round(delta, 3)
        return f"0.{str(rounded).split('.')[1][:3]}"

    def intro_q3_server_ip(self, server_filter: str = "http.request.method==GET") -> str:
        """Question 3: Server IP address"""
        frame = self.find_packet(server_filter)
        return self.get_field(frame, "ip.dst") if frame else "Not found"

    def intro_q4_client_ip(self, client_filter: str = "http.request.method==GET") -> str:
        """Question 4: Client IP address"""
        frame = self.find_packet(client_filter)
        return self.get_field(frame, "ip.src") if frame else "Not found"

    def intro_q5_browser(self) -> str:
        """Question 5: Browser type from User-Agent"""
        frame = self.find_packet("http.request.method==GET")
        if not frame:
            return "Not found"

        user_agent = self.get_field(frame, "http.user_agent")
        if not user_agent:
            return "Not found"

        if "Firefox" in user_agent:
            return "Firefox"
        elif "Safari" in user_agent and "Chrome" not in user_agent:
            return "Safari"
        elif "Edg" in user_agent:
            return "Microsoft Edge"
        else:
            return "None of these answers"

    def intro_q6_dest_port(self) -> str:
        """Question 6: TCP destination port"""
        frame = self.find_packet("http.request.method==GET")
        return self.get_field(frame, "tcp.dstport") if frame else "Not found"

    # ============== HTTP LAB METHODS ==============

    def http_version(self, frame_filter: str = "http.request.method==GET") -> tuple:
        """Get HTTP version of request and response"""
        req_frame = self.find_packet(frame_filter)
        req_version = self.get_field(req_frame, "http.request.version") if req_frame else None

        resp_frame = self.find_packet("http.response.code")
        resp_version = self.get_field(resp_frame, "http.response.version") if resp_frame else None

        return (req_version, resp_version)

    def http_status_code(self) -> tuple:
        """Get HTTP response status code and phrase"""
        frame = self.find_packet("http.response")
        if not frame:
            return (None, None)

        code = self.get_field(frame, "http.response.code")
        phrase = self.get_field(frame, "http.response.phrase")
        return (code, phrase)

    # ============== TCP LAB METHODS ==============

    def tcp_connection_info(self, filter_expr: str = "tcp") -> Dict[str, Any]:
        """Get TCP connection information"""
        syn_frame = self.find_packet("tcp.flags.syn==1 and tcp.flags.ack==0")

        if not syn_frame:
            return {}

        return {
            "client_ip": self.get_field(syn_frame, "ip.src"),
            "client_port": self.get_field(syn_frame, "tcp.srcport"),
            "server_ip": self.get_field(syn_frame, "ip.dst"),
            "server_port": self.get_field(syn_frame, "tcp.dstport"),
            "syn_seq": self.get_field(syn_frame, "tcp.seq"),
            "syn_frame": syn_frame
        }

    def tcp_seq_numbers(self) -> Dict[str, str]:
        """Get sequence numbers for SYN, SYNACK, first data segment"""
        syn_frame = self.find_packet("tcp.flags.syn==1 and tcp.flags.ack==0")
        synack_frame = self.find_packet("tcp.flags.syn==1 and tcp.flags.ack==1")

        return {
            "syn_seq": self.get_field(syn_frame, "tcp.seq") if syn_frame else None,
            "synack_seq": self.get_field(synack_frame, "tcp.seq") if synack_frame else None,
            "synack_ack": self.get_field(synack_frame, "tcp.ack") if synack_frame else None,
        }

    def tcp_rtt_analysis(self, data_filter: str = "tcp.len>0") -> List[Dict[str, float]]:
        """Calculate RTT for data segments"""
        # Get first few data segments
        data_frames = self.run_tshark(data_filter, fields=["frame.number", "frame.time_relative", "tcp.seq"])[:5]

        rtts = []
        for frame_data in data_frames:
            parts = frame_data.split('\t')
            if len(parts) < 3:
                continue

            frame_num = int(parts[0])
            send_time = float(parts[1])

            # Find corresponding ACK (simplified - would need tcp.ack value matching)
            # This is a simplified version; real implementation would track ACKs properly
            rtts.append({
                "frame": frame_num,
                "send_time": send_time
            })

        return rtts

    # ============== IP LAB METHODS ==============

    def ip_header_info(self, frame_num: int) -> Dict[str, Any]:
        """Get IP header information for a frame"""
        return {
            "version": self.get_field(frame_num, "ip.version"),
            "header_len": self.get_field(frame_num, "ip.hdr_len"),
            "ttl": self.get_field(frame_num, "ip.ttl"),
            "protocol": self.get_field(frame_num, "ip.proto"),
            "src": self.get_field(frame_num, "ip.src"),
            "dst": self.get_field(frame_num, "ip.dst"),
            "len": self.get_field(frame_num, "ip.len"),
            "id": self.get_field(frame_num, "ip.id"),
            "flags": self.get_field(frame_num, "ip.flags"),
            "frag_offset": self.get_field(frame_num, "ip.frag_offset"),
        }

    def ip_fragmentation_info(self, filter_expr: str) -> List[Dict[str, Any]]:
        """Analyze IP fragmentation"""
        fragments = self.run_tshark(filter_expr, fields=[
            "frame.number", "ip.id", "ip.flags.mf", "ip.frag_offset", "ip.len"
        ])

        frag_info = []
        for frag in fragments:
            parts = frag.split('\t')
            if len(parts) >= 5:
                frag_info.append({
                    "frame": int(parts[0]),
                    "id": parts[1],
                    "more_fragments": parts[2] == "1",
                    "offset": parts[3],
                    "length": parts[4]
                })

        return frag_info

    def ipv6_address(self, frame_num: int, src_or_dst: str = "src") -> str:
        """Get IPv6 address (properly formatted)"""
        field = f"ipv6.{src_or_dst}"
        return self.get_field(frame_num, field) or "Not found"

    # ============== ETHERNET/ARP LAB METHODS ==============

    def ethernet_addresses(self, frame_num: int) -> Dict[str, str]:
        """Get Ethernet source and destination addresses"""
        return {
            "src": self.get_field(frame_num, "eth.src"),
            "dst": self.get_field(frame_num, "eth.dst"),
            "type": self.get_field(frame_num, "eth.type"),
        }

    def arp_analysis(self) -> List[Dict[str, Any]]:
        """Analyze ARP requests and replies"""
        arp_packets = self.run_tshark("arp", fields=[
            "frame.number", "arp.opcode", "arp.src.hw_mac", "arp.src.proto_ipv4",
            "arp.dst.hw_mac", "arp.dst.proto_ipv4"
        ])

        arp_info = []
        for pkt in arp_packets:
            parts = pkt.split('\t')
            if len(parts) >= 6:
                arp_info.append({
                    "frame": int(parts[0]),
                    "opcode": "request" if parts[1] == "1" else "reply",
                    "sender_mac": parts[2],
                    "sender_ip": parts[3],
                    "target_mac": parts[4],
                    "target_ip": parts[5]
                })

        return arp_info

    # ============== GENERIC QUERY METHOD ==============

    def query(self, filter_expr: str, fields: List[str], limit: int = None) -> List[Dict[str, str]]:
        """Generic query method for custom analysis"""
        results = self.run_tshark(filter_expr, fields=fields, limit=limit)

        parsed = []
        for result in results:
            parts = result.split('\t')
            if len(parts) == len(fields):
                parsed.append(dict(zip(fields, parts)))

        return parsed

    # ============== REPORT GENERATION ==============

    def generate_report(self, lab_type: str, questions: Dict[int, str]) -> str:
        """Generate markdown report with answers"""
        report = f"# {lab_type} Lab Answers\n\n"
        report += f"**Trace File:** {self.current_trace.name}\n\n"
        report += "---\n\n"

        for q_num, question in questions.items():
            report += f"## Question {q_num}\n"
            report += f"{question}\n\n"
            report += f"**Answer:** [Generated programmatically]\n\n"
            report += "---\n\n"

        return report


def main():
    """Example usage"""
    import sys

    if len(sys.argv) < 2:
        print("Usage: python wireshark_lab_agent.py <trace_directory>")
        sys.exit(1)

    trace_dir = sys.argv[1]
    agent = WiresharkLabAgent(trace_dir)

    # Example: Intro Lab
    print("\n" + "="*80)
    print("WIRESHARK LAB AGENT - INTRO LAB ANALYSIS")
    print("="*80)

    agent.load_trace("intro-wireshark-trace1.pcap")

    print("\nQ1: Protocols present")
    protocols = agent.intro_q1_protocols(["UDP", "QUIC", "TLSv1.2", "TCP", "HTTP", "DNS"])
    print(f"   Answer: {', '.join(protocols)}")

    print("\nQ2: HTTP Response Time")
    response_time = agent.intro_q2_http_response_time()
    print(f"   Answer: {response_time}")

    print("\nQ3: Server IP")
    server_ip = agent.intro_q3_server_ip()
    print(f"   Answer: {server_ip}")

    print("\nQ4: Client IP")
    client_ip = agent.intro_q4_client_ip()
    print(f"   Answer: {client_ip}")

    print("\nQ5: Browser")
    browser = agent.intro_q5_browser()
    print(f"   Answer: {browser}")

    print("\nQ6: Destination Port")
    port = agent.intro_q6_dest_port()
    print(f"   Answer: {port}")

    print("\n" + "="*80)
    print("Analysis Complete!")
    print("="*80 + "\n")


if __name__ == "__main__":
    main()
