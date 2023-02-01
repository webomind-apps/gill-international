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
    <section class="breadcrum" style="background-image: url({{ asset("storage/$content->banner") }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>


    @if (session()->has('message'))
        <div class="alert alert-success" style="text-align: center">
            {{ session()->get('message') }}
        </div>
    @endif

    <section class="contact-one ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ route('contact-us-query') }}" method="POST" class="contact-one__form ">
                        @csrf
                        <input type="hidden" value="contact.php" name="dsfdssdf">
                        <div class="section-title">
                            <h2 class="section-title__title">CONTACT INFORMATION</h2>
                        </div>
                        <div class="row ">
                            <div class="col-lg-6 col-md-12">
                                <input type="text" placeholder="Your name" name="name" id="name" required>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <input type="text" placeholder="Mobile No" name="phone_number" id="phone" required>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <input type="email" placeholder="Email address" name="email" required>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <textarea name="message" placeholder="Write message" required></textarea>
                            </div>

                            <div class="col-md-6">
                                <button class="button2" type="submit" name="dfgfshdhdf"><span>send a
                                        message</span></button>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-one__info" style="background-image: url(./assets/img/contact-one-bg-1-1.png);">
                        <div class="contact-one__item">
                            <h3 class="contact-one__item__title">ADDRESS</h3>
                            <p class="contact-one__item__text">{{ $content->address }}</p>
                        </div>
                        <div class="contact-one__item">
                            <h3 class="contact-one__item__title">TEL NO</h3>
                            <p class="contact-one__item__text">office: <a
                                    href="tel:{{ $content->phone_number }}">{{ $content->phone_number }}</a></p>

                        </div>
                        <div class="contact-one__item">
                            <h3 class="contact-one__item__title">EMAIL</h3>
                            <p class="contact-one__item__text"><a
                                    href="mailto:{{ $content->email }}">{{ $content->email }}</a></p>

                        </div>
                        <div class="contact-one__item">
                            <ul class="contact-one__social">
                                <li><a href="{{ $content->facebook_link }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $content->instagram_link }}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ $content->twitter_link }}"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 px-0">
                    <iframe src="{{ $content->map_link }}" width="100%" height="450" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </section>
@endsection
