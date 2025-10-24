<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TCTB9W3C');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <title><?php echo $__env->yieldContent('title'); ?> - Mac Transcription Guide</title>
    <meta name="description" content="<?php echo $__env->yieldContent('description', 'Independent reviews of offline and cloud transcription software for Mac users'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords', 'Mac transcription reviews, offline transcription apps, cloud transcription services, transcription software comparison'); ?>">

    <link rel="alternate" type="application/rss+xml" title="Mac Transcription Guide RSS Feed" href="/rss.xml">
    <link rel="sitemap" type="application/xml" href="/sitemap.xml">

    <?php echo $__env->yieldContent('meta'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('genimages/favicon.png')); ?>">
    <link rel="canonical" href="<?php echo $__env->yieldContent('canonical', url()->current()); ?>">

    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCTB9W3C"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php if (! empty(trim($__env->yieldContent('breadcrumb-content')))): ?>
        <?php echo $__env->make('partials.breadcrumbs', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH C:\Users\Owner\transcription-guide\WORKING\transcription-guide-laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>