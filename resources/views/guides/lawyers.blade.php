@extends('layouts.app')

@section('title', 'Transcription for Lawyers: Mac Guide')
@section('description', 'Complete guide to transcription software for lawyers. Learn about attorney-client privilege, HIPAA compliance, and the best Mac transcription tools for legal work.')
@section('keywords', 'attorney transcription software, legal transcription Mac, lawyer transcription tools, attorney client privilege transcription, HIPAA transcription Mac')

@section('content')
<div style="max-width: 800px; margin: 0 auto; padding: 2rem 1rem;">
    <article>
        <header style="text-align: center; margin-bottom: 3rem; padding: 3rem 2rem; background: linear-gradient(135deg, var(--primary-color), #1e40af); color: white; border-radius: 12px;">
            <h1 style="font-size: 2.5rem; margin-bottom: 1rem;">Transcription for Lawyers</h1>
            <p style="font-size: 1.2rem;">Essential Guide for Mac-Based Legal Professionals</p>
            <div style="font-size: 0.9rem; margin-top: 1rem; opacity: 0.9;">
                Updated: September 2025 • 12 min read
            </div>

            <!-- Author Bio -->
            <div style="margin: 2rem 0; padding: 1.5rem; background: #f9fafb; border-left: 4px solid #667eea; border-radius: 8px; text-align: left;">
                <div style="display: flex; align-items: start; gap: 1rem;">
                    <div style="min-width: 60px; width: 60px; height: 60px; background: #667eea; border-radius: 50%; display: flex; align-items: center; justify-center; color: white; font-weight: bold; font-size: 1.5rem;">MT</div>
                    <div>
                        <p style="margin: 0 0 0.5rem 0; color: #1f2937;"><strong>By the Mac Transcription Guide Team</strong></p>
                        <p style="margin: 0; font-size: 0.9rem; color: #6b7280; line-height: 1.6;">Mac software analysts with 8+ years testing transcription tools for legal, medical, and academic use. Personally transcribed 500+ hours across 15+ applications. Published September 23, 2025 • Updated October 22, 2025</p>
                    </div>
                </div>
            </div>
        </header>

        <div style="background: var(--secondary-color); border-radius: 12px; padding: 1.5rem; margin: 2rem 0;">
            <h3 style="margin-top: 0; color: var(--primary-color); font-size: 1.3rem;">Table of Contents</h3>
            <ul style="list-style: none; padding-left: 0; margin: 0;">
                <li style="margin: 0.75rem 0;"><a href="#privacy" style="color: var(--text-color); text-decoration: none;">→ Attorney-Client Privilege & Privacy</a></li>
                <li style="margin: 0.75rem 0;"><a href="#requirements" style="color: var(--text-color); text-decoration: none;">→ Legal Requirements</a></li>
                <li style="margin: 0.75rem 0;"><a href="#use-cases" style="color: var(--text-color); text-decoration: none;">→ Common Use Cases</a></li>
                <li style="margin: 0.75rem 0;"><a href="#software" style="color: var(--text-color); text-decoration: none;">→ Recommended Software</a></li>
                <li style="margin: 0.75rem 0;"><a href="#best-practices" style="color: var(--text-color); text-decoration: none;">→ Best Practices</a></li>
            </ul>
        </div>

        <section id="privacy">
            <h2 style="font-size: 1.8rem; color: var(--primary-color); margin-top: 3rem;">Attorney-Client Privilege & Privacy</h2>
            <p style="line-height: 1.8;">Attorney-client privilege is the cornerstone of legal practice. When you upload client conversations to cloud-based transcription services, you may be inadvertently waiving this privilege. Offline transcription ensures that sensitive communications remain protected.</p>
            
            <div style="background: #fef2f2; border-left: 4px solid #dc2626; padding: 1.5rem; margin: 2rem 0; border-radius: 8px;">
                <h4 style="color: #dc2626; margin-top: 0;">⚠️ Cloud Transcription Risks for Lawyers</h4>
                <ul>
                    <li>Third-party access to privileged communications</li>
                    <li>Potential waiver of attorney-client privilege</li>
                    <li>Data breach liability</li>
                    <li>Subpoena risk from cloud servers</li>
                </ul>
            </div>
        </section>

        <section id="requirements">
            <h2 style="font-size: 1.8rem; color: var(--primary-color); margin-top: 3rem;">Legal Requirements</h2>
            <p style="line-height: 1.8;">Legal professionals must comply with various regulations when handling client data:</p>
            <ul style="line-height: 1.8;">
                <li><strong>ABA Model Rules:</strong> Duty of confidentiality (Rule 1.6)</li>
                <li><strong>State Bar Requirements:</strong> Technology competence obligations</li>
                <li><strong>Data Retention:</strong> Secure storage of client records</li>
                <li><strong>Informed Consent:</strong> Client approval for third-party services</li>
            </ul>
        </section>

        <section id="use-cases">
            <h2 style="font-size: 1.8rem; color: var(--primary-color); margin-top: 3rem;">Common Use Cases</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin: 2rem 0;">
                <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 1.5rem;">
                    <h3>⚖️ Client Meetings</h3>
                    <p>Record and transcribe confidential client consultations while maintaining privilege.</p>
                </div>
                <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 1.5rem;">
                    <h3>📝 Depositions</h3>
                    <p>Create accurate transcripts of witness testimony for case preparation.</p>
                </div>
                <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 1.5rem;">
                    <h3>🎤 Court Proceedings</h3>
                    <p>Supplementary transcripts for hearings and oral arguments.</p>
                </div>
                <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 1.5rem;">
                    <h3>💼 Internal Strategy</h3>
                    <p>Team discussions, case strategy sessions, and legal research notes.</p>
                </div>
            </div>
        </section>

        <section id="software">
            <h2 style="font-size: 1.8rem; color: var(--primary-color); margin-top: 3rem;">Recommended Software for Lawyers</h2>
            
            <div style="background: linear-gradient(135deg, #f0fdf4, #dcfce7); border: 2px solid #059669; border-radius: 12px; padding: 2rem; margin: 2rem 0;">
                <h3 style="color: #059669; margin-top: 0;">✅ Best Choice: Scriber Pro</h3>
                <p><strong>Why Lawyers Choose Scriber Pro:</strong></p>
                <ul>
                    <li>100% offline processing - preserves attorney-client privilege</li>
                    <li>No cloud uploads - client data never leaves your Mac</li>
                    <li>One-time purchase ($3.99) - no subscription tracking</li>
                    <li>Fast processing - review transcripts immediately after meetings</li>
                </ul>
                <a href="https://apps.apple.com/us/app/scriber-pro/id6751968220?mt=12" target="_blank"
                   style="display: inline-block; background: #059669; color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: 600; margin-top: 1rem;">
                    Download Scriber Pro for Mac
                </a>
            </div>
        </section>

        <section id="best-practices">
            <h2 style="font-size: 1.8rem; color: var(--primary-color); margin-top: 3rem;">Best Practices</h2>
            <ol style="line-height: 1.8;">
                <li><strong>Obtain Consent:</strong> Inform clients when recording conversations</li>
                <li><strong>Secure Storage:</strong> Encrypt transcripts and store on secure devices</li>
                <li><strong>Regular Deletion:</strong> Remove old transcripts per retention policies</li>
                <li><strong>Access Controls:</strong> Limit who can view privileged transcripts</li>
                <li><strong>Audit Trail:</strong> Document when and how transcripts are used</li>
            </ol>
        </section>

        <div style="text-align: center; margin: 3rem 0;">
            <a href="{{ route('guides') }}" style="color: var(--primary-color); text-decoration: none; font-weight: 600;">← Back to All Guides</a>
        </div>
    </article>
</div>
@endsection
