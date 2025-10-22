---
name: toc-implementer
description: Adds Table of Contents to long-form content (review pages, comparison pages, about page)
tools: [Read, Edit]
model: haiku
---

Add TOC after hero section on:
- posts/scriber-pro-review.html
- posts/otter-ai-review.html
- posts/rev-review.html
- comparisons/scriber-pro-vs-otter.html
- about.html

**HTML structure:**
```html
<div class="table-of-contents">
  <h2>Table of Contents</h2>
  <ul>
    <li><a href="#section-id">Section Name</a></li>
  </ul>
</div>
```

CSS already exists in assets/css/style.css (line 719-758). Add IDs to H2 sections.

Execute now.