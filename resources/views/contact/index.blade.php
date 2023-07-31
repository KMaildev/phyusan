@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')

    <section class="breadcum-area breadcum-bg breadcum-bg2 section-padding"
        style="background-image:url(assets/img/bg/contactbg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcum-title">
                        <h2 class="page-title">Contact Us</h2>
                        <ul class="page-list">
                            <li>
                                <a href="{{ route('home') }}">
                                    Home
                                </a> /
                                <span>Contact</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-area pt-100">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="contact-info-box">
                        <h2>
                            Office Address
                        </h2>
                        <p>
                            No.20 Aung Zay Ya Road, 14-Quarter, Yankin Township ,Yangon, Myanmar
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="contact-info-box">
                        <h2>Phone</h2>
                        <p>
                            <a href="tel:+95 9 44643 2352">
                                +95 9 44643 2352 (日本語対応)
                            </a>
                        </p>
                        <br>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="contact-info-box">
                        <h2>Email Us</h2>
                        <a href="mailto:info@phyusan.com">
                            info@phyusan.com
                        </a>
                        <a href="mailto:phyusan133@gmail.com">
                            phyusan133@gmail.com
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mb-80">
                <div class="col-lg-7">
                    <div class="contact-form">
                        <h4>Contact Us</h4>
                        <h2>How Can We Help You!</h2>
                        <p style="text-align: justify">
                            Please enter the following items and click the "To confirmation screen" button. *This field is
                            required.
                        </p>
                        <br>
                        <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}"
                            autocomplete="off">
                            @csrf
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <input name="name" type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <input name="email" type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <input name="phone" type="text" class="form-control" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <input name="subject" type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <textarea name="message" class="form-control" rows="2" placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="button-2">
                                        <span>
                                            Submit Message
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="contact-form">
                        <h4>
                            Google Map
                        </h4>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.3959201280272!2d96.21953027418995!3d16.856298183943117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1939081b88aa7%3A0x63f2c2765e776a96!2sPhyu%20San%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1690776761185!5m2!1sen!2smm"
                            width="600" height="590" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
