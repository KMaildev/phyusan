@extends('layouts.main')
@section('title', 'Activities')
@section('content')
    <section class="breadcum-area breadcum-bg breadcum-bg2 section-padding"
        style="background-image:url({{ asset('data/19.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcum-title">
                        <h2 class="page-title">
                            Gallery & Activities
                        </h2>
                        <ul class="page-list">
                            <li>
                                <a href="{{ route('home') }}">
                                    Home
                                </a> /
                                <span>
                                    Gallery & Activities
                                </span>
                                /
                                <span>
                                    {{ $category->title ?? '' }}
                                </span>
                            </li>
                        </ul>
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
                            Gallery & Activities
                        </h4>
                        <h2>
                            {{ $category->title ?? '' }}
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
                            <div class="col-lg-4 col-md-6 col-sm-6" >
                                <div class="single-blog-item">
                                    <div class="">
                                        <img  data-enlargeable="" src="{{ $image }}" alt=""
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
