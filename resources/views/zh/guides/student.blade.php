@extends('layouts.app')

@section('title')
将课程视频转换为AI学习指南：学生工作流程
@endsection

@section('description')
30分钟内将10+小时的课程视频转换为可搜索的文本记录和AI就绪的学习材料。使用Qooly、Scriber Pro和Claude代理的完整工作流程。
@endsection

@section('keywords')
下载课程视频, Scriber Pro学生, AI学习材料, 课程转录, Qooly扩展, 学生工作流程, Claude代理, 课程材料整理
@endsection

@section('meta')
<!-- Open Graph -->
<meta property="og:title" content="将课程视频转换为AI学习指南：学生工作流程">
<meta property="og:description" content="几分钟内将数小时的课程视频转换为可搜索的文本记录和AI就绪的学习材料">
<meta property="og:type" content="article">
<meta property="og:url" content="https://transcription.1oa.cc/zh/guides/student-lecture-download-guide.html">

<!-- Hreflang -->
<link rel="alternate" hreflang="zh-CN" href="https://transcription.1oa.cc/zh/guides/student-lecture-download-guide.html" />
<link rel="alternate" hreflang="en" href="https://transcription.1oa.cc/guides/student-lecture-download-guide.html" />
<link rel="alternate" hreflang="x-default" href="https://transcription.1oa.cc/guides/student-lecture-download-guide.html" />

<!-- Schema.org HowTo -->
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "HowTo",
    "name": "如何下载课程并使用Scriber Pro创建学习材料",
    "description": "学生下载课程视频并创建AI支持的学习材料的完整指南",
    "image": "https://transcription.1oa.cc/assets/images/student-workflow-hero.png",
    "totalTime": "PT30M",
    "datePublished": "2025-10-20",
    "dateModified": "2025-10-22",
    "inLanguage": "zh-CN",
    "author": {
        "@@type": "Organization",
        "name": "Mac Transcription Guide",
        "url": "https://transcription.1oa.cc/"
    },
    "publisher": {
        "@@type": "Organization",
        "name": "Mac Transcription Guide",
        "logo": {
            "@@type": "ImageObject",
            "url": "https://transcription.1oa.cc/assets/genimages/security-icon.png"
        }
    },
    "mainEntityOfPage": {
        "@@type": "WebPage",
        "@@id": "https://transcription.1oa.cc/zh/guides/student-lecture-download-guide.html"
    },
    "supply": [
        {
            "@@type": "HowToSupply",
            "name": "Qooly浏览器扩展"
        },
        {
            "@@type": "HowToSupply",
            "name": "Scriber Pro Mac应用"
        },
        {
            "@@type": "HowToSupply",
            "name": "Claude Code（可选，用于AI代理）"
        }
    ],
    "step": [
        {
            "@@type": "HowToStep",
            "name": "下载课程视频",
            "text": "使用Qooly浏览器扩展从Canvas、Panopto或大学学习管理系统下载流媒体课程视频为MP4文件",
            "url": "https://transcription.1oa.cc/zh/guides/student-lecture-download-guide.html#download"
        },
        {
            "@@type": "HowToStep",
            "name": "使用Scriber Pro转录",
            "text": "将视频文件导入Scriber Pro进行离线转录处理。选择TXT输出格式并批量处理多个课程过夜",
            "url": "https://transcription.1oa.cc/zh/guides/student-lecture-download-guide.html#transcribe"
        },
        {
            "@@type": "HowToStep",
            "name": "生成学习材料",
            "text": "使用AI代理和文本记录创建摘要、练习测验、学习大纲和概念图",
            "url": "https://transcription.1oa.cc/zh/guides/student-lecture-download-guide.html#study-materials"
        }
    ]
}
</script>

<!-- Schema.org Breadcrumbs -->
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@@type": "ListItem",
            "position": 1,
            "name": "首页",
            "item": "https://transcription.1oa.cc/zh/"
        },
        {
            "@@type": "ListItem",
            "position": 2,
            "name": "指南",
            "item": "https://transcription.1oa.cc/zh/"
        },
        {
            "@@type": "ListItem",
            "position": 3,
            "name": "学生课程工作流程",
            "item": "https://transcription.1oa.cc/zh/guides/student-lecture-download-guide.html"
        }
    ]
}
</script>
@endsection

