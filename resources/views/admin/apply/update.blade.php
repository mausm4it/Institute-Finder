@extends('layouts.app')

@section('content')

    <h2 class="bg-primary text-white p-3 text-center text-lg">Update Apply</h2>
    @if ($errors->any())
        <div class="bg-danger/25 text-danger  text-sm rounded-md p-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="max-w-xl mx-auto bg-white shadow-md rounded-md p-6 mt-9">
        <h2 class="text-lg font-semibold mb-4 text-center p-3 mb-3 ">Apply Institute</h2>
        <form class="w-full max-w-lg" method="POST" action="{{ route('update-apply', $apply->id) }}">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">


                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Full Name
                    </label>
                    <input type="text" name="name" id="name"
                        class="px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 w-full mb-2"
                        placeholder="Enter your Full Name" value="{{ old('name', $apply->name) }}" required>
                </div>

                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Your Email
                    </label>
                    <input type="email" name="email" id="email"
                        class="px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 w-full mb-2"
                        placeholder="Enter your Email" value="{{ old('email', $apply->email) }}" required>
                </div>


                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Your Phone Number
                    </label>
                    <input type="text" name="phone" id="phone"
                        class="px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 w-full mb-2"
                        placeholder="Enter your Phone Number" value="{{ old('phone', $apply->phone) }}" required>
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Country
                    </label>
                    <select id="select-search" name="country_id" class="w-full" required>
                        <option value="{{ $apply->country->id }}">{{ $apply->country->name }}</option>
                        @foreach ($countries as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach


                    </select>
                </div>

                <div class="w-full ">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Your Address
                    </label>
                    <input type="text" name="address" id="address"
                        class="px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 w-full mb-2"
                        placeholder="Enter your Address" value="{{ old('address', $apply->address) }}" required>
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Institute
                    </label>
                    <select id="select-search2" name="college_id" class="w-full" required>
                        <option value="{{ $apply->college->id }}">{{ $apply->college->name }}</option>
                        @foreach ($colleges as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach


                    </select>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Course
                    </label>
                    <select id="select-search3" name="course_id" class="w-full" required>
                        <option value="{{ $apply->course->id }}">{{ $apply->course->name }}</option>
                        @foreach ($courses as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach


                    </select>
                </div>

                <input type="hidden" name="user_id" value="{{ $apply->user->id }}">


            </div>
            <div class="w-full  text-center">

                <div class="w-full ">
                    <button
                        class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                        type="submit">
                        Apply
                    </button>
                </div>
            </div>
        </form>
    </div>


@endsection
