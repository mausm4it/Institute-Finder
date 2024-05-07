@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Ads</h4>

        <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">


            <div class="flex items-center gap-2">

                <a href="{{ route('dashboard') }}"
                    class="text-sm font-medium text-slate-700 dark:text-slate-400">Dashboard</a>
            </div>

            <div class="flex items-center gap-2">
                <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                <a href="{{ route('ads') }}" class="text-sm font-medium text-slate-700 dark:text-slate-400"
                    aria-current="page">Ads Settings</a>
            </div>
        </div>
    </div>
    <h2 class="bg-primary text-white p-3 text-center text-lg mb-5">Ads Settings</h2>

    @if ($errors->any())
        <div class="bg-danger/25 text-danger  text-sm rounded-md p-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="m-5 card p-5" method="POST" action="{{ route('update-ads') }}" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2  gap-6">

            <div>
                <label for="inputAddress2" class="text-gray-800 text-sm font-medium inline-block mb-2">80 X 80 px
                    Box
                </label>
                <textarea name="box" id="box" value="{{ $ads->box }}" cols="30" rows="10">{{ $ads->box }}</textarea>
            </div>
            <div>
                <label for="inputAddress2" class="text-gray-800 text-sm font-medium inline-block mb-2"> 300 X 250 px
                    Banner</label>
                <textarea name="banner" id="banner" value="{{ $ads->banner }}" cols="30" rows="10">{{ $ads->banner }}</textarea>

            </div>


        </div>
        <button type="submit" class="btn bg-primary text-white mt-5">Save</button>
    </form>

@endsection
