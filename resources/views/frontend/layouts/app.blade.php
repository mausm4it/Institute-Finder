<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>

    @yield('meta_tag')

    <title>{{ $settings->name }}</title>

    <link rel="shortcut icon" href="{{ asset('storage/app/' . $settings->icon) }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('storage/app/' . $settings->icon) }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('storage/app/' . $settings->icon) }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800,900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/simple-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/trackpad-scroll-emulator.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/jquery.datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/rangeslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/jquery.datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/jquery-steps.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/fontawesome.all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/style.css') }}">

    <script src="{{ asset('public/frontend/assets/js/modernizr.min.js') }}"></script>


    {{-- external Css --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('public/frontend/masum4it/masum4it_css.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



    {{-- external css end --}}

</head>

<body>
    <div class="site-content">
        {{-- @include('frontend.layouts.header') --}}




        @yield('header')
        <div id="sticky-header" class="sticky-header-one"></div>

        @if (Auth::guest())
            <div class="modal fade bd-example-modal-lg" id="loginPopup" tabindex="-1" role="dialog"
                aria-labelledby="loginPopupLabel" aria-hidden="true">
                <div class="modal-dialog d-flex justify-content-center" role="document">
                    <div class="modal-content">
                        <div class="modal-header">


                            <h5 class="modal-title" id="loginPopupLabel">Login Required</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <p class="text-white text-center bg-success shadow-lg p-3 m-1 rounded">If You Want To See More
                            Information And Apply
                            Institutes
                        </p>
                        <div class="modal-body">
                            <form id="signup-form" class="default-form signup-form" method="POST"
                                action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="name" name="name" class="form-controllar" type="text"
                                        placeholder="Name" required>
                                    <span class="icon-user-1"></span>
                                </div><!--/.form-group-->
                                <div class="form-group">
                                    <input id="email-up" name="email" class="form-controllar" type="email"
                                        placeholder="Email Address" required>
                                    <span class="icon-email"></span>
                                </div><!--/.form-group-->
                                <div class="form-group">
                                    <input id="pass-up" name="password" class="form-controllar" type="password"
                                        placeholder="Password" required>
                                    <span class="icon-key3"></span>
                                </div><!--/.form-group-->

                                <div class="form-group">
                                    <input id="pass-up-confirm" name="password_confirmation" class="form-controllar"
                                        type="password" placeholder="Confirm Password" required>
                                    <span class="icon-key3"></span>
                                </div><!--/.form-group-->

                                <div class="form-btn-group">
                                    <button type="submit" class="btn btn-default btn-register btn-lg btn-block">
                                        Register
                                    </button>

                                    <br>
                                    <span>If you already Register</span>
                                    <a href="{{ route('login') }}" class="text-success">
                                        <b>Sign In</b>
                                    </a>
                                    <div class="reg-others-midea">
                                        <div class="text">
                                            Or Connect With
                                        </div>
                                        <div class="midea-icons">
                                            <ul class="social-share">

                                                <li><a class="twitter" href="{{ url('/auth/github/redirect') }}"><i
                                                            class="fab fa-github"></i></a></li>
                                                <li><a class="google-plus"
                                                        href="{{ url('/auth/google/redirect') }}"><i
                                                            class="fab fa-google"></i></a></li>
                                                <li><a class="facebook"
                                                        href="{{ url('/auth/facebook/redirect') }}"><i
                                                            class="fab fa-facebook-f"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif


        @yield('content')
        @include('frontend.layouts.footer')

    </div>



    <script>
        var idleTime = 0;
        $(document).ready(function() {
            // Increment the idle time counter every minute
            var idleInterval = setInterval(timerIncrement, 10000); // 1 minute

            // Reset the idle time counter on any user activity
            $(this).mousemove(function(e) {
                idleTime = 0;
            });
            $(this).keypress(function(e) {
                idleTime = 0;
            });

            function timerIncrement() {
                idleTime++;
                if (idleTime > 2) { // Show popup after 2 minutes of inactivity
                    // Show your login popup here
                    $('#loginPopup').modal('show');
                }
            }
        });
    </script>

    <script src="{{ asset('public/frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/jquery-validate.bootstrap-tooltip.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/SyoTimer.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/theia-sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/ResizeSensor.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/packery-mode.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/simple-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/scrolla.jquery.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/jquery.nav.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/rangeslider.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/jquery.trackpad-scroll-emulator.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/rater.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/jquery-steps.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/main.js') }}"></script>


    {{-- external js start --}}
    <script src="{{ asset('public/frontend/assets/masum4it/masum4it_js.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#search-box').on('keyup', function() {
                var query = $(this).val();

                $.ajax({
                    url: '{{ route('search') }}',
                    method: 'GET',
                    data: {
                        query: query
                    },
                    success: function(response) {
                        // Clear previous suggestions
                        $('#search-results').empty();

                        // Append new suggestions
                        $.each(response, function(index, college) {
                            // Create a div for each college result
                            var collegeDiv = $('<div class="college-result"></div>');

                            // Create an anchor element for the college link
                            var collegeLink = $('<a href="/college/' + college.slug +
                                '"></a>');

                            // Create an image element with the college thumbnail
                            var imgElement = $('<img src="storage/app/' + college
                                .thumbline + '" alt="' + college.name + '"/>');

                            // Create a paragraph element with the college name
                            var nameElement = $('<span class="college-name">' + college
                                .name + '</span>');

                            // Append the image and name to the college link
                            collegeLink.append(imgElement, nameElement);

                            // Append the college link to the college result div
                            collegeDiv.append(collegeLink);

                            // Append the college result div to the search results container
                            $('#search-results').append(collegeDiv);
                        });

                    }
                });
            });
        });
    </script>
    <script>
        @if (session()->has('success'))

            toastr.success('{{ session('success') }}');
        @endif
    </script>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right"
        }
    </script>


    {{-- external js end --}}




</body>


</html>