@section('styles')
<style>
    .article-content {
        max-width: 900px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }

    .content h2 {
        font-size: 1.8rem;
        margin: 2.5rem 0 1rem 0;
        color: var(--primary-color);
        border-bottom: 2px solid var(--primary-color);
        padding-bottom: 0.5rem;
    }

    .content h3 {
        font-size: 1.4rem;
        margin: 2rem 0 1rem 0;
        color: var(--text-color);
    }

    .toc {
        background: var(--secondary-color);
        border-radius: 8px;
        padding: 1.5rem;
        margin: 2rem 0;
    }

    .toc h3 {
        margin-top: 0;
        color: var(--primary-color);
    }

    .toc ul {
        list-style: none;
        padding-left: 0;
    }

    .toc li {
        margin: 0.5rem 0;
    }

    .toc a {
        color: var(--text-color);
        text-decoration: none;
    }

    .toc a:hover {
        color: var(--primary-color);
        text-decoration: underline;
    }
</style>
@endsection

@section('breadcrumb-content')
    <a href="{{ route('zh.home') }}">首页</a> &gt; <a href="{{ route('zh.guides') }}">指南</a> &gt; <span>学生课程工作流程</span>
@endsection

@section('content')
<div class="article-content">
    <article>
        <header style="text-align: center; margin: 2rem 0;">
            <h1 style="font-size: 2.8rem; margin-bottom: 1rem;">将课程视频转换为AI学习指南：学生工作流程</h1>
            <p style="font-size: 1.3rem; color: var(--text-light); max-width: 800px; margin: 0 auto;">30分钟内将10+小时的流媒体课程转换为可搜索、AI就绪的文本记录</p>
            <div class="article-meta" style="margin-top: 1rem;">
                <span class="date" style="font-size: 0.95rem; color: #6b7280;">发布于2025年10月22日 • 更新于2025年10月22日</span>
            </div>
            <div style="margin-top: 1.5rem; padding: 1rem; background: #f9fafb; border-radius: 8px; display: inline-block;">
                <p style="margin: 0; font-size: 0.9rem; color: #4b5563;"><strong>作者：Mac Transcription Guide团队</strong><br>
                在多所大学的真实CS课程中测试</p>
            </div>
        </header>

        <!-- Table of Contents -->
        <div class="toc">
            <h3>目录</h3>
            <ul>
                <li><a href="#problem">问题所在</a></li>
                <li><a href="#what-you-get">这能带来什么</a></li>
                <li><a href="#workflow">五步工作流程</a></li>
                <li><a href="#implementation">从头到尾：实施</a></li>
                <li><a href="#fine-print">注意事项</a></li>
                <li><a href="#why-it-works">为什么这个方法有效</a></li>
            </ul>
        </div>

        <!-- Hook -->
        <section id="problem" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 3rem 2rem; border-radius: 16px; margin: 3rem 0;">
            <h2 style="font-size: 2rem; margin-bottom: 1rem; color: white;">问题所在</h2>
            <p style="font-size: 1.2rem; margin-bottom: 1rem;">晚上11点。明天考试。你和需要的那个解释之间隔着三个小时的课程视频。</p>
            <p style="font-size: 1.1rem; opacity: 0.95;"><strong>解决方案：</strong>将视频转换为可搜索的文本。让AI从你的实际课程内容生成学习材料。</p>
        </section>

        <!-- Quick Start Callout -->
        <section style="background: #fffbeb; border-left: 4px solid #f59e0b; padding: 1.5rem 2rem; border-radius: 8px; margin: 2rem 0;">
            <h3 style="color: #92400e; margin-top: 0; font-size: 1.3rem;">⚡ 快速开始选项</h3>
            <p style="margin-bottom: 0.5rem; color: #78350f;"><strong>只需要可搜索的文本记录？</strong>仅完成步骤1-2（15分钟设置）：</p>
            <ol style="margin: 0.5rem 0 0 1.5rem; color: #78350f;">
                <li>使用Qooly下载课程视频</li>
                <li>使用Scriber Pro转录</li>
            </ol>
            <p style="margin: 0.5rem 0 0 0; font-size: 0.9rem; color: #92400e;">步骤3-5解锁AI驱动的学习材料（可选但强大）。</p>
        </section>

        <!-- What You Get -->
        <section id="what-you-get" class="content-section">
            <h2>这能带来什么</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; margin: 2rem 0;">
                <div style="background: #f9fafb; padding: 1.5rem; border-radius: 12px; border: 1px solid #e5e7eb;">
                    <h3 style="color: #667eea; margin-top: 0;">即时搜索</h3>
                    <p>在几秒钟内找到整个学期的任何概念。</p>
                </div>
                <div style="background: #f9fafb; padding: 1.5rem; border-radius: 12px; border: 1px solid #e5e7eb;">
                    <h3 style="color: #667eea; margin-top: 0;">AI分析</h3>
                    <p>从你的课程中生成测验、大纲和概念图。</p>
                </div>
                <div style="background: #f9fafb; padding: 1.5rem; border-radius: 12px; border: 1px solid #e5e7eb;">
                    <h3 style="color: #667eea; margin-top: 0;">离线访问</h3>
                    <p>考试前不再有流媒体问题。一切都离线工作。</p>
                </div>
                <div style="background: #f9fafb; padding: 1.5rem; border-radius: 12px; border: 1px solid #e5e7eb;">
                    <h3 style="color: #667eea; margin-top: 0;">跨课程综合</h3>
                    <p>AI自动连接不同周次的概念。</p>
                </div>
            </div>
        </section>

        <!-- The 5 Steps -->
        <section id="workflow" class="content-section">
            <h2>五步工作流程</h2>

            <!-- Step 1 -->
            <h3 style="font-size: 1.8rem; margin-top: 3rem; padding-bottom: 0.5rem; border-bottom: 2px solid #e5e7eb; display: flex; align-items: center; gap: 1rem;">
                <span style="background: #667eea; color: white; width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: bold; font-size: 1.2rem;">1</span>
                下载视频
            </h3>
            <p>大学以M3U8文件形式流式传输课程——你可以观看但不能下载。<strong><a href="https://qooly.com/" target="_blank" style="color: #667eea;">Qooly</a></strong>（免费Chrome扩展）将它们捕获为标准MP4文件。</p>

            <p><strong>过程：</strong>安装扩展 → 导航到课程 → 点击播放 → Qooly下载。排队多个课程进行过夜批量下载。</p>

            <div style="background: #fef3c7; border-left: 4px solid #f59e0b; padding: 1rem; margin: 1.5rem 0;">
                <p style="margin: 0;"><strong>文件命名：</strong><code>CS372_Lecture05_Network_Metrics.mp4</code>让之后的一切都更容易。</p>
            </div>

            <!-- Step 2 -->
            <h3 style="font-size: 1.8rem; margin-top: 3rem; padding-bottom: 0.5rem; border-bottom: 2px solid #e5e7eb; display: flex; align-items: center; gap: 1rem;">
                <span style="background: #667eea; color: white; width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: bold; font-size: 1.2rem;">2</span>
                使用Scriber Pro转录
            </h3>
            <p><strong>这是关键环节。</strong>Scriber Pro在几分钟内将数小时的视频转换为AI就绪的文本。</p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin: 2rem 0;">
                <div style="background: #f9fafb; padding: 1rem; border-radius: 8px; border: 1px solid #e5e7eb;">
                    <h4 style="margin-top: 0; color: #667eea;">离线处理</h4>
                    <p style="margin: 0; font-size: 0.95rem;">一切都保存在你的Mac上。无云上传，无隐私问题。</p>
                </div>
                <div style="background: #f9fafb; padding: 1rem; border-radius: 8px; border: 1px solid #e5e7eb;">
                    <h4 style="margin-top: 0; color: #667eea;">批量操作</h4>
                    <p style="margin: 0; font-size: 0.95rem;">过夜处理30+小时。设置好就忘记它。</p>
                </div>
                <div style="background: #f9fafb; padding: 1rem; border-radius: 8px; border: 1px solid #e5e7eb;">
                    <h4 style="margin-top: 0; color: #667eea;">一次性费用</h4>
                    <p style="margin: 0; font-size: 0.95rem;">总共$3.99。不是每分钟。不是每月。永久。</p>
                </div>
            </div>

            <p><strong>过程：</strong>打开Scriber Pro → 选择课程文件 → 选择TXT输出 → 点击转录。在Apple Silicon上，90分钟的课程在6-8分钟内完成。</p>

            <p><strong>输出：</strong><code>CS372_Lecture05_Network_Metrics.txt</code>出现在MP4旁边，准备好进行AI处理。</p>

            <!-- Step 3 -->
            <h3 style="font-size: 1.8rem; margin-top: 3rem; padding-bottom: 0.5rem; border-bottom: 2px solid #e5e7eb; display: flex; align-items: center; gap: 1rem;">
                <span style="background: #667eea; color: white; width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: bold; font-size: 1.2rem;">3</span>
                系统化整理
            </h3>
            <p>文件夹结构决定了AI代理如何理解你的课程。一次做对。</p>

            <p><strong>来自CS课程的真实示例：</strong></p>
            <div style="background: #1e1e1e; color: #d4d4d4; padding: 1.5rem; border-radius: 8px; font-family: 'Courier New', monospace; overflow-x: auto; margin: 1.5rem 0;">
                <pre style="margin: 0; color: #d4d4d4;">2025年秋季/
