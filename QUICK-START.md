# Quick Start Guide - GitHub Pages Deployment

Get your Laravel site deployed to https://transcription.1oa.cc/ in under 10 minutes.

## Prerequisites

- [x] Git installed
- [x] PHP 8.2+ installed
- [x] Composer installed
- [x] Node.js 20+ installed
- [x] GitHub repository access

---

## Step 1: Initial Setup (One-Time)

```bash
# Navigate to Laravel project
cd "C:\Users\Owner\transcription-guide\WORKING\transcription-guide-laravel"

# Install dependencies
composer install
npm install

# Create environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

**Expected:** No errors, `.env` file created

---

## Step 2: Test Local Build

```bash
# Build production assets
npm run build

# Generate static HTML files
php build-static.php
```

**Expected Output:**
```
✅ Build complete!
   • Pages generated: 40+
   • Errors: 0
```

**Verify:**
```bash
ls public_html/index.html
ls public_html/CNAME
```

Both files should exist.

---

## Step 3: Configure GitHub Repository

### A. Ensure GitHub Actions Workflow is in Root

**Check if workflow exists in root:**
```bash
ls "C:\Users\Owner\transcription-guide\.github\workflows\deploy.yml"
```

**If not found, copy it to root:**
```bash
mkdir -p "C:\Users\Owner\transcription-guide\.github\workflows"
cp .github/workflows/deploy.yml "C:\Users\Owner\transcription-guide\.github\workflows\deploy.yml"
```

**Then update the workflow to build from subdirectory:**

Edit: `C:\Users\Owner\transcription-guide\.github\workflows\deploy.yml`

Add `defaults` section:
```yaml
jobs:
  build-and-deploy:
    runs-on: ubuntu-latest
    defaults:
      run:
        working-directory: ./WORKING/transcription-guide-laravel
    steps:
      # ... rest of workflow
```

### B. Verify GitHub Pages Settings

1. Go to: https://github.com/brookcs3/transcription-guide/settings/pages
2. Ensure:
   - **Source:** Deploy from a branch
   - **Branch:** `gh-pages` / `/ (root)`
   - **Custom domain:** `transcription.1oa.cc`
   - **Enforce HTTPS:** Checked

---

## Step 4: First Deployment

### Commit and Push

```bash
# From Laravel directory
cd "C:\Users\Owner\transcription-guide\WORKING\transcription-guide-laravel"

# Stage all changes
git add .

# Commit with message
git commit -m "Initial GitHub Pages deployment setup

- Add static site generator
- Configure GitHub Actions workflow
- Set up CNAME for transcription.1oa.cc
- Add deployment documentation"

# Push to GitHub
git push origin main
```

### Monitor Deployment

1. Go to: https://github.com/brookcs3/transcription-guide/actions
2. Click on the running workflow
3. Watch progress (takes 3-5 minutes)

**Expected:** All steps green ✅

---

## Step 5: Verify Live Site

Wait 2-5 minutes after Actions complete, then visit:

🌐 **https://transcription.1oa.cc/**

**Checklist:**
- [ ] Homepage loads
- [ ] Custom domain works (not .github.io)
- [ ] HTTPS active (green padlock)
- [ ] CSS/images load
- [ ] Navigation works
- [ ] Review articles work: `/reviews/scriber-pro`
- [ ] Chinese pages work: `/zh/`

---

## Daily Workflow (After Initial Setup)

### Making Content Updates

```bash
# 1. Navigate to project
cd "C:\Users\Owner\transcription-guide\WORKING\transcription-guide-laravel"

# 2. Edit Blade templates
# Example: resources/views/reviews/scriber-pro.blade.php

# 3. Test locally (optional)
php artisan serve
# Visit http://localhost:8000

# 4. Build static site
npm run build:static

# 5. Commit and push
git add .
git commit -m "Update Scriber Pro review content"
git push origin main

# 6. Monitor deployment
# Visit: https://github.com/brookcs3/transcription-guide/actions
```

**Deployment time:** 3-5 minutes from push to live

---

## Adding New Pages

### Example: New Review Article

```bash
# 1. Create Blade template
# File: resources/views/reviews/whisper-ai.blade.php
```

```blade
@extends('layouts.app')

@section('title', 'Whisper AI Review - Mac Transcription')
@section('description', 'Comprehensive review of Whisper AI...')

@section('content')
<article>
    <h1>Whisper AI Review</h1>
    <!-- Your content here -->
</article>
@endsection
```

```bash
# 2. Add to build-static.php
# Edit build-static.php, add to $routes array:
'/reviews/whisper-ai' => '/reviews/whisper-ai.html',

# 3. Update ReviewController (if needed)
# Add slug handling in app/Http/Controllers/ReviewController.php

# 4. Build and deploy
npm run build:static
git add .
git commit -m "Add Whisper AI review article"
git push origin main
```

---

## Troubleshooting

### Build Fails

```bash
# Clear caches
php artisan config:clear
php artisan cache:clear

# Reinstall dependencies
rm -rf vendor node_modules
composer install
npm install
```

### Deployment Fails in GitHub Actions

1. Check Actions tab for error details
2. Common issues:
   - Missing `composer.lock` (ensure it's committed)
   - Vite build errors (fix locally first)
   - Route errors (test with `php artisan route:list`)

### Site Not Updating

1. Wait 5 minutes (GitHub Pages caching)
2. Hard refresh browser (Ctrl+Shift+R)
3. Check `gh-pages` branch exists on GitHub
4. Verify workflow completed successfully

---

## Quick Commands Reference

```bash
# Development
php artisan serve              # Start dev server
npm run dev                   # Vite hot reload

# Build
npm run build                 # Build assets only
npm run build:static          # Build assets + generate static HTML

# Testing
php artisan route:list        # List all routes
php build-static.php          # Test static generation

# Deployment
git add .
git commit -m "Your message"
git push origin main          # Auto-deploys via Actions
```

---

## File Locations Reference

| File/Directory | Purpose |
|---------------|---------|
| `resources/views/` | Blade templates |
| `resources/views/layouts/app.blade.php` | Main layout |
| `resources/views/pages/` | Hub pages |
| `resources/views/reviews/` | Review articles |
| `resources/views/comparisons/` | Comparison pages |
| `resources/views/guides/` | Professional guides |
| `resources/views/zh/` | Chinese versions |
| `routes/web.php` | Route definitions |
| `app/Http/Controllers/` | Controllers |
| `public/assets/` | CSS, JS, images |
| `build-static.php` | Static site generator |
| `.github/workflows/deploy.yml` | GitHub Actions |

---

## Support

- **Full Documentation:** See `README.md`
- **Deployment Guide:** See `DEPLOYMENT.md`
- **Pre-Push Checklist:** See `PRE-PUSH-CHECKLIST.md`
- **GitHub Actions:** https://github.com/brookcs3/transcription-guide/actions
- **Live Site:** https://transcription.1oa.cc/

---

**You're all set! Make changes, push to GitHub, and your site updates automatically.**

Happy deploying! 🚀
