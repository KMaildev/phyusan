@extends('layouts.main')
@section('title', 'Activities')
@section('content')
    <div class="cmt-page-title-row bg-base-dark cmt-bg cmt-bgimage-yes clearfix">
        <div class="cmt-titlebar-wrapper-bg-layer cmt-bg-layer"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="cmt-page-title-row-inner">
                        <div class="page-title-heading">
                            <h2 class="title">
                                {{ $category->title ?? '' }}
                            </h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('home') }}">Home</a>
                            </span>
                            <span>
                                Gallery & Activities
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-main">
        <section class="cmt-row padding_bottom_zero-section clearfix">
            <div class="container">
                <div class="row mt_15 mb_15">
                    @foreach ($activities as $activity)
                        <div class="col-md-12">
                            <p style="font-size: 20px;">
                                {{ $activity->title ?? '' }}
                            </p>
                        </div>
                        @php
                            $images = explode(',', $activity->images);
                        @endphp
                        @foreach ($images as $image)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="featured-imagebox featured-imagebox-portfolio style1">
                                    <div class="featured-thumbnail">
                                        <img data-enlargeable="" src="{{ $image }}" alt=""
                                            style="border-radius: 30px 0 30px 0; width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #DC2326; padding: 10px;">
                                    </div>
                                    <div class="featured-content">
                                        <span class="pf-icon">
                                            <img src="{{ asset('data/logo.png') }}" alt="bootstrap">
                                        </span>
                                        <div class="category">
                                            <span>
                                                PAING HTET SAN  CO., LTD
                                            </span>
                                        </div>
                                        <div class="featured-title">
                                            <h3>
                                                Recruitment Services
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
