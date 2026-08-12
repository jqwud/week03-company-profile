@extends('layouts.app')

@section('content')

    <main>

        {{-- Hero Section --}}
        <section class="hero">
            <div class="hero-content">
                <p class="eyebrow">A DIGITAL CREATIVE COLLECTIVE</p>

                <h1>
                    Made by creatives.
                    <span>Built for the digital world.</span>
                </h1>

                <p class="hero-description">
                    Creative-Z brings together artists, designers, musicians,
                    photographers, and digital creators to turn ideas into
                    meaningful digital experiences.
                </p>

                <div class="hero-actions">
                    <a href="#services" class="button button-primary">
                        Explore Services
                    </a>

                    <a href="#collective" class="button button-secondary">
                        Meet the Collective
                    </a>
                </div>
            </div>
        </section>


        {{-- Services Preview --}}
        <section id="services" class="services-section">
            <div class="section-heading">
                <p class="eyebrow">WHAT WE CREATE</p>

                <h2>
                    Different skills.
                    <span>One creative space.</span>
                </h2>

                <p>
                    Our collective brings different creative disciplines
                    together to create digital work for the modern world.
                </p>
            </div>

            <div class="services-grid">

                <article class="service-card">
                    <span class="service-number">01</span>

                    <h3>Digital Graphics</h3>

                    <p>
                        Digital artwork, social media graphics, posters,
                        and visual content designed to communicate ideas.
                    </p>
                </article>

                <article class="service-card">
                    <span class="service-number">02</span>

                    <h3>Web Design</h3>

                    <p>
                        Modern websites, landing pages, portfolios,
                        and digital interfaces built around creative ideas.
                    </p>
                </article>

                <article class="service-card">
                    <span class="service-number">03</span>

                    <h3>Music & Beats</h3>

                    <p>
                        Original beats, digital music, and audio created
                        for artists, content creators, and digital projects.
                    </p>
                </article>

                <article class="service-card">
                    <span class="service-number">04</span>

                    <h3>Photography</h3>

                    <p>
                        Portraits, products, events, and creative photography
                        for personal and professional projects.
                    </p>
                </article>

                <article class="service-card">
                    <span class="service-number">05</span>

                    <h3>Video & Motion</h3>

                    <p>
                        Short-form content, motion graphics, and visual
                        storytelling designed for digital platforms.
                    </p>
                </article>

                <article class="service-card">
                    <span class="service-number">06</span>

                    <h3>Branding</h3>

                    <p>
                        Logos, visual identities, and creative brand assets
                        that help ideas establish a recognizable presence.
                    </p>
                </article>

            </div>
        </section>


        {{-- Collective Section --}}
        <section id="collective" class="collective-section">
            <div class="collective-content">

                <div>
                    <p class="eyebrow">THE COLLECTIVE</p>

                    <h2>
                        Creativity works
                        <span>better together.</span>
                    </h2>
                </div>

                <div>
                    <p>
                        Creative-Z was imagined as a space where different
                        creative disciplines can meet, collaborate, and
                        produce work together.
                    </p>

                    <p>
                        Instead of limiting creativity to one field, we
                        connect different skills to create digital experiences
                        that reflect the way people create today.
                    </p>
                </div>

            </div>
        </section>


        {{-- Call to Action --}}
        <section class="cta-section">
            <div>
                <p class="eyebrow">HAVE AN IDEA?</p>

                <h2>
                    Let's create
                    <span>something meaningful.</span>
                </h2>

                <a href="#" class="button button-primary">
                    Start a Project
                </a>
            </div>
        </section>

    </main>

@endsection