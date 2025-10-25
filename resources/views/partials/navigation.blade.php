@php
    $isZh = request()->is('zh*');
    $homeRoute = $isZh ? 'zh.home' : 'home';
    $reviewsRoute = $isZh ? 'zh.reviews' : 'reviews';
    $comparisonsRoute = $isZh ? 'zh.comparisons' : 'comparisons';
    $guidesRoute = $isZh ? 'zh.guides' : 'guides';
@endphp

<nav class="main-nav">
    <div class="container">
        <ul>
            <li><a href="{{ route($homeRoute) }}" class="{{ request()->routeIs('home') || request()->routeIs('zh.home') ? 'active' : '' }}">
                {{ $isZh ? '首页' : 'Home' }}
            </a></li>
            <li><a href="{{ route($reviewsRoute) }}" class="{{ request()->routeIs('reviews*') || request()->routeIs('review.*') || request()->routeIs('zh.reviews*') ? 'active' : '' }}">
                {{ $isZh ? '评测' : 'Reviews' }}
            </a></li>
            <li><a href="{{ route($comparisonsRoute) }}" class="{{ request()->routeIs('comparisons*') || request()->routeIs('comparison.*') || request()->routeIs('zh.comparisons*') || request()->routeIs('zh.comparison.*') ? 'active' : '' }}">
                {{ $isZh ? '对比' : 'Comparisons' }}
            </a></li>
            <li><a href="{{ route($guidesRoute) }}" class="{{ request()->routeIs('guides*') || request()->routeIs('guide.*') || request()->routeIs('zh.guides*') ? 'active' : '' }}">
                {{ $isZh ? '指南' : 'Guides' }}
            </a></li>
        </ul>
    </div>
</nav>