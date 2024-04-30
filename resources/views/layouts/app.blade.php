<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $settings->name }}</title>


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('public/build/assets/app.css') }}">
    <script src="{{ asset('public/build/assets/app.js') }}" defer></script>
    <link rel="icon" type="image/png" href="{{ asset('storage/app/' . $settings->icon) }}" sizes="32x32"
        class="rounded-full border border-gray-300">


    {{-- external link start --}}
    <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('public/assets/js/config.js') }}"></script>
    <link href="{{ asset('public/assets/libs/nice-select2/css/nice-select2.css') }}" rel="stylesheet" type="text/css">
    <!-- quill css -->
    <link href="{{ asset('public/assets/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/libs/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css">
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

    {{-- external link end --}}



</head>

<body>

    <div class="flex wrapper">


        @include('layouts.sidebar')

        <div class="page-content">

            @include('layouts.header')
            @include('alert.index')

            <main class="flex-grow p-6">
                @yield('content')

            </main>

            @include('layouts.footer')


        </div>



    </div>

    <!-- Back to Top Button -->
    <button data-toggle="back-to-top"
        class="fixed hidden h-10 w-10 items-center justify-center rounded-full z-10 bottom-20 end-14 p-2.5 bg-primary cursor-pointer shadow-lg text-white">
        <i class="mgc_arrow_up_line text-lg"></i>
    </button>

    <!-- Theme Settings -->
    <div>
        <!-- Theme Setting Button -->
        <div class="fixed end-0 bottom-20 ">
            <button data-fc-type="offcanvas" data-fc-target="theme-customization" type="button"
                class="bg-dark rounded-s-full shadow-lg p-2.5 ps-3 transition-all white:bg-slate-800 ">
                <span class="sr-only">Setting</span>
                <span class="flex items-center justify-center animate-spin">
                    <i class="mgc_settings_4_line text-2xl text-warning"></i>
                </span>
            </button>
        </div>

        <!-- Theme Settings Offcanvas -->
        <div id="theme-customization"
            class="fc-offcanvas-open:translate-x-0 hidden translate-x-full rtl:-translate-x-full fixed inset-y-0 end-0
             transition-all duration-300 transform max-w-sm w-full z-50 bg-white border-s border-gray-900/10 dark:bg-gray-800 dark:border-white/10"
            tabindex="-1">
            <div
                class="h-16 flex items-center text-gray-800 dark:text-white border-b border-dashed border-gray-900/10 dark:border-white/10 px-6 gap-3">
                <h5 class="text-base grow">Theme Settings</h5>
                <button type="button" class="p-2" id="reset-layout"><i
                        class="mgc_refresh_1_line text-xl"></i></button>
                <button type="button" data-fc-dismiss><i class="mgc_close_line text-xl"></i></button>
            </div>

            <div class="h-[calc(100vh-64px)]" data-simplebar>
                <div class="divide-y divide-dashed divide-slate-900/10  dark:divide-white/10">
                    <div class="p-6">
                        <h5 class="font-semibold text-sm mb-3">Theme</h5>
                        <div class="grid grid-cols-3 gap-2">
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-mode" id="layout-color-light"
                                    value="light">
                                <label class="form-label rounded-md" for="layout-color-light">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_sun_line text-2xl"></i>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Light </div>
                            </div>

                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-mode" id="layout-color-dark"
                                    value="dark">
                                <label class="form-label rounded-md" for="layout-color-dark">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_moon_line text-2xl"></i>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Dark </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <h5 class="font-semibold text-sm mb-3">Direction</h5>
                        <div class="grid grid-cols-3 gap-2">
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="dir" id="direction-ltr"
                                    value="ltr">
                                <label class="form-label rounded-md" for="direction-ltr">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_align_left_line text-2xl"></i>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    LTR </div>
                            </div>

                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="dir" id="direction-rtl"
                                    value="rtl">
                                <label class="form-label rounded-md" for="direction-rtl">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_align_right_line text-2xl"></i>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    RTL </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 2xl:block hidden">
                        <h5 class="font-semibold text-sm mb-3">Content Width</h5>
                        <div class="grid grid-cols-3 gap-2">
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-layout-width"
                                    id="layout-mode-default" value="default">
                                <label class="form-label rounded-md" for="layout-mode-default">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_fullscreen_2_line text-2xl rotate-45"></i>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Fluid </div>
                            </div>

                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-layout-width"
                                    id="layout-mode-boxed" value="boxed">
                                <label class="form-label rounded-md" for="layout-mode-boxed">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_fullscreen_exit_2_line text-2xl rotate-45"></i>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Boxed </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <h5 class="font-semibold text-sm mb-3">Sidenav View</h5>
                        <div class="grid grid-cols-3 gap-3">
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-sidenav-view"
                                    id="sidenav-view-default" value="default">
                                <label class="form-label rounded-md" for="sidenav-view-default">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="block w-8 bg-gray-100 dark:bg-gray-800">
                                            <span class="mt-1.5 mx-1.5 block space-y-1">
                                                <span
                                                    class="h-1 block rounded-sm mb-2.5 bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            </span>
                                        </span>
                                        <span
                                            class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center justify-end h-full mr-1.5">
                                                    <span
                                                        class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span
                                                class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Default </div>
                            </div>

                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-sidenav-view"
                                    id="sidenav-view-hover" value="hover">
                                <label class="form-label rounded-md" for="sidenav-view-hover">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="w-3 bg-gray-100 dark:bg-gray-800">
                                            <span
                                                class="w-1.5 h-1.5 mt-1 mx-auto rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            <span class="flex flex-col items-center w-full mt-1.5 space-y-1">
                                                <span
                                                    class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span
                                                    class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span
                                                    class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span
                                                    class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span
                                                    class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                            </span>
                                        </span>
                                        <span
                                            class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center justify-end h-full mr-1.5">
                                                    <span
                                                        class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span
                                                class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Hover </div>
                            </div>

                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-sidenav-view"
                                    id="sidenav-view-hover-active" value="hover-active">
                                <label class="form-label rounded-md" for="sidenav-view-hover-active">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="w-8 bg-gray-100 dark:bg-gray-800">
                                            <span class="mt-1.5 mx-1.5 block space-y-1">
                                                <span class="flex mb-2.5 gap-1">
                                                    <span
                                                        class="h-1 block w-full rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="h-1 block w-2 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            </span>
                                        </span>
                                        <span
                                            class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center justify-end h-full mr-1.5">
                                                    <span
                                                        class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span
                                                class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Hover Active </div>
                            </div>

                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-sidenav-view"
                                    id="sidenav-view-sm" value="sm">
                                <label class="form-label rounded-md" for="sidenav-view-sm">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="w-3 bg-gray-100 dark:bg-gray-800">
                                            <span
                                                class="w-1.5 h-1.5 mt-1 mx-auto rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            <span class="flex flex-col items-center w-full mt-1.5 space-y-1">
                                                <span
                                                    class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span
                                                    class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span
                                                    class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span
                                                    class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span
                                                    class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                            </span>
                                        </span>
                                        <span
                                            class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center h-full mr-1.5">
                                                    <span class="grow">
                                                        <span
                                                            class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    </span>
                                                    <span
                                                        class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span
                                                class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Small </div>
                            </div>

                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-sidenav-view"
                                    id="sidenav-view-md" value="md">
                                <label class="form-label rounded-md" for="sidenav-view-md">
                                    <span class="flex h-16 rounded-md overflow-hidden">
                                        <span class="w-4 bg-gray-100 dark:bg-gray-800">
                                            <span
                                                class="w-2 h-2 mt-2 mx-auto rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            <span class="flex flex-col items-center w-full mt-2 space-y-1">
                                                <span class="w-2 h-2 rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-2 h-2 rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-2 h-2 rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            </span>
                                        </span>
                                        <span
                                            class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center h-full mr-1.5">
                                                    <span class="grow">
                                                        <span
                                                            class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    </span>
                                                    <span
                                                        class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span
                                                class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Compact </div>
                            </div>

                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-sidenav-view"
                                    id="sidenav-view-mobile" value="mobile">
                                <label class="form-label rounded-md" for="sidenav-view-mobile">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="flex flex-col flex-auto">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center h-full mr-1.5">
                                                    <span
                                                        class="w-1.5 h-1.5  ms-1 rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ms-1  rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ms-auto rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span
                                                class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Mobile </div>
                            </div>

                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-sidenav-view"
                                    id="sidenav-view-hidden" value="hidden">
                                <label class="form-label rounded-md" for="sidenav-view-hidden">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="flex flex-col flex-auto">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex flex-auto items-center h-full me-1.5">
                                                    <span
                                                        class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ms-auto rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span
                                                        class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span
                                                class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Hidden </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <h5 class="font-semibold text-sm mb-3">Menu Color</h5>
                        <div class="grid grid-cols-4 gap-2">
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-menu-color"
                                    id="menu-color-light" value="light">
                                <label class="form-label rounded-md" for="menu-color-light">
                                    <span
                                        class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-white"></span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Light </div>
                            </div>

                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-menu-color" id="menu-color-dark"
                                    value="dark">
                                <label class="form-label rounded-md" for="menu-color-dark">
                                    <span
                                        class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-dark"></span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Dark </div>
                            </div>

                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-menu-color"
                                    id="menu-color-brand" value="brand">
                                <label class="form-label rounded-md" for="menu-color-brand">
                                    <span
                                        class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-primary"></span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Brand </div>
                            </div>

                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-menu-color"
                                    id="menu-color-gradient" value="gradient">
                                <label class="form-label rounded-md" for="menu-color-gradient">
                                    <span
                                        class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full"
                                            style="background: linear-gradient(135deg, #6379c3 0%, #546ee5 60%);"></span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Gradient </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <h5 class="font-semibold text-sm mb-3">Topbar Color</h5>
                        <div class="grid grid-cols-4 gap-2">
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-topbar-color"
                                    id="topbar-color-light" value="light">
                                <label class="form-label rounded-md" for="topbar-color-light">
                                    <span
                                        class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-white"></span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Light </div>
                            </div>

                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-topbar-color"
                                    id="topbar-color-dark" value="dark">
                                <label class="form-label rounded-md" for="topbar-color-dark">
                                    <span
                                        class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-dark"></span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Dark </div>
                            </div>

                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-topbar-color"
                                    id="topbar-color-brand" value="brand">
                                <label class="form-label rounded-md" for="topbar-color-brand">
                                    <span
                                        class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-primary"></span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Brand </div>
                            </div>

                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-topbar-color"
                                    id="topbar-color-gradient" value="gradient">
                                <label class="form-label rounded-md" for="topbar-color-gradient">
                                    <span
                                        class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full"
                                            style="background: linear-gradient(135deg, #6379c3 0%, #546ee5 60%);"></span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300">
                                    Gradient </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <h5 class="font-semibold text-sm mb-3">Layout Position</h5>
                        <div class="flex btn-radio">
                            <input type="radio" class="form-radio hidden" name="data-layout-position"
                                id="layout-position-fixed" value="fixed">
                            <label class="btn rounded-e-none bg-gray-100 dark:bg-gray-700"
                                for="layout-position-fixed">Fixed</label>
                            <input type="radio" class="form-radio hidden" name="data-layout-position"
                                id="layout-position-scrollable" value="scrollable">
                            <label class="btn rounded-s-none bg-gray-100 dark:bg-gray-700"
                                for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- external link start --}}
    <script src="{{ asset('public/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('public/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('public/assets/libs/%40frostui/tailwindcss/frostui.js') }}"></script>
    <script src="{{ asset('public/assets/js/app.js') }}"></script>
    <script src="{{ asset('public/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/pages/dashboard.js') }}"></script>
    <!-- quill js -->
    <script src="{{ asset('public/assets/libs/quill/quill.min.js') }}"></script>

    <script src="{{ asset('public/assets/js/pages/form-editor.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script src="{{ asset('public/assets/libs/nice-select2/js/nice-select2.js') }}"></script>


    <script src="{{ asset('public/assets/js/pages/form-select.js') }}"></script>


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

    <script>
        // Blog Image
        function LogoImage(event) {
            const input = event.target;
            const preview = document.getElementById('logoPreview');

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

    <script>
        // Blog Image
        function IconImage(event) {
            const input = event.target;
            const preview = document.getElementById('iconPreview');

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

    <script>
        // Blog Image
        function BgImage(event) {
            const input = event.target;
            const preview = document.getElementById('bgPreview');

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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var titleInput = document.getElementById('name');
            var slugInput = document.getElementById('slug');

            titleInput.addEventListener('keyup', function() {
                var name = titleInput.value.trim().toLowerCase();
                var slug = name.replace(/\s+/g, '-'); // Replace spaces with dashes
                slugInput.value = slug;
            });
        });
    </script>

    <script>
        var
            quill = new Quill("#editorQuill", {
                theme: "snow",
                modules: {
                    toolbar: [
                        [{
                            font: []
                        }, {
                            size: []
                        }],
                        ["bold", "italic", "underline", "strike"],
                        [{
                            color: []
                        }, {
                            background: []
                        }],
                        [{
                            script: "super"
                        }, {
                            script: "sub"
                        }],
                        [{
                            header: [!1, 1, 2, 3, 4, 5, 6]
                        }, "blockquote", "code-block"],
                        [{
                            list: "ordered"
                        }, {
                            list: "bullet"
                        }, {
                            indent: "-1"
                        }, {
                            indent: "+1"
                        }],
                        ["direction", {
                            align: []
                        }],
                        ["link", "image", "video"],
                        ["clean"]
                    ]
                }
            });

        // Update hidden input with Quill content
        var form = document.querySelector('form');
        form.onsubmit = function() {
            var content = document.querySelector('input[name=about_college]');
            content.value = quill.root.innerHTML;
        };
    </script>

    {{-- ck editor --}}
    <script>
        CKEDITOR.replace('admisstion_current_time');
    </script>

    <script>
        CKEDITOR.replace('schollership');
    </script>

    <script>
        CKEDITOR.replace('faculty');
    </script>

    <script>
        CKEDITOR.replace('hostel');
    </script>

    <script>
        CKEDITOR.replace('placement');
    </script>

    <script>
        CKEDITOR.replace('about_college');
    </script>


    <script>
        CKEDITOR.replace('content');
    </script>


    {{-- ck editor end --}}



    {{-- Slug Auto By Name or Title end  --}}


</body>

</html>
