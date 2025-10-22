# Practice Lab 1 Answers

## Question 1
**Which of the following protocols appear (i.e., are listed in the Wireshark "protocol" column) in the trace file?**

**Answer:** TCP, TLSv1.2, HTTP

**Explanation:** From the trace file analysis, the protocols that appear from the given list are:
-  TCP - Present
-  TLSv1.2 - Present
-  HTTP - Present
-  UDP - Not present
-  QUIC - Not present
-  DNS - Not present

Additional protocols in the trace (not asked about): ARP, STP, ICMPv6

---

## Question 2
**How long did it take from when the HTTP GET message was sent until the HTTP OK reply was received?**

**Answer:** 0.029

**Calculation:**
- HTTP GET sent at: 8.472728 seconds (frame 286)
- HTTP OK received at: 8.501613 seconds (frame 288)
- Difference: 8.501613 - 8.472728 = 0.028885 seconds
- Rounded to 3 decimal places: 0.029

---

## Question 3
**What is the Internet (IP) address of the web server gaia.cs.umass.edu (also known as www-net.cs.umass.edu)?**

**Answer:** 128.119.245.12

**Explanation:** This is the destination IP address in the HTTP GET request (frame 286).

---

## Question 4
**What is the Internet (IP) address of the client that sent the HTTP request to the gaia.cs.umass.edu server?**

**Answer:** 10.0.0.44

**Explanation:** This is the source IP address in the HTTP GET request (frame 286).

---

## Question 5
**What type of Web browser issued the HTTP request?**

**Answer:** Firefox

**Explanation:** The User-Agent field in frame 286 shows:
```
Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:84.0) Gecko/20100101 Firefox/84.0
```
The browser is clearly identified as **Firefox** (version 84.0).

---

## Question 6
**What is the destination port number (the number following "Dest Port:" for the TCP segment containing the HTTP request) to which this HTTP request is being sent?**

**Answer:** 80

**Explanation:** Frame 286 (the HTTP GET request) shows the TCP destination port is 80, which is the standard port for HTTP.

---

## Summary

All questions have been answered by analyzing the trace file `intro-wireshark-trace1.pcap` using tshark (command-line Wireshark).

**Key packet analyzed:** Frame 286 - HTTP GET request to gaia.cs.umass.edu

**Test file accessed:** http://gaia.cs.umass.edu/wireshark-labs/INTRO-wireshark-file1.html
