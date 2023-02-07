@extends('Frontend.layout.master')

@section('title')
    <title>{{ $disney->meta_title }}</title>
@endsection
@section('meta_description')
    <meta name="meta_description" content="{{ $disney->meta_description }}">
@endsection
@section('meta_keywords')
    <meta name="meta_keywords" content="{{ $disney->meta_keywords }}">
@endsection

@section('page-contents')
    <section class="breadcrum" style="background-image: url({{ asset("storage/$disney->banner") }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h1>{{ $disney->title }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ptb group-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 my-auto col-sm-12">
                    <div class="content px-4">
                        <h1 class="mb-4">{{ $disney->title }} </h1>
                        <p style="font-size: 16px;">
                            {!! $disney->description !!}

                        </p>
                    </div>
                </div>

                <div class="col-lg-6 mx-auto col-md-6 col-sm-12">
                    <img src="{{ asset("storage/$disney->image") }}" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>
@endsection
