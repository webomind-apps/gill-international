<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('title')
    @yield('meta_description')
    @yield('meta_keywords')

    {{-- <link rel="stylesheet" href="./assets/css/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('Frontend/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


</head>

<body>

    @include('Frontend.layout.top-nav')

    @yield('page-contents')

    @include('Frontend.layout.footer')


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    {{-- <script src="./assets/js/owl.carousel.min.js"></script> --}}
    <script src="{{ asset('Frontend/js/owl.carousel.min.js') }}"></script>

    <script>
        (function($) {
            $(function() {

                $('nav ul li a:not(:only-child)').click(function(e) {
                    $(this).siblings('.nav-dropdown').toggle();

                    $('.nav-dropdown').not($(this).siblings()).hide();
                    e.stopPropagation();
                });

                $('html').click(function() {
                    $('.nav-dropdown').hide();
                });

                $('#nav-toggle').click(function() {
                    $('nav ul').slideToggle();
                });

                $('#nav-toggle').on('click', function() {
                    this.classList.toggle('active');
                });
            });
        })(jQuery);
    </script>

    <script>
        $('.reviews').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            navText: ["<div class='nav-btn prev-slide'><i class='fas fa-arrow-left'></i></div>",
                "<div class='nav-btn next-slide'><i class='fas fa-arrow-right'></i></div>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        })
    </script>

    <script>
        $('.airline').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                768: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>

    <script>
        $('.package').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            navText: ["<div class='nav-btn prev-slide'><i class='fas fa-arrow-left'></i></div>",
                "<div class='nav-btn next-slide'><i class='fas fa-arrow-right'></i></div>"
            ],

            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>

    <script>
        window.addEventListener('scroll', function() {
            let navigation = document.querySelector('.navigation');
            navigation.classList.toggle('sticky', window.scrollY > 0);
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".alert").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert").slideUp(400);
            });
        })
    </script>
</body>

</html>
