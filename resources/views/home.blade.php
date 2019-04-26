@extends('layout.master')

@section('hero')
    <section class="hero home__hero">
        <div class="hero-body home__hero-body has-text-centered">
        <div class="home__hero-overlay"></div>
            <div class="container">
                <img class="home__logo" src="{{ asset('img/logo/logo[600].png') }}" alt="Family Wellness Solutions logo." />
                <h1 class="home__hero-subtitle">Foster Care &amp;<br>Behavioral Health Services</h1>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="home__section section" id="services-link">
        <div class="container">
            <h2 class="home__heading title is-2">Services</h2>
            <div class="micro-hr"></div>
            <div class="home__icons columns">
                <div class="column">
                    <figure class="home__icon-wrapper">
                        <img class="home__icon" src="{{ asset('img/icons/hands-icon.svg') }}" />
                        <figcaption class="home__icon-heading">Foster Placement</figcaption>
                        <figcaption class="home__icon-subheading">
                            We provide Family and Treatment foster homes to males and females between the ages of birth to 21.
                        </figcaption>
                    </figure>
                </div>

                <div class="column">
                    <figure class="home__icon-wrapper">
                        <img class="home__icon" src="{{ asset('img/icons/hands-heart.svg') }}" />
                        <figcaption class="home__icon-heading">Family &amp; Individual Therapy</figcaption>
                        <figcaption class="home__icon-subheading">
                            Our licensed clinicians provide cognitive behavioral and trauma informed care with evidence based practices.
                        </figcaption>
                    </figure>
                </div>
                <div class="column">
                    <figure class="home__icon-wrapper">
                        <img class="home__icon" src="{{ asset('img/icons/house-love.svg') }}" />
                        <figcaption class="home__icon-heading">Respite Care</figcaption>
                        <figcaption class="home__icon-subheading">
                            Planned &amp; emergency temporary care in one of our licensed homes for children ages birth-21.
                        </figcaption>
                    </figure>
                </div>
                <div class="column">
                    <figure class="home__icon-wrapper">
                        <img class="home__icon" src="{{ asset('img/icons/chat-heart[filled].svg') }}" />
                        <figcaption class="home__icon-heading">Psychiatric Services</figcaption>
                        <figcaption class="home__icon-subheading">
                            Psychiatric evaluations, diagnosis, and treatment with 24/7 access to a licensed clinician.
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="home__section--gray">
        <div class="container">
            <h2 class="home__heading title is-2">Become a Foster Parent</h2>
            <div class="micro-hr"></div>

            <div class="home__become columns is-vcentered">
                <div class="column is-half">
                    <h5 class="title is-5">Pre-Service Training</h5>
                    <p class="pull-up10">
                        A required 36 hours of training is needed to obtain a 2 year-certification. We also require first aid,
                        CPR, and Crisis Prevention and Intervention training. Pre-Service training is designed to ensure
                        foster parents are equipped to meet the needs of the youth placed in their home.
                    </p>
                    <br>
                    <h5 class="title is-5">Home Study</h5>
                    <p class="pull-up10">
                        A home study will be completed by one of our licensed assessors to establish each family's ability to care
                        for foster children. This study examines a family's financial stability, health, home safety, criminal
                        history and previous experience working with children. Additional, our assessors will conduct an
                        interview with each family member of the household.
                    </p>
                    <a class="is-link mt-10">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        Download a full copy of our foster parent resource guide
                    </a>
                </div>
                <div class="column is-half">
                    <div class="home__img-wrapper">
                        <img src="{{ asset('img/holding-hands.jpg') }}" />
                        <div class="home__img-overlay">
                            <blockquote class="b-quote">
                                <span class="b-quote__icon">{!! file_get_contents(base_path('public/img/icons/quotes.svg')) !!}</span>
                                The simple act of caring is heroic<br>
                                <cite>- Edward Albert</cite>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="home__parallax">--}}
        {{--<div class="home__parallax-overlay"></div>--}}
    {{--</section>--}}

    <section class="home__section" id="mission-link">
        <div class="container">
            <h2 class="home__heading title is-2">Our Mission</h2>
            <div class="micro-hr"></div>
            <div class="home__mission">
                <p>
                    It is our mission to maximize the potential of children and families by providing foster care services in
                    a compassionate environment as well as individualized therapeutic services to address each child and family’s
                    individual treatment needs.
                </p>
                <div class="mt-10">
                    <strong>Our Goals</strong>
                    <ul>
                        <li class="mt-5">
                            <span class="icon has-text-success"><i class="fa fa-check"></i></span>
                            Replace the dysfunctional cycle experienced by our children with a stable, nurturing, treatment-focused environment
                        </li>
                        <li class="mt-5">
                            <span class="icon has-text-success"><i class="fa fa-check"></i></span>
                            Enhance our children's self-esteem and decision-making skills with positive personal relationships
                        </li>
                        <li class="mt-5">
                            <span class="icon has-text-success"><i class="fa fa-check"></i></span>
                            Assist the custodial agency in its permanency goal by providing family-based treatment and
                            support for the child and his/her biological family
                        </li>
                        <li class="mt-5">
                            <span class="icon has-text-success"><i class="fa fa-check"></i></span>
                            Provide treatment for our children with a transition into their own homes, kinship homes,
                            adoptive homes, or independent living arrangements
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="home__section--gray">
        <div class="container" id="contact-link">
            <h2 class="home__heading title is-2">Contact Us</h2>
            <div class="micro-hr"></div>

            <div class="mt-30">
                <form class="home__contact" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="columns">
                        <div class="column is-half">
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input name="name" class="input" type="text" placeholder="Your Name" value="{{ old('name') }}" required />
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </p>
                                <p class="has-text-danger">{{ $errors->first('name') }}</p>
                            </div>
                            <div class="field mt-25">
                                <p class="control has-icons-left has-icons-right">
                                    <input name="email" class="input" type="email" placeholder="Your Email" value="{{ old('email') }}" required />
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </p>
                                <p class="has-text-danger">{{ $errors->first('email') }}</p>
                            </div>
                            <div class="field mt-25">
                                <p class="control has-icons-left has-icons-right">
                                    <input name="phone" class="input" type="text" placeholder="Your Phone" value="{{ old('phone') }}" required />
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                </p>
                                <p class="has-text-danger">{{ $errors->first('phone') }}</p>
                            </div>
                        </div>

                        <div class="column is-half">
                            <textarea name="message" class="textarea" placeholder="Your message" rows="6" required>{{ old('message') }}</textarea>
                            <p class="has-text-danger">{{ $errors->first('message') }}</p>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="column is-one-third is-offset-one-third">
                            @if (Session::has('message_sent'))
                                <button class="button is-success is-fullwidth" type="button" disabled>
                                    {{ Session::get('message_sent') }}
                                </button>
                            @else
                                <input class="button is-primary is-fullwidth" type="submit" value="Send Message" />
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection