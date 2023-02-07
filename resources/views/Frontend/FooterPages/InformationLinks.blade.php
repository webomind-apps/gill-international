@extends('Frontend.layout.master')

{{-- @section('title')
    <title>{{ $link->meta_title }}</title>
@endsection
@section('meta_description')
    <meta name="meta_description" content="{{ $link->meta_description }}">
@endsection
@section('meta_keywords')
    <meta name="meta_keywords" content="{{ $link->meta_keywords }}">
@endsection --}}

@section('page-contents')
    <section class="breadcrum" style="background-image: url({{ asset("Frontend/img/group/group-banner.png") }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    {{-- <h1>{{ $disney->title }}</h1> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="privacy-policy-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 main-privacy-cont">
                    <h2>{{ $link->title }}</h2>

                    <p>
                        {!! $link->description !!}
                    </p>

                </div>
            </div>
        </div>
    </section>
@endsection
