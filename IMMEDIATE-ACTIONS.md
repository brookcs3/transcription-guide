# Immediate Actions - Deploy in 30 Minutes

**Goal:** Get https://transcription.1oa.cc/ live on GitHub Pages

---

## ⚠️ Critical Issue First

**Problem:** GitHub Actions workflow is in subdirectory, but GitHub looks for it in root.

**Fix Required:** Choose ONE option

### Option A: Quick Fix (5 minutes)

```bash
# Navigate to root
cd "C:\Users\Owner\transcription-guide"

# Create workflows directory in root
mkdir -p .github/workflows

# Copy workflow
cp WORKING/transcription-guide-laravel/.github/workflows/deploy.yml .github/workflows/deploy.yml
```

Now edit `C:\Users\Owner\transcription-guide\.github\workflows\deploy.yml`:

Find the line:
```yaml
jobs:
  build-and-deploy:
    runs-on: ubuntu-latest
```

Add `defaults` section directly after `runs-on`:
```yaml
jobs:
  build-and-deploy:
    runs-on: ubuntu-latest
    defaults:
      run:
        working-directory: ./WORKING/transcription-guide-laravel
    steps:
```

**Then commit the root workflow:**
```bash
cd "C:\Users\Owner\transcription-guide"
git add .github/workflows/deploy.yml
git commit -m "Add GitHub Actions workflow to root"
git push origin main
```

---

## Step 1: Local Build Test (5 minutes)

```bash
cd "C:\Users\Owner\transcription-guide\WORKING\transcription-guide-laravel"

# Install dependencies (if not already done)
composer install --no-dev
npm install

# Build assets
npm run build

# Generate static HTML
php build-static.php
```

**Expected:**
```
✅ Build complete!
   • Pages generated: 40+
   • Errors: 0
```

**Verify:**
```bash
ls public_html/index.html
ls public_html/CNAME
ls public_html/reviews/scriber-pro.html
```

All should exist. ✅

---

## Step 2: GitHub Pages Settings (3 minutes)

1. Go to: https://github.com/brookcs3/transcription-guide/settings/pages

2. Configure:
   - **Source:** Deploy from a branch
   - **Branch:** `gh-pages` (will be created automatically)
   - **Folder:** `/ (root)`
   - **Custom domain:** `transcription.1oa.cc`
   - **Enforce HTTPS:** ✅ Check this box

3. Click **Save**

---

## Step 3: DNS Configuration (2 minutes)

Go to your DNS provider for `1oa.cc` domain.

**Add this record:**

```
Type:   CNAME
Name:   transcription
Value:  brookcs3.github.io
TTL:    3600 (or Auto)
```

**Save** the DNS record.

> **Note:** DNS can take 5 minutes to 48 hours to propagate. Usually works in 10-15 minutes.

---

## Step 4: First Deployment (5 minutes)

```bash
cd "C:\Users\Owner\transcription-guide\WORKING\transcription-guide-laravel"

# Check git status (ensure no .env or secrets)
git status

# Stage all changes
git add .

# Commit
git commit -m "Initial GitHub Pages deployment

- Static site generator configured
- GitHub Actions workflow ready
- CNAME for transcription.1oa.cc
- 40+ pages ready to deploy"

# Push to trigger deployment
git push origin main
```

---

## Step 5: Monitor Deployment (3-5 minutes)

1. **Immediately go to:** https://github.com/brookcs3/transcription-guide/actions

2. You should see: "Deploy to GitHub Pages" workflow **running**

3. Click on it to watch progress

4. Wait for all steps to turn **green ✅**

**Typical duration:** 3-5 minutes

**If it fails:** Check the error message, likely one of these:
- Missing dependencies (run `composer install` locally and commit `composer.lock`)
- Build script error (test `npm run build:static` locally)
- Permissions issue (check repository settings)

---

## Step 6: Verify Live Site (2 minutes)

**After Actions complete:**

1. Wait 2-5 minutes for GitHub Pages to process

2. Visit: **https://transcription.1oa.cc/**

**If it shows 404:**
- Wait another 5 minutes (first deployment can be slower)
- Check GitHub Pages settings again
- Verify `gh-pages` branch exists on GitHub

