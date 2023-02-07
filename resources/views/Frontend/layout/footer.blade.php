<footer id="footer_area">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>Need any help?</h5>
                </div>
                <div class="footer_first_area">
                    <div class="footer_inquery_area">
                        <h5>Call 24/7 for any help</h5>
                        <h3><a href="tel:+00-123-456-789">+00 123 456 789</a></h3>
                    </div>
                    <div class="footer_inquery_area">
                        <h5>Mail to our support team</h5>
                        <h3><a href="mailto:support@domain.com">support@dummy.com</a></h3>
                    </div>
                    <div class="footer_inquery_area">
                        <h5>Follow us on</h5>
                        <ul class="soical_icon_footer">
                            <li><a href="#!"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>Company</h5>
                </div>
                <div class="footer_link_area">
                    <ul>
                        <li><a href="{{ route('index') }}" class="">Home</a></li>
                        <li><a href="#" class="">About Us</a></li>
                        <li><a href="#" class="">Services</a></li>
                        <li><a href="#" class="">Travel</a></li>
                        <li><a href="{{ route('cruise_vacation') }}" class="">Cruise</a></li>
                        <li><a href="{{ route('vacation') }}" class="">Vacation</a></li>
                        <li><a href="#" class="">Hotel</a></li>
                        <li><a href="#" class="">Travel Booking</a></li>
                        <li><a href="{{ route('contact-us-page') }}" class="">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>Inforamtion Links</h5>
                </div>
                <div class="footer_link_area">
                    <ul class="footer-contact-info" id="information_links">
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>Useful Links</h5>
                </div>
                <div class="footer_link_area">
                    <ul class="footer-contact-info" id="footer_useful_links">
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>Destinations</h5>
                </div>
                <div class="footer_link_area">
                    <ul>
                        <li><a href="#" class=""> All destinations</a></li>
                        <li><a href="#" class="">Croatia</a></li>
                        <li><a href="#" class="">Cuba</a></li>
                        <li><a href="#" class="">France </a></li>
                        <li><a href="#" class="">Italy</a></li>
                        <li><a href="#" class="">Jamaica </a></li>
                        <li><a href="#" class="">Mexico</a></li>
                        <li><a href="#" class="">Portugal </a></li>
                        <li><a href="#" class="">Spain</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="footer-second">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex ">
                <img src="./assets/img/gill-logo.png" class="footer-logo" alt="" srcset="">
                <p>© {{ date('Y') }} Gill International Travel All rights reserved</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
                <img src="./assets/img/tico-logo-footer.png" height="30px" class="mt-2" alt="">
                <p>Travel Registration # 753141</p>
            </div>
        </div>
    </div>
</section>
