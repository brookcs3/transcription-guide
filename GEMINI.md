# Chinese Translation Project - Status & Instructions for Gemini Agent

## What We're Doing
Creating a complete Simplified Chinese version of the transcription guide website in the `/zh/` folder with full bilingual support (language switchers, hreflang tags, etc.).

## Completed ✅
- `zh/index.html` - Homepage fully translated
- `zh/about.html` - About page fully translated
- `zh/contact.html` - Contact page fully translated
- `zh/privacy.html` - Privacy page fully translated

## Remaining Work (9 Files) ❌

### Blog Posts (3):
1. `zh/posts/best-mac-apps-try-2025.html`
2. `zh/posts/best-offline-transcription-mac-2025.html`
3. `zh/posts/privacy-risks-cloud-transcription.html`

### Comparisons (2):
4. `zh/comparisons/scriber-pro-vs-otter.html`
5. `zh/comparisons/scriber-pro-vs-rev.html`

### Guides (4):
6. `zh/guides/journalist-transcription-mac.html`
7. `zh/guides/medical-transcription-mac.html`
8. `zh/guides/transcription-lawyers-mac.html`
9. `zh/guides/why-offline-transcription.html`

**Status:** These files exist but have ENGLISH content with `lang="zh-CN"` set. They need full translation.

---

## Agent Prompt for Gemini

```
You are translating HTML files for a transcription guide website from English to Simplified Chinese.

TASK: Translate the 9 remaining files listed above.

For EACH Chinese file (zh/...):
1. Read the file
2. Translate ALL visible text to Simplified Chinese:
   - Page title, meta description, meta keywords
   - All headings (h1, h2, h3, etc.)
   - All paragraphs and body text
   - Button text, labels, navigation
   - Open Graph tags (og:title, og:description)
   - JSON-LD structured data (breadcrumb names, FAQ Q&A, article descriptions, etc.)
3. Keep UNCHANGED:
   - HTML structure and tags
   - URLs and href attributes
   - File paths (../assets/...)
   - CSS classes and IDs
   - App names (Scriber Pro, Pixelmator Pro, etc.)
   - Numbers, prices, dates
4. Add language switcher after `<div class="container">` in header:
   ```html
   <a href="/[original-path].html" style="position: absolute; top: 1rem; right: 1rem; background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 8px; text-decoration: none; color: white; font-weight: 600;">🇺🇸 English</a>
   ```
5. Add hreflang tags before `</head>`:
   ```html
   <link rel="alternate" hreflang="en" href="https://transcription.1oa.cc/[path].html" />
   <link rel="alternate" hreflang="zh-CN" href="https://transcription.1oa.cc/zh/[path].html" />
   <link rel="alternate" hreflang="x-default" href="https://transcription.1oa.cc/[path].html" />
   ```
6. Fix canonical URL to point to Chinese version:
   ```html
   <link rel="canonical" href="https://transcription.1oa.cc/zh/[path].html" />
   ```

For EACH English file (root path):
1. Read the corresponding English file
2. Add Chinese language switcher after `<div class="container">` in header:
   ```html
   <a href="/zh/[path].html" style="position: absolute; top: 1rem; right: 1rem; background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 8px; text-decoration: none; color: white; font-weight: 600;">🇨🇳 中文</a>
   ```
3. Add hreflang tags before `</head>` (same as above)

REFERENCE:
- Look at zh/index.html and zh/about.html for examples of proper translation
- Use CHINESE_VERSION_SETUP.md for technical details

EXAMPLE PATH MAPPING:
- Chinese: zh/posts/best-mac-apps-try-2025.html → English: posts/best-mac-apps-try-2025.html
- Chinese: zh/guides/medical-transcription-mac.html → English: guides/medical-transcription-mac.html

Work through all 9 files systematically. Report completion after each file.
```

---

## After Translation Complete

1. Update sitemap.xml to include all Chinese pages
2. Test language switchers work on all pages
3. Verify hreflang tags are correct
4. Deploy to production

## Notes
- Total files to modify: 18 (9 Chinese + 9 English)
- Translation must be natural Simplified Chinese, not machine-like
- Technical terms can stay in English if commonly used that way
- Maintain professional tone throughout
