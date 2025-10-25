#!/usr/bin/env php
<?php

/**
 * Static Site Generator for GitHub Pages
 *
 * Generates static HTML files from Laravel Blade templates
 * for deployment to GitHub Pages (transcription.1oa.cc)
 *
 * Usage: php build-static.php
 */

require __DIR__ . '/vendor/autoload.php';

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

// Bootstrap Laravel application
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Configuration
$outputDir = __DIR__ . '/public_html';
$baseUrl = 'https://transcription.1oa.cc';

// Routes to generate (map route paths to output file paths)
$routes = [
    // English pages
    '/' => '/index.html',
    '/reviews' => '/reviews.html',
    '/comparisons' => '/comparisons.html',
    '/guides' => '/guides.html',
    '/about' => '/about.html',
    '/contact' => '/contact.html',
    '/privacy' => '/privacy.html',

    // Review articles
    '/reviews/scriber-pro' => '/reviews/scriber-pro.html',
    '/reviews/otter-ai' => '/reviews/otter-ai.html',
    '/reviews/rev' => '/reviews/rev.html',
    '/reviews/best-offline-2025' => '/reviews/best-offline-2025.html',
    '/reviews/best-mac-apps' => '/reviews/best-mac-apps.html',
    '/reviews/privacy-risks' => '/reviews/privacy-risks.html',
    '/reviews/otter-lawsuit' => '/reviews/otter-lawsuit.html',

    // Comparison articles
    '/comparisons/scriber-otter' => '/comparisons/scriber-otter.html',
    '/comparisons/scriber-rev' => '/comparisons/scriber-rev.html',

    // Guide articles
    '/guides/transcription-lawyers-mac' => '/guides/transcription-lawyers-mac.html',
    '/guides/medical-transcription-mac' => '/guides/medical-transcription-mac.html',
    '/guides/journalist-transcription-mac' => '/guides/journalist-transcription-mac.html',
    '/guides/why-offline-transcription' => '/guides/why-offline-transcription.html',
    '/guides/student-lecture-download-guide' => '/guides/student-lecture-download-guide.html',

    // Chinese pages
    '/zh' => '/zh/index.html',
    '/zh/reviews' => '/zh/reviews.html',
    '/zh/comparisons' => '/zh/comparisons.html',
    '/zh/guides' => '/zh/guides.html',
    '/zh/about' => '/zh/about.html',
    '/zh/contact' => '/zh/contact.html',

    // Chinese review articles
    '/zh/reviews/best-offline-2025' => '/zh/reviews/best-offline-2025.html',

    // Chinese comparison articles
    '/zh/comparisons/scriber-otter' => '/zh/comparisons/scriber-otter.html',
    '/zh/comparisons/scriber-rev' => '/zh/comparisons/scriber-rev.html',

    // Chinese guide articles
    '/zh/guides/transcription-lawyers-mac' => '/zh/guides/transcription-lawyers-mac.html',
    '/zh/guides/medical-transcription-mac' => '/zh/guides/medical-transcription-mac.html',
    '/zh/guides/journalist-transcription-mac' => '/zh/guides/journalist-transcription-mac.html',
    '/zh/guides/why-offline-transcription' => '/zh/guides/why-offline-transcription.html',
    '/zh/guides/student-lecture-download-guide' => '/zh/guides/student-lecture-download-guide.html',
];

// Initialize output directory
echo "🏗️  Static Site Generator for transcription.1oa.cc\n";
echo "=" . str_repeat("=", 60) . "\n\n";

if (File::exists($outputDir)) {
    echo "🧹 Cleaning existing build directory...\n";
    File::deleteDirectory($outputDir);
}

echo "📁 Creating output directory: {$outputDir}\n";
File::makeDirectory($outputDir, 0755, true);

// Copy assets
echo "📦 Copying public assets...\n";
$assetDirs = ['assets', 'css', 'js', 'images', 'genimages'];
foreach ($assetDirs as $dir) {
    $source = __DIR__ . "/public/{$dir}";
    $dest = "{$outputDir}/{$dir}";

    if (File::exists($source)) {
        File::copyDirectory($source, $dest);
        echo "   ✓ Copied {$dir}/\n";
    }
}

// Copy root files
$rootFiles = ['robots.txt', 'favicon.ico', 'manifest.json'];
foreach ($rootFiles as $file) {
    $source = __DIR__ . "/public/{$file}";
    if (File::exists($source)) {
        File::copy($source, "{$outputDir}/{$file}");
        echo "   ✓ Copied {$file}\n";
    }
}

// Generate static HTML pages
echo "\n🎨 Generating static HTML pages...\n";
$successCount = 0;
$errorCount = 0;

foreach ($routes as $route => $outputFile) {
    try {
        // Create HTTP request
        $request = Request::create($route, 'GET');
        $response = $app->handle($request);

        // Get response content
        $html = $response->getContent();

        // Create output directory if needed
        $outputPath = $outputDir . $outputFile;
        $outputFileDir = dirname($outputPath);

        if (!File::exists($outputFileDir)) {
            File::makeDirectory($outputFileDir, 0755, true);
        }

        // Write HTML file
        File::put($outputPath, $html);

        echo "   ✓ {$route} → {$outputFile}\n";
        $successCount++;

    } catch (Exception $e) {
        echo "   ✗ {$route} - ERROR: {$e->getMessage()}\n";
        $errorCount++;
    }
}

// Copy additional SEO files from root (if they exist)
echo "\n📄 Copying SEO files...\n";
$seoFiles = [
    __DIR__ . '/sitemap.xml' => $outputDir . '/sitemap.xml',
    __DIR__ . '/rss.xml' => $outputDir . '/rss.xml',
];

foreach ($seoFiles as $source => $dest) {
    if (File::exists($source)) {
        File::copy($source, $dest);
        echo "   ✓ Copied " . basename($source) . "\n";
    }
}

// Build summary
echo "\n" . str_repeat("=", 60) . "\n";
echo "✅ Build complete!\n\n";
echo "📊 Summary:\n";
echo "   • Pages generated: {$successCount}\n";
echo "   • Errors: {$errorCount}\n";
echo "   • Output directory: {$outputDir}\n";
echo "   • Custom domain: transcription.1oa.cc\n";
echo "\n";

if ($errorCount > 0) {
    echo "⚠️  Warning: {$errorCount} pages failed to generate.\n";
    exit(1);
}

echo "🚀 Ready to deploy to GitHub Pages!\n";
echo "\nNext steps:\n";
echo "   1. Review files in public_html/\n";
echo "   2. Commit changes to repository\n";
echo "   3. Push to GitHub (workflow will deploy automatically)\n";
echo "\n";

exit(0);
