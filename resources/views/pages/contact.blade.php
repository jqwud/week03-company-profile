@extends('layouts.app')

@section('content')

    <main>

        <section class="page-hero">
            <div class="page-hero-content">
                <p class="eyebrow">START A PROJECT</p>

                <h1>
                    Have an idea?
                    <span>Let's make it real.</span>
                </h1>

                <p>
                    Whether you need a website, visual content, music,
                    photography, or a complete creative direction,
                    Creative-Z can connect your project with the right
                    creative skills.
                </p>
            </div>
        </section>


        <section class="contact-section">

            <div class="contact-grid">

                <div class="contact-intro">

                    <p class="eyebrow">GET IN TOUCH</p>

                    <h2>
                        Tell us about
                        <span>your project.</span>
                    </h2>

                    <p>
                        Give us a few details about what you are working on.
                        We'll use the information to understand the project
                        and determine which creative disciplines could help.
                    </p>

                    <div class="contact-details">
                        <div>
                            <span>EMAIL</span>
                            <p>hello@creative-z.example</p>
                        </div>

                        <div>
                            <span>LOCATION</span>
                            <p>Philippines</p>
                        </div>

                        <div>
                            <span>AVAILABILITY</span>
                            <p>Open for creative collaborations</p>
                        </div>
                    </div>

                </div>


                <form class="contact-form">

                    <div class="form-group">
                        <label for="name">Your Name</label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Enter your name"
                        >
                    </div>


                    <div class="form-group">
                        <label for="email">Email Address</label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="you@example.com"
                        >
                    </div>


                    <div class="form-group">
                        <label for="service">What do you need?</label>

                        <select id="service" name="service">
                            <option value="">Select a service</option>
                            <option value="graphics">Digital Graphics</option>
                            <option value="web-design">Web Design</option>
                            <option value="music">Music & Beat Production</option>
                            <option value="photography">Photography</option>
                            <option value="video">Video & Motion</option>
                            <option value="branding">Branding & Visual Identity</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="message">Tell us about the project</label>

                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            placeholder="What are you creating?"
                        ></textarea>
                    </div>


                    <button type="submit" class="button button-primary">
                        Send Project Inquiry
                    </button>

                </form>

            </div>

        </section>


        <section class="contact-bottom">

            <p class="eyebrow">CREATIVE-Z</p>

            <h2>
                Different creatives.
                <span>One place to start.</span>
            </h2>

        </section>

    </main>

@endsection