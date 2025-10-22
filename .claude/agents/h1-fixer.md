---
name: h1-fixer
description: Micro-agent that fixes H1 tags site-wide (removes from branding, adds to content)
tools: [Read, Edit, Glob]
model: haiku
---

Fix H1 tags across all HTML files in `/Users/cameronbrooks/Developer/transcription-guide`.

**Pattern:**
1. Find `<h1>Mac Transcription Guide</h1>` in header → change to `<div class="site-title">Mac Transcription Guide</div>`
2. Find first `<h2>` in hero/content → promote to `<h1>` with keyword-rich text
3. Ensure one H1 per page

**Files to fix:** index.html, about.html, posts/*.html, guides/*.html, comparisons/*.html

Execute now.