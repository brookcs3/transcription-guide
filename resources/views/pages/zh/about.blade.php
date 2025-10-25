@extends('layouts.app')

@section('title', '关于 Mac 转录软件指南 - 独立评测与分析')
@section('meta_description', '了解 Mac 转录软件指南的使命——提供独立、公正的转录软件评测,专注于隐私和专业应用。')

@push('head')
<link rel="alternate" hreflang="en" href="https://transcription.1oa.cc/about">
<link rel="alternate" hreflang="zh-CN" href="https://transcription.1oa.cc/zh/about">
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        { "@@type": "Question", "name": "Mac 转录软件指南是什么?", "acceptedAnswer": { "@@type": "Answer", "text": "Mac 转录软件指南是专注于 Mac 转录软件的独立评测网站。我们为处理机密信息的专业人士提供隐私、性能和价值方面的公正分析。" } },
        { "@@type": "Question", "name": "为什么应该信任你们的评测?", "acceptedAnswer": { "@@type": "Answer", "text": "我们拥有 15 年以上软件开发和科技新闻从业经验。所有评测均基于真实场景的实际测试,并保持严格的编辑独立性,没有赞助内容或关联关系。" } },
        { "@@type": "Question", "name": "你们如何测试转录应用?", "acceptedAnswer": { "@@type": "Answer", "text": "我们使用标准化音频样本,包括清晰语音、嘈杂环境、多人对话和专业术语内容。测试包括隐私分析、性能基准测试和专业用例评估。" } },
        { "@@type": "Question", "name": "你们接受付费评测吗?", "acceptedAnswer": { "@@type": "Answer", "text": "不,我们不接受付费评测,也不与可能影响我们分析的软件供应商存在财务关系。我们的收入来自教育内容和咨询服务。" } }
    ]
}
</script>
@endpush

@section('breadcrumbs')
<a href="{{ route('zh.home') }}">首页</a> &gt; <span>关于</span>
@endsection

@section('content')
<div style="max-width: 800px; margin: 0 auto; padding: 2rem 1rem;">
    <header style="text-align: center; margin-bottom: 3rem; padding: 2rem; background: var(--secondary-color); border-radius: 12px;">
        <h1>关于 Mac 转录软件指南</h1>
        <p>为注重隐私的专业人士提供独立的转录软件分析</p>
    </header>

    <section style="background: white; border-radius: 12px; padding: 2rem; margin: 2rem 0; border: 1px solid var(--border-color);">
        <h2>我们的使命</h2>
        <p>Mac 转录软件指南是为了应对转录软件行业日益增长的隐私担忧而创立的。在目睹了损害用户隐私的基于云的服务激增后,我们认识到需要为处理机密信息的专业人士提供独立、公正的分析。</p>

        <p>我们的使命是提供全面、经过充分研究的评测和比较,帮助 Mac 用户就转录软件做出明智决策,特别强调隐私、安全和专业合规要求。</p>
    </section>

    <section style="background: linear-gradient(135deg, #f0f9ff, #dbeafe); border-radius: 12px; padding: 2rem; margin: 2rem 0;">
        <h2>为什么信任我们的分析?</h2>

        <h3>我们的团队与专业知识</h3>
        <p><strong>由 Mac 软件分析师创立</strong>,拥有 8 年以上为法律、医疗和学术用途测试转录工具的经验。我们的首席评测员在 15 种以上应用程序中亲自转录了 500 多小时的内容,从企业云平台到离线 Mac 应用。</p>

        <h3>独立保证</h3>
        <p>我们以全额零售价购买所有软件。零关联关系。没有赞助评测。我们唯一的收入来自教育内容——从不来自软件供应商。</p>
    </section>

    <section style="background: white; border-radius: 12px; padding: 2rem; margin: 2rem 0; border: 1px solid var(--border-color);">
        <h2>我们的评测流程</h2>
        <h3>全面的测试方法</h3>

        <h4>1. 隐私分析 (权重: 40%)</h4>
        <p>我们对数据流进行取证检查:</p>
        <ul>
            <li><strong>网络流量监控:</strong> 捕获和分析转录过程中的所有数据传输</li>
            <li><strong>隐私政策审查:</strong> 逐行分析条款、数据保留和第三方共享</li>
            <li><strong>合规性验证:</strong> HIPAA、FERPA、律师-客户特权要求</li>
        </ul>

        <h4>2. 准确性测试 (权重: 30%)</h4>
        <p>跨难度级别的标准化音频样本:</p>
        <ul>
            <li>清晰语音(单个说话者,录音室质量)</li>
            <li>多个说话者和重叠对话</li>
            <li>背景噪音(咖啡馆、办公室、户外环境)</li>
            <li>专业词汇(医学术语、法律术语、计算机科学概念)</li>
        </ul>

        <h4>3. 性能基准 (权重: 20%)</h4>
        <ul>
            <li><strong>速度测试:</strong> 在 Apple Silicon M1/M2/M3 上测量的实时因子 (RTF)</li>
            <li><strong>资源使用:</strong> 转录期间的 CPU、RAM 和电池消耗</li>
            <li><strong>文件格式支持:</strong> 与 MP3、M4A、WAV、MP4、MOV 的兼容性测试</li>
        </ul>
    </section>

    <section style="background: white; border-radius: 12px; padding: 2rem; margin: 2rem 0; border: 1px solid var(--border-color);">
        <h2>联系与透明度</h2>
        <p>Mac 转录软件指南在测试方法、资金来源和潜在利益冲突方面完全透明。我们欢迎有关我们评测流程的问题,并致力于解决有关我们分析的任何担忧。</p>

        <p>如有关于我们方法的问题、建议评测的软件或报告事实错误,请通过我们的<a href="{{ route('zh.contact') }}">联系页面</a>与我们联系。</p>

        <h3>披露</h3>
        <p>Mac 转录软件指南独立运营。我们以全额零售价购买所有用于测试的软件。我们的收入来自教育内容和咨询服务,而非软件供应商或关联关系。</p>
    </section>
</div>
@endsection
