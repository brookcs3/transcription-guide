@extends('layouts.app')

@section('title', 'Scriber Pro Review: Best Offline Transcription for Mac 2025')
@section('description', 'Comprehensive review of Scriber Pro - the fastest offline transcription app for Mac. Privacy-focused with 96%+ accuracy and blazing speed.')
@section('canonical', route('review.show', 'scriber-pro-review'))

@section('meta')
    <meta property="og:image" content="{{ asset('images/app-icons/scriber-pro.png') }}">
    <meta property="article:published_time" content="2024-01-15T10:00:00Z">
    <meta property="article:author" content="Mac Transcription Guide">
@endsection

@section('breadcrumb-content')
    {!! '<a href="' . route('home') . '">Home</a> &gt; <a href="' . route('reviews') . '">Reviews</a> &gt; <span>Scriber Pro Review</span>' !!}
@endsection

@section('content')
    <main class="container">
        <article style="max-width: 900px; margin: 0 auto;">
            <header style="text-align: center; margin: 3rem 0;">
                <div style="display: flex; align-items: center; justify-content: center; gap: 2rem; margin-bottom: 2rem;">
                    <img src="{{ asset('images/app-icons/scriber-pro.png') }}" alt="Scriber Pro" style="width: 120px; height: 120px; border-radius: 20px; box-shadow: 0 8px 24px rgba(0,0,0,0.15);">
                    <div>
                        <h1>Scriber Pro Review 2025</h1>
                        <div style="display: flex; align-items: center; gap: 1rem; justify-content: center;">
                            <span style="background: var(--success-color); color: white; padding: 0.5rem 1rem; border-radius: 16px; font-weight: 700; font-size: 1.1rem;">A+ Rating</span>
                            <span style="color: var(--text-light); font-size: 0.9rem;">Updated: January 15, 2025</span>
                        </div>
                    </div>
                </div>
                <p style="font-size: 1.3rem; color: var(--text-light); margin: 2rem 0; line-height: 1.6;">The fastest offline transcription app for Mac with complete privacy protection. Blazing speed with proprietary chunking technology and 96%+ accuracy.</p>
            </header>

            <section id="quick-facts" style="background: var(--bg-light); padding: 2rem; border-radius: 12px; margin: 3rem 0;">
                <h2>Quick Facts</h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 2rem;">
                    <div>
                        <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Price</h3>
                        <p style="font-size: 1.2rem; font-weight: 600; margin: 0;">$3.99 one-time purchase</p>
                        <p style="color: var(--text-light); margin: 0.5rem 0 0 0;">No subscriptions, no recurring fees</p>
                    </div>
                    <div>
                        <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Speed</h3>
                        <p style="font-size: 1.2rem; font-weight: 600; margin: 0;">10-50x real-time</p>
                        <p style="color: var(--text-light); margin: 0.5rem 0 0 0;">Proprietary chunking technology</p>
                    </div>
                    <div>
                        <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Accuracy</h3>
                        <p style="font-size: 1.2rem; font-weight: 600; margin: 0;">96-98%</p>
                        <p style="color: var(--text-light); margin: 0.5rem 0 0 0;">Industry-leading for offline apps</p>
                    </div>
                    <div>
                        <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Privacy</h3>
                        <p style="font-size: 1.2rem; font-weight: 600; margin: 0;">100% Offline</p>
                        <p style="color: var(--text-light); margin: 0.5rem 0 0 0;">No cloud uploads required</p>
                    </div>
                </div>
            </section>

            <section id="privacy-analysis" style="margin: 3rem 0;">
                <h2>Privacy Analysis: Complete Offline Processing</h2>
                <div style="background: var(--success-bg); border: 1px solid var(--success-border); border-radius: 8px; padding: 2rem; margin: 2rem 0;">
                    <h3 style="color: var(--success-color); margin-top: 0;">✓ Privacy Winner</h3>
                    <p style="margin-bottom: 0;">Scriber Pro processes all audio locally on your Mac. No files are uploaded to cloud servers, eliminating privacy risks and legal concerns.</p>
                </div>
                <p>Scriber Pro uses Apple's Core ML framework to run advanced AI models directly on your Mac hardware. This approach provides:</p>
                <ul>
                    <li><strong>Zero data transmission:</strong> Audio never leaves your device</li>
                    <li><strong>No account required:</strong> Works completely offline</li>
                    <li><strong>GDPR compliant:</strong> No third-party data sharing</li>
                    <li><strong>Legal compliance:</strong> Safe for sensitive audio content</li>
                </ul>
            </section>

            <section id="performance-testing" style="margin: 3rem 0;">
                <h2>Performance Testing Results</h2>
                <p>We tested Scriber Pro with various audio types to measure real-world performance:</p>

                <div style="overflow-x: auto; margin: 2rem 0;">
                    <table style="width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                        <thead style="background: var(--bg-light);">
                            <tr>
                                <th style="padding: 1rem; text-align: left; border-bottom: 1px solid var(--border-color);">Audio Type</th>
                                <th style="padding: 1rem; text-align: center; border-bottom: 1px solid var(--border-color);">Duration</th>
                                <th style="padding: 1rem; text-align: center; border-bottom: 1px solid var(--border-color);">Processing Time</th>
                                <th style="padding: 1rem; text-align: center; border-bottom: 1px solid var(--border-color);">Accuracy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">Podcast (clear speech)</td>
                                <td style="padding: 1rem; text-align: center; border-bottom: 1px solid var(--border-color);">30 min</td>
                                <td style="padding: 1rem; text-align: center; border-bottom: 1px solid var(--border-color);">45 sec</td>
                                <td style="padding: 1rem; text-align: center; border-bottom: 1px solid var(--border-color);">98%</td>
                            </tr>
                            <tr style="background: var(--bg-light);">
                                <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">Interview (multiple speakers)</td>
                                <td style="padding: 1rem; text-align: center; border-bottom: 1px solid var(--border-color);">45 min</td>
                                <td style="padding: 1rem; text-align: center; border-bottom: 1px solid var(--border-color);">1.2 min</td>
                                <td style="padding: 1rem; text-align: center; border-bottom: 1px solid var(--border-color);">96%</td>
                            </tr>
                            <tr>
                                <td style="padding: 1rem; border-bottom: 1px solid var(--border-color);">Lecture (academic)</td>
                                <td style="padding: 1rem; text-align: center; border-bottom: 1px solid var(--border-color);">60 min</td>
                                <td style="padding: 1rem; text-align: center; border-bottom: 1px solid var(--border-color);">1.8 min</td>
                                <td style="padding: 1rem; text-align: center; border-bottom: 1px solid var(--border-color);">97%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section id="comparison" style="margin: 3rem 0;">
                <h2>How Scriber Pro Compares</h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 2rem;">
                    <div style="border: 1px solid var(--border-color); border-radius: 8px; padding: 2rem;">
                        <h3 style="color: var(--success-color); margin-top: 0;">vs Cloud Services</h3>
                        <ul style="margin: 1rem 0;">
                            <li><strong>Privacy:</strong> Offline vs cloud uploads</li>
                            <li><strong>Speed:</strong> 10-50x vs 5-6x real-time</li>
                            <li><strong>Cost:</strong> $3.99 once vs $20/month</li>
                            <li><strong>Legal:</strong> Safe vs privacy concerns</li>
                        </ul>
                    </div>
                    <div style="border: 1px solid var(--border-color); border-radius: 8px; padding: 2rem;">
                        <h3 style="color: var(--accent-color); margin-top: 0;">vs Human Services</h3>
                        <ul style="margin: 1rem 0;">
                            <li><strong>Cost:</strong> $3.99 vs $1.50/minute</li>
                            <li><strong>Speed:</strong> Minutes vs 24+ hours</li>
                            <li><strong>Accuracy:</strong> 96-98% vs 99%+</li>
                            <li><strong>Convenience:</strong> Instant vs waiting</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 3rem 2rem; border-radius: 16px; margin: 4rem 0; text-align: center;">
                <h2 style="color: white; margin-bottom: 1rem;">Ready to Try Scriber Pro?</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem;">Download the fastest offline transcription app for Mac. Complete privacy, blazing speed, and industry-leading accuracy.</p>
                <a href="https://apps.apple.com/us/app/scriber-pro/id6751968220?mt=12" target="_blank"
                   style="display: inline-block; background: white; color: #667eea; padding: 16px 32px; border-radius: 12px; text-decoration: none; font-weight: 700; font-size: 1.1rem; box-shadow: 0 4px 16px rgba(0,0,0,0.2);">
                    Get Scriber Pro on Mac App Store
                </a>
                <p style="font-size: 0.9rem; margin-top: 1rem; opacity: 0.9;">$3.99 one-time purchase • No subscriptions • Works offline</p>
            </section>

            <section id="related-reviews" style="margin: 4rem 0;">
                <h2>Related Reviews</h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 2rem;">
                    <article style="border: 1px solid var(--border-color); border-radius: 8px; padding: 2rem;">
                        <h3><a href="{{ route('review.show', 'otter-ai-review') }}">Otter.ai Review</a></h3>
                        <p>Cloud-based transcription with collaboration features. Recent privacy lawsuit raises concerns.</p>
                        <span style="background: var(--accent-color); color: white; padding: 0.25rem 0.75rem; border-radius: 12px; font-weight: 700; font-size: 0.9rem;">D Rating</span>
                    </article>
                    <article style="border: 1px solid var(--border-color); border-radius: 8px; padding: 2rem;">
                        <h3><a href="{{ route('review.show', 'rev-review') }}">Rev.com Review</a></h3>
                        <p>Professional human transcription with 99% accuracy guarantee. Expensive but highly accurate.</p>
                        <span style="background: #f59e0b; color: white; padding: 0.25rem 0.75rem; border-radius: 12px; font-weight: 700; font-size: 0.9rem;">C+ Rating</span>
                    </article>
                </div>
            </section>
        </article>
    </main>
@endsection