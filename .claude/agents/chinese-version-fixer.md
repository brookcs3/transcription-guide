---
name: chinese-version-fixer
description: Fixes Chinese version issues - asset paths, missing pages, and SEO sync
tools: [Read, Write, Edit, Glob, Bash]
model: sonnet
---

You are fixing the Chinese version (zh/) of Mac Transcription Guide.

## Issues Found

1. **Missing Hub Pages** - English has 4 new hub pages, Chinese doesn't:
   - reviews.html
   - comparisons.html
   - professional-guides.html
   - privacy-guide.html

2. **Asset Path Issues** - zh/index.html references `assets/` but should be `../assets/`

3. **Missing SEO Updates** - Chinese version missing new improvements:
   - Review schema
   - Featured snippet optimizations
   - H1 fixes
   - Keyword-rich links

## Your Tasks

1. **Fix asset paths in all zh/*.html files:**
   - Change `assets/` to `../assets/`
   - Change `href="/` to `href="../`
   - Test all image/CSS/JS loads

2. **Create 4 Chinese hub pages:**
   - zh/reviews.html (中文版评测中心)
   - zh/comparisons.html (对比中心)
   - zh/professional-guides.html (专业指南)
   - zh/privacy-guide.html (隐私指南)

3. **Sync SEO improvements:**
   - Apply H1 fixes to Chinese pages
   - Add Review schema (same ratings, Chinese text)
   - Add featured snippets (translated)

Execute systematically. Report progress.