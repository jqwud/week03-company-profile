@extends('layouts.app')

@section('content')

<main>

    {{-- Services Hero --}}
    <section class="page-hero services-hero">

        <div class="page-hero-content">

            <p class="eyebrow">WHAT WE CREATE</p>

            <h1>
                Creative skills for
                <span>ideas worth building.</span>
            </h1>

            <p>
                Creative-Z brings together different creative disciplines
                to help turn ideas into visual, digital, and audio
                experiences made for the modern world.
            </p>

        </div>

        <div class="services-hero-label" aria-hidden="true">
            <span>06</span>
            <small>CREATIVE DISCIPLINES</small>
        </div>

    </section>


    {{-- Services List --}}
    <section class="services-list-section">

        <div class="section-heading services-heading">

            <p class="eyebrow">OUR CREATIVE DISCIPLINES</p>

            <h2>
                Different skills.
                <span>Different ways to create.</span>
            </h2>

            <p>
                Every project has its own needs. Our disciplines give
                ideas different ways to take shape, from a single visual
                to a complete digital experience.
            </p>

        </div>


        <div class="services-list">

            {{-- 01 --}}
            <article class="service-detail">

                <div class="service-detail-number">
                    01
                </div>

                <div class="service-detail-content">

                    <div class="service-detail-heading">
                        <h3>Digital Graphics</h3>

                        <span class="service-tag">
                            VISUAL
                        </span>
                    </div>

                    <p>
                        Visual work designed to communicate ideas,
                        personalities, and messages across digital
                        platforms.
                    </p>

                    <ul>
                        <li>Social media graphics</li>
                        <li>Digital illustrations</li>
                        <li>Posters and promotional artwork</li>
                        <li>Content graphics</li>
                    </ul>

                </div>

            </article>


            {{-- 02 --}}
            <article class="service-detail">

                <div class="service-detail-number">
                    02
                </div>

                <div class="service-detail-content">

                    <div class="service-detail-heading">
                        <h3>Web Design</h3>

                        <span class="service-tag">
                            DIGITAL
                        </span>
                    </div>

                    <p>
                        Websites and interfaces that combine clear
                        communication, thoughtful structure, and
                        creative visual direction.
                    </p>

                    <ul>
                        <li>Website design</li>
                        <li>Landing pages</li>
                        <li>Portfolio websites</li>
                        <li>UI design</li>
                    </ul>

                </div>

            </article>


            {{-- 03 --}}
            <article class="service-detail">

                <div class="service-detail-number">
                    03
                </div>

                <div class="service-detail-content">

                    <div class="service-detail-heading">
                        <h3>Music & Beat Production</h3>

                        <span class="service-tag">
                            AUDIO
                        </span>
                    </div>

                    <p>
                        Original sound created to give artists,
                        videos, content, and digital projects their
                        own atmosphere and identity.
                    </p>

                    <ul>
                        <li>Beat production</li>
                        <li>Original compositions</li>
                        <li>Background music</li>
                        <li>Digital audio projects</li>
                    </ul>

                </div>

            </article>


            {{-- 04 --}}
            <article class="service-detail">

                <div class="service-detail-number">
                    04
                </div>

                <div class="service-detail-content">

                    <div class="service-detail-heading">
                        <h3>Photography</h3>

                        <span class="service-tag">
                            IMAGE
                        </span>
                    </div>

                    <p>
                        Photography that captures people, products,
                        places, and concepts with a clear creative
                        direction.
                    </p>

                    <ul>
                        <li>Portrait photography</li>
                        <li>Product photography</li>
                        <li>Event photography</li>
                        <li>Creative photography</li>
                    </ul>

                </div>

            </article>


            {{-- 05 --}}
            <article class="service-detail">

                <div class="service-detail-number">
                    05
                </div>

                <div class="service-detail-content">

                    <div class="service-detail-heading">
                        <h3>Video & Motion</h3>

                        <span class="service-tag">
                            MOTION
                        </span>
                    </div>

                    <p>
                        Moving visuals that give stories, campaigns,
                        and digital content a stronger sense of rhythm
                        and personality.
                    </p>

                    <ul>
                        <li>Short-form video</li>
                        <li>Motion graphics</li>
                        <li>Video editing</li>
                        <li>Digital storytelling</li>
                    </ul>

                </div>

            </article>


            {{-- 06 --}}
            <article class="service-detail">

                <div class="service-detail-number">
                    06
                </div>

                <div class="service-detail-content">

                    <div class="service-detail-heading">
                        <h3>Branding & Visual Identity</h3>

                        <span class="service-tag">
                            IDENTITY
                        </span>
                    </div>

                    <p>
                        Visual identities that give businesses,
                        projects, and creators a recognizable presence
                        across digital spaces.
                    </p>

                    <ul>
                        <li>Logo design</li>
                        <li>Brand identity</li>
                        <li>Visual guidelines</li>
                        <li>Marketing assets</li>
                    </ul>

                </div>

            </article>

        </div>

    </section>


    {{-- Services CTA --}}
    <section class="services-cta">

        <p class="eyebrow">HAVE AN IDEA?</p>

        <h2>
            Bring the idea.
            <span>We'll build the creative side.</span>
        </h2>

        <p class="services-cta-description">
            You don't need to have everything figured out before
            starting. Tell us what you're trying to create, and
            we'll find the right creative direction together.
        </p>

        <a href="{{ route('contact') }}" class="button button-primary">
            Start a Project
        </a>

    </section>

</main>

@endsection