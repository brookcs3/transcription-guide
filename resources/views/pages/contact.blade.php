@extends('layouts.app')

@section('title', 'Contact Mac Transcription Guide - Get in Touch')
@section('meta_description', 'Contact Mac Transcription Guide for questions, feedback, or collaboration opportunities. We\'re here to help with your transcription software needs.')

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {
            "@@type": "Question",
            "name": "How can I contact Mac Transcription Guide?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "You can email us at transcription@1oa.cc for general inquiries, review requests, or corrections."
            }
        },
        {
            "@@type": "Question",
            "name": "How long does it take to get a response?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "General inquiries receive responses within 2-3 business days. Review requests are reviewed within 1 week. Corrections are addressed within 24-48 hours for urgent issues."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I suggest software for review?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes, we welcome software suggestions. Please email transcription@1oa.cc with details about why you think the software is worth reviewing, especially if it has unique privacy or professional features."
            }
        },
        {
            "@@type": "Question",
            "name": "Do you offer professional services?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes, we offer privacy consulting and custom software evaluation services for organizations. Contact us at transcription@1oa.cc for more information."
            }
        }
    ]
}
</script>
@endpush

@section('breadcrumbs')
<a href="{{ url('/') }}">Home</a> &gt; <span>Contact</span>
@endsection

@section('content')
<div style="max-width: 900px; margin: 0 auto; padding: 2rem 1rem;">
    <header style="text-align: center; margin-bottom: 3rem; padding: 3rem 2rem; background: linear-gradient(135deg, var(--primary-color), #1d4ed8); color: white; border-radius: 12px;">
        <h1>Contact Mac Transcription Guide</h1>
        <p>We value feedback from our readers and the tech community</p>
        <div style="font-size: 0.9rem; margin-top: 1rem; opacity: 0.9;">
            Updated: September 2025
        </div>
    </header>

    <section style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 2.5rem; margin: 3rem 0; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
        <h2>Get in Touch</h2>
        <p>Mac Transcription Guide is committed to providing accurate, helpful, and unbiased analysis of transcription software and related Mac applications. We welcome questions, suggestions, and corrections from our readers.</p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin: 2rem 0;">
            <div style="background: var(--secondary-color); padding: 1.5rem; border-radius: 8px; text-align: center; border: 1px solid var(--border-color);">
                <h3 style="color: var(--primary-color); margin-bottom: 1rem;">📧 General Inquiries</h3>
                <p><strong>Email:</strong> transcription@1oa.cc</p>
                <p>Questions about our reviews, methodology, or general feedback</p>
            </div>

            <div style="background: var(--secondary-color); padding: 1.5rem; border-radius: 8px; text-align: center; border: 1px solid var(--border-color);">
                <h3 style="color: var(--primary-color); margin-bottom: 1rem;">🔍 Review Requests</h3>
                <p><strong>Email:</strong> transcription@1oa.cc</p>
                <p>Suggest software for us to test and review</p>
            </div>

            <div style="background: var(--secondary-color); padding: 1.5rem; border-radius: 8px; text-align: center; border: 1px solid var(--border-color);">
                <h3 style="color: var(--primary-color); margin-bottom: 1rem;">⚠️ Corrections</h3>
                <p><strong>Email:</strong> transcription@1oa.cc</p>
                <p>Report factual errors or outdated information</p>
            </div>
        </div>

        <div style="background: linear-gradient(135deg, #f0f9ff, #dbeafe); border-left: 4px solid var(--primary-color); padding: 1.5rem; border-radius: 8px; margin: 2rem 0;">
            <h3>Response Times</h3>
            <ul>
                <li><strong>General inquiries:</strong> Within 2-3 business days</li>
                <li><strong>Review requests:</strong> Within 1 week (we may not review all suggested software)</li>
                <li><strong>Corrections:</strong> Within 24-48 hours for urgent issues</li>
            </ul>
        </div>
    </section>

    <section style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 2.5rem; margin: 3rem 0; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
        <h2>What We're Looking For</h2>

        <h3>Software Review Suggestions</h3>
        <p>We're always interested in testing new Mac software, particularly:</p>
        <ul>
            <li>Privacy-focused productivity tools</li>
            <li>Professional software with unique features</li>
            <li>Apps that solve specific workflow problems</li>
            <li>Software with innovative approaches to common tasks</li>
        </ul>

        <h3>Story Tips</h3>
        <p>If you're aware of important developments in the transcription or privacy software space, we'd love to hear from you:</p>
        <ul>
            <li>Privacy policy changes at major software companies</li>
            <li>Legal developments affecting data privacy</li>
            <li>New technologies that improve offline processing</li>
            <li>Industry trends affecting professional software users</li>
        </ul>

        <div style="background: #fef3c7; border-left: 4px solid var(--warning-color); padding: 1.5rem; border-radius: 8px; margin: 2rem 0;">
            <h3>Communication Guidelines</h3>
            <ul>
                <li>Please be specific in your subject line</li>
                <li>Include relevant details and context</li>
                <li>For software suggestions, tell us why you think it's worth reviewing</li>
                <li>For corrections, include specific page references and source links</li>
            </ul>
        </div>
    </section>

    <section style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 2.5rem; margin: 3rem 0; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
        <h2>Editorial Independence</h2>
        <p>Mac Transcription Guide maintains strict editorial independence. We do not accept payment for reviews, nor do we allow software vendors to influence our analysis or conclusions.</p>

        <p>All software is purchased at full retail price for testing. Our revenue comes from educational content and consulting services, not from the companies whose products we review.</p>

        <h3>Professional Services</h3>
        <p>For organizations interested in privacy consulting or custom software evaluation services, please contact us at <strong>transcription@1oa.cc</strong> with details about your requirements.</p>
    </section>

    <section style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 2.5rem; margin: 3rem 0; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
        <h2>Social Media & Updates</h2>
        <p>While we don't maintain active social media accounts, we do monitor industry discussions and developments across various platforms. Our focus remains on producing high-quality, in-depth analysis rather than frequent social media updates.</p>

        <p>For the latest reviews and analysis, bookmark our homepage or check back regularly for new content.</p>
    </section>
</div>
@endsection
