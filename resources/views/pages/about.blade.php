@extends('layouts.app')

@section('content')

    <main>

        <section class="page-hero">
            <div class="page-hero-content">
                <p class="eyebrow">ABOUT CREATIVE-Z</p>

                <h1>
                    Different perspectives.
                    <span>One collective.</span>
                </h1>

                <p>
                    Creative-Z is a digital creative collective built around
                    the idea that creative work becomes stronger when different
                    disciplines and perspectives come together.
                </p>
            </div>
        </section>


        <section class="about-story">
            <div class="about-grid">

                <div>
                    <p class="eyebrow">OUR IDEA</p>

                    <h2>
                        Creativity shouldn't
                        <span>stay in one box.</span>
                    </h2>
                </div>

                <div class="about-copy">
                    <p>
                        Modern creative work rarely belongs to a single
                        discipline. A digital project can require design,
                        photography, music, web development, video, and
                        branding at the same time.
                    </p>

                    <p>
                        Creative-Z brings those different skills together
                        in one collective, allowing creatives to collaborate
                        and turn individual ideas into complete digital
                        experiences.
                    </p>

                    <p>
                        The collective is designed around collaboration,
                        experimentation, and the belief that every creator
                        brings a different perspective to the work.
                    </p>
                </div>

            </div>
        </section>


        <section class="values-section">

            <div class="section-heading">
                <p class="eyebrow">WHAT WE VALUE</p>

                <h2>
                    The ideas behind
                    <span>the collective.</span>
                </h2>
            </div>

            <div class="values-grid">

                <article class="value-card">
                    <span class="service-number">01</span>

                    <h3>Collaboration</h3>

                    <p>
                        Different creative skills can complement each other
                        and produce stronger results when they work together.
                    </p>
                </article>

                <article class="value-card">
                    <span class="service-number">02</span>

                    <h3>Originality</h3>

                    <p>
                        We value ideas that feel personal, intentional,
                        and different from the ordinary.
                    </p>
                </article>

                <article class="value-card">
                    <span class="service-number">03</span>

                    <h3>Experimentation</h3>

                    <p>
                        New tools and new perspectives give creatives more
                        ways to explore and communicate their ideas.
                    </p>
                </article>

                <article class="value-card">
                    <span class="service-number">04</span>

                    <h3>Digital Craft</h3>

                    <p>
                        We treat digital work as a craft, combining creativity
                        with the technical skills needed to bring ideas to life.
                    </p>
                </article>

            </div>

        </section>


        <section class="about-cta">

            <p class="eyebrow">THE NEXT IDEA</p>

            <h2>
                Good work starts
                <span>with a good idea.</span>
            </h2>

            <a href="{{ route('home') }}#services" class="button button-primary">
                Explore What We Create
            </a>

        </section>

    </main>

@endsection