@extends('Frontend.layout.master')

@section('title')
    <title>{{ $cruise_vacation->meta_title }}</title>
@endsection
@section('meta_description')
    <meta name="meta_description" content="{{ $cruise_vacation->meta_description }}">
@endsection
@section('meta_keywords')
    <meta name="meta_keywords" content="{{ $cruise_vacation->meta_keywords }}">
@endsection
@section('page-contents')
    <section class="breadcrum" style="background-image: url({{ asset("storage/$cruise_vacation->banner") }}); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h1>{{ $cruise_vacation->title }}</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="vacation-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <img src="{{ asset("storage/$cruise_vacation->section_1_image") }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 content-heading my-auto">
                            <h1> {{ $cruise_vacation->section_1_title }}</h1>
                            {{ $cruise_vacation->section_1_description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="vacation-detail">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 bg-white mt-5 pt-5 content-heading">

                    <div class="row">
                        <div class="col-lg-5 cruise-img1">
                            <img src="{{ asset("storage/$cruise_vacation->section_2_image") }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="col-lg-7 my-auto">
                            <h6 class="mb-4">
                                {{ $cruise_vacation->section_2_title }}
                            </h6>
                            {{ $cruise_vacation->section_2_description }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 bg-white mt-5 pt-5 content-heading">
                    <div class="row">
                        <div class="col-lg-7">
                            <h6 class="mb-4">
                                {{ $cruise_vacation->section_3_title }}
                            </h6>
                            {{ $cruise_vacation->section_3_description }}
                        </div>
                        <div class="col-lg-5 cruise-img1">
                            <img src="{{ asset("storage/$cruise_vacation->section_3_image") }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="vacation-section" style="background-color: #4DB2DC;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12 content-heading my-auto">
                            {!! $cruise_vacation->section_4_description !!}
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <img src="{{ asset("storage/$cruise_vacation->section_4_image") }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
