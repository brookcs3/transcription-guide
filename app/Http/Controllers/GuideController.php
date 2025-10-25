<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function show($slug)
    {
        $guides = [
            'transcription-lawyers-mac' => [
                'title' => 'Transcription for Lawyers: Mac Guide',
                'description' => 'Complete guide to transcription software for lawyers. Learn about attorney-client privilege, HIPAA compliance, and the best Mac transcription tools for legal work.',
                'template' => 'guides.lawyers',
                'keywords' => 'attorney transcription software, legal transcription Mac, lawyer transcription tools, attorney client privilege transcription, HIPAA transcription Mac'
            ],
            'journalist-transcription-mac' => [
                'title' => 'Transcription for Journalists: Mac Guide',
                'description' => 'Professional guide to transcription software for journalists. Source protection, privacy, and secure recording tools for media work.',
                'template' => 'guides.journalist',
                'keywords' => 'journalist transcription software, media transcription Mac, secure recording tools, source protection transcription'
            ],
            'medical-transcription-mac' => [
                'title' => 'Medical Transcription: Mac Guide',
                'description' => 'HIPAA-compliant transcription software for healthcare professionals. Secure patient data handling and medical documentation tools.',
                'template' => 'guides.medical',
                'keywords' => 'medical transcription software, HIPAA compliant transcription, healthcare transcription Mac, patient privacy transcription'
            ],
            'student-lecture-download-guide' => [
                'title' => 'Student Lecture Recording & Transcription Guide',
                'description' => 'Complete guide for students on recording and transcribing lectures. Best practices for academic success and note-taking.',
                'template' => 'guides.student',
                'keywords' => 'student lecture recording, academic transcription, lecture notes software, student transcription tools'
            ],
            'why-offline-transcription' => [
                'title' => 'Why Choose Offline Transcription Software',
                'description' => 'Comprehensive analysis of offline vs cloud transcription. Privacy, security, performance, and cost benefits of local processing.',
                'template' => 'guides.offline-benefits',
                'keywords' => 'offline transcription benefits, local transcription software, privacy focused transcription, secure transcription'
            ]
        ];

        if (!isset($guides[$slug])) {
            abort(404);
        }

        $guide = $guides[$slug];

        return view($guide['template'], [
            'title' => $guide['title'],
            'description' => $guide['description'],
            'keywords' => $guide['keywords'] ?? '',
            'canonical' => url("/guides/{$slug}")
        ]);
    }

    public function showZh($slug)
    {
        $guides = [
            'transcription-lawyers-mac' => [
                'title' => '律师转录指南：Mac版',
                'description' => '律师转录软件完整指南。了解律师-客户特权、HIPAA合规性和最佳Mac法律工作转录工具。',
                'template' => 'zh.guides.lawyers',
                'keywords' => '律师转录软件, 法律转录Mac, 律师转录工具, 律师客户特权转录, HIPAA转录Mac'
            ],
            'journalist-transcription-mac' => [
                'title' => '记者转录指南：Mac版',
                'description' => '记者转录软件专业指南。消息来源保护、隐私和媒体工作的安全录音工具。',
                'template' => 'zh.guides.journalist',
                'keywords' => '记者转录软件, 媒体转录Mac, 安全录音工具, 消息来源保护转录'
            ],
            'medical-transcription-mac' => [
                'title' => '医疗转录指南：Mac版',
                'description' => '符合HIPAA的医疗专业人员转录软件。安全的患者数据处理和医疗文档工具。',
                'template' => 'zh.guides.medical',
                'keywords' => '医疗转录软件, HIPAA合规转录, 医疗保健转录Mac, 患者隐私转录'
            ],
            'student-lecture-download-guide' => [
                'title' => '学生课程录制和转录指南',
                'description' => '学生录制和转录课程的完整指南。学业成功和笔记记录的最佳实践。',
                'template' => 'zh.guides.student',
                'keywords' => '学生课程录制, 学术转录, 课程笔记软件, 学生转录工具'
            ],
            'why-offline-transcription' => [
                'title' => '为什么选择离线转录软件',
                'description' => '离线与云转录的全面分析。本地处理的隐私、安全、性能和成本优势。',
                'template' => 'zh.guides.offline-benefits',
                'keywords' => '离线转录优势, 本地转录软件, 注重隐私的转录, 安全转录'
            ]
        ];

        if (!isset($guides[$slug])) {
            abort(404);
        }

        $guide = $guides[$slug];

        return view($guide['template'], [
            'title' => $guide['title'],
            'description' => $guide['description'],
            'keywords' => $guide['keywords'] ?? '',
            'canonical' => url("/zh/guides/{$slug}")
        ]);
    }
}