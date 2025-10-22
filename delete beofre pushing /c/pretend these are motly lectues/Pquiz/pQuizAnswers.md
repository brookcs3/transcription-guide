# Module 1 Practice Quiz Answers

## Question 1
**Question:** The TCP protocol implements reliable data transfer.

**Answer:** True

**Explanation:** TCP (Transmission Control Protocol) is a connection-oriented service that provides reliable data transfer, flow control, and congestion control.

---

## Question 2
**Question:** A TDM-based network is a [circuit-switched/packet-switched] network

**Answer:** circuit-switched

**Explanation:** TDM (Time Division Multiplexing) is a circuit switching technique where time is divided into frames with fixed slots, and each connection gets a dedicated time slot per frame.

---

## Question 3
**Question:** The internet core is a [packet-switched/circuit-switched] network

**Answer:** packet-switched

**Explanation:** The Internet core uses packet switching almost exclusively. Data is broken into packets and transmitted on-demand without resource reservation.

---

## Question 4
**Question:** What devices reside in the network core?

**Answer:**
- Routers
- Switches

**Explanation:** The network core consists of a mesh of packet switches. Routers are used in the network core to forward packets, and link-layer switches are also used in network infrastructure.

---

## Question 5
**Question:** The internet is a system for connecting computers using a single transmission technology.

**Answer:** False

**Explanation:** The Internet is a "network of networks" that uses multiple, possibly different, transmission technologies. A *network* uses a single transmission technology, but the *Internet* interconnects multiple networks with various technologies.

---

## Question 6
**Question:** As discussed in the lectures, what are the primary functions of a packet-switched network.

**Answer:** Packet Transmission

**Explanation:** The fundamental functions of packet-switched networks include routing (determining packet paths) and forwarding (moving packets from input to output links). Packet transmission is the core function.

---

## Question 7
**Question:** A network is a system for connecting computers using multiple, possibly different, transmission technologies.

**Answer:** False

**Explanation:** A *network* connects computers using a *single* transmission technology (wired or wireless). It's the *Internet* that connects networks using multiple transmission technologies.

---

## Question 8
**Question:** The UDP protocol implements congestion control.

**Answer:** False

**Explanation:** UDP (User Datagram Protocol) is a connectionless service with no congestion control, no flow control, and no reliability guarantees. Only TCP implements congestion control.

---

## Question 9
**Question:** Circuit-switched file transfer time with FDM

**Given:**
- File = 18 MiB
- Total link transmission rate = 91.1 Gbps
- FDM with 2 users, equal bandwidth share
- Setup time = 84.5 ms

**Answer:** 87.8

**Calculation:**
1. Per-user rate = 91.1 Gbps / 2 = 45.55 Gbps = 45,550,000,000 bps
2. File size = 18 MiB = 18 � 1,024 � 1,024 � 8 = 150,994,944 bits
3. Transmission time = 150,994,944 / 45,550,000,000 = 0.003315 seconds = 3.315 ms
4. Total time = 84.5 + 3.315 = 87.815 ms H **87.8 ms**

---

## Question 10
**Question:** Queueing delay of packet number 40

**Given:**
- 56 packets arrive simultaneously
- Each packet = 9 MiB
- Transmission rate = 2.7 Gbps

**Answer:** 1090.5

**Calculation:**
1. Packet size = 9 MiB = 9 � 1,024 � 1,024 � 8 = 75,497,472 bits
2. Transmission delay per packet (L/R) = 75,497,472 / 2,700,000,000 = 0.027962 seconds
3. Queueing delay for packet 40 = (40-1) � 0.027962 = 39 � 0.027962 = 1.0905 seconds = **1090.5 ms**

---

## Question 11
**Question:** VoIP delay calculation

**Given:**
- a = 51 Kbps (analog to digital conversion rate)
- R = 1.6 Mbps (transmission rate)
- L = 58 bytes (packet length)
- d = 969 km
- s = 2.5 � 10^8 m/s

**Answer:** 13.26

**Calculation:**
1. Conversion time: 58 bytes � 8 = 464 bits; 464 / 51,000 = 0.009098 sec = 9.098 ms
2. Transmission delay: 464 / 1,600,000 = 0.00029 sec = 0.29 ms
3. Propagation delay: 969,000 / (2.5 � 10^8) = 0.003876 sec = 3.876 ms
4. Total = 9.098 + 0.29 + 3.876 = **13.26 ms**

---

## Question 12
**Question:** Multiple delay calculations

**Given:**
- Packet size = 1000 bytes = 8000 bits
- Distance = 1500 km
- Propagation speed = 2.5 � 10^8 m/s
- Ignore processing delay

**Answers:**

| Question | 10 Mbps | 100 Mbps |
|----------|---------|----------|
| Transmission delay for each packet | 0.80 | 0.08 |
| Propagation delay for each bit | 6.00 | 6.00 |
| Queueing delay for the 4th packet | 2.40 | 0.24 |
| End-to-end delay for the 5th packet | 10.00 | 6.40 |
| Average queueing delay for first 10 packets | 3.60 | 0.36 |

