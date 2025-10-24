---
name: link-validator
description: Validates all generic links have been replaced with keyword-rich anchors
tools: [Read, Grep]
model: haiku
---

Validate link enrichment in `/Users/cameronbrooks/Developer/transcription-guide/`:

**Search for remaining generic patterns:**
- "Read our review →"
- "Learn more →"
- "Legal Guide →"
- "Healthcare Guide →"
- "Media Guide →"

**Should find:** 0 instances (all replaced with keyword-rich text)

Report: ✓ Pass if 0 found, ✗ Fail with file locations if any remain.