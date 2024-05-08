@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Social Login Settings</h4>

        <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">


            <div class="flex items-center gap-2">

                <a href="{{ route('dashboard') }}"
                    class="text-sm font-medium text-slate-700 dark:text-slate-400">Dashboard</a>
            </div>

            <div class="flex items-center gap-2">
                <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                <a href="{{ route('social-login') }}" class="text-sm font-medium text-slate-700 dark:text-slate-400"
                    aria-current="page">Social Login Settings</a>
            </div>
        </div>
    </div>
    <h2 class="bg-primary text-white p-3 text-center text-lg mb-5">Social Login Settings</h2>

    @if ($errors->any())
        <div class="bg-danger/25 text-danger  text-sm rounded-md p-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="m-5 card p-5" method="POST" action="{{ route('update-social-login-github') }}"
        enctype="multipart/form-data">
        @csrf
        <h2 class="text-xl text-center text-black mb-2">Github Login Settings</h2>
        <span class="text-xs text-center mb-3">Note: Callback url- {{ url('/') }}/auth/github/callback</span>
        <hr>

        <div class="grid grid-cols-1 md:grid-cols-2  gap-6 mt-3">

            <div>
                <label for="inputAddress2"
                    class="text-gray-800 text-sm font-medium inline-block mb-2">GITHUB_CLIENT_ID</label>
                <input type="text" name="github_client_id" value="{{ old('github_client_id', env('GITHUB_CLIENT_ID')) }}"
                    class="form-input" id="inputAddress2" placeholder="Enter Github Client Id" required>
            </div>
            <div>
                <label for="inputAddress2"
                    class="text-gray-800 text-sm font-medium inline-block mb-2">GITHUB_CLIENT_SECRET</label>
                <input type="text" name="github_client_secret"
                    value="{{ old('github_client_secret', env('GITHUB_CLIENT_SECRET')) }}" class="form-input"
                    id="inputAddress2" placeholder="Enter Github Client Secret" required>
            </div>


        </div>
        <button type="submit" class="btn bg-primary text-white mt-5">Save</button>
    </form>



    <form class="m-5 card p-5" method="POST" action="{{ route('update-social-login-google') }}"
        enctype="multipart/form-data">
        @csrf
        <h2 class="text-xl text-center text-black mb-2">Google Login Settings</h2>
        <span class="text-xs text-center mb-3">Note: Callback url- {{ url('/') }}/auth/google/callback</span>
        <hr>

        <div class="grid grid-cols-1 md:grid-cols-2  gap-6 mt-3">

            <div>
                <label for="inputAddress2"
                    class="text-gray-800 text-sm font-medium inline-block mb-2">GOOGLE_CLIENT_ID</label>
                <input type="text" name="google_client_id" value="{{ old('google_client_id', env('GOOGLE_CLIENT_ID')) }}"
                    class="form-input" id="inputAddress2" placeholder="Enter GOOGLE Client Id" required>
            </div>
            <div>
                <label for="inputAddress2"
                    class="text-gray-800 text-sm font-medium inline-block mb-2">GOOGLE_CLIENT_SECRET</label>
                <input type="text" name="google_client_secret"
                    value="{{ old('google_client_secret', env('GOOGLE_CLIENT_SECRET')) }}" class="form-input"
                    id="inputAddress2" placeholder="Enter GOOGLE Client Secret" required>
            </div>


        </div>
        <button type="submit" class="btn bg-primary text-white mt-5">Save</button>
    </form>



    <form class="m-5 card p-5" method="POST" action="{{ route('update-social-login-facebook') }}"
        enctype="multipart/form-data">
        @csrf
        <h2 class="text-xl text-center text-black mb-2">Facebook Login Settings</h2>
        <span class="text-xs text-center mb-3">Note: Callback url- {{ url('/') }}/auth/facebook/callback</span>
        <hr>

        <div class="grid grid-cols-1 md:grid-cols-2  gap-6 mt-3">

            <div>
                <label for="inputAddress2"
                    class="text-gray-800 text-sm font-medium inline-block mb-2">FACEBOOK_CLIENT_ID</label>
                <input type="text" name="facebook_client_id"
                    value="{{ old('facebook_client_id', env('FACEBOOK_CLIENT_ID')) }}" class="form-input"
                    id="inputAddress2" placeholder="Enter FACEBOOK Client Id" required>
            </div>
            <div>
                <label for="inputAddress2"
                    class="text-gray-800 text-sm font-medium inline-block mb-2">FACEBOOK_CLIENT_SECRET</label>
                <input type="text" name="facebook_client_secret"
                    value="{{ old('facebook_client_secret', env('FACEBOOK_CLIENT_SECRET')) }}" class="form-input"
                    id="inputAddress2" placeholder="Enter FACEBOOK Client Secret" required>
            </div>


        </div>
        <button type="submit" class="btn bg-primary text-white mt-5">Save</button>
    </form>

@endsection
