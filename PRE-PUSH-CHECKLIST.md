# Pre-Push Checklist

**Complete this checklist before every `git push` to ensure successful deployment.**

## Quick Reference

```bash
# Navigate to project
cd "C:\Users\Owner\transcription-guide\WORKING\transcription-guide-laravel"

# Run quick validation
composer install --no-dev && npm run build && php build-static.php
```

---

## 1. Dependencies & Build

### PHP Dependencies
```bash
composer install --no-dev --optimize-autoloader
```
- [ ] Composer install completes without errors
- [ ] No security vulnerabilities reported

### Node.js Dependencies
```bash
npm install
```
- [ ] NPM install completes without errors
- [ ] No deprecated package warnings for critical dependencies

### Asset Build
```bash
npm run build
```
- [ ] Vite build completes successfully
- [ ] No build errors or warnings
- [ ] `public/build/` directory created with manifest

---

## 2. Static Site Generation

### Run Generator
```bash
php build-static.php
```

**Expected Output:**
```
✅ Build complete!
   • Pages generated: 40+
   • Errors: 0
```

### Verify Output

- [ ] **Pages Generated:** Count matches expected (40+)
- [ ] **Zero Errors:** No failed routes
- [ ] **public_html/ exists:** Output directory created
- [ ] **CNAME file present:** `public_html/CNAME` contains `transcription.1oa.cc`

### Spot Check Files
```bash
# Critical files
ls public_html/index.html
ls public_html/reviews.html
ls public_html/zh/index.html
ls public_html/CNAME

# Assets
ls public_html/assets/css/
ls public_html/assets/images/
ls public_html/assets/js/
```

- [ ] All critical files exist
- [ ] Asset directories populated

---

## 3. Route Verification

```bash
php artisan route:list
```

- [ ] All routes listed (20+)
- [ ] No "Route not found" errors
- [ ] English and Chinese routes present
- [ ] Dynamic routes working (`{slug}` parameters)

---

## 4. Content Integrity

### Blade Templates

- [ ] No syntax errors in recent Blade changes
- [ ] All `@extends('layouts.app')` present
- [ ] All `@section` blocks closed properly
- [ ] Asset paths use `{{ asset() }}` helper

### Meta Tags & SEO

- [ ] All pages have `@section('title')`
- [ ] All pages have `@section('description')`
- [ ] Schema markup is valid JSON-LD (no trailing commas)
- [ ] OpenGraph tags present on article pages

### Links & Navigation

- [ ] Internal links use `route()` helper where applicable
- [ ] No hardcoded URLs (use `{{ url() }}` or `{{ route() }}`)
- [ ] Breadcrumbs configured correctly
- [ ] Language switcher works (EN ↔ ZH)

---

## 5. Local Testing (Optional but Recommended)

### Start Dev Server
```bash
php artisan serve
```

Visit: http://localhost:8000

- [ ] Homepage loads without errors
- [ ] Navigation works
- [ ] Review articles load: `/reviews/scriber-pro`
- [ ] Comparison pages load: `/comparisons/scriber-otter`
- [ ] Guide pages load: `/guides/lawyers`
- [ ] Chinese pages load: `/zh/`
- [ ] Assets load (CSS, images, JS)
- [ ] No 404 errors in browser console

### Browser DevTools Check

- [ ] No JavaScript errors in console
- [ ] No 404s for assets
- [ ] GTM dataLayer fires (if applicable)

---

## 6. Git Status Check

### Review Changes
```bash
git status
git diff
```

- [ ] Only intended files staged
- [ ] No `.env` file staged (verify .gitignore working)
- [ ] No `node_modules/` or `vendor/` staged
- [ ] No sensitive data in commits (API keys, passwords)

### Check for Secrets

Search for common secret patterns:
```bash
# Check staged files for potential secrets
git diff --cached | grep -i "password\|api_key\|secret\|token"
```

- [ ] No secrets found in diff
- [ ] `.env.example` updated if env variables added

---

## 7. Commit Quality

### Commit Message

- [ ] Clear, descriptive commit message
- [ ] Follows format: "Action: Description"
  - Examples:
    - "Add: New review for Whisper AI"
    - "Fix: Broken link on comparisons page"
    - "Update: SEO meta tags for reviews section"

### Commit Scope

- [ ] Commit is focused (not mixing unrelated changes)
- [ ] Large features broken into multiple commits
- [ ] Migration notes documented if structure changed

---

## 8. Build Script Verification

### Check Routes in build-static.php

If you added new pages, ensure they're in `$routes` array:

```bash
grep "your-new-slug" build-static.php
```

- [ ] New review articles added to routes
- [ ] New comparison pages added to routes
- [ ] New guide pages added to routes
- [ ] Chinese versions added (if applicable)

### Example Routes Check

Verify these patterns exist:
```php
'/reviews/new-article' => '/reviews/new-article.html',
'/zh/reviews/new-article' => '/zh/reviews/new-article.html',
```

---

## 9. Final Verification

### Clean Build Test

```bash
# Full clean rebuild
rm -rf public_html/
npm run build:static
```

- [ ] Build completes from scratch
- [ ] All pages generated successfully
- [ ] No missing dependencies

### File Count Check

```bash
find public_html -name "*.html" | wc -l
```

**Expected:** 40+ HTML files

---

## 10. GitHub Actions Readiness

### Workflow File

- [ ] `.github/workflows/deploy.yml` exists
- [ ] Workflow configured for `main` branch
- [ ] All build steps present in workflow

### Required Files

- [ ] `composer.json` and `composer.lock` committed
- [ ] `package.json` committed (package-lock.json if using npm)
- [ ] `build-static.php` committed
- [ ] `.env.example` committed (but NOT `.env`)
- [ ] `CNAME` file committed

---

## 11. Push to GitHub

### Final Push
```bash
git add .
git commit -m "[Your descriptive message]"
git push origin main
```

### Monitor Deployment

1. Visit GitHub Actions: https://github.com/brookcs3/transcription-guide/actions
2. Watch workflow run in real-time
3. Verify all steps pass (green checkmarks)

**Expected Duration:** 3-5 minutes

---

## 12. Post-Deployment Verification

### Wait for Deployment

- [ ] GitHub Actions workflow completed successfully
- [ ] Wait 2-5 minutes for GitHub Pages to update

### Live Site Check

Visit: https://transcription.1oa.cc/

- [ ] Homepage loads
- [ ] Updated content appears
- [ ] Navigation works
- [ ] Assets load (CSS, images)
- [ ] No 404 errors
- [ ] HTTPS active (green padlock)
- [ ] Mobile responsive

### Test New/Updated Pages

- [ ] Review new article pages
- [ ] Check updated content
- [ ] Verify links work
- [ ] Test language switcher (if bilingual)

---

## Emergency Rollback

If deployment fails or breaks site:

```bash
# Revert last commit
git revert HEAD
git push origin main

# OR reset to last known good commit
git reset --hard COMMIT_HASH
git push --force origin main
```

See `DEPLOYMENT.md` for detailed rollback procedures.

---

## Checklist Summary

Quick validation command:

```bash
composer install --no-dev && \
npm run build && \
php build-static.php && \
git status
```

If all pass:
- ✅ Dependencies installed
- ✅ Assets built
- ✅ Static site generated
- ✅ Git status clean

**You're ready to push!**

```bash
git add .
git commit -m "Your descriptive message"
git push origin main
```

---

**Save this checklist and refer to it before every deployment.**

Last Updated: October 2025
