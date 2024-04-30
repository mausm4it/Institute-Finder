<!doctype html>
<html lang="en">

<head>
    <title>User Panel - {{ $settings->name }}</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body>

    <div class="site-content">

        <div class="dashboard-site-content">
            <div class="dashboard-menu-area">
                @include('frontend.user_panel.layouts.sidebar')
            </div>
            <div class="dashboard-contant-area">

                @include('frontend.user_panel.layouts.header')


                <div class="dashboard-contant">
                    @yield('content')
                </div>
            </div>
        </div>
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
    <script src="{{ asset('public/frontend/assets/js/main.js') }}"></script><!-- main-js -->
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

    <script>
        // Blog Image
        function BlogImage(event) {
            const input = event.target;
            const preview = document.getElementById('blog_imagePreview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'inline-block';
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
            }
        }
    </script>

</body>

</html>
