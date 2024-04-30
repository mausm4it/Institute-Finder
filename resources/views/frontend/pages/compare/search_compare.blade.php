<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $college1->name }} | {{ $college2->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('storage/app/' . $settings->icon) }}" sizes="32x32"
        class="rounded-full border border-gray-300">

    <!-- Example using CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body class="p-8">
    <nav class="bg-gray-800 py-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="text-white text-lg font-bold"> <a href="{{ route('home') }}">
                    <img width="150" src="{{ asset('storage/app/' . $settings->logo) }}"
                        alt="{{ $settings->name }}" />
                </a></div>

            <!-- Navigation Links -->
            <ul class="flex space-x-4">
                <li><a href="{{ route('compare') }}" class="text-white hover:text-gray-300"> <--- Back to More Compare
                            Institute</a></li>

            </ul>
        </div>
    </nav>



    <div class="flex justify-center mt-9">
        <div class="w-full max-w-5xl">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <!-- Comparison Header -->
                <div class="bg-gray-200 px-6 py-4">
                    <h2 class="text-xl font-semibold text-gray-800 text-center">{{ $college1->name }} <span
                            class="text-red-500">VS</span> {{ $college2->name }}</h2>

                </div>

                <!-- Comparison Table -->
                <div class="grid grid-cols-2 gap-4 px-6 py-4">
                    <!-- First Item -->
                    <div class="bg-gray-100 border border-gray-300 rounded-lg p-4 compare">
                        <a href="{{ route('college-details', $college1->slug) }}"> <img style="height:250px"
                                src="{{ asset('storage/app/' . $college1->thumbline) }}" alt="Item 1"
                                class="w-full h-auto rounded-lg mb-4">

                            <h3 class="font-bold text-gray-800 text-2xl mb-3">{{ $college1->name }}</h3>
                        </a>
                        <hr>
                        @php
                            $total_rating = $college1->reviews->sum('rating_number');
                            $total_count = $college1->reviews->count();
                            $avarage_rating = $total_count > 0 ? $total_rating / $total_count : 0;
                        @endphp
                        <div class="flex justify-center items-center mt-3">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $avarage_rating)
                                    <i class="fas fa-star text-yellow-500"></i>
                                @else
                                    <i class="far fa-star text-gray-400"></i>
                                @endif
                            @endfor
                        </div>
                        <h3 class="font-bold text-blue-800 text-xl mb-3 text-center">{{ $total_count }} Ratings
                        </h3>



                        <hr>

                        <div class="flex justify-center items-center mb-1 bg-purple-500 p-2 rounded-lg text-center">
                            <span class="mr-2 text-white text-lg">{{ $college1->ranking_number }} Number Of
                                Ranking</span>
                            <span class="font-semibold text-white text-lg"> in
                                @foreach ($college1->countries as $item)
                                    {{ $item->name }}
                                @endforeach
                            </span>
                        </div>
                        <hr>
                        <h1 class="text-xl font-semibold text-gray-800 text-center underline">Courses</h1>
                        <div class="grid grid-cols-2 gap-2 px-2 py-1">


                            @if ($college1->course_fees)
                                @foreach ($college1->course_fees as $item)
                                    <div class="bg-gray-100 border border-gray-300 rounded-lg p-4 compare">
                                        @if ($item->college_id == $college1->id)
                                            <h3 class="font-semibold text-gray-800">{{ $item->course->name }}</h3>
                                        @endif
                                        <ul class="mt-2">
                                            <li class="flex items-center mb-1 bg-gray-200 p-2">
                                                <span class="mr-2 text-gray-600 text-xs">
                                                    {{ $item->course->sub_category->name }}
                                                    in </span>
                                                <span class="font-semibold text-gray-600 text-xs">
                                                    {{ $item->course->sub_category->category->name }}</span>
                                            </li>

                                            <li class="flex items-center mb-1 bg-black p-2 rounded-lg">
                                                <span class="mr-2 text-white text-sm"> Course Fee: </span>
                                                <span class="font-semibold text-white text-sm">{{ $item->amount }}
                                                    /-</span>
                                            </li>

                                            <li class="flex items-center mb-1 bg-green-700 p-2 rounded-lg">
                                                <span class="mr-2 text-white text-xs"> Course Duration: </span>
                                                <span
                                                    class="font-semibold text-white text-xs">{{ $item->course->course_duration->name }}</span>
                                            </li>


                                            <li class="flex items-center mb-1 bg-black p-2 rounded-lg">
                                                <span class="mr-2 text-yellow-700 text-xs"> Semester/Year: </span>
                                                <span
                                                    class="font-semibold text-yellow-700 text-xs">{{ $item->course->semester }}</span>
                                            </li>

                                            @php
                                                $course_fee = $item->amount;
                                                $course_semester = $item->course->semester;
                                                $course_credit = $item->course->credit;

                                                $semester_fee =
                                                    $course_semester > 0 ? $course_fee / $course_semester : 0;

                                                $credit_fee = $course_credit > 0 ? $course_fee / $course_credit : 0;

                                            @endphp


                                            <li class="flex items-center mb-1 bg-yellow-500 p-2 rounded-lg">
                                                <span class="mr-2 text-black text-xs">Per Semester/Year Course Fee:
                                                </span>
                                                <span
                                                    class="font-semibold text-black text-xs">{{ number_format($semester_fee, 1) }}
                                                    /-</span>
                                            </li>

                                            <li class="flex items-center mb-1 bg-purple-500 p-2 rounded-lg">
                                                <span class="mr-2 text-black text-xs">Per Credit Course Fee:</span>
                                                <span
                                                    class="font-semibold text-black text-xs">{{ number_format($credit_fee, 1) }}
                                                    /-</span>
                                            </li>

                                            <!-- Add more features/values as needed -->
                                        </ul>

                                    </div>
                                @endforeach
                            @endif





                        </div>

                    </div>


                    <!-- Second Item -->
                    <div class="bg-gray-100 border border-gray-300 rounded-lg p-4 compare">
                        <a href="{{ route('college-details', $college2->slug) }}"> <img style="height:250px"
                                src="{{ asset('storage/app/' . $college2->thumbline) }}" alt="Item 1"
                                class="w-full h-auto rounded-lg mb-4">

                            <h3 class="font-bold text-gray-800 text-2xl mb-3">{{ $college2->name }}</h3>
                        </a>
                        <hr>
                        @php
                            $total_rating = $college2->reviews->sum('rating_number');
                            $total_count = $college2->reviews->count();
                            $avarage_rating = $total_count > 0 ? $total_rating / $total_count : 0;
                        @endphp
                        <div class="flex justify-center items-center mt-3">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $avarage_rating)
                                    <i class="fas fa-star text-yellow-500"></i>
                                @else
                                    <i class="far fa-star text-gray-400"></i>
                                @endif
                            @endfor
                        </div>
                        <h3 class="font-bold text-blue-800 text-xl mb-3 text-center">{{ $total_count }} Ratings
                        </h3>



                        <hr>

                        <div class="flex justify-center items-center mb-1 bg-purple-500 p-2 rounded-lg text-center">
                            <span class="mr-2 text-white text-lg">{{ $college2->ranking_number }} Number Of
                                Ranking</span>
                            <span class="font-semibold text-white text-lg"> in
                                @foreach ($college2->countries as $item)
                                    {{ $item->name }}
                                @endforeach
                            </span>
                        </div>
                        <hr>
                        @if ($college2->course_fees)
                            <h1 class="text-xl font-semibold text-gray-800 text-center underline">Courses</h1>
                            <div class="grid grid-cols-2 gap-2 px-2 py-1">



                                @foreach ($college2->course_fees as $item)
                                    <div class="bg-gray-100 border border-gray-300 rounded-lg p-4 compare">
                                        @if ($item->college_id == $college2->id)
                                            <h3 class="font-semibold text-gray-800">{{ $item->course->name }}</h3>
                                        @endif
                                        <ul class="mt-2">
                                            <li class="flex items-center mb-1 bg-gray-200 p-2">
                                                <span class="mr-2 text-gray-600 text-xs">
                                                    {{ $item->course->sub_category->name }}
                                                    in </span>
                                                <span class="font-semibold text-gray-600 text-xs">
                                                    {{ $item->course->sub_category->category->name }}</span>
                                            </li>

                                            <li class="flex items-center mb-1 bg-black p-2 rounded-lg">
                                                <span class="mr-2 text-white text-sm"> Course Fee: </span>
                                                <span class="font-semibold text-white text-sm">{{ $item->amount }}
                                                    /-</span>
                                            </li>

                                            <li class="flex items-center mb-1 bg-green-700 p-2 rounded-lg">
                                                <span class="mr-2 text-white text-xs"> Course Duration: </span>
                                                <span
                                                    class="font-semibold text-white text-xs">{{ $item->course->course_duration->name }}</span>
                                            </li>


                                            <li class="flex items-center mb-1 bg-black p-2 rounded-lg">
                                                <span class="mr-2 text-yellow-700 text-xs"> Semester/Year: </span>
                                                <span
                                                    class="font-semibold text-yellow-700 text-xs">{{ $item->course->semester }}</span>
                                            </li>

                                            @php
                                                $course_fee = $item->amount;
                                                $course_semester = $item->course->semester;
                                                $course_credit = $item->course->credit;

                                                $semester_fee =
                                                    $course_semester > 0 ? $course_fee / $course_semester : 0;

                                                $credit_fee = $course_credit > 0 ? $course_fee / $course_credit : 0;

                                            @endphp


                                            <li class="flex items-center mb-1 bg-yellow-500 p-2 rounded-lg">
                                                <span class="mr-2 text-black text-xs">Per Semester/Year Course Fee:
                                                </span>
                                                <span
                                                    class="font-semibold text-black text-xs">{{ number_format($semester_fee, 1) }}
                                                    /-</span>
                                            </li>

                                            <li class="flex items-center mb-1 bg-purple-500 p-2 rounded-lg">
                                                <span class="mr-2 text-black text-xs">Per Credit Course Fee:</span>
                                                <span
                                                    class="font-semibold text-black text-xs">{{ number_format($credit_fee, 1) }}
                                                    /-</span>
                                            </li>

                                            <!-- Add more features/values as needed -->
                                        </ul>

                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
