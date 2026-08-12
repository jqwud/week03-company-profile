@extends('layouts.app')

@section('content')

<main>

    {{-- Contact Hero --}}
    <section class="page-hero contact-hero">

        <div class="page-hero-content">

            <p class="eyebrow">START A PROJECT</p>

            <h1>
                Have an idea?
                <span>Let's give it direction.</span>
            </h1>

            <p>
                Whether you are planning a website, visual project,
                music piece, photography concept, or complete creative
                direction, Creative-Z is a place to start the conversation.
            </p>

        </div>

        <div class="contact-hero-mark" aria-hidden="true">
            <span>→</span>
        </div>

    </section>


    {{-- Contact Section --}}
    <section class="contact-section">

        <div class="contact-grid">

            {{-- Contact Information --}}
            <div class="contact-intro">

                <p class="eyebrow">GET IN TOUCH</p>

                <h2>
                    Tell us about
                    <span>your project.</span>
                </h2>

                <p>
                    You do not need to have everything figured out.
                    Start with the idea, the goal, or even the problem
                    you are trying to solve. The details can come together
                    from there.
                </p>


                <div class="contact-details">

                    <div>
                        <span>EMAIL</span>
                        <p>partnerships@creative-z.com</p>
                    </div>

                    <div>
                        <span>PHONE</span>
                        <p>+63 (02) 8812 3456</p>
                    </div>

                    <div>
                        <span>LOCATION</span>
                        <p>Unit 1408, High Street Corporate Plaza, 9th Ave, BGC, Taguig City, Metro Manila, Philippines</p>
                    </div>

                    <div>
                        <span>AVAILABILITY</span>
                        <p>Open for creative collaborations</p>
                    </div>

                </div>

            </div>


            {{-- Inquiry Form --}}
            <form class="contact-form">

                <div class="form-intro">
                    <span>PROJECT INQUIRY</span>

                    <p>
                        A few details are enough to get started.
                    </p>
                </div>


                <div class="form-group">

                    <label for="name">
                        Your Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter your name"
                    >

                </div>


                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="you@example.com"
                    >

                </div>


                <div class="form-group">

                    <label for="service">
                        What do you need?
                    </label>

                    <select id="service" name="service">

                        <option value="">
                            Select a creative discipline
                        </option>

                        <option value="graphics">
                            Digital Graphics
                        </option>

                        <option value="web-design">
                            Web Design
                        </option>

                        <option value="music">
                            Music & Beat Production
                        </option>

                        <option value="photography">
                            Photography
                        </option>

                        <option value="video">
                            Video & Motion
                        </option>

                        <option value="branding">
                            Branding & Visual Identity
                        </option>

                        <option value="other">
                            Not sure yet
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label for="message">
                        Tell us about the project
                    </label>

                    <textarea
                        id="message"
                        name="message"
                        rows="6"
                        placeholder="What are you creating?"
                    ></textarea>

                </div>


                <button
                    type="submit"
                    class="button button-primary"
                >
                    Send Project Inquiry
                </button>

            </form>

        </div>

    </section>


    {{-- Closing Statement --}}
    <section class="contact-bottom">

        <p class="eyebrow">CREATIVE-Z</p>

        <h2>
            Different creatives.
            <span>One place to start.</span>
        </h2>

        <p>
            Every project begins somewhere. Sometimes it starts with
            a finished brief. Sometimes it starts with a rough idea.
            Either way, the first step is simply starting the conversation.
        </p>

    </section>

</main>

@endsection