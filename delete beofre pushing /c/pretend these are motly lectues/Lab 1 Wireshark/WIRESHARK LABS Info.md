WIRESHARK LABS

*"Tell me and I forget. Show me and I remember. Involve me and I understand."
Chinese proverb*

One's understanding of network protocols can often be greatly deepened by "seeing protocols in action" and by "playing around with protocols" - observing the sequence of messages exchanges between two protocol entities, delving down into the details of protocol operation, and causing protocols to perform certain actions and then observing these actions and their consequences. This can be done in simulated scenarios or in a "real" network environment such as the Internet. The Java applets in the textbook Web site take the first approach. In these Wireshark labs, we'll take the latter approach. You'll be running various network applications in different scenarios using a computer on your desk, at home, or in a lab. You'll observe the network protocols in your computer "in action," interacting and exchanging messages with protocol entities executing elsewhere in the Internet. Thus, you and your computer will be an integral part of these "live" labs. You'll observe, and you'll learn, by doing.

The basic tool for observing the messages exchanged between executing protocol entities is called a packet sniffer. As the name suggests, a packet sniffer passively copies ("sniffs") messages being sent from and received by your computer; it will also display the contents of the various protocol fields of these captured messages. For these labs, we'll use the [Wireshark packet sniffer](https://www.wireshark.org/). Wireshark is a free/shareware packet sniffer (a follow-on to the earlier Ethereal packet sniffer) that runs on Windows, Linux/Unix, and Mac computers. The Wireshark labs below will allow you to explore many of the Internet most important protocols. Note: please see the "Getting Started" Wireshark lab below about using Wireshark with browsers that have recently enabled the use of HTTP/3 and QUIC in their default settings and with VPNs.)

We're making these Wireshark labs freely available to all (faculty, students, readers). They're available in both Word and PDF so you can add, modify, and delete content to suit your needs. They obviously represent a ***lot\*** of work on our part. In return for use, we only ask the following:

- If you use these labs (e.g., in a class) that you mention their source (after all, we'd like people to use our book!)
- If you post any labs on a www site, that you note that they are adapted from (or perhaps identical to) our labs, and note our copyright of this material.

Solutions to these Wireshark labs are available *for course instructors only* from the publisher (not from the authors) - see our [instructors' page](https://gaia.cs.umass.edu/kurose_ross/instructor.php) for information about how to get a solution, either standalone or for an LMS.

The WIreshark 9.0 labs below are substantially the same as the corresponding 8.1 Wireshark labs, which were significantly modernized and updated in 2021, with new Wireshark traces files. Click on the links below to download a Wireshark lab on the given topic.