@extends('layouts.main')
@section('content')
    <section class="breadcum-area breadcum-bg breadcum-bg2 section-padding"
        style="background-image:url({{ asset('data/class_room/2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcum-title">
                        <h2 class="page-title">TOKYO Japanese School</h2>
                        <ul class="page-list">
                            <li>
                                <a href="{{ route('home') }}">
                                    Home
                                </a> /
                                <span>TOKYO Japanese School</span>
                            </li>
                        </ul>
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

    <section class="section-who">
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
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 ">
                    <div class="section-title">
                        <h4 class="s-title">
                            Education
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


    <section class="section-feature" style="background-color: white; padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 text-center">
                    <div class="section-round-title">
                        <h4>Why learning with TOKYO Japanese School is right for you?</h4>
                        <center>
                            <p style="font-size: 16px; color: black; text-align: justify;">
                                Immerse in Japanese language and culture with expert instructors, tailored curriculum, and
                                interactive learning. Join our transformative school for new opportunities and a richer
                                experience of Japan.
                            </p>
                        </center>
                    </div>
                </div>

                <div class="col-md-4 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/class_room/9.jpg') }}" alt=""
                            style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                    </div>
                </div>

                <div class="col-md-4 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/class_room/12.jpg') }}" alt=""
                            style="width: 100%; height: 200px; background-size: center; object-fit: contain;">
                    </div>
                </div>

                <div class="col-md-4 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/class_room/14.jpg') }}" alt=""
                            style="width: 100%; height: 200px; background-size: center; object-fit: contain;">
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
                        <h4>
                            Study Japanese Language
                        </h4>
                        <center>
                            <p style="font-size: 16px; color: black; text-align: justify;">
                                Beginner to advanced students can learn to speak, read, and write Japanese in these courses
                                and workshops.
                                <br>
                                you will get good social skill, team work skill , power of cultural understanding and
                                experiences.
                            </p>
                        </center>
                    </div>
                </div>

                <div class="col-md-4 py-5">
                    <div
                        style="box-shadow: rgba(247, 147, 28, 0.4) -5px 5px, rgba(247, 147, 28, 0.3) -10px 10px, rgba(247, 147, 28, 0.2) -15px 15px, rgba(247, 147, 28, 0.1) -20px 20px, rgba(247, 147, 28, 0.05) -25px 25px;">
                        <img src="{{ asset('data/class_room/23.jpg') }}" alt=""
                            style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                    </div>
                </div>

                <div class="col-md-4 py-5">
                    <div
                        style="box-shadow: rgba(247, 147, 28, 0.4) 0px 5px, rgba(247, 147, 28, 0.3) 0px 10px, rgba(247, 147, 28, 0.2) 0px 15px, rgba(247, 147, 28, 0.1) 0px 20px, rgba(247, 147, 28, 0.05) 0px 25px;">
                        <img src="{{ asset('data/class_room/24.jpg') }}" alt=""
                            style="width: 100%; height: 200px; background-size: center; object-fit: contain;">
                    </div>
                </div>

                <div class="col-md-4 py-5">
                    <div
                        style="box-shadow: rgba(247, 147, 28, 0.4) 5px 5px, rgba(247, 147, 28, 0.3) 10px 10px, rgba(247, 147, 28, 0.2) 15px 15px, rgba(247, 147, 28, 0.1) 20px 20px, rgba(247, 147, 28, 0.05) 25px 25px;">
                        <img src="{{ asset('data/class_room/25.jpg') }}" alt=""
                            style="width: 100%; height: 200px; background-size: center; object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section-feature" style="background-color: white; padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 text-center">
                    <div class="section-round-title">
                        <h4>
                            Nursing care
                        </h4>
                        <center>
                            <p style="font-size: 16px; color: black; text-align: justify;">
                                We teach Kaigo (Nursing care). They are all taught in the Japanese language (N5, N4, N3).
                                Students are well-trained by experts.
                            </p>
                        </center>
                    </div>
                </div>

                <div class="col-md-6 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/1.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                    </div>
                </div>

                <div class="col-md-6 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/6.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                    </div>
                </div>

                <div class="col-md-6 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/11.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                    </div>
                </div>

                <div class="col-md-6 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/9.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
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
                        <h4>
                            Interview
                        </h4>
                        <center>
                            <p style="font-size: 16px; color: black; text-align: justify;">
                                Interviews
                            </p>
                        </center>
                    </div>
                </div>

                <div class="col-md-4 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/interview/1.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                    </div>
                </div>

                <div class="col-md-4 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/interview/2.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                    </div>
                </div>

                <div class="col-md-4 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/interview/5.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                    </div>
                </div>

                <div class="col-md-4 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/interview/01.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                    </div>
                </div>

                <div class="col-md-4 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/interview/11.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                    </div>
                </div>

                <div class="col-md-4 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/interview/07.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section-feature" style="background-color: white; padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 text-center">
                    <div class="section-round-title">
                        <h4>
                            Depature
                        </h4>
                        <center>
                            <p style="font-size: 16px; color: black; text-align: center;">
                                Next Step for the brighter future in japan.
                            </p>
                        </center>
                    </div>
                </div>

                <div class="col-md-3 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/depature/11.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                    </div>
                </div>

                <div class="col-md-3 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/depature/5.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                    </div>
                </div>

                <div class="col-md-3 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/depature/6.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                    </div>
                </div>

                <div class="col-md-3 py-5">
                    <div style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <img src="{{ asset('data/depature/2.jpg') }}" alt=""
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
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
