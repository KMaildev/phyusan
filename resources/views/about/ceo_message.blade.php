@extends('layouts.main')
@section('title', 'About of Our Company')
@section('content')
    <section class="breadcum-area breadcum-bg breadcum-bg2 section-padding"
        style="background-image:url({{ asset('data/md.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcum-title">
                        <h2 class="page-title">
                            President's Message
                        </h2>
                        <ul class="page-list">
                            <li>
                                <a href="{{ route('home') }}">
                                    Home
                                </a> /
                                <span>
                                    President's Message
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
            <div class="row ">
                <div class="col-lg-3 col-md-3">
                    <div class="who-bg">
                        <img style="width: 100%;"
                            src="https://img.freepik.com/premium-vector/face-cute-girl-avatar-young-girl-portrait-vector-flat-illustration_192760-82.jpg?w=2000"
                            alt="">
                        <p
                            style="text-align: center; background-color: #F78E1B; color: white; padding: 10px; padding-top: 10px;">
                            イ・イ・ピュー　( EI EI PHYU )
                            <br>
                            代表取締役 (CEO)
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 ">
                    <div class="section-title">
                        <h4 class="s-title">
                            代表挨拶 (President's Message)
                        </h4>
                        <h2>
                            ピューサン ( PHYU SAN CO.,LTD )
                        </h2>
                    </div>
                    <div class="who-are-content">
                        <p style="text-align: justify; font-size: 18px; color: black;">
                            初めまして、私は Phyu San 送り出し機関代表 Ei Ei Phyu (イ・イ・ピュー)と申します。私は2003年 ミャンマーA.G.T.I Society
                            学校にて電力科目で卒業し、その後日本へ留学として
                            奈良にある白鳳女子短期大学にて国際人間学専攻を学んでました。そして2007年に大阪産業大学にて経済学科で卒業して2011年には帰国しました。2018年にPhyu San
                            株式会社を設立し、2019年に送り出し機関認定許可をもらいました。技術が発展している日本を見習って成長する事を願い、ミャンマー人材送り出し機関としてPhyu San
                            Co.,Ltdを設立しました。日本の労働人材不足問題で困ってる企業さんと優秀な日本語ができるミャンマーの若者達を架け橋の役割を果たすしたいと思っております 。そのため自社でTOKYO
                            日本語学校を設置し、PHYU SAN 独自の日本語教育を行っております。日本語だけではなく私の日本での経験を生かして、生徒達に日本のマナー、礼儀正しい、仕事に対する考え方や
                            時間を大切にする事や 熱心な気持ちなどを教育しおります。実習後ミャンマーに戻って来た生徒達を国の役に立つ仕事に繋げてあげたいと思っております。
                            <br><br>
                            Best regards,
                            <br>
                            EI EI PHYU
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
