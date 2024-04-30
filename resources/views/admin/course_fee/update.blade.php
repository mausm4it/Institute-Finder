@extends('layouts.app')

@section('content')
    <h2 class="bg-primary text-white p-3 text-center text-lg">Update Course Fee </h2>
    @if ($errors->any())
        <div class="bg-danger/25 text-danger  text-sm rounded-md p-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="flex justify-content" id="createblog" action="{{ route('update-course_fee', $course_fee->id) }}" method="post"
        enctype="multipart/form-data">
        @csrf

        <div class="m-3">
            <h4 class="text-left">Select College</h4>

            <select id="search-select" class="search-select" name="college_id">

                <option value="{{ old('college_id', $course_fee->college_id) }}">{{ $course_fee->college->name }}</option>
                @foreach ($colleges as $item)
                    <option value="{{ $item->id }}">
                        {{ $item->name }}</option>
                @endforeach


            </select>
            @error('college_id')
                <div class=" text-danger">{{ $message }}</div>
            @enderror

        </div>



        <div class="m-3">
            <h4 class="text-left">Select Course</h4>
            <select class="selectize" name="course_id">
                <option value="{{ old('course_id', $course_fee->course_id) }}">{{ $course_fee->course->name }}</option>
                @foreach ($courses as $item)
                    <option value="{{ $item->id }}">
                        {{ $item->name }}</option>
                @endforeach


            </select>
            @error('course_id')
                <div class=" text-danger">{{ $message }}</div>
            @enderror

        </div>



        <div class="m-3">
            <h4 class="text-left">Amount</h4>
            <input type="text" class="form-input" value="{{ old('amount', $course_fee->amount) }}" name="amount"
                id="amount" placeholder="Enter amount">
            @error('amount')
                <div class=" text-danger">{{ $message }}</div>
            @enderror

        </div>


        <div class="flex justify-end items-center gap-4 m-3 p-5 ">
            <button
                class="py-2 px-5 inline-flex justify-center items-center gap-2 rounded dark:text-gray-200 border dark:border-slate-700 font-medium hover:bg-slate-100 hover:dark:bg-slate-700 transition-all"
                data-fc-dismiss type="button">Close
            </button>
            <button type="submit" class="btn bg-primary text-white ">Submit</button>
        </div>
    </form>
@endsection
