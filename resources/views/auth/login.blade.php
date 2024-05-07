<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ __('Login') }} | {{ $settings->name }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{ $settings->meta_descriprion }}" name="description">
    <meta content="{{ $settings->name }}" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="{{ asset('public/assets/js/config.js') }}"></script>
    <link rel="icon" type="image/png" href="{{ asset('storage/app/' . $settings->icon) }}" sizes="32x32"
        class="rounded-full border border-gray-300">
</head>

<body>

    <div class="bg-gradient-to-r from-rose-100 to-teal-100 dark:from-gray-700 dark:via-gray-900 dark:to-black">


        <div class="h-screen w-screen flex justify-center items-center">

            <div class="2xl:w-1/4 lg:w-1/3 md:w-1/2 w-full">
                <div class="card overflow-hidden sm:rounded-md rounded-none">
                    <div class="p-6">
                        <a href="{{ route('home') }}" class="block mb-8 text-center">
                            <img class="h-6 block dark:hidden" src="{{ asset('storage/app/' . $settings->logo) }}"
                                alt="">
                            <img class="h-6 hidden dark:block" src="{{ asset('storage/app/' . $settings->logo) }}"
                                alt="">
                        </a>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2"
                                    for="LoggingEmailAddress">{{ __('Email Address') }}</label>
                                <input id="LoggingEmailAddress" class="form-input" type="email" name="email"
                                    placeholder="Enter your email" required>
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2"
                                    for="loggingPassword">{{ __('Password') }}</label>
                                <input name="password" id="loggingPassword" class="form-input" type="password"
                                    placeholder="Enter your password" required>
                            </div>

                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-checkbox rounded" id="checkbox-signin">
                                    <label class="ms-2" for="checkbox-signin">{{ __('Remember me') }}</label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}"
                                        class="text-sm text-primary border-b border-dashed border-primary">
                                        {{ __('Forgot your password?') }}</a>
                                @endif

                            </div>

                            <div class="flex justify-center mb-6">
                                <button type="submit" class="btn w-full text-white bg-primary">{{ __('Log In') }}
                                </button>
                            </div>
                        </form>


                        <div class="flex items-center my-6">
                            <div class="flex-auto mt-px border-t border-dashed border-gray-200 dark:border-slate-700">
                            </div>
                            <div class="mx-4 text-secondary">Or</div>
                            <div class="flex-auto mt-px border-t border-dashed border-gray-200 dark:border-slate-700">
                            </div>
                        </div>

                        <div class="flex gap-4 justify-center mb-6">
                            <a href="{{ url('/auth/github/redirect') }}"
                                class="btn border-light text-gray-400 dark:border-slate-700">
                                <span class="flex justify-center items-center gap-2">
                                    <i class="mgc_github_line text-info text-xl"></i>
                                    <span class="lg:block hidden">{{ __('Github') }}</span>
                                </span>
                            </a>
                            <a href="{{ url('/auth/google/redirect') }}"
                                class="btn border-light text-gray-400 dark:border-slate-700">
                                <span class="flex justify-center items-center gap-2">
                                    <i class="mgc_google_line text-danger text-xl"></i>
                                    <span class="lg:block hidden">{{ __('Google') }}</span>
                                </span>
                            </a>
                            <a href="{{ url('/auth/facebook/redirect') }}"
                                class="btn border-light text-gray-400 dark:border-slate-700">
                                <span class="flex justify-center items-center gap-2">
                                    <i class="mgc_facebook_line text-primary text-xl"></i>
                                    <span class="lg:block hidden">{{ __('Facebook') }}</span>
                                </span>
                            </a>
                        </div>

                        <p class="text-gray-500 dark:text-gray-400 text-center"> {{ __("Don't have an account ?") }}<a
                                href="{{ route('register') }}"
                                class="text-primary ms-1"><b>{{ __('Register') }}</b></a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>



</body>



</html>
{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 mb-5">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>


    <a style="margin-top:50px" class="text-md text-center d-flex text-gray-600 hover:text-gray-900 rounded-md "
        href="{{ route('register') }}">
        {{ __('If You Have Not Any Account Please Regiter') }}
    </a>

</x-guest-layout> --}}
