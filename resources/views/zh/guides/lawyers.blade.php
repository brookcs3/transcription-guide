@extends('layouts.app')

@section('title', '律师转录指南：Mac版')
@section('description', '律师转录软件完整指南。了解律师-客户特权、HIPAA合规性以及适用于法律工作的最佳Mac转录工具。')
@section('keywords', '律师转录软件, 法律转录Mac, 律师转录工具, 律师客户特权转录, HIPAA转录Mac')

@section('content')
<div style="max-width: 800px; margin: 0 auto; padding: 2rem 1rem;">
    <article>
        <header style="text-align: center; margin-bottom: 3rem; padding: 3rem 2rem; background: linear-gradient(135deg, var(--primary-color), #1e40af); color: white; border-radius: 12px;">
            <h1 style="font-size: 2.5rem; margin-bottom: 1rem;">律师转录指南</h1>
            <p style="font-size: 1.2rem;">Mac法律专业人士必备指南</p>
            <div style="font-size: 0.9rem; margin-top: 1rem; opacity: 0.9;">
                更新时间：2025年9月 • 阅读时间12分钟
            </div>
        </header>

        <div style="background: var(--secondary-color); border-radius: 12px; padding: 1.5rem; margin: 2rem 0;">
            <h3 style="margin-top: 0; color: var(--primary-color);">目录</h3>
            <ul style="list-style: none; padding-left: 0; margin: 0;">
                <li style="margin: 0.75rem 0;"><a href="#privacy" style="color: var(--text-color); text-decoration: none;">→ 律师-客户特权与隐私</a></li>
                <li style="margin: 0.75rem 0;"><a href="#requirements" style="color: var(--text-color); text-decoration: none;">→ 法律要求</a></li>
                <li style="margin: 0.75rem 0;"><a href="#use-cases" style="color: var(--text-color); text-decoration: none;">→ 常见使用场景</a></li>
                <li style="margin: 0.75rem 0;"><a href="#software" style="color: var(--text-color); text-decoration: none;">→ 推荐软件</a></li>
                <li style="margin: 0.75rem 0;"><a href="#best-practices" style="color: var(--text-color); text-decoration: none;">→ 最佳实践</a></li>
            </ul>
        </div>

        <section id="privacy">
            <h2 style="font-size: 1.8rem; color: var(--primary-color); margin-top: 3rem;">律师-客户特权与隐私</h2>
            <p style="line-height: 1.8;">律师-客户特权是法律实践的基石。当您将客户对话上传到基于云的转录服务时，可能会无意中放弃这一特权。离线转录确保敏感通信得到保护。</p>
            
            <div style="background: #fef2f2; border-left: 4px solid #dc2626; padding: 1.5rem; margin: 2rem 0; border-radius: 8px;">
                <h4 style="color: #dc2626; margin-top: 0;">⚠️ 律师使用云转录的风险</h4>
                <ul>
                    <li>第三方访问特权通信</li>
                    <li>可能放弃律师-客户特权</li>
                    <li>数据泄露责任</li>
                    <li>云服务器传票风险</li>
                </ul>
            </div>
        </section>

        <section id="requirements">
            <h2 style="font-size: 1.8rem; color: var(--primary-color); margin-top: 3rem;">法律要求</h2>
            <p style="line-height: 1.8;">法律专业人士在处理客户数据时必须遵守各种法规：</p>
            <ul style="line-height: 1.8;">
                <li><strong>ABA示范规则：</strong>保密义务（规则1.6）</li>
                <li><strong>州律师协会要求：</strong>技术能力义务</li>
                <li><strong>数据保留：</strong>客户记录的安全存储</li>
                <li><strong>知情同意：</strong>第三方服务需获得客户批准</li>
            </ul>
        </section>

        <section id="use-cases">
            <h2 style="font-size: 1.8rem; color: var(--primary-color); margin-top: 3rem;">常见使用场景</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin: 2rem 0;">
                <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 1.5rem;">
                    <h3>⚖️ 客户会议</h3>
                    <p>录制和转录机密客户咨询，同时保持特权。</p>
                </div>
                <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 1.5rem;">
                    <h3>📝 证词记录</h3>
                    <p>为案件准备创建准确的证人证词记录。</p>
                </div>
                <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 1.5rem;">
                    <h3>🎤 法庭程序</h3>
                    <p>听证会和口头辩论的补充记录。</p>
                </div>
                <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 1.5rem;">
                    <h3>💼 内部策略</h3>
                    <p>团队讨论、案件策略会议和法律研究笔记。</p>
                </div>
            </div>
        </section>

        <section id="software">
            <h2 style="font-size: 1.8rem; color: var(--primary-color); margin-top: 3rem;">律师推荐软件</h2>
            
            <div style="background: linear-gradient(135deg, #f0fdf4, #dcfce7); border: 2px solid #059669; border-radius: 12px; padding: 2rem; margin: 2rem 0;">
                <h3 style="color: #059669; margin-top: 0;">✅ 最佳选择：Scriber Pro</h3>
                <p><strong>律师选择Scriber Pro的原因：</strong></p>
                <ul>
                    <li>100%离线处理 - 保护律师-客户特权</li>
                    <li>无云上传 - 客户数据永不离开您的Mac</li>
                    <li>一次性购买（$3.99）- 无需订阅跟踪</li>
                    <li>快速处理 - 会议后立即查看记录</li>
                </ul>
                <a href="https://apps.apple.com/us/app/scriber-pro/id6751968220?mt=12" target="_blank"
                   style="display: inline-block; background: #059669; color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: 600; margin-top: 1rem;">
                    下载Mac版Scriber Pro
                </a>
            </div>
        </section>

        <section id="best-practices">
            <h2 style="font-size: 1.8rem; color: var(--primary-color); margin-top: 3rem;">最佳实践</h2>
            <ol style="line-height: 1.8;">
                <li><strong>获得同意：</strong>录制对话时告知客户</li>
                <li><strong>安全存储：</strong>加密记录并存储在安全设备上</li>
                <li><strong>定期删除：</strong>按照保留政策删除旧记录</li>
                <li><strong>访问控制：</strong>限制谁可以查看特权记录</li>
                <li><strong>审计跟踪：</strong>记录记录的使用时间和方式</li>
            </ol>
        </section>

        <div style="text-align: center; margin: 3rem 0;">
            <a href="{{ route('zh.guides') }}" style="color: var(--primary-color); text-decoration: none; font-weight: 600;">← 返回所有指南</a>
        </div>
    </article>
</div>
@endsection
