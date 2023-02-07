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
    <section class="breadcrum" style="background-image: url({{ asset("storage/$link->banner") }});">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h1>{{ $link->title }}</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>{{ $link->title }}</h1>
                            <p>
                                {!! $link->description !!}
                            </p>

                        </div>
                        @if($link->link)
                        <div class="col-lg-3 my-auto">

                            <a href="{{$link->link}}" class="button2 text-decoration-none" target="_blank">Visit
                                travel.gc.ca</a>

                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
