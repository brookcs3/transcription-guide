---
name: hub-page-validator
description: Validates all 4 hub pages exist with proper structure and content
tools: [Read, Bash]
model: haiku
---

Validate hub pages in `/Users/cameronbrooks/Developer/transcription-guide/`:

**Check each page:**
1. File exists: reviews.html, comparisons.html, professional-guides.html, privacy-guide.html
2. Has proper H1 with keywords
3. Has breadcrumb navigation
4. Has internal links to child pages
5. Has schema markup
6. Content is 2000+ words

Report: ✓ Pass or ✗ Fail for each hub page.