└── 计算理论导论 (CS_321_400_F2025)/
    ├── .claude/agents/
    │   └── document-quiz-ingestor.md
    ├── 模块1 - 数学预备知识、DFA、JFLAP/
    │   ├── CS321_Lecture01_Introduction.txt
    │   ├── CS321_Lecture02_Mathematical_Preliminaries.txt
    │   └── CS321_Lecture03_DFA_Basics.txt
    ├── 模块2 - 非确定性有限自动机/
    │   ├── CS321_Lecture04_NFA_Introduction.txt
    │   └── CS321_Lecture05_NFA_to_DFA_Conversion.txt
    └── 模块3 - 正则表达式、正则文法/
        ├── CS321_Lecture06_Regular_Expressions.txt
        └── CS321_Lecture07_Regular_Grammars.txt</pre>
            </div>

            <p><strong>为什么这样有效：</strong>AI代理可以按模块、课程或整个学期处理。层次结构反映了概念如何构建。</p>

            <!-- Step 4 -->
            <h3 style="font-size: 1.8rem; margin-top: 3rem; padding-bottom: 0.5rem; border-bottom: 2px solid #e5e7eb; display: flex; align-items: center; gap: 1rem;">
                <span style="background: #667eea; color: white; width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: bold; font-size: 1.2rem;">4</span>
                配置AI代理<span style="background: #fef3c7; color: #78350f; padding: 0.25rem 0.75rem; border-radius: 6px; font-size: 0.8rem; margin-left: 0.5rem;">高级</span>
            </h3>
            <p>AI代理分析文本记录并按需生成学习材料。不再需要手动编译笔记。</p>

            <p><strong>代理的功能：</strong></p>
            <ul>
                <li>搜索所有课程以找到概念的每次提及</li>
                <li>从课程内容生成练习测验</li>
                <li>创建显示概念联系的学习大纲</li>
                <li>构建主题关系的概念图</li>
                <li>通过综合多个课程回答问题</li>
            </ul>

            <p><strong>示例代理配置</strong>（真实CS学生工作流程）：</p>
            <div style="background: #1e1e1e; color: #d4d4d4; padding: 1.5rem; border-radius: 8px; font-family: 'Courier New', monospace; overflow-x: auto; margin: 1.5rem 0;">
                <pre style="margin: 0; color: #d4d4d4;">知识结构化：
