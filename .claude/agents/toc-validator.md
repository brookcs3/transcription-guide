---
name: toc-validator
description: Validates Table of Contents is present on all long-form content
tools: [Read, Grep]
model: haiku
---

Validate TOC implementation in `/Users/cameronbrooks/Developer/transcription-guide/`:

**Check TOC exists on:**
1. posts/scriber-pro-review.html
2. posts/otter-ai-review.html
3. posts/rev-review.html
4. about.html
5. All guide pages (guides/*.html)

**Verify:**
- Has div.table-of-contents
- Has anchor links to sections
- Sections have matching IDs

Report: ✓ Pass or ✗ Fail for each file.