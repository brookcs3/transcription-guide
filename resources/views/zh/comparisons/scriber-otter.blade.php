@extends('layouts.app')

@section('title', 'Scriber Pro vs Otter.ai：隐私与便利对比 (2025)')
@section('description', 'Scriber Pro和Otter.ai转录服务的综合比较。隐私问题、准确性测试、价格和真实用户评论分析。')
@section('keywords', 'Scriber Pro vs Otter.ai, 离线转录vs云端, 私密转录软件, Otter.ai诉讼, 转录隐私')

@section('content')
<div style="max-width: 900px; margin: 0 auto; padding: 2rem 1rem;">
    <article>
        <div style="margin: -2rem -1rem 2rem -1rem;">
            <img src="{{ asset('assets/genimages/comparison-scriber-otter.png') }}" alt="Scriber Pro vs Otter.ai 对比" style="width: 100%; max-width: 800px; height: auto; margin: 0 auto; display: block; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
        </div>

        <header style="text-align: center; background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); color: white; padding: 3rem 2rem; margin-bottom: 3rem; border-radius: 12px;">
            <h1 style="font-size: 2.5rem; margin-bottom: 1rem;">Scriber Pro vs Otter.ai：隐私与便利对比 (2025)</h1>
            <p style="font-size: 1.2rem; margin-bottom: 1rem; opacity: 0.95;">隐私优先的离线转录 vs. 基于云的便利性</p>
            <div style="font-size: 0.9rem; margin-top: 1rem; opacity: 0.9;">
                最后更新：2025年9月 • 包括2025年8月诉讼分析
            </div>
        </header>

        <!-- 快速对比表 -->
        <div style="background: white; border: 2px solid var(--border-color); border-radius: 12px; padding: 2rem; margin: 2rem 0; box-shadow: 0 4px 8px rgba(0,0,0,0.08);">
            <h2 style="margin-top: 0; text-align: center; color: var(--primary-color); margin-bottom: 1.5rem;">快速对比：Scriber Pro vs Otter.ai</h2>
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background: var(--secondary-color);">
                            <th style="padding: 1rem; text-align: left; border-bottom: 2px solid var(--border-color);">功能</th>
                            <th style="padding: 1rem; text-align: left; border-bottom: 2px solid var(--border-color);">Scriber Pro</th>
                            <th style="padding: 1rem; text-align: left; border-bottom: 2px solid var(--border-color);">Otter.ai</th>
                            <th style="padding: 1rem; text-align: center; border-bottom: 2px solid var(--border-color);">优胜者</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); font-weight: 600;">隐私</td>
                            <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">100% 离线处理<br><small style="color: var(--text-light);">零云端上传</small></td>
                            <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">基于云端<br><small style="color: var(--text-light);">所有音频上传到服务器</small></td>
                            <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); text-align: center;"><span style="background: #059669; color: white; padding: 0.25rem 0.75rem; border-radius: 6px; font-weight: 600;">Scriber Pro</span></td>
                        </tr>
                        <tr>
                            <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); font-weight: 600;">速度</td>
                            <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">10-50倍实时速度<br><small style="color: var(--text-light);">15分钟音频≈30秒</small></td>
                            <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">约1倍实时速度<br><small style="color: var(--text-light);">15分钟音频=5-6分钟</small></td>
                            <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); text-align: center;"><span style="background: #059669; color: white; padding: 0.25rem 0.75rem; border-radius: 6px; font-weight: 600;">Scriber Pro</span></td>
                        </tr>
                        <tr>
                            <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); font-weight: 600;">价格</td>
                            <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);"><strong>$3.99 一次性</strong><br><small style="color: var(--text-light);">无限转录</small></td>
                            <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);"><strong>$20/月</strong><br><small style="color: var(--text-light);">$240/年订阅</small></td>
                            <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); text-align: center;"><span style="background: #059669; color: white; padding: 0.25rem 0.75rem; border-radius: 6px; font-weight: 600;">Scriber Pro</span></td>
                        </tr>
                        <tr>
                            <td style="padding: 1rem; font-weight: 600;">协作</td>
                            <td style="padding: 1rem;">仅本地<br><small style="color: var(--text-light);">手动导出和共享文件</small></td>
                            <td style="padding: 1rem;">实时共享<br><small style="color: var(--text-light);">云协作功能</small></td>
                            <td style="padding: 1rem; text-align: center;"><span style="background: #d97706; color: white; padding: 0.25rem 0.75rem; border-radius: 6px; font-weight: 600;">Otter.ai</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="margin-top: 1.5rem; margin-bottom: 0; text-align: center; color: var(--text-light);"><strong>结论：</strong>Scriber Pro在隐私、速度、价格和准确度方面获胜。Otter.ai仅在协作功能方面领先。</p>
        </div>

        <div style="background: #fef2f2; border-left: 4px solid #dc2626; padding: 1.5rem; margin: 2rem 0; border-radius: 8px;">
            <h3 style="color: #dc2626; margin-top: 0;">⚠️ 最新消息：Otter.ai面临联邦集体诉讼</h3>
            <p><strong>2025年8月：</strong>在加州提起的联邦集体诉讼指控Otter.ai"欺骗性地、秘密地"在未经适当同意的情况下录制私人对话，并利用这些录音训练AI模型。该诉讼代表2500万用户，涵盖自2016年以来录制的超过10亿次会议。</p>
            <p style="font-size: 0.9rem; color: var(--text-light); font-style: italic; margin: 0.5rem 0 0 0;">来源：NPR，2025年8月15日</p>
        </div>

        <section>
            <h2>执行摘要：隐私与便利的权衡</h2>
            <p>在Scriber Pro和Otter.ai之间的选择，代表了在转录软件中对隐私与便利性的根本抉择。最近的法律动态加剧了人们对云转录服务的担忧，使得离线替代方案对注重隐私的专业人士越来越有吸引力。</p>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin: 2rem 0;">
                <div style="background: white; border: 2px solid var(--border-color); border-radius: 12px; padding: 2rem; position: relative;">
                    <div style="position: absolute; top: -10px; right: 20px; background: var(--success-color); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-weight: 700; font-size: 0.9rem;">隐私优胜者</div>
                    <h3>Scriber Pro</h3>
                    <p><strong>最适合：</strong> 需要快速、准确且无隐私风险的转录，处理机密信息的专业人士。</p>
                    <ul>
                        <li>100%离线处理</li>
                        <li>数据无需上传至云端</li>
                        <li>一次性购买</li>
                        <li>采用分块技术，速度飞快</li>
                    </ul>
                </div>

                <div style="background: white; border: 2px solid var(--border-color); border-radius: 12px; padding: 2rem; position: relative;">
                    <div style="position: absolute; top: -10px; right: 20px; background: var(--accent-color); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-weight: 700; font-size: 0.9rem;">法律问题</div>
                    <h3>Otter.ai</h3>
                    <p><strong>最适合：</strong> 优先考虑协作功能而非隐私，并愿意接受云风险的团队。</p>
                    <ul>
                        <li>实时协作</li>
                        <li>会议集成</li>
                        <li>AI摘要</li>
                        <li>云同步</li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            <h2>隐私分析：核心差异</h2>

            <div style="background: linear-gradient(135deg, #f8fafc, #e2e8f0); border: 1px solid var(--border-color); border-radius: 12px; padding: 2rem; margin: 3rem 0;">
                <h3>为何在2025年隐私如此重要</h3>
                <p>2025年8月针对Otter.ai的集体诉讼凸显了专业人士再也无法忽视的关键隐私问题。该诉讼指控Otter：</p>

                <ul>
                    <li>未经所有参与者明确同意录制对话</li>
                    <li>利用录音为"商业利益"训练AI模型</li>
                    <li>为"训练和产品改进"与第三方共享数据</li>
                    <li>在"去识别化"数据中未能充分保护说话者的匿名性</li>
                </ul>

                <div style="background: #f0f9ff; border-left: 4px solid var(--primary-color); padding: 1.5rem; margin: 2rem 0; border-radius: 8px; font-style: italic;">
                    "该诉讼认为，Otter的'去识别化'过程不充分，不能保证说话者的匿名性。"
                    <div style="font-size: 0.9rem; color: var(--text-light); font-style: italic; margin-top: 0.5rem;">来源：NPR集体诉讼报道，2025年8月</div>
                </div>
            </div>

            <h3>数据处理比较</h3>

            <table style="width: 100%; border-collapse: collapse; margin: 2rem 0; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <thead>
                    <tr>
                        <th style="background: var(--primary-color); color: white; padding: 1rem; text-align: left;">数据实践</th>
                        <th style="background: var(--primary-color); color: white; padding: 1rem; text-align: left;">Scriber Pro</th>
                        <th style="background: var(--primary-color); color: white; padding: 1rem; text-align: left;">Otter.ai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); font-weight: 600;">音频存储位置</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">仅在您的Mac上</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">Otter的云服务器</td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); font-weight: 600;">AI训练使用</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">从不用于训练</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">用于AI模型训练<br><em style="font-size: 0.9rem; color: var(--text-light); font-style: italic;">根据Otter.ai隐私政策，2024年9月</em></td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); font-weight: 600;">第三方访问</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">不可能 - 数据永不离开设备</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">与云提供商、分析平台共享<br><em style="font-size: 0.9rem; color: var(--text-light); font-style: italic;">Otter.ai隐私政策</em></td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); font-weight: 600;">数据保留</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">您控制 - 随时删除</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">"为实现目的所需的时间"<br><em style="font-size: 0.9rem; color: var(--text-light); font-style: italic;">Otter.ai隐私政策</em></td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; font-weight: 600;">法律合规性</td>
                        <td style="padding: 1rem;">符合HIPAA、律师-客户保密特权</td>
                        <td style="padding: 1rem;">可能违反窃听法<br><em style="font-size: 0.9rem; color: var(--text-light); font-style: italic;">加州集体诉讼，2025年</em></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h2>准确性与性能比较</h2>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin: 2rem 0;">
                <div style="background: white; border: 1px solid var(--border-color); border-radius: 8px; padding: 1.5rem; text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: var(--primary-color);">96.8%</div>
                    <p><strong>Scriber Pro</strong><br>专业播客测试准确率</p>
                    <div style="font-size: 0.85rem; color: var(--text-light); margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--border-color);">Mac转录指南测试，2025年</div>
                </div>
                <div style="background: white; border: 1px solid var(--border-color); border-radius: 8px; padding: 1.5rem; text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: var(--primary-color);">85-90%</div>
                    <p><strong>Otter.ai</strong><br>报道的准确率范围</p>
                    <div style="font-size: 0.85rem; color: var(--text-light); margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--border-color);">多个评测来源，2024-2025年</div>
                </div>
                <div style="background: white; border: 1px solid var(--border-color); border-radius: 8px; padding: 1.5rem; text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: var(--primary-color);">10-50x</div>
                    <p><strong>Scriber Pro 速度</strong><br>实时处理比率</p>
                    <div style="font-size: 0.85rem; color: var(--text-light); margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--border-color);">基于分块算法性能</div>
                </div>
                <div style="background: white; border: 1px solid var(--border-color); border-radius: 8px; padding: 1.5rem; text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: var(--primary-color);">5-6 分钟</div>
                    <p><strong>Otter.ai 速度</strong><br>处理15分钟音频文件</p>
                    <div style="font-size: 0.85rem; color: var(--text-light); margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--border-color);">用户报告和评测，2024年</div>
                </div>
                <div style="background: white; border: 1px solid var(--border-color); border-radius: 8px; padding: 1.5rem; text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: var(--primary-color);">3分58秒</div>
                    <p><strong>Scriber Pro 速度测试</strong><br>4小时25分钟4K视频</p>
                    <div style="font-size: 0.85rem; color: var(--text-light); margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--border-color);">真实世界性能测试，2025年</div>
                </div>
            </div>

            <h3>真实世界性能</h3>
            <p>独立测试揭示了显著的性能差异：</p>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin: 2rem 0;">
                <div style="background: white; border-radius: 8px; padding: 1.5rem; border: 1px solid var(--border-color);">
                    <h4 style="color: var(--success-color); margin-bottom: 1rem;">✅ Scriber Pro 性能优势</h4>
                    <ul>
                        <li><strong>速度飞快：</strong> 专有的分块算法可在1分钟内处理30分钟的文件</li>
                        <li><strong>准确性一致：</strong> 在不同音频类型中均达到96%以上的单词准确率</li>
                        <li><strong>不依赖互联网：</strong> 可在飞机上、安全场所使用</li>
                        <li><strong>资源高效：</strong> 针对Apple Silicon Mac优化</li>
                    </ul>
                </div>

                <div style="background: white; border-radius: 8px; padding: 1.5rem; border: 1px solid var(--border-color);">
                    <h4 style="color: var(--accent-color); margin-bottom: 1rem;">⚠️ Otter.ai 性能局限</h4>
                    <ul>
                        <li><strong>准确性可变：</strong> 准确率在85-90%之间，取决于音频质量</li>
                        <li><strong>说话人混淆：</strong> 经常错误识别说话人</li>
                        <li><strong>需要互联网：</strong> 无法离线工作</li>
                        <li><strong>处理延迟：</strong> 高峰时段云端排队</li>
                    </ul>
                    <div style="font-size: 0.9rem; color: var(--text-light); font-style: italic; margin-top: 1rem;">基于Trustpilot评测和用户反馈，2024-2025年</div>
                </div>
            </div>
        </section>

        <section>
            <h2>定价分析：一次性购买 vs. 订阅</h2>

            <table style="width: 100%; border-collapse: collapse; margin: 2rem 0; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <thead>
                    <tr>
                        <th style="background: var(--primary-color); color: white; padding: 1rem; text-align: left;">定价模式</th>
                        <th style="background: var(--primary-color); color: white; padding: 1rem; text-align: left;">Scriber Pro</th>
                        <th style="background: var(--primary-color); color: white; padding: 1rem; text-align: left;">Otter.ai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); font-weight: 600;">入门级</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">Mac App Store 一次性购买 $3.99</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">有限制的免费套餐</td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); font-weight: 600;">专业用途</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">同样 $3.99 一次性费用</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">$20/月 per user<br><em style="font-size: 0.9rem; color: var(--text-light); font-style: italic;">Otter.ai商业计划，2025年</em></td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); font-weight: 600;">长期成本（3年）</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">$3.99 一次性购买仅此而已</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">$720 per user ($20 × 36个月)</td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; font-weight: 600;">隐藏成本</td>
                        <td style="padding: 1rem;">无</td>
                        <td style="padding: 1rem;">网络费用，潜在的数据泄露责任</td>
                    </tr>
                </tbody>
            </table>

            <div style="background: #f0f9ff; border-left: 4px solid var(--primary-color); padding: 1.5rem; margin: 2rem 0; border-radius: 8px; font-style: italic;">
                "用户报告称，主要抱怨是价格上涨" - 多位Otter.ai客户在Trustpilot上的评论，2024年
            </div>
        </section>

        <section>
            <h2>用户体验与功能</h2>

            <h3>专业用例</h3>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin: 2rem 0;">
                <div style="background: white; border: 1px solid var(--border-color); border-radius: 8px; padding: 1.5rem;">
                    <h4>Scriber Pro：隐私关键场景</h4>
                    <ul>
                        <li><strong>法律：</strong> 律师-客户对话、取证</li>
                        <li><strong>医疗：</strong> 患者咨询（HIPAA合规）</li>
                        <li><strong>新闻：</strong> 保护消息来源、机密采访</li>
                        <li><strong>研究：</strong> 学术访谈、专有讨论</li>
                        <li><strong>高管：</strong> 董事会会议、战略规划</li>
                    </ul>
                </div>

                <div style="background: white; border: 1px solid var(--border-color); border-radius: 8px; padding: 1.5rem;">
                    <h4>Otter.ai：团队协作</h4>
                    <ul>
                        <li><strong>团队会议：</strong> 非机密的内部讨论</li>
                        <li><strong>销售电话：</strong> 客户对话（需经同意）</li>
                        <li><strong>网络研讨会：</strong> 公开或半公开的演示</li>
                        <li><strong>培训：</strong> 教育内容创作</li>
                        <li><strong>头脑风暴：</strong> 创意捕捉会议</li>
                    </ul>
                </div>
            </div>

            <h3>功能比较</h3>

            <table style="width: 100%; border-collapse: collapse; margin: 2rem 0; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <thead>
                    <tr>
                        <th style="background: var(--primary-color); color: white; padding: 1rem; text-align: left;">功能</th>
                        <th style="background: var(--primary-color); color: white; padding: 1rem; text-align: left;">Scriber Pro</th>
                        <th style="background: var(--primary-color); color: white; padding: 1rem; text-align: left;">Otter.ai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); font-weight: 600;">文件格式支持</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">50多种音频/视频格式</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">仅限常用格式</td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); font-weight: 600;">导出选项</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">9种格式（TXT, PDF, DOCX, SRT等）</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">基本的文本和PDF导出</td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); font-weight: 600;">资料库管理</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">全面的搜索、标签、分类</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">基于云的组织</td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); font-weight: 600;">多语言</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">自动检测多种语言</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">有限的语言支持</td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color); font-weight: 600;">实时转录</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">不适用（专注离线）</td>
                        <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">实时会议转录</td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; font-weight: 600;">团队协作</td>
                        <td style="padding: 1rem;">通过iCloud共享（安全）</td>
                        <td style="padding: 1rem;">内置团队功能</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h2>安全与合规考量</h2>

            <div style="background: linear-gradient(135deg, #f8fafc, #e2e8f0); border: 1px solid var(--border-color); border-radius: 12px; padding: 2rem; margin: 3rem 0;">
                <h3>职业道德与法律要求</h3>

                <p>离线与云转录的选择通常归结为职业道德义务：</p>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin: 2rem 0;">
                    <div style="background: white; border-radius: 8px; padding: 1.5rem; border: 1px solid var(--border-color);">
                        <h4 style="color: var(--success-color); margin-bottom: 1rem;">✅ Scriber Pro：合规优势</h4>
                        <ul>
                            <li><strong>律师-客户保密特权：</strong> 无因第三方披露而放弃特权的风险</li>
                            <li><strong>HIPAA合规：</strong> 患者数据永不离开受保护实体</li>
                            <li><strong>商业机密：</strong> 专有信息保持内部</li>
                            <li><strong>保护消息来源：</strong> 记者来源无法从服务器被传唤</li>
                            <li><strong>国际合规：</strong> 无跨境数据传输问题</li>
                        </ul>
                    </div>

                    <div style="background: white; border-radius: 8px; padding: 1.5rem; border: 1px solid var(--border-color);">
                        <h4 style="color: var(--accent-color); margin-bottom: 1rem;">⚠️ Otter.ai：合规风险</h4>
                        <ul>
                            <li><strong>传票风险：</strong> 云数据可被合法访问</li>
                            <li><strong>数据泄露责任：</strong> 第三方安全失误</li>
                            <li><strong>国际传输：</strong> 跨境数据流动</li>
                            <li><strong>保留政策：</strong> 数据保留时间超过必要期限</li>
                            <li><strong>同意问题：</strong> 所有参与者必须同意（诉讼指控）</li>
                        </ul>
                        <div style="font-size: 0.9rem; color: var(--text-light); font-style: italic; margin-top: 1rem;">基于法律分析和Otter.ai集体诉讼指控</div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2>最终结论：何时选择各项服务</h2>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin: 2rem 0;">
                <div style="background: white; border: 2px solid var(--border-color); border-radius: 12px; padding: 2rem; position: relative;">
                    <div style="position: absolute; top: -10px; right: 20px; background: var(--success-color); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-weight: 700; font-size: 0.9rem;">选择Scriber Pro如果您：</div>
                    <h3>选择Scriber Pro如果您：</h3>
                    <ul>
                        <li>处理机密或敏感信息</li>
                        <li>需要遵守HIPAA、法律特权或商业秘密保护</li>
                        <li>希望获得最快的转录速度</li>
                        <li>偏好一次性购买而非订阅</li>
                        <li>重视对数据的完全控制</li>
                        <li>在没有互联网的安全环境中工作</li>
                        <li>担心影响云服务的最新法律动态</li>
                    </ul>
                </div>

                <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 2rem;">
                    <h3>选择Otter.ai如果您：</h3>
                    <ul>
                        <li>需要实时协作功能</li>
                        <li>主要处理非机密内容</li>
                        <li>需要会议集成（Zoom, Teams等）</li>
                        <li>重视AI摘要和会议见解</li>
                        <li>可以为便利性接受隐私权衡</li>
                        <li>已获得所有会议参与者的适当同意</li>
                        <li>对基于云的数据存储感到舒适</li>
                    </ul>
                </div>
            </div>

            <div style="background: #f0f9ff; border-left: 4px solid var(--primary-color); padding: 1.5rem; margin: 2rem 0; border-radius: 8px; font-style: italic;">
                <strong>结论：</strong> 2025年8月针对Otter.ai的诉讼是转录服务隐私的一个分水岭。处理机密信息的专业人士应认真考虑，云转录的便利性是否值得冒法律和道德风险。
            </div>
        </section>

        <div style="font-size: 0.85rem; color: var(--text-light); margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--border-color);">
            <h3>资料来源</h3>
            <ul>
                <li>NPR. (2025年8月15日). "集体诉讼称Otter AI秘密录制私人工作对话"</li>
                <li>Otter.ai隐私政策. (2024年9月1日). 取自 otter.ai/privacy</li>
                <li>Otter.ai官方网站. (2025). 功能和定价信息</li>
                <li>Trustpilot评论. (2024-2025). 用户体验和投诉</li>
                <li>Mac转录指南的独立准确性测试. (2025)</li>
                <li>加州集体诉讼：Brewer v. Otter.ai. (2025年8月)</li>
            </ul>
        </div>
    </article>
</div>
@endsection
