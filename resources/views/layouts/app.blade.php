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
    <title>@yield('title') - Mac Transcription Guide</title>
    <meta name="description" content="@yield('description', 'Independent reviews of offline and cloud transcription software for Mac users')">
    <meta name="keywords" content="@yield('keywords', 'Mac transcription reviews, offline transcription apps, cloud transcription services, transcription software comparison')">

    <link rel="alternate" type="application/rss+xml" title="Mac Transcription Guide RSS Feed" href="/rss.xml">
    <link rel="sitemap" type="application/xml" href="/sitemap.xml">

    @yield('meta')

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('genimages/favicon.png') }}">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    @yield('styles')
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCTB9W3C"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('partials.header')
    @include('partials.navigation')

    @hasSection('breadcrumb-content')
        @include('partials.breadcrumbs')
    @endif

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>
</html>