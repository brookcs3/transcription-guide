# IndexNow Setup for Mac Transcription Guide

IndexNow allows instant notification to search engines (Bing, Yandex, Seznam.cz) when content changes.

## Files

- `549f6c4fc9d741f3b2c6c24b12f7368f.txt` - Your IndexNow API key (must be at site root)
- `submit-indexnow.js` - Submits all URLs in batches
- `submit-url.js` - Submits a single URL

## Quick Start

### 1. Deploy Key File
Push the key file to your GitHub Pages repo:
```bash
git add 549f6c4fc9d741f3b2c6c24b12f7368f.txt
git commit -m "Add IndexNow key"
git push
```

### 2. Verify Key Accessibility
Wait 1-2 minutes for GitHub Pages to deploy, then check:
```
https://transcription.1oa.cc/549f6c4fc9d741f3b2c6c24b12f7368f.txt
```
Should return: `549f6c4fc9d741f3b2c6c24b12f7368f`

### 3. Submit All URLs
```bash
node submit-indexnow.js
```

This submits all 40 URLs in batches of 10 with 2-second delays between batches.

## Usage

### Submit All URLs (bulk update)
```bash
node submit-indexnow.js
```

### Submit Single URL (after content update)
```bash
node submit-url.js https://transcription.1oa.cc/posts/new-article.html
```

## Expected Response

**Success (200 OK):**
```
✅ URL Submitted: https://transcription.1oa.cc/posts/article.html
   Status: 200 OK
   Result: URL accepted successfully ✓
```

**Rate Limited (429):**
```
⚠️  Rate limited - wait before submitting more
```

**Key Error (403):**
```
❌ Key validation failed - check key file accessibility
```

## When to Submit

Submit URLs immediately after:
- Publishing new content
- Updating existing pages
- Fixing errors or SEO issues
- Changing metadata

## Search Engines Supported

IndexNow currently notifies:
- ✅ **Bing** (Microsoft)
- ✅ **Yandex** (Russia)
- ✅ **Seznam.cz** (Czech Republic)

**Note:** Google does NOT support IndexNow. Continue using Google Search Console for Google indexing.

## Automation Ideas

### Git Hook (auto-submit on push)
Create `.git/hooks/post-commit`:
```bash
#!/bin/bash
# Auto-submit changed HTML files to IndexNow

changed_files=$(git diff-tree --no-commit-id --name-only -r HEAD | grep '\.html$')

for file in $changed_files; do
  url="https://transcription.1oa.cc/${file}"
  node submit-url.js "$url"
done
```

Make executable: `chmod +x .git/hooks/post-commit`

## Rate Limits

- **Recommended:** 10 URLs per batch, 2-second delays
- **Daily limit:** No official limit, but be reasonable
- **Too fast:** You'll get 429 (Too Many Requests)

## Troubleshooting

### "Cannot find declaration of element" error
Not related to IndexNow - that's an XML schema issue (already fixed in your sitemap/RSS).

### 403 Forbidden
- Key file not accessible at root
- Key doesn't match file contents
- Wait 2-3 minutes after deploying key file

### 422 Unprocessable Entity
- URL doesn't belong to your host
- Key location URL is incorrect

## Resources

- [IndexNow Documentation](https://www.indexnow.org/documentation)
- [Bing Webmaster Tools](https://www.bing.com/webmasters)
