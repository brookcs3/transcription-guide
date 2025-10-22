# Exploration: Circuit Switching and Packet Switching

## Introduction

We’ve looked at the history and evolution of the Internet from the outside. But the technologies of the internet have also evolved. In this exploration we see how a revolution in switching technology enabled the exponential growth of the internet.

Let’s first examine the Network Core...

**The fundamental question:** How is data transferred through the network?

Two main ways:

- circuit switching

  dedicated circuit per call: telephone net (phased out)

- packet-switching:

  data sent through net in discrete “chunks” (packets) on shared media

Today, the Internet almost exclusively uses packet switching. But it wasn’t always that way…

### Circuit switching

### *Circuit switched network with four channels available*

Circuit switching, which involves establishing a dedicated communication path for the duration of a session, was indeed a prevalent technology in the early years of the internet. It played a significant role in connecting users, especially during the initial stages of internet adoption. While circuit switching has diminished in prevalence for general internet data transmission, it is still found in some parts of the world where older technologies persist, such as certain rural areas or regions with limited infrastructure upgrades.

In circuit-switched networks, a dedicated physical communication path, or circuit, is established between the communicating devices for the duration of the communication session. Once the circuit is set up, the entire bandwidth of that circuit is reserved exclusively for the two communicating devices. This means that during the established connection, no other devices can use that portion of the network.

The dedicated nature of circuit switching means that the bandwidth is exclusively tied up for the entire duration of the communication session, even if no data is actively being transmitted.

### Packet switching

*Packet switched network*

Over time, the internet transitioned from circuit-switched networks to packet-switched networks. In packet-switched networks, data is divided into discrete chunks called packets. Packets are transmitted independently through the network, and they may take different paths to reach the destination. At the receiving end, the packets are reassembled in the correct order to reconstruct the original data.

Packet switching allows for the creation of virtual connections, where multiple devices can access the network simultaneously. Unlike circuit switching, where a dedicated physical path is established for each communication session, packet switching allows many machines to share the same network resources.

For more information, including the two different types of circuit switching and a closer look at packets in the network core, be sure to watch the video lecture below. Then take the Self-Check exercises to test your knowledge.

## Video Lecture

Overview of Networking - Network Core: Circuit vs Packet Switching - Part 1 (11:07)

'/Users/cameronbrooks/Library/Mobile Documents/com~apple~CloudDocs/Working Directory/FALL 2025/INTRO TO COMPUTER NETWORKS (CS_372_X400_F2025)/Module 1/CS372_Lecture03_Part1_Circuit switching vs packet switching.txt'





Continue To:

'/Users/cameronbrooks/Library/Mobile Documents/com~apple~CloudDocs/Working Directory/FALL 2025/INTRO TO COMPUTER NETWORKS (CS_372_X400_F2025)/Module 1/Exploration Circuit Switching and Packet Switching.md'