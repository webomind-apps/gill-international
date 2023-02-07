<section class="navigation">
    <div class="container">
        <div class="brand">
            <a href="index.html">
                <img src="{{ asset('Frontend/img/gill-logo.png') }}" height="60px" alt="" srcset="">
            </a>
        </div>

        <nav>
            <div class="nav-mobile"><a id="nav-toggle" href="javascript:void()"><span></span></a></div>
            <ul class="nav-list">
                <li class="underline">
                    <a href="{{ route('index') }}">Home</a>
                </li>
                <li class="underline">
                    <a href="#!">Pages</a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>

                    </ul>
                </li>
                <!-- <li class="underline">
                    <a href="#!">About</a>
                </li>
                <li class="underline">
                    <a href="#!">Services</a>
                </li> -->
                <li class="underline">
                    <a href="#!">Travel</a>
                </li>
                <li class="underline">
                    <a href="{{ route('flights') }}">Flights</a>
                </li>
                <li class="underline">
                    <a href="#!">Cruises</a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href="{{ route('cruise_vacation') }}">Cruise Vacations</a>
                        </li>
                        <li>
                            <a href="{{ route('top_cruise_ports') }}">Top Cruise Ports</a>
                        </li>
                        <li>
                            <a href="{{ route('cruise_ship_options') }}">Cruise Ship Options</a>
                        </li>
                    </ul>
                </li>
                <li class="underline">
                    <a href="{{ route('wedding') }}">Wedding</a>
                </li>
                <li class="underline">
                    <a href="{{ route('vacation') }}">Vacation</a>
                </li>
                <li class="underline">
                    <a href="#">Group Travel</a>
                </li>
                <li class="underline">
                    <a href="{{ route('disney') }}">Disney</a>
                </li>

                <li class="underline">
                    <a href="#!">Hotel</a>
                </li>
                <li class="underline">
                    <a href="#!">Travel Booking</a>
                </li>
                <li class="underline">
                    <a href="{{ route('contact-us-page') }}">Contact Us</a>
                </li>
                {{-- <li>
                    <select name="" id="">
                        <option value="">Select Location</option>
                        <option value="">England</option>
                        <option value="">Austrlia</option>
                        <option value="">Canada</option>
                        <option value="">Spain</option>

                    </select>
                </li> --}}
            </ul>
        </nav>
    </div>
</section>


