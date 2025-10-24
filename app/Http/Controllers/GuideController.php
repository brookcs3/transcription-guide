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
}