- 将信息组织成逻辑知识集群
- 创建概念关系和依赖关系的思维导图
- 识别因果关系、比较、对比

测验回忆准备：
- 回答从基本回忆到复杂分析的问题
- 提供准确、完整、详细程度适当的答案
- 在相关时引用特定课程或章节

跨文档综合：
- 追踪概念如何在多个课程中演变
- 识别不同课程何时讨论相关主题
- 从分散的信息中建立全面理解</pre>
            </div>

            <p><strong>真实用例：</strong>"解释教授讨论NP完全性的所有实例，并连接到归约技术。"代理搜索第3、7、9和14课的文本记录，然后综合出全面的答案。</p>

            <!-- Step 5 -->
            <h3 style="font-size: 1.8rem; margin-top: 3rem; padding-bottom: 0.5rem; border-bottom: 2px solid #e5e7eb; display: flex; align-items: center; gap: 1rem;">
                <span style="background: #667eea; color: white; width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: bold; font-size: 1.2rem;">5</span>
                生成学习材料<span style="background: #fef3c7; color: #78350f; padding: 0.25rem 0.75rem; border-radius: 6px; font-size: 0.8rem; margin-left: 0.5rem;">高级</span>
            </h3>
            <p>有了整理好的文本记录和配置好的代理，立即创建定制学习材料。</p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin: 2rem 0;">
                <div style="background: #f9fafb; padding: 1rem; border-radius: 8px; border: 1px solid #e5e7eb;">
                    <h4 style="margin-top: 0; color: #667eea;">练习考试</h4>
                    <p style="margin: 0; font-size: 0.9rem;">"生成10个关于TCP/IP的难度递增问题"</p>
                </div>
                <div style="background: #f9fafb; padding: 1rem; border-radius: 8px; border: 1px solid #e5e7eb;">
                    <h4 style="margin-top: 0; color: #667eea;">学习大纲</h4>
                    <p style="margin: 0; font-size: 0.9rem;">整个模块的分层摘要</p>
                </div>
                <div style="background: #f9fafb; padding: 1rem; border-radius: 8px; border: 1px solid #e5e7eb;">
                    <h4 style="margin-top: 0; color: #667eea;">概念图</h4>
                    <p style="margin: 0; font-size: 0.9rem;">主题之间的视觉关系</p>
                </div>
                <div style="background: #f9fafb; padding: 1rem; border-radius: 8px; border: 1px solid #e5e7eb;">
                    <h4 style="margin-top: 0; color: #667eea;">参考表</h4>
                    <p style="margin: 0; font-size: 0.9rem;">开卷考试的公式汇编</p>
                </div>
            </div>

            <p><strong>区别：</strong>材料来自你的实际课程。术语、示例和重点与你的教授所教的内容相匹配。</p>
        </section>


        <!-- Implementation -->
        <section id="implementation" class="content-section">
            <h2>从头到尾：实施</h2>

            <h3>你需要什么</h3>
            <ul>
                <li>Mac电脑（用于Scriber Pro）</li>
                <li>Chrome浏览器（用于Qooly）</li>
                <li>每门课程2-3 GB存储空间</li>
                <li>Claude Code（可选，用于AI功能）</li>
            </ul>

            <h3>设置顺序</h3>
            <ol style="font-size: 1.1rem; line-height: 1.8;">
                <li><strong>安装Qooly：</strong>从<a href="https://qooly.com/" target="_blank" style="color: #667eea;">qooly.com</a>获取</li>
                <li><strong>获取Scriber Pro：</strong><a href="https://apps.apple.com/us/app/scriber-pro/id6751968220?mt=12" target="_blank" style="color: #667eea;">Mac App Store</a>（$3.99一次性）</li>
                <li><strong>下载课程：</strong>使用Qooly捕获流媒体视频</li>
                <li><strong>转录：</strong>使用Scriber Pro批量处理所有视频</li>
                <li><strong>整理：</strong>创建反映课程层次结构的文件夹结构</li>
                <li><strong>配置代理：</strong>设置AI处理（可选但强大）</li>
            </ol>

            <div style="background: #f0fdf4; border-left: 4px solid #10b981; padding: 1rem; margin: 2rem 0;">
                <p style="margin: 0;"><strong>从小做起：</strong>用一门课程测试。在扩展到整个学期之前完善命名和结构。</p>
            </div>
        </section>

        <!-- Fine Print -->
        <section id="fine-print" class="content-section">
            <h2>注意事项</h2>

            <div style="background: #fef2f2; border-left: 4px solid #ef4444; padding: 1rem; margin: 2rem 0;">
                <h3 style="color: #dc2626; margin-top: 0;">学术道德</h3>
                <p style="margin-bottom: 0;"><strong>仅限个人教育使用。</strong>仅下载你有权访问的内容。不要重新分发课程或文本记录。检查你所在机构的可接受使用政策。</p>
            </div>

            <h3>技术现实</h3>
            <ul>
                <li><strong>转录准确性：</strong>质量高但不完美。对照原始视频验证关键细节（公式、重口音）</li>
                <li><strong>视觉内容：</strong>图表不能转录。保留原始视频作为参考</li>
                <li><strong>平台兼容性：</strong>适用于大多数流媒体平台，但不是所有专有系统</li>
            </ul>
        </section>

        <!-- Why This Approach Works -->
        <section id="why-it-works" class="content-section">
            <h2>为什么这个方法有效</h2>

            <h3>时间解放</h3>
            <p>典型课程：30+小时的课程视频。传统复习意味着要浏览数小时的内容才能找到特定信息。</p>
            <p><strong>使用此工作流程：</strong>文本搜索即时找到任何内容。AI综合在几分钟内生成学习材料。</p>
            <p><strong>设置投资：</strong>每学期4-6小时。每周都能获得效率回报。</p>

            <h3>Scriber Pro是关键</h3>
            <p>没有Scriber Pro，这个工作流程就会崩溃。视频保持不可搜索。AI工具无法触及它。你被困在重新观看录像中。</p>

            <p><strong>使其至关重要的原因：</strong></p>
            <ul>
                <li><strong>规模：</strong>批量处理30+小时而无需按文件付费</li>
                <li><strong>隐私：</strong>离线处理保持课程材料本地化（对学术政策至关重要）</li>
                <li><strong>成本：</strong>$3.99一次性 vs. $450+云转录（30小时学期，每分钟$0.25）</li>
                <li><strong>准确性：</strong>处理学术词汇和技术术语</li>
            </ul>

            <p>替代方法引入了令人望而却步的成本、隐私问题或时间要求，这些都会破坏工作流程的可行性。Scriber Pro同时解决了所有三个问题。</p>
        </section>

        <!-- Call to Action -->
        <section class="cta-section" style="text-align: center; padding: 3rem 0; margin: 3rem 0; background: #f9fafb; border-radius: 16px;">
            <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">开始构建你的工作流程</h2>
            <p style="font-size: 1.2rem; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">从Scriber Pro开始解锁基于文本记录的学习和AI辅助学习。</p>

            <a href="https://apps.apple.com/us/app/scriber-pro/id6751968220?mt=12" target="_blank" class="cta-button" style="display: inline-block; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 18px 36px; border-radius: 12px; text-decoration: none; font-weight: 700; font-size: 1.2rem; box-shadow: 0 4px 16px rgba(102, 126, 234, 0.4); transition: transform 0.2s ease;">
                获取Scriber Pro for Mac ($3.99)
            </a>

            <p style="margin-top: 1.5rem; color: #6b7280;">一次性购买 • 无限转录 • 完全隐私</p>
        </section>

        <!-- Quick Summary -->
        <section class="content-section">
            <h2>快速回顾</h2>

            <ol style="font-size: 1.1rem; line-height: 1.8;">
                <li><strong>下载：</strong>使用Qooly捕获流媒体课程</li>
                <li><strong>转录：</strong>使用Scriber Pro转换为可搜索文本（离线、批量）</li>
                <li><strong>整理：</strong>构建反映课程层次的文件夹</li>
                <li><strong>配置：</strong>设置AI代理来分析材料</li>
                <li><strong>生成：</strong>按需创建定制学习材料</li>
            </ol>

            <p><strong>结果：</strong>跨学期即时搜索。AI驱动的学习工具。从你的实际课程内容自动生成材料。</p>
        </section>

        <!-- Related Articles -->
        <section class="related-articles" style="margin-top: 4rem; padding-top: 2rem; border-top: 1px solid #e5e7eb;">
            <h3>相关文章</h3>
            <div class="articles-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                <article class="article-card">
                    <h4><a href="{{ route('zh.reviews.show', 'scriber-pro') }}">Scriber Pro评测 - 完整分析</a></h4>
                    <p>功能、性能和用例的深入评测</p>
                </article>
                <article class="article-card">
                    <h4><a href="{{ route('zh.guides.show', 'offline-benefits') }}">为什么选择离线转录</a></h4>
                    <p>本地处理的完整理由</p>
                </article>
                <article class="article-card">
                    <h4><a href="{{ route('zh.reviews.show', 'best-offline-2025') }}">2025年最佳离线应用</a></h4>
                    <p>所有离线转录选项的比较</p>
                </article>
            </div>
        </section>
    </article>
</div>
@endsection
