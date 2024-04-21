<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Qayima is a modern presentation HTML5 Listing & Directory Template.">
    <meta name="keywords" content="HTML5, Template, Design, Listing, Directory, Listing Template" />
    <meta name="author" content="creative-wp">


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


    {{-- external css end --}}

</head>

<body>
    <div class="site-content">
        @include('frontend.layouts.header')
        <div id="sticky-header" class="sticky-header-one"></div>
        @yield('content')
        @include('frontend.layouts.footer')

    </div>




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

    {{-- external js end --}}




</body>


</html>
{{-- <select id="filterByPrice">
    <option value="">Filter By Price</option>
    <option value="0-50">$0 - $50</option>
    <option value="50-100">$50 - $100</option>
    <option value="100-200">$100 - $200</option>
    <option value="200-">Above $200</option>
</select>

<select id="filterByCategory">
    <option value="">Filter By Category</option>
    <!-- Populate with your category options -->
</select> --}}
