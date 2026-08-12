@extends('layouts.app')

@section('content')

<main>

    {{-- About Hero --}}
    <section class="page-hero about-hero">

        <div class="page-hero-content">

            <p class="eyebrow">ABOUT CREATIVE-Z</p>

            <h1>
                Different perspectives.
                <span>One creative direction.</span>
            </h1>

            <p>
                Creative-Z is a digital creative startup built around
                collaboration. We bring together artists, designers,
                musicians, photographers, and other digital creatives
                to turn individual skills into meaningful work.
            </p>

        </div>

        <div class="about-hero-mark" aria-hidden="true">
            <span>CZ</span>
            <small>CREATE / COLLABORATE</small>
        </div>

    </section>


    {{-- Our Story --}}
    <section class="about-story">

        <div class="about-story-number">
            01
        </div>

        <div class="about-grid">

            <div class="about-heading">

                <p class="eyebrow">OUR STORY</p>

                <h2>
                    Creativity shouldn't
                    <span>stay in one box.</span>
                </h2>

            </div>

            <div class="about-copy">

                <p class="about-lead">
                    Creative-Z started from a simple observation:
                    modern creative work rarely belongs to only one
                    discipline.
                </p>

                <p>
                    A single digital project can involve visual design,
                    photography, music, video, web development, and
                    branding. Instead of treating these skills as
                    separate worlds, Creative-Z brings them together
                    in one creative space.
                </p>

                <p>
                    The goal is not to make every creator work the same
                    way. It is to give different perspectives room to
                    meet, experiment, and contribute something unique.
                </p>

            </div>

        </div>

    </section>


    {{-- Creative Philosophy --}}
    <section class="philosophy-section">

        <div class="section-heading">

            <p class="eyebrow">HOW WE THINK</p>

            <h2>
                Different skills can create
                <span>something bigger.</span>
            </h2>

        </div>

        <div class="philosophy-layout">

            <div class="philosophy-statement">
                <span>02</span>

                <h3>
                    One idea can take
                    <span>many forms.</span>
                </h3>
            </div>

            <div class="philosophy-copy">

                <p>
                    A designer may see an idea through color and
                    composition. A photographer may see it through
                    light and perspective. A musician may translate
                    the same feeling into sound.
                </p>

                <p>
                    Creative-Z believes these perspectives do not have
                    to compete. When they work together, they can turn
                    a simple concept into a richer digital experience.
                </p>

            </div>

        </div>

    </section>


    {{-- Values --}}
    <section class="values-section">

        <div class="section-heading">

            <p class="eyebrow">WHAT WE VALUE</p>

            <h2>
                The principles behind
                <span>the collective.</span>
            </h2>

        </div>

        <div class="values-grid">

            <article class="value-card">

                <span class="service-number">01</span>

                <h3>Collaboration</h3>

                <p>
                    We believe different skills become more valuable
                    when people use them together.
                </p>

            </article>


            <article class="value-card">

                <span class="service-number">02</span>

                <h3>Originality</h3>

                <p>
                    We encourage ideas that feel personal, intentional,
                    and true to the creator behind them.
                </p>

            </article>


            <article class="value-card">

                <span class="service-number">03</span>

                <h3>Experimentation</h3>

                <p>
                    We stay curious about new tools, techniques,
                    perspectives, and ways of creating.
                </p>

            </article>


            <article class="value-card">

                <span class="service-number">04</span>

                <h3>Digital Craft</h3>

                <p>
                    We combine creative thinking with the technical
                    skills needed to bring ideas into the digital world.
                </p>

            </article>

        </div>

    </section>


    {{-- About CTA --}}
    <section class="about-cta">

        <p class="eyebrow">THE NEXT IDEA</p>

        <h2>
            Good work starts
            <span>with a good idea.</span>
        </h2>

        <p class="about-cta-description">
            Have something in mind? Explore what Creative-Z can create
            or get in touch and start turning the idea into something real.
        </p>

        <div class="about-cta-actions">

            <a href="{{ route('services') }}" class="button button-primary">
                Explore Services
            </a>

            <a href="{{ route('contact') }}" class="button button-secondary">
                Start a Conversation
            </a>

        </div>

    </section>

</main>

@endsection