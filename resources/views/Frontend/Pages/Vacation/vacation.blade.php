@extends('Frontend.layout.master')

@section('title')
    <title>{{ $vacation->meta_title }}</title>
@endsection
@section('meta_description')
    <meta name="meta_description" content="{{ $vacation->meta_description }}">
@endsection
@section('meta_keywords')
    <meta name="meta_keywords" content="{{ $vacation->meta_keywords }}">
@endsection

@section('page-contents')
    <section class="breadcrum"
        style="background-image: url({{asset("storage/$vacation->banner")}}); background-position: bottom center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h1>{{ $vacation->title }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ptb group-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 my-auto col-sm-12">
                    <div class="content px-4">
                        <h1>{{ $vacation->title }} </h1>
                        {{-- <p style="font-size: 16px;"> --}}
                            {!! $vacation->description !!}
                        {{-- </p> --}}
                    </div>

                </div>
                <div class="col-lg-5 mx-auto col-md-6 col-sm-12">
                    <img src="{{asset("storage/$vacation->image")}}" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>
@endsection
