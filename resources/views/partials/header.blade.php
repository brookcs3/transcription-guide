<header class="main-header">
    <div class="container" style="position: relative;">
        {{-- Language Switcher --}}
        @if(request()->is('zh/*') || request()->is('zh'))
            {{-- On Chinese page, link to English --}}
            @php
                $englishUrl = str_replace('/zh/', '/', url()->current());
                $englishUrl = str_replace('/zh', '/', $englishUrl);
            @endphp
            <a href="{{ $englishUrl }}" 
               style="position: absolute; top: -0.5rem; right: 0; background: rgba(255,255,255,0.2); padding: 0.3rem 0.7rem; border-radius: 6px; text-decoration: none; color: white; font-weight: 600; font-size: 0.85rem; transition: all 0.2s; border: 1px solid rgba(255,255,255,0.3);"
               onmouseover="this.style.background='rgba(255,255,255,0.3)'" 
               onmouseout="this.style.background='rgba(255,255,255,0.2)'">
                EN
            </a>
        @else
            {{-- On English page, link to Chinese --}}
            @php
                $path = request()->path();
                $chineseUrl = $path === '/' ? url('/zh') : url('/zh/' . $path);
            @endphp
            <a href="{{ $chineseUrl }}" 
               style="position: absolute; top: -0.5rem; right: 0; background: rgba(255,255,255,0.2); padding: 0.3rem 0.7rem; border-radius: 6px; text-decoration: none; color: white; font-weight: 600; font-size: 0.85rem; transition: all 0.2s; border: 1px solid rgba(255,255,255,0.3);"
               onmouseover="this.style.background='rgba(255,255,255,0.3)'" 
               onmouseout="this.style.background='rgba(255,255,255,0.2)'">
                中文
            </a>
        @endif

        <div style="display: flex; align-items: center; justify-content: center; gap: 1.5rem; margin-bottom: 1rem;">
            <img src="{{ asset('genimages/security-icon.png') }}" alt="Privacy Shield" style="width: 60px; height: 60px;">
            <a href="{{ request()->is('zh/*') || request()->is('zh') ? route('zh.home') : route('home') }}" style="margin: 0; font-size: 2.5rem; font-weight: 700; color: white; text-decoration: none;">
                {{ request()->is('zh/*') || request()->is('zh') ? 'Mac转录指南' : 'Mac Transcription Guide' }}
            </a>
        </div>
        <p class="tagline">
            {{ request()->is('zh/*') || request()->is('zh') ? '独立评测 • 隐私分析 • 专家对比' : 'Independent Reviews • Privacy Analysis • Expert Comparisons' }}
        </p>
    </div>
</header>