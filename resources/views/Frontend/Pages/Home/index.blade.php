@extends('Frontend.layout.master')


@section('title')
    <title>{{ $content->meta_title }}</title>
@endsection
@section('meta_description')
    <meta name="meta_description" content="{{ $content->meta_description }}">
@endsection
@section('meta_keywords')
    <meta name="meta_keywords" content="{{ $content->meta_keywords }}">
@endsection

@section('page-contents')
    <section class="main-banner" style="background-image: url({{ asset("storage/$content->banner") }}); ">
        <div class="container">
            <div class="row">
                <h1 class="banner-title">{{ $content->title }}</h1>
                <p>Find awesome flights, hotel, tour, car and packages</p>
            </div>
        </div>
    </section>


    <section class="tab-sec">
        <div class="container">
            <div class="row">
                <div class="main-tab">

                    <div class="col-lg-9 mx-auto">
                        <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">
                                <i class="fal fa-gifts"></i>
                                <p>PACKAGES</p>
                            </button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                <i class="fal fa-plane-departure"></i>
                                <p>FLIGHTS</p>
                            </button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                <i class="fal fa-hotel"></i>
                                <p>HOTELS</p>
                            </button>
                            <button class="nav-link" id="nav-car-tab" data-bs-toggle="tab" data-bs-target="#nav-car"
                                type="button" role="tab" aria-controls="nav-car" aria-selected="false">
                                <i class="fal fa-car"></i>
                                <p>CAR RENTAL</p>
                            </button>
                            <button class="nav-link" id="nav-cruises-tab" data-bs-toggle="tab" data-bs-target="#nav-cruises"
                                type="button" role="tab" aria-controls="nav-cruises" aria-selected="false">
                                <i class="fal fa-ship"></i>
                                <p>CRUISES</p>
                            </button>
                        </div>
                    </div>

                    <div class="tab-content " id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                            tabindex="0">

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="oneway_search_form">
                                    <form action="#!">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="flight_Search_boxed">
                                                    <p>From</p><input type="text" value="Delhi"><span>Indra gandhi
                                                        internation airport...</span>
                                                    <div class="plan_icon_posation"><i class="fas fa-plane-departure"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="flight_Search_boxed">
                                                    <p>To</p><input type="text" value="London "><span>LCY, Dubai city
                                                        airport </span>
                                                    <div class="plan_icon_posation"><i class="fas fa-plane-arrival"></i>
                                                    </div>
                                                    <div class="range_plan"><i class="fas fa-exchange-alt"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="form_search_date">
                                                    <div class="flight_Search_boxed date_flex_area">
                                                        <div class="Journey_date">
                                                            <p>Journey date</p><input type="date"
                                                                value="2022-05-05"><span>Thursday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                                <div class="flight_Search_boxed dropdown_passenger_area">
                                                    <p>Passenger, Class </p>
                                                    <div class="">
                                                        <h6 class="final-count">0 Passenger </h6>
                                                    </div>
                                                    <span>Business</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 text-center mt-4 col-sm-12">
                                                <a href="#" class="button2 text-decoration-none">Search</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                            tabindex="0">
                            <div class="tour_search_form">
                                <form action="#!">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                            <div class="flight_Search_boxed">
                                                <p>Destination</p><input type="text"
                                                    placeholder="Where are you going?"><span>Where are you going?</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                                            <div class="form_search_date">
                                                <div class="flight_Search_boxed date_flex_area">
                                                    <div class="Journey_date">
                                                        <p>Journey date</p><input type="date"
                                                            value="2022-05-03"><span>Thursday</span>
                                                    </div>
                                                    <div class="Journey_date">
                                                        <p>Return date</p><input type="date"
                                                            value="2022-05-05"><span>Thursday</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                            <div class="flight_Search_boxed dropdown_passenger_area">
                                                <p>Passenger, Class </p>
                                                <div class="">
                                                    <h6 class="final-count">0 Passenger </h6>
                                                </div>
                                                <span>Business</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 text-center mt-4 col-sm-12">
                                            <a href="#" class="button2 text-decoration-none">Search</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                            tabindex="0">
                            <div class="tour_search_form">
                                <form action="#!">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                            <div class="flight_Search_boxed">
                                                <p>Destination</p><input type="text"
                                                    placeholder="Where are you going?"><span>Where are you going?</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                                            <div class="form_search_date">
                                                <div class="flight_Search_boxed date_flex_area">
                                                    <div class="Journey_date">
                                                        <p>Journey date</p><input type="date"
                                                            value="2022-05-03"><span>Thursday</span>
                                                    </div>
                                                    <div class="Journey_date">
                                                        <p>Return date</p><input type="date"
                                                            value="2022-05-05"><span>Thursday</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                            <div class="flight_Search_boxed dropdown_passenger_area">
                                                <p>Passenger, Class </p>
                                                <div class="">
                                                    <h6 class="final-count">0 Passenger </h6>
                                                </div>
                                                <span>Business</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 text-center mt-4 col-sm-12">
                                            <a href="#" class="button2 text-decoration-none">Search</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-car" role="tabpanel" aria-labelledby="nav-car-tab"
                            tabindex="0">
                            <div class="tour_search_form">
                                <form action="#!">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                            <div class="flight_Search_boxed">
                                                <p>Destination</p><input type="text"
                                                    placeholder="Where are you going?"><span>Where are you going?</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                                            <div class="form_search_date">
                                                <div class="flight_Search_boxed date_flex_area">
                                                    <div class="Journey_date">
                                                        <p>Journey date</p><input type="date"
                                                            value="2022-05-03"><span>Thursday</span>
                                                    </div>
                                                    <div class="Journey_date">
                                                        <p>Return date</p><input type="date"
                                                            value="2022-05-05"><span>Thursday</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                            <div class="flight_Search_boxed dropdown_passenger_area">
                                                <p>Passenger, Class </p>
                                                <div class="">
                                                    <h6 class="final-count">0 Passenger </h6>
                                                </div>
                                                <span>Business</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 text-center mt-4 col-sm-12">
                                            <a href="#" class="button2 text-decoration-none">Search</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-cruises" role="tabpanel" aria-labelledby="nav-cruises-tab"
                            tabindex="0">
                            <div class="tour_search_form">
                                <form action="#!">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                            <div class="flight_Search_boxed">
                                                <p>Destination</p><input type="text"
                                                    placeholder="Where are you going?"><span>Where are you going?</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                                            <div class="form_search_date">
                                                <div class="flight_Search_boxed date_flex_area">
                                                    <div class="Journey_date">
                                                        <p>Journey date</p><input type="date"
                                                            value="2022-05-03"><span>Thursday</span>
                                                    </div>
                                                    <div class="Journey_date">
                                                        <p>Return date</p><input type="date"
                                                            value="2022-05-05"><span>Thursday</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                            <div class="flight_Search_boxed dropdown_passenger_area">
                                                <p>Passenger, Class </p>
                                                <div class="">
                                                    <h6 class="final-count">0 Passenger </h6>
                                                </div>
                                                <span>Business</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 text-center mt-4 col-sm-12">
                                            <a href="#" class="button2 text-decoration-none">Search</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-sec bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 abt-heading">
                    <h1>About us</h1>
                </div>
                <div class="col-lg-5 my-auto">
                    <div class="abt-cont">
                        <h3>{{ $content->about_us_title }}</h3>
                        <p>
                            {!! $content->about_us_description !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 text-left abt-img my-auto">
                    <img src="{{ asset("storage/$content->about_us_image") }}" alt="">
                </div>
            </div>
        </div>
    </section>


    <section id="offer_area" class="ptb">
        <div class="container mt-5">
            <div class="row">
                @foreach ($home_images as $home_image)
                    <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="offer_area_box d-none-phone img_animation"><img
                                src="{{ asset("storage/$home_image->image") }}" alt="img">
                            <div class="offer_area_content">
                                <h2>{{ $home_image->title }}</h2>
                                <p>{!! $home_image->description !!}</p>
                                <a href="#!" class="button-sm text-decoration-none">Get tips</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <section class="solution1-section"
        style="background-image: url({{ asset("storage/$content->read_more_image") }})">
        <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-4 col-md-6 px-0 col-sm-12 ms-auto">
                <div class="solution-content-right">
                    <!-- <h4 class="Title wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.5s">-SOLUTIONS-</h4> -->
                    <h1 class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1.5s">
                        {{ $content->read_more_title }}</h1>
                    <p class="wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1.5s">
                        {!! $content->read_more_description !!}
                    </p>

                    <div class="col-md-12 mt-5  wow flipInX" data-wow-delay=".6s" data-wow-duration="1.5s">
                        <a href="{{ $content->read_more_link }}" class="button2 text-decoration-none">Read more</a>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    <section class="package-sec ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">

                    <div class="section_heading_center">
                        <h2>Destinations for you</h2>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3">
                    <select name="" id="">
                        <option value="">Select Location</option>
                        <option value="">England</option>
                        <option value="">Austrlia</option>
                        <option value="">Canada</option>
                        <option value="">Spain</option>
                    </select>
                </div>

                <div id="package" class="owl-carousel owl-theme package owl-loaded owl-drag">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="#" class="">
                                            <img src="./assets/img/destination-1.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3>Annapurna region</h3>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="price-tab text-center">
                                        <div class="price">
                                            <h3>$1539</h3>
                                            <p>Taxes & fees incl.</p>
                                        </div>
                                        <div class="book">
                                            <h6>BOOK</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="#" class="">
                                            <img src="./assets/img/destination-2.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3>Annapurna region</h3>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="price-tab text-center">
                                        <div class="price">
                                            <h3>$1539</h3>
                                            <p>Taxes & fees incl.</p>
                                        </div>
                                        <div class="book">
                                            <h6>BOOK</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="#" class="">
                                            <img src="./assets/img/destination-3.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3>Annapurna region</h3>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="price-tab text-center">
                                        <div class="price">
                                            <h3>$1539</h3>
                                            <p>Taxes & fees incl.</p>
                                        </div>
                                        <div class="book">
                                            <h6>BOOK</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="#" class="">
                                            <img src="./assets/img/destination-4.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3>Annapurna region</h3>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="price-tab text-center">
                                        <div class="price">
                                            <h3>$1539</h3>
                                            <p>Taxes & fees incl.</p>
                                        </div>
                                        <div class="book">
                                            <h6>BOOK</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="#" class="">
                                            <img src="./assets/img/destination-3.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3>Annapurna region</h3>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="price-tab text-center">
                                        <div class="price">
                                            <h3>$1539</h3>
                                            <p>Taxes & fees incl.</p>
                                        </div>
                                        <div class="book">
                                            <h6>BOOK</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="#" class="">
                                            <img src="./assets/img/destination-4.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3>Annapurna region</h3>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>

                                    <div class="price-tab text-center">
                                        <div class="price">
                                            <h3>$1539</h3>
                                            <p>Taxes & fees incl.</p>
                                        </div>
                                        <div class="book">
                                            <h6>BOOK</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="#" class="">
                                            <img src="./assets/img/destination-1.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3>Annapurna region</h3>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="price-tab text-center">
                                        <div class="price">
                                            <h3>$1539</h3>
                                            <p>Taxes & fees incl.</p>
                                        </div>
                                        <div class="book">
                                            <h6>BOOK</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="#" class="">
                                            <img src="./assets/img/destination-2.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3>Annapurna region</h3>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="price-tab text-center">
                                        <div class="price">
                                            <h3>$1539</h3>
                                            <p>Taxes & fees incl.</p>
                                        </div>
                                        <div class="book">
                                            <h6>BOOK</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="#" class="">
                                            <img src="./assets/img/destination-3.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3>Annapurna region</h3>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="price-tab text-center">
                                        <div class="price">
                                            <h3>$1539</h3>
                                            <p>Taxes & fees incl.</p>
                                        </div>
                                        <div class="book">
                                            <h6>BOOK</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="#" class="">
                                            <img src="./assets/img/destination-4.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3>Annapurna region</h3>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="price-tab text-center">
                                        <div class="price">
                                            <h3>$1539</h3>
                                            <p>Taxes & fees incl.</p>
                                        </div>
                                        <div class="book">
                                            <h6>BOOK</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="#" class="">
                                            <img src="./assets/img/destination-3.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3>Annapurna region</h3>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="price-tab text-center">
                                        <div class="price">
                                            <h3>$1539</h3>
                                            <p>Taxes & fees incl.</p>
                                        </div>
                                        <div class="book">
                                            <h6>BOOK</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="#" class="">
                                            <img src="./assets/img/destination-4.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3>Annapurna region</h3>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="price-tab text-center">
                                        <div class="price">
                                            <h3>$1539</h3>
                                            <p>Taxes & fees incl.</p>
                                        </div>
                                        <div class="book">
                                            <h6>BOOK</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2> Special Offers</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset("storage/$content->special_offer_banner_1") }}" class="img-fluid rounded"
                        alt="" srcset="">
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset("storage/$content->special_offer_banner_2") }}" class="img-fluid rounded"
                        alt="" srcset="">
                </div>

            </div>
        </div>
    </section>

    <section class="airlines mt-70 mb-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Airlines</h2>
                    </div>
                </div>
                <div id="airline" class="owl-carousel owl-theme airline mt-4 owl-loaded owl-drag">
                    @foreach ($home_airlines as $home_airline)
                        <div class="item">
                            <div class="airline-sec col-lg-9 my-auto mx-auto">
                                <img src="{{ asset("storage/$home_airline->image") }}" class="img-fluid pt-2"
                                    alt="">
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <section class="video-sec">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-lg-12 px-0">
                    <div class="qodef-video-button-holder">
                        <div class="qodef-video-button-image">
                            <img width="1920" height="450" src="{{ asset("storage/$content->new_letter_image") }}"
                                class="attachment-full size-full" alt="a" decoding="async" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2> <strong>Subscribe To</strong> The Newsletter</h2>
                    <input type="emial" placeholder="Your Email...">
                    <button class="button">Subscribe</button>
                </div>
            </div>
        </div>
    </section>
    <div class="qodef-row-overlapping-text qodef-appear">AWAY</div>


    <section class="testimonial ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Testimonials</h2>

                    </div>
                </div>
                <div id="reviews" class="owl-carousel owl-theme reviews owl-loaded owl-drag">
                    <div class="item">
                        @foreach ($home_testimonials as $home_testimonial)
                            <div class="review-sec col-lg-11 mx-auto">
                                <div class="star-sec mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>{!! $home_testimonial->description !!}</p>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="review-img">
                                            <img src="{{ asset("storage/$home_testimonial->image") }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h3>{{ $home_testimonial->name }}</h3>
                                        <p>{{ $home_testimonial->post }}</p>
                                    </div>
                                </div>
                                <img src="{{ asset('Frontend/img/left-quotes-sign.png') }}" class="left-quote"
                                    alt="">
                                <img src="{{ asset('Frontend/img/left-quotes-sign.png') }}" class="right-quote"
                                    alt="">
                            </div>
                        @endforeach

                    </div>
                    {{-- <div class="item">
                        <div class="review-sec col-lg-11 mx-auto">
                            <div class="star-sec mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Suspendisse varius enim in
                                elementum tristique. Duis cursus viverra.</p>
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="review-img">
                                        <img src="./assets/img/reviews-2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Earida Florida</h3>
                                    <p>Business developer</p>
                                </div>
                            </div>
                            <img src="./assets/img/left-quotes-sign.png" class="left-quote" alt="">
                            <img src="./assets/img/left-quotes-sign.png" class="right-quote" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="review-sec col-lg-11 mx-auto">
                            <div class="star-sec mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Suspendisse varius enim in
                                elementum tristique. Duis cursus viverra.</p>
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="review-img">
                                        <img src="./assets/img/reviews-2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Earida Florida</h3>
                                    <p>Business developer</p>
                                </div>
                            </div>
                            <img src="./assets/img/left-quotes-sign.png" class="left-quote" alt="">

                        </div>
                    </div>
                    <div class="item">
                        <div class="review-sec col-lg-11 mx-auto">
                            <div class="star-sec mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Suspendisse varius enim in
                                elementum tristique. Duis cursus viverra.</p>
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="review-img">
                                        <img src="./assets/img/reviews-2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Earida Florida</h3>
                                    <p>Business developer</p>
                                </div>
                            </div>
                            <img src="./assets/img/left-quotes-sign.png" class="left-quote" alt="">
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
