@extends('layouts.app')

@section('title', '2025年最佳Mac离线转录软件')
@section('description', '2025年Mac顶级离线转录应用。独立测试隐私、准确性、速度和用户体验。')
@section('keywords', '最佳离线转录Mac 2025, 离线转录软件, Mac转录应用, 隐私转录')

@section('content')
<div class="container">
    <article>
        <header style="text-align: center; margin: 2rem 0;">
            <h1>2025年最佳Mac离线转录软件</h1>
            <p style="font-size: 1.2rem; color: var(--text-light); margin-top: 1rem;">顶级离线转录应用独立测试：隐私、准确性、速度和用户体验</p>
        </header>

        <section>
            <h2>为什么选择离线转录？</h2>
            <p style="line-height: 1.8;">离线转录软件将您的音频文件直接在Mac上处理，无需上传到云端。这提供了：</p>
            <ul style="line-height: 1.8;">
                <li><strong>完全隐私：</strong>您的数据永不离开设备</li>
                <li><strong>更快处理：</strong>无需等待云端上传和处理</li>
                <li><strong>离线工作：</strong>不需要互联网连接</li>
                <li><strong>无订阅费用：</strong>大多数是一次性购买</li>
            </ul>
        </section>

        <section style="margin: 3rem 0;">
            <h2 style="text-align: center; margin-bottom: 2rem;">2025年顶级离线转录应用</h2>

            <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border-radius: 16px; padding: 3rem 2rem; margin: 2rem 0;">
                <div style="display: flex; align-items: center; gap: 2rem; margin-bottom: 2rem;">
                    <img src="{{ asset('assets/images/app-icons/scriber-pro.png') }}" alt="Scriber Pro" style="width: 80px; height: 80px; border-radius: 16px;">
                    <div>
                        <h3 style="margin: 0; font-size: 2rem; color: white;">🏆 #1 Scriber Pro</h3>
                        <p style="margin: 0.5rem 0 0 0; opacity: 0.9;">最快、最私密的Mac离线转录</p>
                    </div>
                </div>
                
                <div style="background: rgba(255,255,255,0.1); border-radius: 12px; padding: 2rem; margin: 2rem 0;">
                    <p style="font-size: 1.1rem; margin-bottom: 1rem;"><strong>评分：9.8/10 | 等级：A+</strong></p>
                    <p>Scriber Pro是Mac上速度最快、最准确的离线转录应用。它在您的设备上本地处理音频，确保敏感录音的完全隐私和安全。</p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin: 2rem 0;">
                    <div>
                        <h4 style="color: white; margin-bottom: 0.5rem;">⚡ 速度</h4>
                        <p style="margin: 0; opacity: 0.9;">10-50倍实时处理</p>
                    </div>
                    <div>
                        <h4 style="color: white; margin-bottom: 0.5rem;">🎯 准确度</h4>
                        <p style="margin: 0; opacity: 0.9;">96-98%字准确率</p>
                    </div>
                    <div>
                        <h4 style="color: white; margin-bottom: 0.5rem;">💰 价格</h4>
                        <p style="margin: 0; opacity: 0.9;">$3.99 一次性购买</p>
                    </div>
                    <div>
                        <h4 style="color: white; margin-bottom: 0.5rem;">🔒 隐私</h4>
                        <p style="margin: 0; opacity: 0.9;">100%离线处理</p>
                    </div>
                </div>

                <a href="https://apps.apple.com/us/app/scriber-pro/id6751968220?mt=12" target="_blank"
                   style="display: inline-block; background: white; color: #667eea; padding: 16px 32px; border-radius: 12px; text-decoration: none; font-weight: 700; font-size: 1.1rem; box-shadow: 0 4px 16px rgba(0,0,0,0.2); margin-top: 1rem;">
                    📱 在Mac App Store下载
                </a>
            </div>

            <div style="background: white; border: 2px solid var(--border-color); border-radius: 12px; padding: 2rem; margin: 2rem 0;">
                <h3>主要特点</h3>
                <ul style="line-height: 1.8;">
                    <li><strong>闪电般快速：</strong>使用分块技术，30分钟文件在1分钟内处理完成</li>
                    <li><strong>高准确度：</strong>基于Whisper Large v3模型</li>
                    <li><strong>隐私优先：</strong>所有处理都在您的Mac上本地进行</li>
                    <li><strong>多种格式：</strong>支持50多种音频/视频格式</li>
                    <li><strong>灵活导出：</strong>TXT、PDF、DOCX、SRT、VTT等</li>
                </ul>
            </div>

            <div style="background: var(--secondary-color); border-radius: 12px; padding: 2rem; margin: 2rem 0;">
                <h3>最适合</h3>
                <ul style="line-height: 1.8;">
                    <li>处理机密信息的律师和法律专业人士</li>
                    <li>需要HIPAA合规性的医疗保健工作者</li>
                    <li>保护敏感来源的记者</li>
                    <li>处理专有讨论的研究人员</li>
                    <li>任何重视隐私的人</li>
                </ul>
            </div>
        </section>

        <div style="text-align: center; margin: 3rem 0;">
            <a href="{{ route('zh.reviews') }}" style="color: var(--primary-color); text-decoration: none; font-weight: 600;">← 返回所有评测</a>
        </div>
    </article>
</div>
@endsection
