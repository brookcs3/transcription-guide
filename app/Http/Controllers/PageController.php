<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'title' => 'Mac Transcription Software Reviews & Comparisons',
            'description' => 'Independent reviews of offline and cloud transcription software for Mac users. Expert analysis of privacy, accuracy, and performance.',
            'canonical' => url('/')
        ]);
    }

    public function test()
    {
        return view('pages.test', [
            'title' => 'Test Page',
            'description' => 'Test page for Laravel rendering',
            'canonical' => url('/test')
        ]);
    }

    public function reviews()
    {
        return view('pages.reviews', [
            'title' => 'Mac Transcription Software Reviews',
            'description' => 'Comprehensive reviews of Mac transcription software categorized by type. Independent testing focused on privacy, accuracy, and value.',
            'canonical' => url('/reviews')
        ]);
    }

    public function comparisons()
    {
        return view('pages.comparisons', [
            'title' => 'Mac Transcription Software Comparisons',
            'description' => 'Side-by-side comparisons of transcription software for Mac. Compare features, pricing, privacy, and performance.',
            'canonical' => url('/comparisons')
        ]);
    }

    public function guides()
    {
        return view('pages.guides', [
            'title' => 'Mac Transcription Guides',
            'description' => 'Professional guides for transcription software on Mac. Learn about privacy, compliance, and best practices.',
            'canonical' => url('/guides')
        ]);
    }

    public function about()
    {
        return view('pages.about', [
            'title' => 'About Mac Transcription Guide',
            'description' => 'Learn about our mission to provide independent, privacy-focused reviews of transcription software for Mac users.',
            'canonical' => url('/about')
        ]);
    }

    public function contact()
    {
        return view('pages.contact', [
            'title' => 'Contact Mac Transcription Guide',
            'description' => 'Get in touch with Mac Transcription Guide for questions, feedback, or collaboration opportunities.',
            'canonical' => url('/contact')
        ]);
    }

    public function privacy()
    {
        return view('pages.privacy', [
            'title' => 'Privacy Policy - Mac Transcription Guide',
            'description' => 'Our privacy policy and data handling practices for the Mac Transcription Guide website.',
            'canonical' => url('/privacy')
        ]);
    }

    public function comparison($slug)
    {
        $comparisons = [
            'scriber-pro-vs-otter' => [
                'title' => 'Scriber Pro vs Otter.ai Comparison',
                'description' => 'Compare Scriber Pro and Otter.ai transcription services for Mac users. Privacy, accuracy, and cost analysis.',
                'template' => 'comparisons.scriber-otter'
            ],
            'scriber-pro-vs-rev' => [
                'title' => 'Scriber Pro vs Rev.com Comparison',
                'description' => 'Compare Scriber Pro and Rev.com transcription services. Offline vs professional human transcription.',
                'template' => 'comparisons.scriber-rev'
            ]
        ];

        if (!isset($comparisons[$slug])) {
            abort(404);
        }

        $comparison = $comparisons[$slug];

        return view($comparison['template'], [
            'title' => $comparison['title'],
            'description' => $comparison['description'],
            'canonical' => url("/comparisons/{$slug}")
        ]);
    }

    // Chinese (zh) versions
    public function homeZh()
    {
        return view('pages.zh.home');
    }

    public function reviewsZh()
    {
        return view('pages.zh.reviews');
    }

    public function comparisonsZh()
    {
        return view('pages.zh.comparisons');
    }

    public function guidesZh()
    {
        return view('pages.zh.guides');
    }

    public function aboutZh()
    {
        return view('pages.zh.about');
    }

    public function contactZh()
    {
        return view('pages.zh.contact');
    }

    public function comparisonZh($slug)
    {
        $comparisons = [
            'scriber-pro-vs-otter' => [
                'title' => 'Scriber Pro vs Otter.ai：隐私与便利的权衡',
                'description' => '比较Scriber Pro和Otter.ai转录服务。隐私分析、准确性测试和成本对比。',
                'template' => 'zh.comparisons.scriber-otter'
            ],
            'scriber-pro-vs-rev' => [
                'title' => 'Scriber Pro vs Rev.com：即时离线与人工转录对比',
                'description' => '比较Scriber Pro的3.99美元即时离线转录与Rev.com的人工和AI服务。成本分析、准确性测试和周转时间对比。',
                'template' => 'zh.comparisons.scriber-rev'
            ]
        ];

        if (!isset($comparisons[$slug])) {
            abort(404);
        }

        $comparison = $comparisons[$slug];

        return view($comparison['template'], [
            'title' => $comparison['title'],
            'description' => $comparison['description'],
            'canonical' => url("/zh/comparisons/{$slug}")
        ]);
    }
}