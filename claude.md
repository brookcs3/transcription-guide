# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a **static HTML to Laravel migration project** for Mac Transcription Guide - a content-heavy SEO-focused website reviewing transcription software. The original static HTML site (in `HTML-ORIGINALS/`) is being carefully migrated to Laravel Blade templates (in `WORKING/transcription-guide-laravel/`).

**Critical Migration Requirement**: Due to previous tool failures, content must be migrated **completely and verbatim** - never summarize or truncate. Each HTML page contains critical SEO elements (meta tags, schema markup, full article content) that must be preserved 100%.

## Project Structure

```
transcription-guide/
├── HTML-ORIGINALS/          # Source static HTML files (DO NOT MODIFY)
│   ├── reviews-backup-original/  # Review article pages
│   ├── comparisons/         # Comparison pages (Scriber vs competitors)
│   ├── guides/              # Professional guide pages
│   └── zh/                  # Chinese version (identical structure)
├── WORKING/transcription-guide-laravel/  # Target Laravel 12 project
│   ├── resources/views/
│   │   ├── layouts/app.blade.php      # Main layout template
│   │   ├── partials/                  # header, footer, navigation, breadcrumbs
│   │   ├── pages/                     # Main hub pages (home, reviews, comparisons, guides, about, contact)
│   │   ├── reviews/                   # Individual review article Blade files
│   │   ├── comparisons/               # Comparison article Blade files
│   │   ├── guides/                    # Guide article Blade files
│   │   └── zh/                        # Chinese versions
│   ├── routes/web.php                 # All route definitions
│   └── app/Http/Controllers/          # PageController, ReviewController, GuideController
└── assets/                  # Shared assets (CSS, JS, images)
```

## Development Commands

### Initial Setup
```bash
cd "C:\Users\Owner\transcription-guide\WORKING\transcription-guide-laravel"
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run build
```

### Development Server
```bash
# Start all services (server, queue, logs, vite) concurrently
composer dev

# Or individually:
php artisan serve              # Development server at http://localhost:8000
npm run dev                   # Vite asset compilation with hot reload
```

### Testing
```bash
composer test                 # Run PHPUnit tests
php artisan route:list        # Verify routes
php artisan config:clear      # Clear config cache
```

## Migration Workflow

### Current Status
- ✅ **Completed**: Main hub pages (home, about, contact, reviews, comparisons, guides)
- ✅ **Completed**: Comparisons section (scriber-otter, scriber-rev) - **NEEDS VERIFICATION**
- ⏳ **Next**: Reviews section (scriber-pro, otter-ai, rev, best-offline-2025, etc.)
- ⏳ **Pending**: Guides section
- ⏳ **Pending**: Chinese (zh) versions of all sections

### Step-by-Step Migration Process

**CRITICAL**: Work on ONE section at a time. Each page must be verified before proceeding.

1. **Read Original HTML** (from `HTML-ORIGINALS/`)
   - Read entire file to understand structure
   - Note all meta tags, schema markup, content sections

2. **Create/Update Blade Template** (in `WORKING/transcription-guide-laravel/resources/views/`)
   - Extract content between `<body>` tags (exclude header/nav/footer)
   - Convert to Blade syntax using `@extends('layouts.app')`
   - Preserve ALL content verbatim
   - Convert asset paths: `/assets/` → `{{ asset('assets/') }}`
   - Add `@section` blocks:
     - `@section('title')` - Page title without site name
     - `@section('description')` - Meta description
     - `@section('keywords')` - SEO keywords
     - `@section('meta')` - Additional meta tags, Open Graph, schema JSON-LD
     - `@section('content')` - Main page content

3. **Verification Checklist**
   - [ ] All text content migrated (no truncation)
   - [ ] All meta tags preserved
   - [ ] Schema markup (JSON-LD) intact
   - [ ] Images paths converted correctly
   - [ ] Links converted to Laravel routes where applicable
   - [ ] Styling classes preserved
   - [ ] Character count matches (rough comparison)

4. **Route Registration** (in `routes/web.php`)
   - Individual articles use dynamic routes:
     - Reviews: `/reviews/{slug}` → `ReviewController@show`
     - Comparisons: `/comparisons/{slug}` → `PageController@comparison`
     - Guides: `/guides/{slug}` → `GuideController@show`

### Asset Path Conversion

**Static HTML**:
```html
<link href="/assets/css/style.css" rel="stylesheet">
<img src="/assets/images/logo.png">
```

**Laravel Blade**:
```blade
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<img src="{{ asset('assets/images/logo.png') }}">
```

### Typical Blade Template Structure

```blade
@extends('layouts.app')

@section('title', 'Page Title Here')
@section('description', 'Meta description here')
@section('keywords', 'keyword1, keyword2, keyword3')

@section('meta')
<!-- Open Graph tags -->
<meta property="og:title" content="...">
<meta property="og:description" content="...">
<meta property="og:type" content="article">
<meta property="og:url" content="...">

<!-- Schema.org JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Review",
  ...
}
</script>
@endsection

@section('content')
<div class="article-content">
    <!-- Full article content here -->
</div>
@endsection
```

## Chinese Version (zh)

The `/zh` folder contains Chinese translations with identical structure. Migration approach:

1. Complete English version first
2. Apply same migration pattern to Chinese counterparts
3. Routes use `Route::prefix('zh')` in `routes/web.php`
4. Blade files in `resources/views/zh/` or `resources/views/pages/zh/`

## SEO-Critical Elements

This is an SEO-focused site. These elements are **non-negotiable**:

- **Schema Markup**: All JSON-LD structured data must be preserved exactly
- **Meta Tags**: title, description, keywords, Open Graph, canonical URLs
- **Content Completeness**: Articles are 3000-8000+ words - preserve every paragraph
- **Internal Linking**: Maintain all cross-references between articles
- **Grade System**: Reviews use letter grades (A+, C, D) - don't modify
- **Dates**: October 2025 timeline for publication dates

## Common Issues to Avoid

1. **Content Truncation**: The #1 problem from previous attempts. NEVER summarize content.
2. **Path Mistakes**: Remember to convert `/assets/` to `{{ asset('assets/') }}`
3. **Schema Errors**: JSON-LD must be valid JSON within `<script type="application/ld+json">`
4. **Layout Duplication**: Header/nav/footer come from `layouts.app` - don't duplicate from HTML
5. **Route Conflicts**: Check `routes/web.php` for existing routes before adding new ones

## Verification Process

Before marking any section complete:

1. **Read Original**: Open HTML-ORIGINALS file
2. **Read Migrated**: Open corresponding Blade file
3. **Compare**: Visually verify all content blocks present
4. **Check Meta**: Confirm all `<head>` elements migrated to `@section('meta')`
5. **Test Route**: Verify the route loads in browser (if server running)
6. **Character Count**: Rough comparison to ensure no major truncation

## Technology Stack

- **Laravel 12.35.1** (PHP 8.2+)
- **Tailwind CSS 4.0** via Vite
- **Blade templating engine**
- **No database** (static content site)
- **Google Tag Manager** (GTM-TCTB9W3C) already integrated in layout

## Key Files Reference

- `WORKING/transcription-guide-laravel/routes/web.php` - All route definitions
- `WORKING/transcription-guide-laravel/resources/views/layouts/app.blade.php` - Main layout
- `WORKING/transcription-guide-laravel/app/Http/Controllers/PageController.php` - Main pages controller
- `WORKING/transcription-guide-laravel/app/Http/Controllers/ReviewController.php` - Review articles
- `WORKING/transcription-guide-laravel/app/Http/Controllers/GuideController.php` - Guide articles
