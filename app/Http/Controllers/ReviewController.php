<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function show($slug)
    {
        $reviews = [
            'scriber-pro-review' => [
                'title' => 'Scriber Pro Review 2025: The Best Offline Transcription for Mac',
                'description' => 'Comprehensive review of Scriber Pro transcription software. Independent testing of privacy, accuracy, speed, and user experience.',
                'template' => 'reviews.scriber-pro',
                'keywords' => 'Scriber Pro review, offline transcription Mac, privacy focused transcription, Scriber Pro accuracy'
            ],
            'otter-ai-review' => [
                'title' => 'Otter.ai Review 2025: Privacy Concerns & Lawsuit Analysis',
                'description' => 'Critical review of Otter.ai transcription service including recent federal class-action lawsuit and privacy implications.',
                'template' => 'reviews.otter-ai',
                'keywords' => 'Otter.ai review, Otter.ai lawsuit, cloud transcription privacy, Otter.ai alternatives'
            ],
            'rev-review' => [
                'title' => 'Rev.com Review 2025: Professional Human Transcription Analysis',
                'description' => 'Comprehensive review of Rev.com human transcription service. Accuracy, cost, turnaround time, and use cases analysis.',
                'template' => 'reviews.rev',
                'keywords' => 'Rev.com review, human transcription service, professional transcription accuracy, Rev.com pricing'
            ],
            'best-offline-transcription-mac-2025' => [
                'title' => 'Best Offline Transcription Software for Mac 2025',
                'description' => 'Top offline transcription apps for Mac in 2025. Independent testing of privacy, accuracy, speed, and user experience.',
                'template' => 'reviews.best-offline-2025',
                'keywords' => 'best offline transcription Mac 2025, offline transcription software, Mac transcription apps, privacy transcription'
            ],
            'otter-ai-lawsuit' => [
                'title' => 'Otter.ai Class Action Lawsuit: What Users Need to Know',
                'description' => 'Analysis of the federal class-action lawsuit against Otter.ai. Privacy violations, user data handling, and legal implications.',
                'template' => 'reviews.otter-lawsuit',
                'keywords' => 'Otter.ai lawsuit, transcription privacy lawsuit, class action privacy, Otter.ai data breach'
            ],
            'privacy-risks-cloud-transcription' => [
                'title' => 'Privacy Risks of Cloud-Based Transcription Services',
                'description' => 'Comprehensive analysis of privacy and security risks in cloud transcription services. Data handling, legal compliance, and alternatives.',
                'template' => 'reviews.privacy-cloud-transcription',
                'keywords' => 'cloud transcription privacy risks, transcription data security, cloud service privacy, secure transcription alternatives'
            ]
        ];

        if (!isset($reviews[$slug])) {
            abort(404);
        }

        $review = $reviews[$slug];

        return view($review['template'], [
            'title' => $review['title'],
            'description' => $review['description'],
            'keywords' => $review['keywords'] ?? '',
            'canonical' => url("/reviews/{$slug}")
        ]);
    }
}