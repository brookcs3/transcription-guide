# Mac Transcription Guide

> Professional transcription software reviews and guides for Mac usrs

🌐 **Live Site:** [https://transcription.1oa.cc/](https://transcription.1oa.cc/)

[![Deploy to GitHub Pages](https://github.com/brookcs3/transcription-guide/actions/workflows/deploy.yml/badge.svg)](https://github.com/brookcs3/transcription-guide/actions/workflows/deploy.yml)

## Overview

Mac Transcription Guide is a comprehensive resource for Mac users seeking the best transcription software solutions. The site features in-depth reviews, detailed comparisons, and professional guides - all optimized for SEO and available in both English and Chinese.

### Key Features

- **42+ Blade Templates** - Comprehensive content coverage
- **Dual Language Support** - Full English and Chinese versions
- **SEO Optimized** - Rich schema markup, meta tags, OpenGraph
- **Static Site Generation** - Laravel Blade → Static HTML for GitHub Pages
- **Automated Deployment** - GitHub Actions CI/CD pipeline
- **Custom Domain** - Deployed to transcription.1oa.cc

## Technology Stack

- **Framework:** Laravel 12.35.1 (PHP 8.2+)
- **Templating:** Blade templates
- **Styling:** Tailwind CSS 4.0
- **Build Tool:** Vite 7.0
- **Deployment:** GitHub Pages + GitHub Actions
- **Analytics:** Google Tag Manager (GTM-TCTB9W3C)

## Project Structure

```
transcription-guide-laravel/
├── app/
│   └── Http/Controllers/
│       ├── PageController.php      # Main hub pages
│       ├── ReviewController.php    # Review articles
│       └── GuideController.php     # Professional guides
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php          # Master layout
│   ├── partials/
│   │   ├── header.blade.php
│   │   ├── footer.blade.php
│   │   ├── navigation.blade.php
│   │   └── breadcrumbs.blade.php
│   ├── pages/                     # Main hub pages
│   ├── reviews/                   # Review articles
│   ├── comparisons/               # Comparison articles
│   ├── guides/                    # Professional guides
│   └── zh/                        # Chinese versions
├── routes/
│   └── web.php                    # All route definitions
├── public/
│   └── assets/                    # CSS, JS, images
├── build-static.php               # Static site generator
└── .github/workflows/
    └── deploy.yml                 # Automated deployment
```

## Local Development

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js 20+ and NPM
- Git

### Initial Setup

```bash
# Clone the repository
git clone https://github.com/brookcs3/transcription-guide.git
cd transcription-guide/WORKING/transcription-guide-laravel

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Create environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### Running the Development Server

```bash
# Start Laravel development server
php artisan serve

# In a separate terminal, start Vite for hot reloading
npm run dev

# Visit http://localhost:8000
```

### Development Commands

```bash
# Build production assets
npm run build

# Generate static HTML files for deployment
npm run build:static

# View all routes
php artisan route:list

# Clear cache (if needed)
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```

## Content Structure

### Routes

**English Pages:**
- `/` - Homepage
- `/reviews` - Reviews hub
- `/reviews/{slug}` - Individual review articles
- `/comparisons` - Comparisons hub
- `/comparisons/{slug}` - Individual comparison articles
- `/guides` - Professional guides hub
- `/guides/{slug}` - Individual guide articles
- `/about` - About page
- `/contact` - Contact page
- `/privacy` - Privacy policy

**Chinese Pages:** (prefixed with `/zh`)
- `/zh/` - Chinese homepage
- `/zh/reviews` - Chinese reviews hub
- `/zh/reviews/{slug}` - Chinese review articles
- (and all other pages mirrored from English)

### Review Articles

- Scriber Pro Review
- Otter.ai Review
- Rev.com Review
- Best Offline Transcription Apps 2025
- Best Mac Apps to Try 2025
- Privacy Risks of Cloud Transcription
- Otter.ai Class Action Lawsuit

### Comparison Articles

- Scriber Pro vs Otter.ai
- Scriber Pro vs Rev.com

### Professional Guides

- Transcription for Lawyers on Mac
- Medical Transcription on Mac
- Journalist Transcription Guide
- Why Choose Offline Transcription
- Student Lecture Download Guide

## Deployment

### Automated Deployment (GitHub Actions)

The site automatically deploys to GitHub Pages when you push to the `main` branch:

```bash
# Make your changes
git add .
git commit -m "Update content"
git push origin main
```

The GitHub Actions workflow will:
1. Install PHP and Node.js dependencies
2. Build assets with Vite
3. Generate static HTML from Laravel routes
4. Deploy to `gh-pages` branch
5. Site goes live at https://transcription.1oa.cc/

### Manual Deployment

If needed, you can generate static files locally:

```bash
# Build static site
npm run build:static

# Output will be in public_html/
# You can then manually deploy these files
```

## Custom Domain Configuration

The site uses a custom domain: **transcription.1oa.cc**

### DNS Configuration

Ensure your DNS provider has these records:

```
Type:  CNAME
Name:  transcription (or @)
Value: brookcs3.github.io
TTL:   3600
```

### CNAME File

The `CNAME` file in the repository root ensures GitHub Pages serves the site at the custom domain.

### Verification

1. Push changes to GitHub
2. Wait 2-5 minutes for deployment
3. Check GitHub Pages settings in repository settings
4. Verify SSL certificate is active (may take up to 24 hours)

## SEO & Analytics

### Google Tag Manager

GTM container ID `GTM-TCTB9W3C` is installed in the main layout template.

### Schema Markup

All article pages include:
- `Article` or `Review` schema
- `BreadcrumbList` schema
- OpenGraph meta tags
- Twitter Card meta tags

### Sitemap & RSS

- Sitemap: `https://transcription.1oa.cc/sitemap.xml`
- RSS Feed: `https://transcription.1oa.cc/rss.xml`

## Content Guidelines

### Adding New Articles

1. **Create Blade Template**
   ```bash
   # For reviews
   resources/views/reviews/new-article.blade.php

   # For guides
   resources/views/guides/new-guide.blade.php
   ```

2. **Update Controller**
   - Add slug handling in appropriate controller
   - Map slug to Blade view

3. **Update build-static.php**
   - Add new route to `$routes` array

4. **Update Sitemap**
   - Add entry to `sitemap.xml` (in root)

### Template Structure

```blade
@extends('layouts.app')

@section('title', 'Page Title')
@section('description', 'Meta description (150-160 characters)')
@section('keywords', 'keyword1, keyword2, keyword3')

@section('meta')
<!-- OpenGraph, Schema.org JSON-LD -->
@endsection

@section('content')
<!-- Main article content -->
@endsection
```

## Troubleshooting

### Build Failures

```bash
# Clear all caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear

# Reinstall dependencies
rm -rf vendor node_modules
composer install
npm install
```

### Static Generation Issues

```bash
# Test individual routes
php artisan route:list

# Run static generator with verbose output
php -d display_errors=1 build-static.php
```

### GitHub Pages Not Updating

1. Check Actions tab for workflow failures
2. Verify `gh-pages` branch exists
3. Ensure GitHub Pages is configured to deploy from `gh-pages` branch
4. Check DNS settings for custom domain

## Contributing

This is a private project, but if you have suggestions:

1. Open an issue describing the improvement
2. Wait for approval before making changes
3. Follow existing code style and conventions
4. Ensure all content is preserved verbatim (no summarization)

## License

Proprietary - All rights reserved.

## Contact

- **Site:** https://transcription.1oa.cc/contact
- **Repository:** https://github.com/brookcs3/transcription-guide

---

**Built with Laravel + Blade Templates | Deployed on GitHub Pages**
