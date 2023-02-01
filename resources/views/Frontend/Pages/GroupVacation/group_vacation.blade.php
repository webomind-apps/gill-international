@extends('Frontend.layout.master')

@section('title')
    <title>{{ $group_vacation->meta_title }}</title>
@endsection
@section('meta_description')
    <meta name="meta_description" content="{{ $group_vacation->meta_description }}">
@endsection
@section('meta_keywords')
    <meta name="meta_keywords" content="{{ $group_vacation->meta_keywords }}">
@endsection

@section('page-contents')
    <section class="breadcrum"
        style="background-image: url(./assets/img/group/group-banner.png); background-position: bottom center; ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h1>Group Travel</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ptb group-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mx-auto col-md-6 col-sm-12">
                    <img src="./assets/img/group/Group Travel - Copy.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 col-md-6 m-auto col-sm-12">
                    <div class="content">
                        <h1 class="mb-4">Group Travel</h1>
                        <p>
                            From vacation weddings and family reunions to girlfriend getaways and club events, there is
                            something for everyone. The professionals at Gill Travel can tailor your group's itinerary
                            for a completely unique travel experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="holiday_destinations" class="ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="holiday_left_heading">
                        <div class="heading_left_area">
                            <h1 class="group-title">Among our most popular <span class="text-primary">locations
                                    are:</span></h1>
                        </div>
                    </div>
                    <div class="holiday_small_boxed"><a href="#" class=""><img
                                src="./assets/img/group/Adventure excursions.jpg" class="img-fluid" alt="img">
                            <div class="holiday_small_box_content">
                                <div class="holiday_inner_content">
                                    <h5>Adventure excursions for the <br> arts and leisure</h5>
                                </div>
                            </div>
                        </a></div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="holiday_small_boxed"><a href="#" class=""><img
                                                        src="./assets/img/group/Culinary tours and curises.png"
                                                        alt="img">
                                                    <div class="holiday_small_box_content">
                                                        <div class="holiday_inner_content">
                                                            <h4>Culinary Tours and Cruises</h4>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="holiday_small_boxed"><a href="#" class=""><img
                                                        src="./assets/img/group/Aniversary and Milestone Birthdays.png"
                                                        alt="img">
                                                    <div class="holiday_small_box_content">
                                                        <div class="holiday_inner_content">
                                                            <h4>Anniversary and milestone birthdays</h4>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="holiday_small_boxed"><a href="/top-destinations-details"
                                                    class=""><img
                                                        src="./assets/img/group/Employee Incentive programs and conference.png"
                                                        alt="img">
                                                    <div class="holiday_small_box_content">
                                                        <div class="holiday_inner_content">
                                                            <h4>Employee incentive programs and conferences</h4>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="holiday_small_boxed"><a href="/top-destinations-details"
                                                    class=""><img
                                                        src="./assets/img/group/student and graduation excurtions.png"
                                                        alt="img">
                                                    <div class="holiday_small_box_content">
                                                        <div class="holiday_inner_content">
                                                            <h4>Student and graduation excursions</h4>
                                                        </div>
                                                    </div>
                                                </a></div>
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


    <section class="planning-bg" style="background-image: url(./assets/img/wedding/Planning-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto col-md-12 col-sm-12">
                    <p>
                        We'll assist you in making all of the preparations for event facilities, excursions and meals,
                        event coordination, activities, and so much more! Best of all, groups receive substantial
                        discounts, savings, and bonuses! More information is available below, as well as in our FAQ. If
                        you already have a project in
                        mind or have more inquiries, please contact one of our travel professionals.

                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="ptb faq-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Group Travel FAQS</h2>
                    </div>
                </div>
                <div class="col-lg-10 mx-auto col-md-12 col-sm-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fal fa-plane"></i> How many people make up a Group?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Depending on the travel company, groups might start as small as <strong>eight
                                            persons.</strong>
                                        Furthermore, there is no size restriction or maximum number of passengers. The
                                        more the better!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fal fa-plane"></i> Can members of a group depart from various locations?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Yes, we can accommodate a group of travelers departing from airports across
                                        Canada.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fal fa-plane"></i> Do all members of a group have to book in-person and
                                    in-store?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        No. &nbsp; Gill Travel is dedicated to making your group travel bookings as simple
                                        as
                                        possible.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fal fa-plane"></i> How much does a group discount cost?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Discounts vary depending on a variety of criteria, including group size, length
                                        of stay, special events, and more. Discuss your group travel needs with your
                                        Gill Travel Professional, and they will ensure that you receive all of the
                                        discounts that your group is entitled for.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <i class="fal fa-plane"></i> Are there any further benefits to group travel besides
                                    cheaper flight and lodging?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Yes! For starters, groups can benefit from various payment options, which
                                        frequently demand lesser deposits to guarantee each booking
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <i class="fal fa-plane"></i> What kind of organizations are permitted to travel
                                    together?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Whatever you want! Marlin Trips has organized all types of group travel. We are
                                        pleased to plan excursions for friends and family, as well as destination
                                        weddings and anniversaries. In addition to upfront reductions, your group may be
                                        eligible for complimentary passengers and more flexible conditions. Make sure to
                                        consult your Gill Travel Professional for more information!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

