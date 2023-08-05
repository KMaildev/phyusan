@extends('layouts.main')
@section('title', 'Welcome')
@section('content')

    <section class="about-seo">
        <div class="container">
            <div class="row text-center">

                <div class="col-lg-6 col-md-6">
                    <div class="single-about-seo-box single-about-seo-box1">
                        <i class="fas fa-globe"></i>
                        <h2>About Phyu San Co.,Ltd</h2>
                        <p>
                            初めまして、私は Phyu San 送り出し機関代表 Ei Ei Phyu (イ・イ・ピュー)と申します。私は2003年 ミャンマーA.G.T.I Society
                            学校にて電力科目で卒業し、その後日本へ留学として 奈良にある白鳳女子短期大学にて国際人間学専攻を学んでました。
                        </p>
                        <a href="{{ route('about.index') }}" class="colored-btn btn">Explore More<i
                                class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="single-about-seo-box">
                        <i class="fas fa-globe"></i>
                        <h2>About TOKYO Japanese School</h2>
                        <p>
                            「何事も成功は教育から始まる」という方針で教師達と管理者はいつも自分が担当している仕事の大切さを理解しています。その上で実習生達に日本語・日本文化・
                            日本国・日本人及び日本の規律意識・生活マナーを常に熱心に教育します。
                        </p>
                        <a href="{{ route('school') }}" class="colored-btn btn">Explore More<i
                                class="fas fa-angle-double-right"></i></a>
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


    <section class="service-section section-padding py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 text-center">
                    <div class="section-round-title">
                        <h4>
                            Phyu San Co.,Ltd
                        </h4>
                        <h2>
                            ミャンマー技能実習生送り出し機関PHYU SANの強み
                        </h2>
                    </div>
                </div>
            </div>
            <div class="service-items">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-service-item-box">
                            <div class="img-overly">
                                <img src="{{ asset('data/1.png') }}" alt=""
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                            </div>
                            <h2>
                                優秀な人材・透明性のある募集体制
                            </h2>
                            <p>
                                ブローカー等を使わずシンプルな募集仕方で業務を行っております。SNS、雑誌、新聞などからミャンマー全国から日本語生徒を募集して、応募者に対して説明会を行っております。
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-service-item-box">
                            <div class="img-overly">
                                <img src="{{ asset('data/interview/1.jpg') }}" alt=""
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                            </div>
                            <h2>面接前第一次選考の徹底</h2>
                            <p>
                                応募者達を日本語学校入校前に面接行い、選抜しております。それから日本語教育を学び、その後監理団体又は企業さんに面接をして頂いております。
                            </p>
                            <br><br>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-service-item-box">
                            <div class="img-overly">
                                <img src="{{ asset('data/depature/5.jpg') }}" alt=""
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                            </div>
                            <h2>健康診断・ビザ申請・ミャンマー出国サポート</h2>
                            <p>
                                健康診断を入国間3回行っております。女性実習生に関してはミャンマー出国前に妊娠検査をトラブル防ぐためやっております。在留資格申請、ミャンマー出国ため全面的にサポートしております。
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-service-item-box">
                            <div class="img-overly">
                                <img src="{{ asset('data/class_room/2.jpg') }}" alt=""
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                            </div>
                            <h2>日本語教育・日本企業で働くための言葉教育</h2>
                            <p>
                                日本語教育について日本語学部で大学卒、教師資格もってる先生2名と介護教師として介護指導員資格持ってる日本人先生1名で教育を行っております。面接後内定が決まった生徒達を職種の専門的な言葉教育も行っております。
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-service-item-box">
                            <div class="img-overly">
                                <img src="{{ asset('data/20.jpg') }}" alt=""
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                            </div>
                            <h2>帰国後の就職サポート</h2>
                            <p>
                                帰国後実習生を日本での経験を生かせるためミャンマー国内で仕事紹介を行っております。
                            </p>
                            <br><br><br><br>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-service-item-box">
                            <div class="img-overly">
                                <img src="{{ asset('data/depature/7.jpg') }}" alt=""
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                            </div>
                            <h2>
                                日本に入国後　生活フォーロ・失踪対策ため悩み相談
                            </h2>
                            <p>
                                ピューサン送り出し機関の日本駐在サポートとして事務所を東京都新宿で設置しております。担当者2名　が実習生について全面対応しております。生活フォーロと失踪対策ため定期的2月に１回実習生務める企業のところに訪問し、職場について問題、相談、悩み等を解決する業務をやっております。さらにインターネット
                                VIBER を使い２４時間体制で
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <style>
        .gradient-border {
            --border-width: 4px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Lato, sans-serif;
            font-size: 2.5rem;
            text-transform: uppercase;
            color: white;
            background: white;
            border-radius: var(--border-width);
            border-radius: 15px 30px;

            &::after {
                position: absolute;
                content: "";
                top: calc(-1 * var(--border-width));
                left: calc(-1 * var(--border-width));
                z-index: -1;
                width: calc(100% + var(--border-width) * 2);
                height: calc(100% + var(--border-width) * 2);
                background: linear-gradient(60deg,
                        hsl(224, 85%, 66%),
                        hsl(269, 85%, 66%),
                        hsl(314, 85%, 66%),
                        hsl(359, 85%, 66%),
                        hsl(44, 85%, 66%),
                        hsl(89, 85%, 66%),
                        hsl(134, 85%, 66%),
                        hsl(179, 85%, 66%));
                background-size: 300% 300%;
                background-position: 0 50%;
                border-radius: calc(2 * var(--border-width));
                animation: moveGradient 3s alternate infinite;
                border-radius: 15px 30px;
            }
        }

        @keyframes moveGradient {
            50% {
                background-position: 100% 50%;
            }
        }
    </style>

    <section class="section-who" style="padding: 10px 0;">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-md-6 mb-4 ">
                            <div class="img-overly">
                                <img src="{{ asset('data/class_room/3.jpg') }}" alt=""
                                    style="width: 100%; height: auto; background-size: center; object-fit: contain; border: 4px solid blue; padding: 5px; border-radius: 15px 30px;">
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="img-overly">
                                <img src="{{ asset('data/class_room/4.jpg') }}" alt=""
                                    style="width: 100%; height: auto; background-size: center; object-fit: contain; border: 4px solid blue; padding: 5px; border-radius: 15px 30px;">
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <div class="gradient-border">
                                <img src="{{ asset('data/class_room/7.jpg') }}" alt=""
                                    style="width: 100%; height: auto; background-size: center; object-fit: contain; padding: 5px; border-radius: 15px 30px;">
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="img-overly">
                                <img src="{{ asset('data/class_room/6.jpg') }}" alt=""
                                    style="width: 100%; height: auto; background-size: center; object-fit: contain; border: 4px solid blue; padding: 5px; border-radius: 15px 30px;">
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="img-overly">
                                <img src="{{ asset('data/class_room/9.jpg') }}" alt=""
                                    style="width: 100%; height: auto; background-size: center; object-fit: contain; border: 4px solid blue; padding: 5px; border-radius: 15px 30px;">
                            </div>
                        </div>

                        <a href="{{ route('school') }}" class="colored-btn btn">
                            <i class="fas fa-angle-double-right"></i>
                            Learn more about the TOKYO Japanese School
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 ">
                    <div class="section-title">
                        <h4 class="s-title">
                            Tokyo School
                        </h4>
                        <h2>
                            TOKYO日本語学校紹介
                        </h2>
                    </div>
                    <div class="who-are-content">
                        <p style="text-align: justify">
                            「何事も成功は教育から始まる」という方針で教師達と管理者はいつも自分が担当している仕事の大切さを理解しています。その上で実習生達に日本語・日本文化・日本国・日本人及び日本の規律意識・生活マナーを常に熱心に教育します。
                            教師達の目標は日本の受入れ企業様の高い質を持った人材の要望に応じることができるよう、新しい教授法、新しい知識を絶えず勉強し、自分の技量を高めます。それによってミャンマー実習生と日本の受入れ企業様との架け橋となれば幸いです。
                            <br><br>
                            日本語教育について日本語学部で大学卒、教師資格もってる先生2名で授業を行っております。介護教師として介護指導員資格持ってる日本人先生1名で教育を行っております。一クラスに生徒20名で授業を行っております。生徒達を先に一週間コースを設けて、技能実習生としての基礎知識、雇用条件書に関する講義、失踪　・難民申請について講習などを教育しております。
                            <br><br>
                            日本語教育について日本語学部で大学卒、教師資格もってる先生2名で授業を行っております。介護教師として介護指導員資格持ってる日本人先生1名で教育を行っております。一クラスに生徒20名で授業を行っております。生徒達を先に一週間コースを設けて、技能実習生としての基礎知識、雇用条件書に関する講義、失踪　・難民申請について講習などを教育しております。
                            <br><br>
                            TOKYO
                            日本語学校入校前に一週間コースを授業を行っております。7日間コースの内容は技能実習生としての基礎知識、雇用条件書に関する講義、失踪　・難民申請について講習などを教育しております。
                            <br><br>
                            日本企業、監理団体の面接後、採用した生徒を引き続き入国前教育を行っております。採用した生徒の日本語を強化するため一段階高い日本語レベルを教えております。さらに日本企業に働くため必要な専門的な言葉、仕事内容と日本で暮らすための交通ルール、ゴミ選別、マナーなどを教えております。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="section-video-play-area s-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="video-left-content">
                        <h2>
                            Our Goal is to Make your Life Better
                        </h2>
                        <p style="text-align: justify">
                            Japanese is not just a language -- it is a culture. The people in Japan have a unique way of
                            thinking and living that you can only understand if you know their language. We offer various
                            Japanese courses to help foreigners learn about Japan’s unique customs, traditions and way of
                            life.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="h4-video-play-area">
                        <iframe width="560" height="270" src="https://www.youtube.com/embed/Ic_7K5Nk5gg"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="service-section section-padding py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 text-center">
                    <div class="section-round-title">
                        <h4>
                            Gallery & Activities
                        </h4>
                        <h2>
                            Our Activities
                        </h2>
                    </div>
                </div>
            </div>
            <div class="service-items">
                <div class="row">
                    @foreach ($activities as $activity)
                        <div class="col-md-12">
                            <center>
                                <div class="section-round-title">
                                    <h2 style="margin-bottom: 0px; font-size: 30px;">
                                        {{ $activity->title ?? '' }}
                                    </h2>
                                </div>
                            </center>
                        </div>
                        @php
                            $images = explode(',', $activity->images);
                        @endphp
                        @foreach ($images as $image)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-blog-item">
                                    <div class="">
                                        <img data-enlargeable="" src="{{ $image }}" alt=""
                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                    </div>
                                    <p>
                                        <span>
                                            <i class="fas fa-heart"></i>
                                            Pyhu San Co.,Ltd
                                        </span>
                                        <span>
                                            <i class="far fa-image"></i>
                                            Activities
                                        </span>
                                    </p>
                                    <h2>
                                        <a href="javascript::void(0)">
                                            {{ $activity->title ?? '' }}
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