**Calculations for 10 Mbps:**
- T_trans = 8000 / 10,000,000 = 0.0008 s = 0.80 ms
- T_prop = 1,500,000 / (2.5 � 10^8) = 0.006 s = 6.00 ms
- Q_delay(packet 4) = 3 � 0.0008 = 2.40 ms
- E2E(packet 5) = 4�0.0008 + 0.0008 + 0.006 = 10.00 ms
- Avg Q_delay = (0+0.8+1.6+2.4+3.2+4.0+4.8+5.6+6.4+7.2)/10 = 3.60 ms

**Calculations for 100 Mbps:**
- T_trans = 8000 / 100,000,000 = 0.08 ms
- T_prop = 6.00 ms (same)
- Q_delay(packet 4) = 3 � 0.08 = 0.24 ms
- E2E(packet 5) = 4�0.08 + 0.08 + 6.00 = 6.40 ms
- Avg Q_delay = (0+0.08+0.16+0.24+0.32+0.40+0.48+0.56+0.64+0.72)/10 = 0.36 ms

---

## Question 13
**Question:** 28 B = _____ bits

**Answer:** 224

**Calculation:** 28 � 8 = 224

---

## Question 14
**Question:** 20 MiB = _____ bytes

**Answer:** 20971520

**Calculation:** 20 � 1,024 � 1,024 = 20,971,520

---

## Question 15
**Question:** 3 KiB = _____ bytes

**Answer:** 3072

**Calculation:** 3 � 1,024 = 3,072

---

## Question 16
**Question:** 16 MiB = _____ bits

**Answer:** 134217728

**Calculation:** 16 � 1,024 � 1,024 � 8 = 134,217,728

---

## Question 17
**Question:** 49.27 Mbps = _____ bits per second

**Answer:** 49270000

**Calculation:** 49.27 � 1,000,000 = 49,270,000

---

## Question 18
**Question:** 839 B = _____ bits

**Answer:** 6712

**Calculation:** 839 � 8 = 6,712

---

## Question 19
**Question:** 43 KiB = _____ bits

**Answer:** 352256

**Calculation:** 43 � 1,024 � 8 = 352,256

---

## Question 20
**Question:** 69.61 Mbps = _____ Kbps

**Answer:** 69610

**Calculation:** 69.61 � 1,000 = 69,610

---

## Question 21
**Question:** Probability that exactly 7 out of 11 users are transmitting

**Given:**
- 11 total users
- Each transmits 45% of the time (p = 0.45)
- Packet switching scenario

**Answer:** 0.11

**Calculation:**
Using binomial probability: P(k=7) = C(11,7) � (0.45)^7 � (0.55)^4

- C(11,7) = 11!/(7!�4!) = 330
- (0.45)^7 = 0.003733
- (0.55)^4 = 0.09150
- P = 330 � 0.003733 � 0.09150 = 0.1127 H **0.11**

---

## Question 22
**Question:** Statistical multiplexing - when does FileY finish?

**Given:**
- R = 32.8 Mbps
- FileX = 4 MiB, FileY = 244 KiB
- Payload = 1000 bytes, Header = 24 bytes
- Alternating transmission, X goes first

**Answer:** 124.9

**Calculation:**
1. FileX bits = 4 � 1,024 � 1,024 � 8 = 33,554,432 bits
2. FileY bits = 244 � 1,024 � 8 = 1,998,848 bits
3. FileX packets = ceil(33,554,432 / 8000) = 4195 packets
4. FileY packets = ceil(1,998,848 / 8000) = 250 packets
5. Total packet size = (1000 + 24) � 8 = 8192 bits
6. FileY finishes after 250�2 = 500 total packets
7. Time = 500 � 8192 / 32,800,000 = 0.1249 sec = **124.9 ms**

---

## Question 23
**Question:** Maximum achievable end-to-end throughput for each client-server pair

**Given:**
- R1 = R2 = 100 Mbps (client links)
- R3 = 10 Mbps (router to server, shared evenly)

**Answer:** 10 Mbps

**Explanation:** When only one client is communicating, it can achieve min(100, 10) = 10 Mbps. When both are active, each gets 5 Mbps. The maximum is **10 Mbps**.

---

## Question 24
**Question:** Utilization of R1 and R2 links when clients send at maximum rate

**Given:**
- R1 = R2 = 100 Mbps (client links)
- R3 = 10 Mbps (bottleneck, shared evenly)

**Answer:** .05

**Explanation:** With R3 as bottleneck, each client is limited to 5 Mbps (10/2). Utilization = 5/100 = **0.05**

---

## Question 25
**Question:** End-to-end TCP throughput for each of 4 connections

**Given:**
- R = 1 Gbps (core link, shared by all 4 connections)
- Rc = 300 Mbps (client links)
- Rs = 400 Mbps (server links)

**Answer:** R/4

**Explanation:** The bottleneck is the core link R = 1 Gbps shared among 4 connections. Each connection gets min(400, 300, 1000/4) = min(400, 300, 250) = 250 Mbps = **R/4**

---

## Question 26
**Question:** Maximum achievable end-to-end throughput

**Given:**
- R1 = 10 Mbps (client to router)
- R3 = 100 Mbps (router to server)

**Answer:** 10 Mbps

**Explanation:** The bottleneck is R1 = 10 Mbps. Throughput = min(10, 100) = **10 Mbps**

---

*All answers completed based on Module 1 materials: protocols, circuit/packet switching, delays, throughput, and statistical multiplexing concepts.*
