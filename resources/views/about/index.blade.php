@extends('layouts.main')
@section('title', 'About of Our Company')
@section('content')
    <section class="breadcum-area breadcum-bg breadcum-bg2 section-padding"
        style="background-image:url({{ asset('data/class_room/24.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcum-title">
                        <h2 class="page-title">
                            About of Our Company
                        </h2>
                        <ul class="page-list">
                            <li>
                                <a href="{{ route('home') }}">
                                    Home
                                </a> /
                                <span>
                                    About of Our Company
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-who">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title">
                        <center>
                            <h4 class="s-title">
                                Company Overview
                            </h4>
                            <h2>
                                About Of Our Company
                            </h2>
                        </center>
                    </div>
                    <div class="who-are-content">
                        <p style="text-align: justify; color: black;">
                            初めまして、私は Phyu San 送り出し機関代表 Ei Ei Phyu (イ・イ・ピュー)と申します。私は2003年 ミャンマーA.G.T.I Society
                            学校にて電力科目で卒業し、その後日本へ留学として
                            奈良にある白鳳女子短期大学にて国際人間学専攻を学んでました。そして2007年に大阪産業大学にて経済学科で卒業して2011年には帰国しました。2018年にPhyu San
                            株式会社を設立し、2019年に送り出し機関認定許可をもらいました。技術が発展している日本を見習って成長する事を願い、ミャンマー人材送り出し機関としてPhyu San
                            Co.,Ltdを設立しました。日本の労働人材不足問題で困ってる企業さんと優秀な日本語ができるミャンマーの若者達を架け橋の役割を果たすしたいと思っております 。そのため自社でTOKYO
                            日本語学校を設置し、PHYU SAN 独自の日本語教育を行っております。日本語だけではなく私の日本での経験を生かして、生徒達に日本のマナー、礼儀正しい、仕事に対する考え方や
                            時間を大切にする事や 熱心な気持ちなどを教育しおります。実習後ミャンマーに戻って来た生徒達を国の役に立つ仕事に繋げてあげたいと思っております。
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mb-30-none justify-content-center pt-50">
                <div class="col-lg-4">
                    <img src="{{ asset('data/eiphyu.jpg') }}" alt="teacher"
                        style="width: 100%; height: 450px; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                    <h4 class="title"
                        style="font-size: 20px; text-align: center; background-color: #F7931E; color: black; padding: 10px; padding-top: 10px;">
                        Overseas Employment Licence
                    </h4>
                </div>

                <div class="col-lg-4">
                    <img src="{{ asset('data/company.png') }}" alt="teacher"
                        style="width: 100%; height: 450px; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                    <h4 class="title"
                        style="font-size: 20px; text-align: center; background-color: #F7931E; color: black; padding: 10px; padding-top: 10px;">
                        Certificate of Incorporation
                    </h4>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="about-content section-title default text-left">
                        <div class="section-title">
                            <center>
                                <h4 class="s-title">
                                    About Us
                                </h4>
                                <h2>
                                    Company Information
                                </h2>
                            </center>
                        </div>
                        <div class="section-bottom">
                            <div class="text">
                                <style>
                                    .table {
                                        border-collapse: collapse;
                                        border: 1px solid black;
                                        width: 100%;
                                    }

                                    th,
                                    td {
                                        border: 1px solid black;
                                    }
                                </style>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="row" width="30%"
                                                style="background-color: #e3e4ef; color: black;">
                                                会社名
                                            </th>
                                            <td>ピューサン ( PHYU SAN CO.,LTD )</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="background-color: #f7f2f2; color: black;">代表取締役</th>
                                            <td>イ・イ・ピュー　( EI EI PHYU )</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="background-color: #e3e4ef; color: black;">住所</th>
                                            <td>No.20 Aung Zay Ya Road, 14-Quarter, Yankin Township,Yangon,Myanmar</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="background-color: #f7f2f2; color: black;">電話</th>
                                            <td>+95 9 501 5242</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="background-color: #e3e4ef; color: black;">設立</th>
                                            <td>11/20/2018</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="background-color: #f7f2f2; color: black;">資本金</th>
                                            <td>100,000,000</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" width="20%"
                                                style="background-color: #e3e4ef; color: black;">送り出し機関 ライセンス取得日</th>
                                            <td>8/29/2019</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="background-color: #f7f2f2; color: black;">送り出し機関
                                                ライセンス番号</th>
                                            <td>No.178/2019</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="background-color: #e3e4ef; color: black;">電話番号</th>
                                            <td>電話番号</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="background-color: #f7f2f2; color: black;">E-Mail</th>
                                            <td>info@phyusan.com</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="background-color: #e3e4ef; color: black;">Google Map
                                            </th>
                                            <td>
                                                <a href="https://goo.gl/maps/BvdZFKuvHX1aH5i5A" target="_blang">Get
                                                    Directions
                                                </a>
                                            </td>
                                        </tr>

                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 text-center">
                    <div class="section-round-title">
                        <h4>Company Statement</h4>
                        <h2>
                            Our Vision, Mission & Value
                        </h2>
                    </div>
                </div>
            </div>
            <div class="feature-content">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-feature-box">
                            <div class="feature-bg feature-bg1">
                                <p>01</p>
                            </div>
                            <h2>Our Vision</h2>
                            <p style="text-align: justify; color: black;">
                                Our vision is to be the most trusted and preferred overseas employment agency, connecting
                                job seekers with global opportunities while assisting businesses in finding the best talent
                                from around the world.
                            </p>
                            <br>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-feature-box">
                            <div class="feature-bg blue feature-bg2">
                                <p>02</p>
                            </div>
                            <h2>Our Mission</h2>
                            <p style="text-align: justify; color: black;">
                                To empower individuals with global opportunities and facilitate international businesses in
                                accessing top talent, all while upholding ethical standards and promoting cultural
                                understanding.
                            </p>
                            <br><br>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-feature-box">
                            <div class="feature-bg feature-bg3">
                                <p>03</p>
                            </div>
                            <h2>Our Value</h2>
                            <p style="text-align: justify; color: black;">
                                Integrity, customer-centricity, excellence, respect, trust, accountability, innovation, and
                                social responsibility are the core values that drive us in delivering exceptional services
                                and making a positive impact in the overseas employment industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-video-play-area s-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="video-left-content">
                        <h2>
                            Our Purpose
                        </h2>
                        <p>
                            Our main purpose is to provide different categories of Myanmar Manpower around the globe and
                            especially Thailand. We supply Skilled, Semi-Skilled, General Worker, Technical, Professional
                            and Unskilled Myanmar Manpower. Currently, we are dealing with various clients from different
                            countries and successful in supply Malaysia, Japan, Thailand, Singapore without any complaints.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-who ">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-md-4">
                    <div class="why-left-content section-title">
                        <div class="portfolio-s-widgets mb-30">
                            <div class="portfolio-info-item-wrap">

                                <div class="item">
                                    <div class="icon">
                                        <i class="icofont-ui-user"></i>
                                    </div>
                                    <div class="con">
                                        <h3>担当者:</h3>
                                        <p>ニャン　ミョーテイン 千葉祐一</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="icon">
                                        <i class="icofont-location-pin"></i>
                                    </div>
                                    <div class="con">
                                        <h3>286-0202:</h3>
                                        <p>千葉県富里市日吉倉3-16 クレッサ21 402</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="icon">
                                        <i class="icofont-tags"></i>
                                    </div>
                                    <div class="con">
                                        <h3>電話番号:</h3>
                                        <p>0476-85-7828</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="icon">
                                        <i class="icofont-phone"></i>
                                    </div>
                                    <div class="con">
                                        <h3>FAX:</h3>
                                        <p>0476-85-7838</p>
                                    </div>
                                </div>


                                <div class="item">
                                    <div class="icon">
                                        <i class="icofont-phone"></i>
                                    </div>
                                    <div class="con">
                                        <h3>サポート電話番号:</h3>
                                        <p>090-2629-7100</p>
                                    </div>
                                </div>


                                <div class="item">
                                    <div class="icon">
                                        <i class="icofont-email"></i>
                                    </div>
                                    <div class="con">
                                        <h3>E-mail:</h3>
                                        <p>info@phyusan.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="section-title">
                        <h4 class="s-title">
                            Phyu San Co.,Ltd
                        </h4>
                        <h2>
                            Our Objective
                        </h2>
                    </div>
                    <ul>
                        <li>
                            <p style="color: black;">
                                <i class="fas fa-check-square" aria-hidden="true"></i>
                                To explore the market potential for a huge number of unemployed Myanmar youth.
                            </p>
                        </li>
                        <br>

                        <li>
                            <p style="color: black;">
                                <i class="fas fa-check-square" aria-hidden="true"></i>
                                To find better job opportunities for skilled, semiskilled, trained and professional Myanmar
                                manpower.
                            </p>
                        </li>
                        <br>

                        <li>
                            <p style="color: black;">
                                <i class="fas fa-check-square" aria-hidden="true"></i>
                                To enhance manpower industry for a better opportunity for Myanmar workers.
                            </p>
                        </li>
                        <br>

                        <li>
                            <p style="color: black;">
                                <i class="fas fa-check-square" aria-hidden="true"></i>
                                To provide the best possible Myanmar manpower to the manpower sourcing countries.
                            </p>
                        </li>
                        <br>

                        <li>
                            <p style="color: black;">
                                <i class="fas fa-check-square" aria-hidden="true"></i>
                                Negotiate for better positions for Myanmar workers in the country importing Myanmar
                                workforce.
                            </p>
                        </li>
                        <br>

                        <li>
                            <p style="color: black;">
                                <i class="fas fa-check-square" aria-hidden="true"></i>
                                To establish Myanmar workers as the most competent and honest workforce.
                            </p>
                        </li>
                        <br>

                        <li>
                            <p style="color: black;">
                                <i class="fas fa-check-square" aria-hidden="true"></i>
                                To reduce the country’s unemployment burden.
                            </p>
                        </li>
                        <br>

                        <li>
                            <p style="color: black;">
                                <i class="fas fa-check-square" aria-hidden="true"></i>
                                To fully comply with the laws and acts of Ministry of Labor, Employment and Social Security.
                            </p>
                        </li>
                        <br>

                        <li>
                            <p style="color: black;">
                                <i class="fas fa-check-square" aria-hidden="true"></i>
                                To provide Unskilled, Semiskilled, highly skilled and professional manpower required for
                                both
                                products oriented &amp; service oriented jobs.
                            </p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="section-feature pt-50" style="background-color: white; padding: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 text-center">
                    <div class="section-round-title">
                        <h4>
                            Corporate Structure
                        </h4>
                        <h2>
                            Our Organization Chart
                        </h2>
                    </div>
                </div>
            </div>
            <div class="feature-content">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <img src="{{ asset('data/org.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-feature" style="padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 text-center">
                    <div class="section-round-title">
                        <center>
                            <p style="font-size: 16px; color: black; text-align: justify;">
                                TOKYO Japanese School is the best place to achieve the highest level of quality for humans
                                by not just only studying , you will get good social skill, team work skill , power of
                                cultural understanding and experiences.
                            </p>
                        </center>
                    </div>
                </div>

                <div class="col-md-3 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/class_room/25.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                        <p style="padding: 10px;">
                            Study Japanese Language
                        </p>
                    </div>
                </div>

                <div class="col-md-3 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/8.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                        <p style="padding: 10px;">
                            Nursing Care Training
                        </p>
                    </div>
                </div>

                <div class="col-md-3 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/interview/5.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                        <p style="padding: 10px;">
                            Interview section
                        </p>
                    </div>
                </div>

                <div class="col-md-3 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/depature/5.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                        <p style="padding: 10px;">
                            Depature
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
