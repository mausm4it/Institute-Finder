<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('public/build/assets/app.css') }}">
    <script src="{{ asset('public/build/assets/app.js') }}" defer></script>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/daterangepicker/daterangepicker.css') }}">

    <!-- Vector Map css -->
    <link rel="stylesheet"
        href="{{ asset('public/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('public/assets/js/config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Quill css -->
    <link href="{{ asset('public/assets/vendor/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />


    {{-- external link end --}}



</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        {{-- @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif --}}

        <!-- Page Content -->
        <main class="main" id="top">
            {{-- {{ $slot }} --}}
            @yield('content')

        </main>
        @include('layouts.footer')
    </div>

    {{-- external link start --}}
    <!-- Vendor js -->
    <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>

    <!-- Daterangepicker js -->
    <script src="{{ asset('public/assets/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Apex Charts js -->
    <script src="{{ asset('public/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector Map js -->
    <script src="{{ asset('public/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
    </script>
    <script
        src="{{ asset('public/assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}">
    </script>

    <!-- Dashboard App js -->
    <script src="{{ asset('public/assets/js/pages/dashboard.js') }}"></script>


    <!-- App js -->
    <script src="{{ asset('public/assets/js/app.min.js') }}"></script>

    <!-- Vendor js -->
    <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>

    <!-- Bootstrap Wizard Form js -->
    <script src="{{ asset('public/assets/vendor/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>

    <!-- Wizard Form Demo js -->
    <script src="{{ asset('public/assets/js/pages/form-wizard.init.js') }}"></script>
    <script src="{{ asset('public/assets/js/pages/datatable.init.js') }}"></script>

    <!-- Quill Editor js -->
    <script src="{{ asset('public/assets/vendor/quill/quill.min.js') }}"></script>

    <!-- Quill Demo js -->
    <script src="{{ asset('public/assets/js/pages/quilljs.init.js') }}"></script>


    {{-- external link end --}}




    {{-- Image Preview Script Start --}}
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


    {{-- Image Preview Script End --}}


    {{-- Slug Auto By Name or Title start  --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var titleInput = document.getElementById('title');
            var slugInput = document.getElementById('slug');

            titleInput.addEventListener('keyup', function() {
                var name = titleInput.value.trim().toLowerCase();
                var slug = name.replace(/\s+/g, '-'); // Replace spaces with dashes
                slugInput.value = slug;
            });
        });
    </script>
    {{-- Slug Auto By Name or Title end  --}}


</body>

</html>
