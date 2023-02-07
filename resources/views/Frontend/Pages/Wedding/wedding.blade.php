@extends('Frontend.layout.master')

@section('title')
    <title>{{ $wedding->meta_title }}</title>
@endsection
@section('meta_description')
    <meta name="meta_description" content="{{ $wedding->meta_description }}">
@endsection
@section('meta_keywords')
    <meta name="meta_keywords" content="{{ $wedding->meta_keywords }}">
@endsection

@section('page-contents')
    <section class="breadcrum"
        style="background-image: url({{ asset("storage/$wedding->banner") }}); background-position: top center; ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h1>{{ $wedding->title }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ptb wedding-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 ">
                    <div class="wedding-cont">
                        <h3 class="mb-4">{{ $wedding->destination_wedding_title }}</h3>
                        <p>
                            {!! $wedding->destination_wedding_description !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="wedding-img">
                        <img src="{{ asset("storage/$wedding->destination_wedding_image") }}" class="img-fluid rounded"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="wedding-img">
                        <img src="{{ asset("storage/$wedding->destination_wedding_form_image") }}" class="img-fluid rounded"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="wedding-cont" style="text-align: left;">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <h3 class="mb-4">{{ $wedding->destination_wedding_form_title }}</h3>
                                <p>
                                    {!! $wedding->destination_wedding_form_description !!}
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="vacation-section Planning">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <img src="{{ asset("storage/$wedding->destination_wedding_plan_image") }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 content-heading my-auto">
                            <h1 class="planning-title"> {{ $wedding->destination_wedding_plan_title }}</span></h1>
                            <p>
                                {!! $wedding->destination_wedding_plan_description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ptb">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <h2 style="color: #337d9d;"> Get Ahead and Plan Early </h2>
                </div>
                <div class="col-lg-6">
                    <p>
                        Planning ahead is the best way to go for any wedding, but it’s even more important when planning
                        a destination wedding. Gill Travel recommends following these 6 crucial steps to cover the basis
                        of your destination wedding.
                    </p>
                </div>

                <div class="col-lg-9 col-md-12 mx-auto ptb col-sm-12">
                    <div class="main-timeline">
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle">
                                    <span class="homebox">
                                        <img src="{{asset('Frontend/img/wedding/wedding-consiltant.jfif')}}" class="img">
                                    </span>
                                </div>
                                <div class="content">
                                    <span class="year">Step 1 </span>
                                    <h3 class="title h4">Choose your Gill Travel Wedding Consultant</h3>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span class="homebox"><img src="{{asset('Frontend/img/wedding/theme.jfif')}}"
                                            class="img" /></span></div>
                                <div class="content">
                                    <span class="year">Step 2</span>
                                    <h3 class="title h4"> Select an overall Wedding Theme</h3>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span class="homebox"><img
                                            src="{{asset('Frontend/img/wedding/Pickdestination.jfif')}}" class="img"></span></div>
                                <div class="content">
                                    <span class="year">Step 3</span>
                                    <h3 class="title h4"> Pick your Destination, Travel and Hotel </h3>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span class="homebox"><img src="{{asset('Frontend/img/wedding/weddingDate.jfif')}}"
                                            class="img"></span></div>
                                <div class="content">
                                    <span class="year">Step 4</span>
                                    <h3 class="title h4">Pick a Wedding Date </h3>

                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span class="homebox"><img
                                            src="{{asset('Frontend/img/wedding/Legal-Requirements.png')}}" class="img"></span></div>
                                <div class="content">
                                    <span class="year">Step 5</span>
                                    <h3 class="title 4">Get the Destination’s Legal Requirements</h3>

                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span class="homebox"><img
                                            src="{{asset('Frontend/img/wedding/Reservation.jfif')}}" class="img"></span></div>
                                <div class="content">
                                    <span class="year">Step 6</span>
                                    <h3 class="title h4">Complete your Reservation !</h3>

                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="planning-bg" style="background-image: url({{ asset("storage/$wedding->about_image") }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto col-md-12 col-sm-12">
                    <p>
                        {!! $wedding->about_description !!}
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="ptb wedding-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12 ">
                    <div class="wedding-cont">
                        <h3 class="mb-4">{{ $wedding->gift_registry_title }}</h3>
                        <p>
                            {!! $wedding->gift_registry_description !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="wedding-img">
                        <img src="{{ asset("storage/$wedding->gift_registry_image") }}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="wedding-img">
                        <img src="{{ asset("storage/$wedding->easy_registration_image") }}" class="img-fluid rounded" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="wedding-cont" style="text-align: left;">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <h3 class="mb-4">{{ $wedding->easy_registration_title }}</h3>
                                <p>
                                    {!! $wedding->easy_registration_description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-5 col-md-6 col-sm-12 ">
                    <div class="wedding-cont">
                        <h3 class="mb-4">{{$wedding->buying_process_title}}</h3>
                        <p>
                            {!!$wedding->buying_process_description!!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="wedding-img">
                        <img src="{{asset("storage/$wedding->buying_process_image")}}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="wedding-img">
                        <img src="{{asset("storage/$wedding->gift_card_image")}}" class="img-fluid rounded"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="wedding-cont" style="text-align: left;">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <h3 class="mb-4">{{$wedding->gift_card_title}} </h3>
                                <p>
                                    {!!$wedding->gift_card_description!!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-5 col-md-6 col-sm-12 ">
                    <div class="wedding-cont">
                        <h3 class="mb-4">{{$wedding->guest_title}}</h3>
                        <p>
                           {!!$wedding->guest_description!!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="wedding-img">
                        <img src="{{asset("storage/$wedding->guest_image")}}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 px-0">
                    <img src="{{asset("storage/$wedding->advantage_image")}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="planning-cont">
                                <h3 class="mt-4">{{$wedding->advantage_title}}</span> </h3>
                                <p>
                                    {!!$wedding->advantage_description!!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
