# Exploration: Network Structure and Performance

## Introduction

To wrap up our first week, we take a closer look at the structure of the internet. Then we see how to calculate network performance metrics for various situations.

## Access Networks

The topology of the Internet, that is, the structure of the interconnection among the various pieces of the internet, is loosely hierarchical. Roughly speaking, The local Internet Service Providers (ISPs) occupy the lowest tier. Their networks are called **access networks** because they provide access to the internet. An access network may be a so-called local-area network within a company or university, a dial telephone line with a modem, or a high-speed cable-based or phone-based access network.

Moving up, we encounter larger regional ISP’s, Internet Exchange Points (IXP’s), and finally the Tier 1 ISP’s. Tier 1 providers have networks that span countries and satellites that circle the globe. Tier 1 providers include the large telecoms, Google, and others. New tiers and branches (that is, new networks, and new networks of networks) can be added.

The internet as a hierarchical network of networks. Although the internet is hierarchical, there are direct connections between tiers that have come about through business relationships.Communication starts with a local or tier 3 ISP, and may traverse many networks, including Tier 1 providers, before it reaches another local network and its destination. This data communication process involves multiple layers of infrastructure, each contributing to the efficient and reliable data transmission across the Internet. The hierarchical structure, with different tiers of ISPs and interconnection points, helps manage and optimize the flow of data, ensuring connectivity on a global scale.

## Network Performance Metrics

We now turn our attention to network performance. Network performance is a multifaceted concept involving several independent measures to evaluate how well a network functions. The fundamental measures are delay, throughput, and packet loss.

### Network Delay

One of a data network's most important performance measures is the average delay required to deliver a packet from origin to destination. Understanding the nature of delay is essential for efficiently designing, optimizing, and managing networks. let's dive into a more detailed explanation of the various types of delays in computer networks:

- **Transmission Delay:** Transmission delay is the time it takes to push all the bits of a packet onto the communication link.

  - Factors Influencing Transmission Delay:

    - **Link Bandwidth:** The capacity of the communication link, indicating how many bits can be transmitted per unit of time.
    - **Packet Length:** The total number of bits in the packet being transmitted.

  - **Transmission Delay Formula:**

    

  - **Example:** If you have a large file to send over a high-speed internet connection, the transmission delay will be relatively short because the link can handle a significant amount of data per unit of time.

- **Propagation Delay:** Propagation delay is the time it takes for a bit to travel from the sender to the receiver.

  - **Factors Influencing Propagation Delay:**

    - **Physical Distance:** The length of the communication channel or the distance between the sender and receiver.
    - **Propagation Speed:** The speed at which signals travel through the medium.

  - **Propagation Delay Formula:**

    

  - **Example:** If you're communicating over a long-distance fiber-optic cable, even though the link may have high bandwidth, the propagation delay might be noticeable due to the physical length of the cable.

- **Queuing Delay:** Queuing delay occurs when a packet arrives at a router and has to wait in a queue before it can be transmitted.

  - **Factors Influencing Queuing Delay:** This delay is a result of congestion within the network. If the rate at which packets arrive at the queue exceeds the rate at which they can be transmitted, a queue forms. The queuing delay is the time a packet spends waiting in this queue before it can be transmitted onto the next link. Higher congestion levels or a higher number of bits in the queue relative to the link bandwidth result in longer queuing delays.

  - **Queuing Delay Formula:**

    

  - **Example:** If the average arrival rate of packets at the router's queue increases, the queuing delay is likely to be large. This is because the router may experience congestion, leading to more bits accumulating in the queue. Additionally, the length of the packets and the transmission rate play a role in determining the queuing delay. Longer packets or a slower transmission rate can also contribute to increased queuing delays.

- **Processing Delay:** Processing delay is the time it takes for a router or host to examine the packet's header, determine the output link, and check for errors.

  - **Factors Influencing Processing Delay:** The complexity of processing tasks at routers or hosts determines this delay. Faster processing rates reduce this delay.

  - **Processing Delay Formula:**

    

  

Our discussion up to this point has been focused on the nodal delay, i.e., the delay at a single router. Let us conclude our discussion by briefly considering the delay from source to destination. To get a handle on this concept, suppose there are ![LaTeX: (Q-1)](https://canvas.oregonstate.edu/equation_images/(Q-1)?scale=1) routers between the source host and the destination host. Let us also suppose that at each router, the queueing delay or the time that a packet waits to be sent is ![LaTeX: d_{queue}](https://canvas.oregonstate.edu/equation_images/%2520d_%257Bqueue%257D%252C%2520?scale=1), the processing delay at each router and at the source host is ![LaTeX: d_{proc}](https://canvas.oregonstate.edu/equation_images/%2520d_%257Bproc%257D?scale=1), the transmission delay out of each router and out of the source host is ![LaTeX: d_{trans}](https://canvas.oregonstate.edu/equation_images/%2520d_%257Btrans%257D%252C%2520?scale=1) and the propagation delay between each pair of routers and between the source host and the first router is ![LaTeX: d_{prop}](https://canvas.oregonstate.edu/equation_images/d_%257Bprop%257D?scale=1). The nodal delays accumulate and give an end-to-end delay.



Minimizing end-to-end delays is critical for efficient and responsive computer networks and communication systems.

### Packet Loss

If a packet arrives at a queue with a finite capacity that is already full or at its maximum capacity, the incoming packet is dropped or lost. This occurrence is known as packet loss. In scenarios of heavy traffic or network congestion, a queue with limited capacity may fill up quickly, leading to increased packet loss and potential degradation of performance. The lost packet may possibly be retransmitted by the previous node, by the source, or not at all. The specific behavior depends on the network architecture, the protocols in use, and the design choices made by network administrators.

### Throughput

Measuring throughput is important for understanding the actual performance of a network and for identifying any bottlenecks or other issues that may be impacting the network's performance. Throughput refers to the rate at which bits are actually being transferred between a sender and a receiver in a network. Instantaneous throughput is the rate of data transfer at a specific point in time. Whereas average throughput refers to the average rate of data transfer over a more extended period. Throughput is often constrained by the slowest component in the communication path, known as the bottleneck. Efforts to optimize throughput focus on identifying and addressing bottlenecks.

For more on network performance, including a closer look at the delay sources and sample calculations, be sure to watch the video lecture below. They try the Self-Check exercises to test your knowledge.

## Video Lecture

Overview of Networking - Metrics (11:46) 

'/Users/cameronbrooks/Library/Mobile Documents/com~apple~CloudDocs/Working Directory/FALL 2025/INTRO TO COMPUTER NETWORKS (CS_372_X400_F2025)/Module 1/CS372_Lecture05_Network_Metrics.txt'

End to End Delay (7:08)

'/Users/cameronbrooks/Library/Mobile Documents/com~apple~CloudDocs/Working Directory/FALL 2025/INTRO TO COMPUTER NETWORKS (CS_372_X400_F2025)/Module 1/Exploration_ Network Structure and Performance_ INTRO TO COMPUTER NETWORKS _CS_372_X400_F2025_-08:31:08.txt'

Router Delays (5:30)

'/Users/cameronbrooks/Library/Mobile Documents/com~apple~CloudDocs/Working Directory/FALL 2025/INTRO TO COMPUTER NETWORKS (CS_372_X400_F2025)/Module 1/Exploration_ Network Structure and Performance_ INTRO TO COMPUTER NETWORKS (CS_372_X400_F2025).txt'



