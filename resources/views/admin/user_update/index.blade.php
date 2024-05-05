@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">User Profile Update</h4>

        <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">


            <div class="flex items-center gap-2">

                <a href="{{ route('dashboard') }}"
                    class="text-sm font-medium text-slate-700 dark:text-slate-400">Dashboard</a>
            </div>

            <div class="flex items-center gap-2">
                <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                <a href="{{ route('settings') }}" class="text-sm font-medium text-slate-700 dark:text-slate-400"
                    aria-current="page">User Profile Update</a>
            </div>
        </div>
    </div>
    <h2 class="bg-primary text-white p-3 text-center text-lg mb-5">User Profile Update</h2>
    <div class="card mb-5">
        <div class="card-header">
            <div class="flex justify-between items-center">

                @if (Auth::user()->user_profile != null && Auth::user()->user_profile != '')
                    <img width="100" src="{{ asset('storage/app/' . $user->user_profile) }}" class="rounded-lg">
                @else
                    <img width="100" src="{{ asset('storage/app/user_profile/user.png') }}" class="rounded-lg">
                @endif




            </div>
        </div>
        <div class="flex justify-between items-center">
            <div class="py-3 px-6">
                <h5 class="my-2"><a class="text-slate-900 dark:text-slate-200">Name:</a></h5>
                <p class="text-gray-500 text-sm mb-9">{{ $user->name }}</p>
            </div>
            <div class="py-3 px-6">
                <h5 class="my-2"><a class="text-slate-900 dark:text-slate-200">Email:</a></h5>
                <p class="text-gray-500 text-sm mb-9">{{ $user->email }}</p>
            </div>
            <div class="py-3 px-6">
                <h5 class="my-2"><a class="text-slate-900 dark:text-slate-200">Phone:</a></h5>
                <p class="text-gray-500 text-sm mb-9">{{ $user->phone }}</p>
            </div>

        </div>
    </div>
    @if ($errors->any())
        <div class="bg-danger/25 text-danger  text-sm rounded-md p-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="m-5 card p-5" method="POST" action="{{ route('update-user_profile') }}" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1   gap-6">
            <div>
                <label for="user_profile" class="text-gray-800 text-sm font-medium inline-block mb-2">Profile
                    Picture</label>
                <div class="">
                    <input onchange="LogoImage(event)" class="form-control" type="file" name="user_profile"
                        value="{{ $user->user_profile }}">
                    <img id="logoPreview" src="#" alt="Preview"
                        style="display:none; max-width: 100%; max-height: 100px;">
                </div>
            </div>

            <div>
                <label for="inputAddress2" class="text-gray-800 text-sm font-medium inline-block mb-2">Name</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-input" id="inputAddress2"
                    placeholder="Enter name">
            </div>





            <div>
                <label for="email" class="text-gray-800 text-sm font-medium inline-block mb-2">Email</label>
                <input type="email" value="{{ $user->email }}" name="email" class="form-input" id="email">
            </div>

            <div>
                <label for="phone" class="text-gray-800 text-sm font-medium inline-block mb-2">Phone</label>
                <input type="text" class="form-input" value="{{ $user->phone }}" id="phone" name="phone">
            </div>




        </div>



        <button type="submit" class="btn bg-primary text-white mt-5">Save</button>
    </form>



    <form method="POST" action="{{ route('update-user_password') }}" class="mt-6 space-y-6 bg-black rounded-lg p-3">
        @csrf


        <h1 class="text-center">Change Password</h1>
        <div>
            <label for="current_password" class="text-gray-800 text-sm font-medium inline-block mb-2">Current
                Password</label>
            <input name="current_password" type="password" placeholder="Current Password" class="form-input"
                id="current_password" required>
            @error('current_password')
                <div class=" text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password" class="text-gray-800 text-sm font-medium inline-block mb-2">New Password</label>
            <input name="password" type="password" placeholder="New Password" class="form-input" required>
            @error('password')
                <div class=" text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="new_password_confirmation" class="text-gray-800 text-sm font-medium inline-block mb-2">Confirm New
                Password</label>
            <input id="new_password_confirmation" type="password" name="new_password_confirmation"
                placeholder="Confirm New Password" class="form-input" required>
            @error('new_password_confirmation')
                <div class=" text-danger">{{ $message }}</div>
            @enderror
        </div>



        <button type="submit" class="btn bg-primary text-white mt-5">Change Password</button>

    </form>

@endsection
