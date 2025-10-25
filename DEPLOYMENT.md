# Deployment Guide

Complete guide for deploying the Mac Transcription Guide Laravel site to GitHub Pages with custom domain https://transcription.1oa.cc/

## Table of Contents

1. [Prerequisites](#prerequisites)
2. [Pre-Deployment Checklist](#pre-deployment-checklist)
3. [GitHub Repository Setup](#github-repository-setup)
4. [DNS Configuration](#dns-configuration)
5. [First-Time Deployment](#first-time-deployment)
6. [Routine Deployments](#routine-deployments)
7. [Troubleshooting](#troubleshooting)
8. [Rollback Procedures](#rollback-procedures)

---

## Prerequisites

### Required Tools

- [x] Git installed locally
- [x] GitHub account with access to `brookcs3/transcription-guide`
- [x] PHP 8.2+ installed
- [x] Composer installed
- [x] Node.js 20+ and NPM installed
- [x] DNS access to `1oa.cc` domain

### Required Knowledge

- Basic Git commands
- GitHub repository navigation
- DNS record management

---

## Pre-Deployment Checklist

Run this checklist **before every push** to ensure smooth deployment:

### 1. Local Build Verification

```bash
# Navigate to Laravel project
cd "C:\Users\Owner\transcription-guide\WORKING\transcription-guide-laravel"

# Install/update dependencies
composer install --no-dev
npm install

# Build production assets
npm run build
```

**Expected Result:** Vite build completes successfully with no errors

### 2. Static Site Generation Test

```bash
# Generate static HTML files
php build-static.php
```

**Expected Output:**
```
🏗️  Static Site Generator for transcription.1oa.cc
============================================================

📁 Creating output directory: .../public_html
📦 Copying public assets...
   ✓ Copied assets/
   ✓ Copied css/
   ✓ Copied js/
   ...

🎨 Generating static HTML pages...
   ✓ / → /index.html
   ✓ /reviews → /reviews.html
   ...

✅ Build complete!
   • Pages generated: 40+
   • Errors: 0
```

### 3. Verify Generated Files

```bash
# Check output directory exists
ls public_html/

# Verify critical files
ls public_html/index.html
ls public_html/CNAME
ls public_html/assets/
```

**Expected:** All files present, CNAME contains `transcription.1oa.cc`

### 4. Route Verification

```bash
# Test all routes are defined
php artisan route:list
```

**Expected:** 20+ routes listed with no errors

### 5. Content Integrity Check

- [ ] All Blade templates render without errors
- [ ] No broken links in navigation
- [ ] Images load correctly (check asset paths)
- [ ] Schema markup is valid JSON-LD
- [ ] Meta tags present on all pages

### 6. Git Status Check

```bash
# Check for uncommitted changes
git status

# Review what will be committed
git diff
```

**Action:** Commit or stash any work-in-progress files

### 7. Environment Configuration

```bash
# Verify .env is NOT staged
git status | grep .env
```

**Expected:** `.env` should NOT appear (it's gitignored)

---

## GitHub Repository Setup

### One-Time Setup (Already Complete)

Your repository is already configured, but here's what's in place:

1. **Repository:** `https://github.com/brookcs3/transcription-guide`
2. **Main Branch:** `main`
3. **Deploy Branch:** `gh-pages` (auto-created by GitHub Actions)
4. **GitHub Pages Source:** `gh-pages` branch

### Verify GitHub Pages Settings

1. Go to repository on GitHub
2. Click **Settings** → **Pages**
3. Verify:
   - **Source:** Deploy from a branch
   - **Branch:** `gh-pages` / `/ (root)`
   - **Custom domain:** `transcription.1oa.cc`
   - **Enforce HTTPS:** Checked

---

## DNS Configuration

### DNS Records (One-Time Setup)

At your DNS provider for `1oa.cc`, ensure these records exist:

```
Type:   CNAME
Name:   transcription
Value:  brookcs3.github.io.
TTL:    3600 (or Auto)
```

**Alternative if using apex domain:**

```
Type:   A
Name:   @
Values: 185.199.108.153
        185.199.109.153
        185.199.110.153
        185.199.111.153
TTL:    3600
```

### Verification

```bash
# Check DNS resolution (may take 24-48 hours initially)
nslookup transcription.1oa.cc
```

**Expected:** Should resolve to GitHub Pages IPs

---

## First-Time Deployment

### Step 1: Prepare Repository

```bash
# Ensure you're in the Laravel directory
cd "C:\Users\Owner\transcription-guide\WORKING\transcription-guide-laravel"

# Check current branch
git branch --show-current
# Should show: main
```

### Step 2: Run Full Pre-Deployment Checklist

Complete all items in [Pre-Deployment Checklist](#pre-deployment-checklist) above.

### Step 3: Initial Commit

```bash
# Stage all files
git add .

# Commit with descriptive message
git commit -m "Initial Laravel to GitHub Pages deployment setup

- Add static site generator (build-static.php)
- Configure GitHub Actions workflow
- Set up CNAME for transcription.1oa.cc
- Update .gitignore for production
- Add comprehensive README and deployment docs"

# Push to GitHub
git push origin main
```

### Step 4: Monitor GitHub Actions

1. Go to GitHub repository
2. Click **Actions** tab
3. You should see workflow "Deploy to GitHub Pages" running
4. Click on the workflow run to view progress

**Expected Duration:** 3-5 minutes

### Step 5: Verify Deployment

Once Actions complete successfully:

```bash
# Wait 2-5 minutes for GitHub Pages to update
# Then visit your site
```

Open browser to: **https://transcription.1oa.cc/**

**Checklist:**
- [ ] Homepage loads
- [ ] Custom domain works (not .github.io)
- [ ] HTTPS is active (green padlock)
- [ ] Navigation works
- [ ] Assets load (CSS, images, JS)
- [ ] Review article pages load
- [ ] Chinese (zh) pages load

---

## Routine Deployments

### Quick Deploy Process

For day-to-day content updates:

```bash
# 1. Navigate to project
cd "C:\Users\Owner\transcription-guide\WORKING\transcription-guide-laravel"

# 2. Make your changes to Blade templates, controllers, etc.

# 3. Test locally (optional but recommended)
php artisan serve
# Visit http://localhost:8000 to verify changes

# 4. Build and test static generation
npm run build:static

# 5. Stage changes
git add .

# 6. Commit with clear message
git commit -m "Update [description of changes]"

# 7. Push to GitHub (triggers auto-deployment)
git push origin main

# 8. Monitor deployment
# Visit: https://github.com/brookcs3/transcription-guide/actions
```

### Example: Adding New Review Article

```bash
# 1. Create Blade template
# Create file: resources/views/reviews/new-review.blade.php

# 2. Update ReviewController (if needed)
# Edit: app/Http/Controllers/ReviewController.php

# 3. Add route to static generator
# Edit: build-static.php
# Add to $routes array:
#   '/reviews/new-review' => '/reviews/new-review.html',

# 4. Test build
npm run build:static

# 5. Commit and deploy
git add .
git commit -m "Add new review article: [Article Name]"
git push origin main
```

---

## Troubleshooting

### Deployment Fails in GitHub Actions

**Symptom:** Red X on GitHub Actions workflow

**Solution:**

1. Click on failed workflow run
2. Expand failed step to see error
3. Common issues:

**Missing Dependencies:**
```bash
# Locally, ensure composer.lock is committed
git add composer.lock
git commit -m "Update composer.lock"
git push
```

**Build Script Errors:**
```bash
# Test locally first
php build-static.php
# Fix any errors in the script or routes
```

**Asset Build Failures:**
```bash
# Check Vite configuration
npm run build
# Fix any Tailwind/Vite errors
```

### Site Shows 404 on GitHub Pages

**Symptom:** https://transcription.1oa.cc/ returns 404

**Possible Causes:**

1. **GitHub Pages not enabled:**
   - Go to Settings → Pages
   - Ensure source is `gh-pages` branch

2. **CNAME file missing:**
   - Check `public_html/CNAME` exists in build
   - Verify GitHub workflow deploys it

3. **DNS not configured:**
   - Check DNS records (see [DNS Configuration](#dns-configuration))
   - Wait up to 48 hours for propagation

### Assets Not Loading (CSS/Images)

**Symptom:** Pages load but styling/images missing

**Solution:**

1. **Check asset paths in Blade templates:**
   ```blade
   <!-- Should use asset() helper -->
   <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

   <!-- NOT hardcoded paths -->
   <link href="/assets/css/style.css" rel="stylesheet">
   ```

2. **Verify assets copied in build:**
   ```bash
   ls public_html/assets/
   # Should see css/, js/, images/, etc.
   ```

3. **Check Vite build output:**
   ```bash
   npm run build
   # Verify public/build/ directory created
   ```

### Custom Domain Not Working

**Symptom:** Site only works at `brookcs3.github.io/transcription-guide`

**Solution:**

1. **Verify CNAME file in gh-pages branch:**
   ```bash
   # Check gh-pages branch on GitHub
   # Ensure CNAME file exists in root with: transcription.1oa.cc
   ```

2. **Re-save custom domain in GitHub:**
   - Settings → Pages
   - Remove custom domain
   - Wait 1 minute
   - Re-add: `transcription.1oa.cc`
   - Save

3. **Check DNS:**
   ```bash
   nslookup transcription.1oa.cc
   # Should point to GitHub Pages IPs
   ```

### HTTPS Certificate Error

**Symptom:** Browser shows "Not Secure" or certificate error

**Solution:**

1. **Wait for certificate provisioning:**
   - GitHub Pages auto-provisions Let's Encrypt SSL
   - Can take up to 24 hours after first custom domain setup

2. **Ensure HTTPS enforcement:**
   - Settings → Pages
   - Check "Enforce HTTPS"

3. **DNS must be correct:**
   - HTTPS won't activate if DNS is misconfigured

---

## Rollback Procedures

### Rollback to Previous Deployment

If a deployment breaks the site:

```bash
# 1. Find the last working commit
git log --oneline -10

# 2. Revert to that commit (replace COMMIT_HASH)
git revert COMMIT_HASH

# 3. Push revert
git push origin main
```

**Alternative: Force rollback**

```bash
# Reset to specific commit (DANGEROUS - only if necessary)
git reset --hard COMMIT_HASH
git push --force origin main
```

### Manual Emergency Rollback

If GitHub Actions is down:

1. **Switch to gh-pages branch:**
   ```bash
   git fetch origin
   git checkout gh-pages
   ```

2. **Find last working deployment:**
   ```bash
   git log --oneline -10
   ```

3. **Reset to that commit:**
   ```bash
   git reset --hard COMMIT_HASH
   git push --force origin gh-pages
   ```

4. **Return to main branch:**
   ```bash
   git checkout main
   ```

---

## Post-Deployment Verification

After every deployment, verify:

- [ ] Homepage loads: https://transcription.1oa.cc/
- [ ] New/updated content appears correctly
- [ ] All navigation links work
- [ ] Review articles load: `/reviews/scriber-pro`
- [ ] Comparison pages load: `/comparisons/scriber-otter`
- [ ] Guide pages load: `/guides/lawyers`
- [ ] Chinese pages load: `/zh/`
- [ ] Assets load (no 404s in DevTools)
- [ ] Google Tag Manager fires (check with Tag Assistant)
- [ ] No console errors in browser DevTools

---

## Maintenance Schedule

### Weekly Tasks

- [ ] Check GitHub Actions workflow runs (all green)
- [ ] Review site analytics in GTM
- [ ] Test site on different browsers/devices

### Monthly Tasks

- [ ] Update dependencies: `composer update`, `npm update`
- [ ] Review and update sitemap.xml
- [ ] Check for broken links
- [ ] Verify SSL certificate is valid

### Quarterly Tasks

- [ ] Review and update SEO meta tags
- [ ] Analyze site performance (Lighthouse)
- [ ] Update content for freshness
- [ ] Review and optimize images

---

## Support & Resources

- **Repository:** https://github.com/brookcs3/transcription-guide
- **GitHub Actions:** https://github.com/brookcs3/transcription-guide/actions
- **Live Site:** https://transcription.1oa.cc/
- **Documentation:** See README.md in repository root

---

**Last Updated:** October 2025
