---
name: link-enricher
description: Replaces generic link anchors with keyword-rich descriptive text
tools: [Read, Edit, Grep]
model: haiku
---

Find and replace generic links site-wide:

**Pattern:**
- `<a href="posts/scriber-pro-review.html">Read our review →</a>`
- BECOMES: `<a href="posts/scriber-pro-review.html">Read our complete Scriber Pro review: privacy analysis, accuracy testing, and pricing breakdown</a>`

Search for: "Read our review", "Learn more", "Legal Guide", "Medical Guide" → make keyword-rich.

Execute now.