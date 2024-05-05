@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Settings</h4>

        <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">


            <div class="flex items-center gap-2">

                <a href="{{ route('dashboard') }}"
                    class="text-sm font-medium text-slate-700 dark:text-slate-400">Dashboard</a>
            </div>

            <div class="flex items-center gap-2">
                <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                <a href="{{ route('mail-control') }}" class="text-sm font-medium text-slate-700 dark:text-slate-400"
                    aria-current="page">Mail Settings</a>
            </div>
        </div>
    </div>
    <h2 class="bg-primary text-white p-3 text-center text-lg mb-5">Mail Settings</h2>

    @if ($errors->any())
        <div class="bg-danger/25 text-danger  text-sm rounded-md p-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="m-5 card p-5" method="POST" action="{{ route('update-mail-control') }}" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2  gap-6">

            <div>
                <label for="inputAddress2" class="text-gray-800 text-sm font-medium inline-block mb-2">Mail Host</label>
                <input type="text" name="mail_host" value="{{ old('mail_host', env('MAIL_HOST')) }}" class="form-input"
                    id="inputAddress2" placeholder="Enter Mail Host Name" required>
            </div>
            <div>
                <label for="inputAddress2" class="text-gray-800 text-sm font-medium inline-block mb-2">Mail Port</label>
                <input type="text" name="mail_port" value="{{ old('mail_port', env('MAIL_PORT')) }}" class="form-input"
                    id="inputAddress2" placeholder="Enter Port" required>
            </div>
            <div>
                <label for="inputAddress" class="text-gray-800 text-sm font-medium inline-block mb-2">Mail User Name</label>
                <input type="text" value="{{ old('mail_username', env('MAIL_USERNAME')) }}" class="form-input"
                    name="mail_username" id="inputAddress" placeholder="Enter Mail User Name" required>
            </div>

            <div>
                <label for="inputAddress" class="text-gray-800 text-sm font-medium inline-block mb-2">Mail Password</label>
                <input type="password" value="{{ old('mail_password', env('MAIL_PASSWORD')) }}" class="form-input"
                    name="mail_password" id="inputAddress" placeholder="Enter Mail Password" required>
            </div>




            <div>
                <label for="inputAddress" class="text-gray-800 text-sm font-medium inline-block mb-2">Mail Address</label>
                <input type="email" value="{{ old('mail_address', env('MAIL_FROM_ADDRESS')) }}" class="form-input"
                    name="mail_address" id="inputAddress" placeholder="Enter Mail Address" required>
            </div>
            <div>
                <label for="inputAddress" class="text-gray-800 text-sm font-medium inline-block mb-2">Mailer
                    Name</label>
                <input type="text" value="{{ old('mailer_name', env('MAIL_FROM_NAME')) }}" class="form-input"
                    name="mailer_name" id="inputAddress" placeholder="Enter Mailer Name" required>
            </div>

        </div>
        <button type="submit" class="btn bg-primary text-white mt-5">Save</button>
    </form>

@endsection
