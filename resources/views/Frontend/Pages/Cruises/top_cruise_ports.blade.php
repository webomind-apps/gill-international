@extends('Frontend.layout.master')

@section('page-contents')
    {{-- <section class="breadcrum" style="background-image: url(./assets/img/cruise/Cruise\ Ports\ banner.png); "> --}}
    <section class="breadcrum" style="background-image: url({{asset('Frontend/img/cruise/Cruise-Ports-banner.png')}}); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h1>Cruise Ports</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="vacation-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content">
                    <div class="row">

                        <div class="col-lg-5 col-md-12 col-sm-12 my-auto">
                            <img src="./assets/img/cruise/second page cruise.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 content-heading my-auto">
                            <h1>Top Cruise <span>Ports</span></h1>

                            <p>Choose from the Caribbean's sun-dappled white sand beaches and turquoise oceans to
                                Europe's historic monuments, mediaeval castles, and vineyards. Alternatively, take in
                                the rough, breathtakingly gorgeous natural scenery of Alaska and beyond. A cruise is one
                                of the finest ways to explore the world, as it generally includes numerous locations in
                                a single journey.
                            </p>
                            <p>
                                Here are our top cruise vacation spots. Speak with your Gill Travel specialist to
                                learn more or to discover a world of other great cruise venues and destinations.
                            </p>
                            <p>
                                Our recommended cruise destinations are listed below, stemming from 3 central
                                locations in Alaska, European Cities and the Caribbean Islands.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vacation-tab-section">
        <div class="vacation-tab1">
            <div class="col-lg-6 col-md-7 col-sm-12 mx-auto">
                <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                        Alaska Ports
                    </button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                        European Ports
                    </button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                        type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                        Caribbean Ports
                    </button>

                </div>
            </div>
        </div>
        <div class="tab-content " id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">

                <div class="container mt-5 tab-cont shadow">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="row">
                            <div class="col-lg-5 text-center mx-auto">
                                <img src="./assets/img/cruise/Group 2 (2).png" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 mx-auto my-auto">
                                <h2>Juneau</h2>
                                <p>
                                    Juneau, located on the mainland side of Gastineau Channel, offers tourists
                                    breathtaking
                                    views of the channel's numerous spectacular fjords. Take one of our helicopter shore
                                    excursions to see the glaciers from a different perspective. Keep a watch out for
                                    bears,
                                    mountain goats, and moose before landing and taking a typical dogsled ride.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5 pt-5">
                        <div class="row">

                            <div class="col-lg-6 mx-auto my-auto">
                                <h2>Ketchikan</h2>
                                <p>
                                    Ketchikan is known as the "Salmon Capital of the World" because of the five types of
                                    North Pacific salmon that thrive in its clean, chilly waters. Join our professional
                                    guides on a fishing excursion onboard a well-equipped vessel, catch a big one, and
                                    even have our crew arrange for your catch to be shipped home for you! Misty Fiords
                                    National Monument, located outside of Ketchikan, is a glacier-carved wilderness with
                                    abundant species including as black bears, wolves, and bald eagles, as well as
                                    spectacular snowcapped mountains, waterfalls, and salmon spawning streams.

                                </p>
                            </div>
                            <div class="col-lg-4 text-center mx-auto">
                                <img src="./assets/img/cruise/Group 2 (2).png" class="img-fluid" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5 pt-5">
                        <div class="row">
                            <div class="col-lg-4 text-center mx-auto">
                                <img src="./assets/img/cruise/Group 2 (2).png" class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-6 mx-auto my-auto">
                                <h2>Skagway</h2>
                                <p>
                                    Skagway has fewer than a thousand residents, but there is plenty of history,
                                    culture, and sights to see. Ride in vintage rail cars retracing the original route
                                    from the tidewater to the 2,865-foot summit of the White Pass on the Scenic Railway
                                    of the World.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <div class="container mt-5 tab-cont shadow">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="row">
                            <div class="col-lg-5 text-center mx-auto">
                                <img src="./assets/img/cruise/Group 2 (2).png" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 mx-auto my-auto">
                                <h2>Athens</h2>
                                <p>
                                    Athens, the capital of modern Greece, has been the hub of Greek civilization for
                                    4,000 years, with prominent landmarks dating back to the 5th century B.C. Of course,
                                    no vacation to Athens is complete without seeing the Acropolis. The Parthenon,
                                    erected as a temple to Athena, is the biggest edifice on the Acropolis and one of
                                    the world's most impressive sites. Explore Plaka, Athens' historic quarter, with its
                                    tiny streets and lanes dotted with neoclassical homes, taverns, and quaint tourist
                                    shops selling traditional pottery and tapestries.

                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5 pt-5">
                        <div class="row">

                            <div class="col-lg-6 mx-auto my-auto">
                                <h2>Barcelona</h2>
                                <p>
                                    Barcelona's multicultural city is unique, exotic, vibrant, and simply eccentric.
                                    This wonderful city is a must-see for its active street life, colorful art and
                                    architecture, and delicious food. Restaurants abound, anchored by the famous La
                                    Boqueria market, ranging from gourmet dining to modest tapas eateries.
                                </p>
                            </div>
                            <div class="col-lg-4 text-center mx-auto">
                                <img src="./assets/img/cruise/Group 2 (2).png" class="img-fluid" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5 pt-5">
                        <div class="row">
                            <div class="col-lg-4 text-center mx-auto">
                                <img src="./assets/img/cruise/Group 2 (2).png" class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-6 mx-auto my-auto">
                                <h2>Copenhagen</h2>
                                <p>
                                    The capital of Denmark has a plethora of wonderful sights and experiences to offer
                                    visitors. Copenhagen's restaurant culture is among the greatest in the world,
                                    unique, inventive, and accommodating to all budgets. It's also a design paradise,
                                    having given birth in the 1950s to the ever-popular Scandinavian or Danish Modern
                                    furniture movement.
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5 pt-5">
                        <div class="row">

                            <div class="col-lg-6 mx-auto my-auto">
                                <h2>Rome</h2>
                                <p>
                                    Explore the Roman Forum, Trevi Fountain, and other old city attractions. Consider
                                    gladiators and their chariots on a tour of the Coliseum's interior. Enjoy the
                                    history of Vatican City and get an intimate look at St. Peter's Square and St.
                                    Peter's Basilica, the world's biggest cathedral. The beautiful Sistine Chapel, with
                                    its wonderfully created ceiling by Michelangelo, and the Vatican Museum, which holds
                                    the world's biggest art collection.

                                </p>
                            </div>
                            <div class="col-lg-4 text-center mx-auto">
                                <img src="./assets/img/cruise/Group 2 (2).png" class="img-fluid" alt="">
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5 pt-5">
                        <div class="row">
                            <div class="col-lg-4 text-center mx-auto">
                                <img src="./assets/img/cruise/Group 2 (2).png" class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-6 mx-auto my-auto">
                                <h2>St. Petersburg</h2>
                                <p>
                                    St. Petersburg, hailed as one of the most beautiful cities in the world, has it
                                    everything. Famous pieces of art, exotic nightlife, opulent architecture, and a rich
                                    history and cultural traditions that have produced some of the world's best
                                    literature, music, and art. If you enjoy opera and ballet, the Mariinsky Theatre is
                                    a must-see. St. Petersburg, a very intriguing city at any time of year, is bound to
                                    enchant.

                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5 pt-5">
                        <div class="row">
                            <div class="col-lg-6 mx-auto my-auto">
                                <h2>Venice</h2>
                                <p>
                                    This wonderful city, founded more than 1,000 years ago, is the center of Italian
                                    culture as well as a haven for hopeless romantics. Travel is via boat or the famed
                                    gondolas on The Grand Canal, as there are no vehicles or highways.
                                </p>
                            </div>
                            <div class="col-lg-4 text-center mx-auto">
                                <img src="./assets/img/cruise/Group 2 (2).png" class="img-fluid" alt="">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                tabindex="0">
                <div class="container mt-5 tab-cont shadow">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="row">
                            <div class="col-lg-5 text-center mx-auto">
                                <img src="./assets/img/cruise/Group 2 (2).png" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 mx-auto my-auto">
                                <h2>Bahamas</h2>
                                <p>
                                    In Paradise Island, home to the opulent Bahamian resort Atlantis, you may view more
                                    than 50,000 diverse kinds of marine life in the world's biggest open-air aquarium.
                                    Alternatively, enroll in the Aqua venture program at the Caribbean's greatest water
                                    park and treat your senses to a Discover Atlantis Tour.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5 pt-5">
                        <div class="row">

                            <div class="col-lg-6 mx-auto my-auto">
                                <h2>Cozumel</h2>
                                <p>
                                    The biggest island in the Mexican Caribbean is located less than 20 kilometres off
                                    the shore of the Yucatan Peninsula. It's a refuge for sunbathers and underwater
                                    explorers alike because it's mostly underdeveloped. If snorkeling is on your
                                    itinerary, the seas around Cozumel's protected coral reefs provide some of the
                                    greatest scuba and snorkeling in the world. Crystal clear water and reefs filled
                                    with marine life combine to create an underwater playground.
                                </p>
                            </div>
                            <div class="col-lg-4 text-center mx-auto">
                                <img src="./assets/img/cruise/Group 2 (2).png" class="img-fluid" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5 pt-5">
                        <div class="row">
                            <div class="col-lg-4 text-center mx-auto">
                                <img src="./assets/img/cruise/Group 2 (2).png" class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-6 mx-auto my-auto">
                                <h2>Curaçao</h2>
                                <p>
                                    This island republic in the southern Caribbean Sea is located approximately 65
                                    kilometres north of Venezuela's coast and is the largest of the six islands that
                                    make up the Netherlands Antilles. With pastel-painted colonial buildings, the
                                    floating Queen Emma Bridge, and the 17th-century Mikvé Israel-Emanuel Synagogue with
                                    sand floors, the Dutch influence is alive and well in the capital city of
                                    Willemstad.

                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5 pt-5">
                        <div class="row">

                            <div class="col-lg-6 mx-auto my-auto">
                                <h2>Jamaica</h2>
                                <p>
                                    Jamaica is known for both its chill reggae music vibes and its fiery and spicy jerk
                                    food. Take in the green, rolling Blue Mountain situated high above this gorgeous
                                    island, producing some of the world's most unique coffee. Whether you're searching
                                    for adventure or simply want to rest and enjoy on its sunny beaches, Jamaica
                                    provides a vacation experience that you'll remember long after you've gone home.
                                </p>
                            </div>
                            <div class="col-lg-4 text-center mx-auto">
                                <img src="./assets/img/cruise/Group 2 (2).png" class="img-fluid" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5 pt-5">
                        <div class="row">
                            <div class="col-lg-4 text-center mx-auto">
                                <img src="./assets/img/cruise/Group 2 (2).png" class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-6 mx-auto my-auto">
                                <h2>Puerto Rico</h2>
                                <p>
                                    This Caribbean Island paradise is actually a US territory with a distinct culture.
                                    El Yunque Rain Forest, with over 240 varieties of trees, hundreds of small orchids,
                                    and what was once thought to be the Fountain of Youth, should be at the top of your
                                    must-see list.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