**If custom domain doesn't work yet:**
- Try: `https://brookcs3.github.io/transcription-guide/`
- DNS might still be propagating
- Check DNS record is correct
- Wait up to 1 hour for DNS

3. **Checklist:**
   - [ ] Homepage loads
   - [ ] HTTPS works (green padlock)
   - [ ] Custom domain active (not .github.io)
   - [ ] CSS/images load
   - [ ] Navigation works
   - [ ] Review article: `/reviews/scriber-pro`
   - [ ] Chinese page: `/zh/`

**All working?** 🎉 **You're live!**

---

## Troubleshooting Quick Fixes

### Workflow Doesn't Trigger

**Cause:** Workflow not in root `.github/workflows/`

**Fix:** Complete Option A above (move workflow to root)

### Build Fails: "composer.lock not found"

```bash
cd "C:\Users\Owner\transcription-guide\WORKING\transcription-guide-laravel"
composer install
git add composer.lock
git commit -m "Add composer.lock"
git push origin main
```

### Build Fails: Vite errors

```bash
# Clear and rebuild
rm -rf node_modules package-lock.json
npm install
npm run build

# If successful, commit
git add package-lock.json
git commit -m "Update package-lock.json"
git push origin main
```

### Static Generation: "Route not found"

```bash
# Check routes
php artisan route:list

# Test problematic route
php artisan serve
# Visit http://localhost:8000/problematic-route

# Fix route in routes/web.php
# Rebuild and push
```

### Site Shows 404 on GitHub Pages

1. Verify `gh-pages` branch exists on GitHub
2. Check GitHub Pages settings (source = gh-pages)
3. Look for CNAME file in gh-pages branch root
4. Wait 10 minutes and try again

### Custom Domain Not Working

1. **Check DNS:**
   ```bash
   nslookup transcription.1oa.cc
   ```
   Should return GitHub IPs

2. **Re-save in GitHub Pages settings:**
   - Remove custom domain
   - Wait 1 minute
   - Re-add: `transcription.1oa.cc`
   - Save

3. **Wait for HTTPS:** Can take up to 24 hours for certificate

---

## Success Indicators

### GitHub Actions

✅ All steps green
✅ "Deploy to GitHub Pages" step completed
✅ Deployment summary shows success

### GitHub Repository

✅ `gh-pages` branch exists
✅ Latest commit is visible
✅ Branch contains HTML files, CNAME

### DNS

```bash
nslookup transcription.1oa.cc
# Should return: brookcs3.github.io or GitHub IPs
```

### Live Site

✅ `https://transcription.1oa.cc/` loads
✅ HTTPS certificate valid
✅ Content matches latest commit
✅ All pages accessible

---

## Routine Deployments (After Initial Setup)

```bash
# 1. Make changes to Blade templates

# 2. Test locally (optional)
php artisan serve

# 3. Build static site
npm run build:static

# 4. Deploy
git add .
git commit -m "Update content"
git push origin main

# 5. Wait 3-5 minutes
# 6. Changes live at https://transcription.1oa.cc/
```

**That's it!** Automated deployment every time you push to `main`.

---

## Next Steps After Going Live

### Immediate (First Week)

1. Monitor analytics (GTM)
2. Test all pages work
3. Check for broken links
4. Submit to Google Search Console

### Soon (First Month)

5. Review and update sitemap
6. Optimize images
7. Add more content
8. Clean up repository structure (see REPOSITORY-STRUCTURE.md)

### Ongoing

9. Regular content updates
10. Monitor GitHub Actions for failures
11. Keep dependencies updated
12. Review site performance

---

## Summary

**Total Time:** ~30 minutes

**Steps:**
1. ⚠️ Fix workflow location (Option A)
2. ✅ Test local build
3. ⚙️ Configure GitHub Pages
4. 🌐 Add DNS record
5. 🚀 Push to GitHub
6. 👀 Verify live site

**Result:** Fully automated GitHub Pages deployment to https://transcription.1oa.cc/

---

**Ready to deploy? Start with Step 1!**

Any issues? Check:
- `PRE-PUSH-CHECKLIST.md` - Detailed validation
- `DEPLOYMENT.md` - Full troubleshooting guide
- `QUICK-START.md` - Alternative walkthrough
