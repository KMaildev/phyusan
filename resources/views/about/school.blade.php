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
                        <h2>Check How we work together</h2>
                        {{-- mfp-iframe  --}}
                        <a href="#" class="h4-video-play-btn">
                            <i class="fas fa-play" onclick="showFacebook()"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
