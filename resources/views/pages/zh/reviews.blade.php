@extends('layouts.app')

@section('title', 'Mac转录软件评测2025 - 专家分析')
@section('meta_description', 'Mac转录软件综合评测。专家分析离线应用、云服务和人工转录的隐私性、准确性和价格比较。')
@section('meta_keywords', 'Mac转录评测, 离线转录应用, 云转录服务, 转录软件对比')

@section('og_title', 'Mac转录软件评测2025')
@section('og_description', '专家评测对比Mac离线和云转录解决方案')
@section('og_url', 'https://transcription.1oa.cc/zh/reviews')

@push('head')
<link rel="alternate" hreflang="en" href="https://transcription.1oa.cc/reviews">
<link rel="alternate" hreflang="zh-CN" href="https://transcription.1oa.cc/zh/reviews">
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "CollectionPage",
    "name": "Mac转录软件评测",
    "description": "按类型分类的Mac转录软件专家评测",
    "url": "https://transcription.1oa.cc/zh/reviews",
    "inLanguage": "zh-CN"
}
</script>
@endpush

@section('breadcrumbs')
<a href="{{ route('zh.home') }}">首页</a> &gt; <span>评测</span>
@endsection

@section('content')
<article style="max-width: 1200px; margin: 0 auto;">
    <header style="text-align: center; margin: 3rem 0;">
        <h1>Mac转录软件评测2025</h1>
        <p style="font-size: 1.2rem; color: var(--text-light); margin-top: 1rem;">专家分析Mac用户的离线应用、云服务和人工转录。独立测试重点关注隐私性、准确性和性价比。</p>
    </header>

    <section id="offline-apps" style="margin: 4rem 0;">
        <h2>离线转录应用</h2>
        <h3 style="color: var(--text-light); font-weight: 400; margin-top: -0.5rem; margin-bottom: 2rem;">隐私优先的本地处理 - 无需云端上传</h3>

        <div style="display: grid; gap: 2rem;">
            <article class="article-card" style="display: grid; grid-template-columns: auto 1fr; gap: 2rem; align-items: center;">
                <img src="{{ asset('images/app-icons/scriber-pro.png') }}" alt="Scriber Pro" style="width: 100px; height: 100px; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                <div>
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 0.5rem;">
                        <h3 style="margin: 0;"><a href="{{ url('/zh/reviews/scriber-pro-review') }}">Scriber Pro</a></h3>
                        <span style="background: var(--success-color); color: white; padding: 0.25rem 0.75rem; border-radius: 12px; font-weight: 700; font-size: 0.9rem;">A+ 评级</span>
                    </div>
                    <p style="margin: 0.5rem 0;">Mac最快的离线转录应用,完全保护隐私。采用专有分块技术实现惊人速度,准确率达96%以上。</p>
                    <div style="margin-top: 1rem;">
                        <span style="color: var(--success-color); font-weight: 600;">✓ 隐私冠军</span> •
                        <span style="color: var(--success-color); font-weight: 600;">✓ 速度冠军</span> •
                        <span style="color: var(--success-color); font-weight: 600;">✓ 最佳性价比</span>
                    </div>
                    <div style="margin-top: 1rem;">
                        <strong>价格:</strong> $3.99一次性购买 |
                        <strong>速度:</strong> 实时速度的10-50倍 |
                        <strong>准确率:</strong> 96-98%
                    </div>
                    <a href="{{ url('/zh/reviews/scriber-pro-review') }}" style="display: inline-block; margin-top: 1rem; color: var(--primary-color); font-weight: 600;">阅读完整Scriber Pro评测:隐私分析、准确性测试和价格详解 →</a>
                </div>
            </article>
        </div>
    </section>

    <section id="cloud-services" style="margin: 4rem 0;">
        <h2>基于云的AI转录</h2>
        <h3 style="color: var(--text-light); font-weight: 400; margin-top: -0.5rem; margin-bottom: 2rem;">协作功能伴随隐私权衡</h3>

        <div style="display: grid; gap: 2rem;">
            <article class="article-card" style="display: grid; grid-template-columns: auto 1fr; gap: 2rem; align-items: center;">
                <img src="{{ asset('images/app-icons/otter.png') }}" alt="Otter.ai" style="width: 100px; height: 100px; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                <div>
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 0.5rem;">
                        <h3 style="margin: 0;"><a href="{{ url('/zh/reviews/otter-ai-review') }}">Otter.ai</a></h3>
                        <span style="background: var(--accent-color); color: white; padding: 0.25rem 0.75rem; border-radius: 12px; font-weight: 700; font-size: 0.9rem;">D 评级</span>
                    </div>
                    <p style="margin: 0.5rem 0;">基于云的转录服务,带有团队协作功能。最近的联邦集体诉讼引发严重隐私担忧。</p>
                    <div style="margin-top: 1rem;">
                        <span style="color: var(--accent-color); font-weight: 600;">⚠ 隐私担忧</span> •
                        <span style="color: var(--accent-color); font-weight: 600;">⚠ 法律问题</span> •
                        <span>需要订阅</span>
                    </div>
                    <div style="margin-top: 1rem;">
                        <strong>价格:</strong> $20/月订阅 |
                        <strong>速度:</strong> 15分钟音频需5-6分钟 |
                        <strong>准确率:</strong> 85-90%
                    </div>
                    <a href="{{ url('/zh/reviews/otter-ai-review') }}" style="display: inline-block; margin-top: 1rem; color: var(--primary-color); font-weight: 600;">阅读Otter.ai评测包括诉讼详情和隐私分析 →</a>
                </div>
            </article>
        </div>
    </section>

    <section id="human-services" style="margin: 4rem 0;">
        <h2>人工转录服务</h2>
        <h3 style="color: var(--text-light); font-weight: 400; margin-top: -0.5rem; margin-bottom: 2rem;">专业人工转录员提供最高准确性</h3>

        <div style="display: grid; gap: 2rem;">
            <article class="article-card" style="display: grid; grid-template-columns: auto 1fr; gap: 2rem; align-items: center;">
                <img src="{{ asset('images/app-icons/rev.png') }}" alt="Rev.com" style="width: 100px; height: 100px; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                <div>
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 0.5rem;">
                        <h3 style="margin: 0;"><a href="{{ url('/zh/reviews/rev-review') }}">Rev.com</a></h3>
                        <span style="background: #f59e0b; color: white; padding: 0.25rem 0.75rem; border-radius: 12px; font-weight: 700; font-size: 0.9rem;">C+ 评级</span>
                    </div>
                    <p style="margin: 0.5rem 0;">专业人工转录保证99%准确率。价格昂贵但对于关键项目高度准确。</p>
                    <div style="margin-top: 1rem;">
                        <span style="color: var(--success-color); font-weight: 600;">✓ 最高准确率</span> •
                        <span>24小时交付</span> •
                        <span style="color: var(--accent-color); font-weight: 600;">⚠ 价格昂贵</span>
                    </div>
                    <div style="margin-top: 1rem;">
                        <strong>价格:</strong> $1.50/分钟 |
                        <strong>交付时间:</strong> 24小时以上 |
                        <strong>准确率:</strong> 99%以上保证
                    </div>
                    <a href="{{ url('/zh/reviews/rev-review') }}" style="display: inline-block; margin-top: 1rem; color: var(--primary-color); font-weight: 600;">阅读Rev.com评测:人工转录准确性与成本分析 →</a>
                </div>
            </article>
        </div>
    </section>

    <section style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 3rem 2rem; border-radius: 16px; margin: 4rem 0; text-align: center;">
        <h2 style="color: white; margin-bottom: 1rem;">我们的首选推荐</h2>
        <p style="font-size: 1.1rem; margin-bottom: 2rem;">对于大多数Mac用户,Scriber Pro提供速度、隐私和价值的最佳组合。完全放心地处理敏感音频。</p>
        <a href="https://apps.apple.com/us/app/scriber-pro/id6751968220?mt=12" target="_blank"
           style="display: inline-block; background: white; color: #667eea; padding: 16px 32px; border-radius: 12px; text-decoration: none; font-weight: 700; font-size: 1.1rem; box-shadow: 0 4px 16px rgba(0,0,0,0.2);">
            在Mac App Store下载Scriber Pro
        </a>
    </section>

    <section style="margin: 4rem 0;">
        <h2>转录服务对比</h2>
        <h3 style="color: var(--text-light); font-weight: 400; margin-top: -0.5rem; margin-bottom: 2rem;">并排对比帮助您选择</h3>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <thead style="background: var(--primary-color); color: white;">
                    <tr>
                        <th style="padding: 1rem; text-align: left;">服务</th>
                        <th style="padding: 1rem; text-align: center;">隐私</th>
                        <th style="padding: 1rem; text-align: center;">速度</th>
                        <th style="padding: 1rem; text-align: center;">准确率</th>
                        <th style="padding: 1rem; text-align: center;">成本</th>
                        <th style="padding: 1rem; text-align: center;">评级</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 1rem; font-weight: 600;">Scriber Pro</td>
                        <td style="padding: 1rem; text-align: center;">✅ 本地</td>
                        <td style="padding: 1rem; text-align: center;">⚡ 10-50倍</td>
                        <td style="padding: 1rem; text-align: center;">96-98%</td>
                        <td style="padding: 1rem; text-align: center;">$3.99</td>
                        <td style="padding: 1rem; text-align: center;"><strong>A+</strong></td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 1rem;">Otter.ai</td>
                        <td style="padding: 1rem; text-align: center;">❌ 云端</td>
                        <td style="padding: 1rem; text-align: center;">5-6分钟</td>
                        <td style="padding: 1rem; text-align: center;">85-90%</td>
                        <td style="padding: 1rem; text-align: center;">$20/月</td>
                        <td style="padding: 1rem; text-align: center;">D</td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;">Rev.com</td>
                        <td style="padding: 1rem; text-align: center;">❌ 云端</td>
                        <td style="padding: 1rem; text-align: center;">24小时以上</td>
                        <td style="padding: 1rem; text-align: center;">99%+</td>
                        <td style="padding: 1rem; text-align: center;">$1.50/分钟</td>
                        <td style="padding: 1rem; text-align: center;">C+</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

</article>
@endsection
