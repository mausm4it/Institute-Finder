<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare | {{ $settings->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('storage/app/' . $settings->icon) }}" sizes="32x32"
        class="rounded-full border border-gray-300">


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
                <li><a href="{{ route('home') }}" class="text-white hover:text-gray-300"><--- Back to Home</a></li>

            </ul>
        </div>
    </nav>

    <div class="max-w-xl mx-auto bg-white shadow-md rounded-md p-6 mt-9">
        <h2 class="text-lg font-semibold mb-4 text-center p-3 mb-3 ">Institute Compare</h2>
        <form class="w-full max-w-lg" method="GET" action="{{ route('search-compare') }}">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">
                        Institute 1
                    </label>
                    <select id="select-search" name="college_Id1" class="w-full">
                        <option>Select Institute one</option>
                        @foreach ($colleges as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach


                    </select>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-last-name">
                        Institute 2
                    </label>
                    <select id="select-search2" name="college_Id2" class="w-full">
                        <option>Select Institute two</option>
                        @foreach ($colleges as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach


                    </select>
                </div>


            </div>
            <div class="w-full  text-center">

                <div class="w-full ">
                    <button
                        class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                        type="submit">
                        Compare
                    </button>
                </div>
            </div>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#select-search').select2({
                width: 'resolve' // Resolve the width based on the container
            });
        });

        $(document).ready(function() {
            $('#select-search2').select2({
                width: 'resolve' // Resolve the width based on the container
            });
        });
    </script>
</body>

</html>
