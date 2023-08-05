<div class="common-overlay"></div>
<header>
    <div class="header-top-v4" style="background-color: #f7931e;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-9">
                    <div class="top-bar-left">
                        <p>
                            <i class="fas fa-map-marker-alt"></i>
                            No.20 Aung Zay Ya Road, 14-Quarter, Yankin Township ,Yangon, Myanmar
                            <i class="fas fa-envelope"></i>

                            <a href="mailto:info@phyusan.com" style="color: white">
                                info@phyusan.com
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3  text-right">
                    <div class="top-menu-bar-social-item">
                        <a href="https://www.facebook.com/profile.php?id=100063622855282&ref=embed_page"
                            target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-menu-4 header sticky-header" style="background-color: white">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 align-self-center">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('data/logo.jpg') }}" alt="Phyu San Co.,Ltd">
                        </a>
                    </div>
                    <div class="canvas_open">
                        <a href="javascript:void(0)">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">
                    <div class="menu">
                        <nav>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}" style="color: black">
                                        Home
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript::void(0)" style="color: black">
                                        About Us
                                        <i class="icofont-simple-down"></i>
                                    </a>
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
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('school') }}" style="color: black">
                                        TOKYO Japanese School
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript::void(0)" style="color: black">
                                        Gallery & Activities
                                        <i class="icofont-simple-down"></i>
                                    </a>
                                    <ul>
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ route('activities.show', $category->id) }}">
                                                    {{ $category->title ?? '' }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>


                                <li>
                                    <a href="javascript::void(0)" style="color: black">
                                        Submit Form
                                        <i class="icofont-simple-down"></i>
                                    </a>
                                    <ul>
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
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="mobile-menu-area">
    <style>
        .canvas_open {
            color: black;
            background-color: #f7931e;
            padding: 5px;
        }
    </style>
    <div class="off_canvars_overlay" style="">
    </div>

    <div class="offcanvas_menu">
        <div class="offcanvas_menu_wrapper">
            <div class="canvas_close">
                <a href="javascript:void(0)"><i class="icofont-close-line"></i></a>
            </div>
            <div class="mobile-logo text-center mb-30">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('data/logo.jpg') }}" alt="logo">
                </a>
            </div>
            <div id="menu" class="text-left ">
                <ul class="offcanvas_main_menu">

                    <li class="menu-item-has-children">
                        <a href="{{ route('home') }}" >
                            Home
                        </a>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="{{ route('about.index') }}">
                            Our Company
                        </a>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="{{ route('ceo_message') }}">
                            President's Message
                        </a>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="{{ route('team') }}">
                            Professional Team
                        </a>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="{{ route('school') }}">
                            TOKYO Japanese School
                        </a>
                    </li>

                    @foreach ($categories as $category)
                        <li class="menu-item-has-children">
                            <a href="{{ route('activities.show', $category->id) }}">
                                {{ $category->title ?? '' }}
                            </a>
                        </li>
                    @endforeach


                    <li class="menu-item-has-children">
                        <a href="{{ route('cv.index') }}">
                            Job Application
                        </a>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="{{ route('employer.index') }}">
                            Employer Form
                        </a>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="{{ route('contact.index') }}">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
