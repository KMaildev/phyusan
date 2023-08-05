<div class="common-overlay"></div>
<header>
    <div class="header-top-v4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-9">
                    <div class="top-bar-left">
                        <p>
                            <i class="fas fa-map-marker-alt"></i>
                            No.20 Aung Zay Ya Road, 14-Quarter, Yankin Township ,Yangon, Myanmar
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@phyusan.com">
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

    <div class=" header-menu-4 header sticky-header ">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 align-self-center">
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

                <div class="col-lg-10 col-md-10 col-sm-10">
                    <div class="menu">
                        <nav>
                            <ul>
                                <li>
                                    <a href="index1.html">
                                        Home
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript::void(0)">
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
                                    <a href="{{ route('school') }}">
                                        TOKYO Japanese School
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript::void(0)">
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
                                    <a href="javascript::void(0)">
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
    <div class="off_canvars_overlay">
    </div>

    <div class="offcanvas_menu">
        <div class="offcanvas_menu_wrapper">
            <div class="canvas_close">
                <a href="javascript:void(0)"><i class="icofont-close-line"></i></a>
            </div>
            <div class="mobile-logo text-center mb-30">
                <a href="index1.html">
                    <img src="{{ asset('assets/img/white-logo.png') }}" alt="logo">
                </a>
            </div>
            <div id="menu" class="text-left ">
                <ul class="offcanvas_main_menu">
                    <li class="menu-item-has-children active">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index1.html">Seo Agency</a></li>
                            <li><a href="index6.html">Seo Agency Dark</a></li>
                            <li><a href="index2.html">Sass Agency</a></li>
                            <li><a href="index7.html">Sass Agency Dark</a></li>
                            <li><a href="index3.html">Marketing Agency</a></li>
                            <li><a href="index8.html">Marketing Agency Dark</a></li>
                            <li><a href="index4.html">Digital Agency</a></li>
                            <li><a href="index5.html">Digital Agency dark</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Services</a>
                        <ul class="sub-menu">
                            <li><a href="services.html">Services-V1</a></li>
                            <li><a href="services-2.html">Services-V2</a></li>
                            <li><a href="service-3.html">Services-V3</a></li>
                            <li><a href="services-details.html">Services Details-V1</a></li>
                            <li><a href="services-details-2.html">Services Details-V2</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#"> Project</a>
                        <ul class="sub-menu">
                            <li><a href="portfolio.html">Project</a></li>
                            <li><a href="portfolio-details.html">Project Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Page</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Us </a></li>
                            <li><a href="blog.html">Blog </a></li>
                            <li><a href="team.html">Team </a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="faqs.html">Faqs</a></li>
                            <li><a href="comming-soon.html">Comming Soon</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="single.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="shop.html">shop </a></li>
                            <li><a href="product-left-sidebar.html">Products Left Sidebar </a></li>
                            <li><a href="products.html">Products Right Sidebar </a></li>
                            <li><a href="products-full-width.html">products Full Width</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout </a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="contact.html">Contact </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
