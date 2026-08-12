@extends('layouts.app')

@section('content')

    <main>

        {{-- Hero Section --}}
            <section class="hero">
                <div class="hero-content">

                    <div class="hero-copy">

                        <p class="eyebrow">
                            CREATIVE-Z / DIGITAL CREATIVE COLLECTIVE
                        </p>

                        <h1>
                            Different toolkits.
                            <span>Same obsession.</span>
                        </h1>

                        <p class="hero-description">
                            A creative collective bringing together graphics,
                            web, music, photography, motion, and visual identity
                            to turn ideas into digital work.
                        </p>

                        <div class="hero-actions">
                            <a href="#services" class="button button-primary">
                                Explore Services
                            </a>

                            <a href="{{ route('contact') }}" class="button button-secondary">
                                Start a Project
                            </a>
                        </div>

                    </div>


                    <div class="hero-visual">

                        <div class="hero-orbit orbit-one"></div>
                        <div class="hero-orbit orbit-two"></div>

                        <div class="hero-core">
                            <span class="hero-core-mark">CZ</span>
                            <span class="hero-core-label">CREATIVE-Z</span>
                            <span class="hero-core-subtitle">MAKE / TOGETHER</span>
                        </div>


                        <div class="creative-tool tool-graphics">
                            <span class="tool-index">01</span>
                            <strong>GRAPHICS</strong>
                            <div class="tool-graphic graphic-shapes">
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                        </div>


                        <div class="creative-tool tool-web">
                            <span class="tool-index">02</span>
                            <strong>WEB DESIGN</strong>

                            <div class="browser-window">
                                <div class="browser-bar">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>

                                <div class="browser-content">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>


                        <div class="creative-tool tool-music">
                            <span class="tool-index">03</span>
                            <strong>MUSIC</strong>

                            <div class="sound-wave">
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                        </div>


                        <div class="creative-tool tool-photo">
                            <span class="tool-index">04</span>
                            <strong>PHOTO</strong>

                            <div class="camera-shape">
                                <div class="camera-lens"></div>
                            </div>
                        </div>


                        <div class="creative-tool tool-motion">
                            <span class="tool-index">05</span>
                            <strong>MOTION</strong>

                            <div class="motion-bars">
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                        </div>


                        <div class="creative-tool tool-brand">
                            <span class="tool-index">06</span>
                            <strong>IDENTITY</strong>

                            <div class="brand-symbol">
                                A
                            </div>
                        </div>

                    </div>

                </div>
            </section>


        {{-- Collective Section --}}
        <section id="collective" class="collective-section">

            <div class="collective-number">
                01
            </div>

            <div class="collective-content">

                <div class="collective-heading">
                    <p class="eyebrow">THE IDEA BEHIND CREATIVE-Z</p>

                    <h2>
                        Different crafts.
                        <span>One creative direction.</span>
                    </h2>
                </div>

                <div class="collective-story">

                    <p class="collective-lead">
                        Creative-Z started with a simple idea:
                        <strong>creative work becomes stronger when different
                        people bring their own craft to the table.</strong>
                    </p>

                    <p>
                        We bring together artists, designers, musicians,
                        photographers, and digital creators to work across
                        disciplines and turn ideas into something tangible.
                    </p>

                    <p>
                        There is no single way to create here. A visual can
                        inspire a sound. A photograph can shape a brand.
                        A website can become the place where everything comes
                        together.
                    </p>

                </div>

            </div>

            <div class="collective-mark">
                <span>CZ</span>
                <small>CREATE / COLLABORATE</small>
            </div>

        </section>


        {{-- Call to Action --}}
        <section class="cta-section">

            <div class="cta-inner">

                <div class="cta-number">
                    02
                </div>

                <div class="cta-content">

                    <p class="eyebrow">HAVE AN IDEA?</p>

                    <h2>
                        Let's make
                        <span>something worth seeing.</span>
                    </h2>

                    <p class="cta-description">
                        Whether you have a visual concept, a digital project,
                        a sound in mind, or simply an idea that needs direction,
                        Creative-Z is ready to build with you.
                    </p>

                    <a href="{{ route('contact') }}" class="button button-primary">
                        Start a Project
                    </a>

                </div>

                <div class="cta-mark" aria-hidden="true">
                    <span>✦</span>
                </div>

            </div>

        </section>

    </main>

@endsection