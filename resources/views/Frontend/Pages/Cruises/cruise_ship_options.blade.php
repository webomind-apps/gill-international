@extends('Frontend.layout.master')

@section('title')
    <title>{{ $cruise_ship_options->meta_title }}</title>
@endsection
@section('meta_description')
    <meta name="meta_description" content="{{ $cruise_ship_options->meta_description }}">
@endsection
@section('meta_keywords')
    <meta name="meta_keywords" content="{{ $cruise_ship_options->meta_keywords }}">
@endsection

@section('page-contents')
    {{-- <section class="breadcrum" style="background-image: url(./assets/img/cruise/cruise03.jpg); "> --}}
    <section class="breadcrum" style="background-image: url({{ asset("storage/$cruise_ship_options->banner") }}); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h1>Cruise Ship Options</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ptb">
        <div class="container">
            <div class="row ship-option-sec">
                <div class="col-lg-7">
                    <img src="{{ asset("storage/$cruise_ship_options->header_image_1") }}" class="img-fluid" alt="">
                    <div class="row">
                        <div class="col-lg-9 py-5">
                            <h2 class="mb-4">{{ $cruise_ship_options->header_title }}</h2>
                            <p>
                                {!! $cruise_ship_options->header_description !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset("storage/$cruise_ship_options->header_image_2") }}" class="img-fluid option-long"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ship-option-cont">
                        <h3>Popular : <span>{{ $cruise_ship_options->popular_title }}</span> </h3>
                        <p>
                            {!! $cruise_ship_options->popular_description !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 px-0">
                    {{-- <img src="./assets/img/cruise/h3-video-background-img-1.jpg" class="img-fluid" alt=""> --}}
                    <img src="{{ asset("storage/$cruise_ship_options->popular_image") }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 px-0">
                    <img src="{{ asset("storage/$cruise_ship_options->premium_image") }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="ship-option-cont1">
                                <h3>Premium : <span>{{ $cruise_ship_options->premium_title }}</span> </h3>
                                <p>
                                    {!! $cruise_ship_options->premium_description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ship-option-cont">
                        <h3>Luxury : <span>{{ $cruise_ship_options->luxury_title }}</span> </h3>
                        <p>
                            {!! $cruise_ship_options->luxury_description !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 px-0">
                    <img src="{{ asset("storage/$cruise_ship_options->luxury_image") }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 px-0">
                    <img src="{{ asset("storage/$cruise_ship_options->river_cruises_image") }}" class="img-fluid"
                        alt="">
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="ship-option-cont1">
                                <h3>River cruises : <span>{{ $cruise_ship_options->river_cruises_title }}</span> </h3>
                                <p>
                                    {!! $cruise_ship_options->river_cruises_description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
