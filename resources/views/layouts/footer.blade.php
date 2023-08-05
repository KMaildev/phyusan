<section class="call-to-action-area s-padding">
    <div class="container">
        <div class="row pos-relative">
            <div class="callbg1">
                <img src="{{ asset('assets/img/bg/callbg1.png') }}" alt="">
            </div>
            <div class="callbg2">
                <img src="{{ asset('assets/img/bg/callbg2.png') }}" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 offset-lg-2">
                <div class="call-to-action-contnet">
                    <h2>Keep in Touch</h2>
                    <p>
                        <a href="{{ route('contact.index') }}" style="color: white;">
                            If you have any queries about recruitments, vacancies, or anything else, our team is ready
                            to
                            response all your queries.
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="footer section-bg">
    <div class="footer-top pt-110">
        <div class="container">
            <div class="row">


                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="footer-widgets">
                        <h3>
                            お問い合わせ
                        </h3>
                        <div class="footer-get-in">
                            <div class="single">
                                <div class="icon">
                                    <i class="icofont-location-pin"></i>
                                </div>
                                <div class="con">
                                    <p>
                                        No.20 Aung Zay Ya Road, 14-Quarter, Yankin Township ,Yangon, Myanmar
                                    </p>
                                </div>
                            </div>
                            <div class="single">
                                <div class="icon">
                                    <i class="icofont-email"></i>
                                </div>
                                <div class="con">
                                    <p>
                                        <a href="mailto:info@phyusan.com" style="color: white;">
                                            info@phyusan.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="single">
                                <div class="icon">
                                    <i class="icofont-ui-touch-phone"></i>
                                </div>
                                <div class="con">
                                    <p>
                                        +95 9 44643 2352 (日本語対応)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="footer-widgets quick-links">
                        <h3>Quick Links</h3>
                        <ul>
                            <li>
                                <a href="{{ route('about.index') }}">
                                    Our Company
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('ceo_message') }}">
                                    President's Message
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('team') }}">
                                    Professional Team
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('cv.index') }}">
                                    Job Application
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('employer.index') }}">
                                    Employer Form
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('contact.index') }}">
                                    Contact Us
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="footer-widgets">
                        <h3>
                            Google Map
                        </h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.3896997775923!2d96.21989505977172!3d16.856606235909258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1939081b88aa7%3A0x63f2c2765e776a96!2sPhyu%20San%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1691245887682!5m2!1sen!2smm"
                            style="border:0; width: 100%; height: 250px;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="footer-widgets">
                        <h3>
                            Facebook
                        </h3>
                        <div class="footer-get-in">
                            <div id="fb-root">
                                <div class="fb-page"
                                    data-href="https://www.facebook.com/Phyu-San-Co-Ltd-103956774320991/"
                                    data-tabs="timeline" data-height="250" data-small-header="false"
                                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                </div>
                            </div>
                            <script>
                                (function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src =
                                        'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1&appId=310515396183252&autoLogAppEvents=1';
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copy-right-text">
                        <p>
                            Phyu San Co.,Ltd. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="scroll-area">
    <i class="icofont-arrow-up"></i>
</div>
