@extends('frontend.layouts.app')
@section('header')
    @include('frontend.layouts.header')
@endsection

@section('content')

    <style>
        .span {
            color: #00AA9E;
        }

        .toggle {
            display: none;
        }

        .active {
            display: inline-block;
        }

        .college-result {
            border: 1px solid #ccc;
            margin-bottom: 5px;
            padding: 5px;
            display: flex;
            align-items: stretch;
            background-color: #ffffff;
        }

        .college-result img {
            max-width: 100px;
            height: auto;

            margin-right: 10px;
        }

        .college-name {
            margin: 0;
            color: black;

            font-weight: bold;
        }

        .star {
            font-size: 50px;
            cursor: pointer;
            color: orangered;
        }
    </style>
    <div class="frontpage-banner-section frontpage-banner-style-one bg-overlay-violet bg-image ptb-100"
        style="background-image:url('{{ asset('storage/app/' . $settings->home_search_background_image) }}')">
        <div class="waves-effect bottom"
            style="background: url('{{ asset('storage/app/' . $settings->home_search_background_image) }}');">
        </div>

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="frontpage-banner-content text-center text-white">

                        <h1 class="banner-title">
                            Find <span class="toggle active span">Colleges</span>
                            <span class="toggle span">University</span>
                            <span class="toggle span">School</span> in There
                        </h1>
                        <script>
                            function displayWord() {
                                var words = document.getElementsByClassName("toggle");
                                var wordCounter = 0;

                                setInterval(updateWord, 1000);

                                function updateWord() {
                                    if (wordCounter >= words.length) wordCounter = 0;
                                    for (var i = 0; i < words.length; i++) {
                                        words[i].classList.remove('active');
                                    }
                                    words[wordCounter].classList.add('active');
                                    wordCounter++;
                                }
                            }
                            displayWord();
                        </script>

                        <form action="{{ route('search') }}" class="advance-search-form" method="GET">
                            <div class="inner-form">
                                <div class="advance-form-input search">
                                    <input name="name" id="search-box" type="text"
                                        placeholder="What are you looking for?" />
                                </div>
                                <div class="advance-form-input submitbtn">
                                    <button class="btn btn-default" type="submit">SEARCH NOW</button>
                                </div>
                            </div>
                        </form>
                        <div id="search-results"></div>
                        <script>
                            $(document).ready(function() {
                                $('#search-box').on('keyup', function() {
                                    var query = $(this).val();

                                    $.ajax({
                                        url: '{{ route('search') }}',
                                        method: 'GET',
                                        data: {
                                            query: query
                                        },
                                        success: function(response) {
                                            // Clear previous suggestions
                                            $('#search-results').empty();

                                            // Append new suggestions
                                            $.each(response, function(index, college) {
                                                // Create a div for each college result
                                                var collegeDiv = $('<div class="college-result"></div>');

                                                // Create an anchor element for the college link
                                                var collegeLink = $('<a href="/college/' + college.slug +
                                                    '"></a>');

                                                // Create an image element with the college thumbnail
                                                var imgElement = $('<img src="storage/app/' + college
                                                    .thumbline + '" alt="' + college.name + '"/>');

                                                // Create a paragraph element with the college name
                                                var nameElement = $('<span class="college-name">' + college
                                                    .name + '</span>');

                                                // Append the image and name to the college link
                                                collegeLink.append(imgElement, nameElement);

                                                // Append the college link to the college result div
                                                collegeDiv.append(collegeLink);

                                                // Append the college result div to the search results container
                                                $('#search-results').append(collegeDiv);
                                            });

                                        }
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (!$categories->isEmpty())
        <div class="testimonial-block bg-snow ptb-100">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9">
                        <div class="section-title">

                            <h2 class="title-main">Select Your Study Goal</h2>
                            <div class="divider">
                                <span class="icon-star-full"></span>
                                <span class="icon-star-full"></span>
                                <span class="icon-star-full"></span>
                                <span class="icon-star-full"></span>
                                <span class="icon-star-full"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="carousel-nav-text nav-right">
                            <button class="btn-links btn-prev">
                                <span>prev</span>
                            </button>
                            <button class="btn-links btn-next">
                                <span>next</span>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-carousel owl-carousel">

                            @foreach ($categories as $category)
                                <div class="testimonial-item">

                                    <div class="client-testimonial">
                                        <div class="client-area mb-2">
                                            <div class="client-thumb">
                                                <img src="{{ asset('storage/app/' . $category->category_icon) }}"
                                                    alt="{{ $category->name }}" />
                                            </div>

                                            <div class="client-info">
                                                <a href="{{ route('category-list', $category->slug) }}">
                                                    <h4 class="client-name">{{ $category->name }}</h4>
                                                </a>

                                                {{-- <p class="client-designation">Aramica Founder</p> --}}
                                            </div>
                                        </div>
                                        {{-- <div class="details" style="height: 170px">
                                            <div class="widget-content">
                                                <ul class="list list-unstyled">


                                                    @isset($category->subcategories)
                                                        @foreach ($category->subcategories as $sub_category)
                                                            <li><a href="#">{{ $sub_category->name }}</a>
                                                            </li>
                                                            <hr>
                                                        @endforeach
                                                    @endisset






                                                </ul>
                                            </div>
                                        </div> --}}

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="testimonial-block bg-snow ptb-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-9">
                    <div class="section-title">

                        <h2 class="title-main">Top Study Places For BE/B.Tech</h2>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="carousel-nav-text nav-right">
                        <button class="btn-links btn-prev">
                            <span>prev</span>
                        </button>
                        <button class="btn-links btn-next">
                            <span>next</span>
                        </button>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="listing-todo-thumbnail-carousel owl-carousel">

                        @foreach ($campuses as $campus)
                            <div class="card p-1 m-1">
                                <img style="height: 100px; width:100%;" class="card-img-top  mx-auto d-block"
                                    src="{{ asset('storage/app/' . $campus->campus_image) }}" alt="Card image cap">
                                <div class="">
                                    <p class="text-center"><small>{{ $campus->name }}</small></p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="todos-block bg-snow ptb-100">
        <div class="container ml-b-30">
            <div class="row">

                <div class="col-12">
                    <div class="section-title text-center">
                        {{-- <h4 class="title-sub">Top-Rated Local Businesses</h4> --}}
                        <h2 class="title-main">Top Institutes</h2>
                        <div class="divider">
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($top_colleges as $college)
                    @php

                        $total_rating = $college->reviews->sum('rating_number');
                        $total_count = $college->reviews->count();
                        $avarage_rating = $total_count > 0 ? $total_rating / $total_count : 0;

                    @endphp
                    <div class="col-lg-4 col-md-6">
                        <div class="todo-item">
                            <div class="todo-thumbnail-area">
                                <figure class="item-thumb">
                                    <img src="{{ asset('storage/app/' . $college->thumbline) }}" alt="Thmubnail">
                                </figure><!--./ item-thumb -->
                                <div class="todo-overlay-info">
                                    <div class="todo-type-cat">
                                        <a href="#" class="offer">{{ $college->type_of_college->name }}</a>
                                        <a href="#" class="nightlife">Rank:
                                            {{ $college->ranking_number }}</a>
                                    </div><!--./ todo-type-cat -->
                                    <div class="todo-meta-bottom">
                                        <div class="todo-rating">
                                            <span>{{ number_format($avarage_rating, 1) }}</span>{{ $total_count }}
                                            Ratings
                                        </div><!--./ todo-rating -->


                                        <div style="margin-right: -10px">
                                            <form action="{{ route('save_list_post') }}" method="POST">@csrf
                                                @if (auth()->user())
                                                    <input type="hidden" name="users"
                                                        value="{{ auth()->user()->id }}">
                                                @endif

                                                <input type="hidden" value="{{ $college->id }}" name="colleges">
                                                <button type="submit" class="btn btn-primary btn-pill"
                                                    style=" border-radius: 10%;"><i class="fa fa-heart"></i></button>


                                                </button>

                                            </form>


                                        </div>
                                        <div class="save">
                                            <a href="{{ route('compare') }}" class="">
                                                <i style="font-size:24px" class="fa">&#xf079;</i>
                                            </a>

                                        </div><!--./ save -->
                                    </div><!--./ todo-meta-bottom -->
                                </div><!--./ section-header -->
                            </div><!--./ todo-overlay-info -->
                            <div class="todo-content">
                                <h3 class="title"><a
                                        href="{{ route('college-details', $college->slug) }}">{{ $college->name }}</a>
                                </h3>
                                <div class="todo-price-status">
                                    <div class="todo-price">
                                        @if ($college->type_of_college != null && $college->type_of_college != '')
                                            {{ $college->type_of_college->name }}
                                        @endif
                                    </div>
                                    <div class="todo-status">Open Now</div>
                                </div><!--./ todo-footer -->
                                <div class="todo-meta">
                                    <div class="todo-location">
                                        <span class="icon-location"></span>
                                        Campuses:
                                        @foreach ($college->campuses as $item)
                                            {{ $item->name }} ,
                                        @endforeach

                                    </div><!--./ todo-location -->
                                    {{-- <div class="todo-number">
                                        <span class="icon-phone"></span>
                                        Courses:
                                        @foreach ($college->courses as $item)
                                            {{ $item->name }} ,
                                        @endforeach
                                    </div><!--./ todo-number --> --}}
                                </div><!--./ todo-meta -->
                            </div><!--./ todo-content -->
                        </div>
                    </div><!--~./ end todo item ~-->
                @endforeach


            </div>
        </div>
    </div>

    @if (!$courses->isEmpty())
        <div class="testimonial-block bg-snow ptb-100">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9">
                        <div class="section-title">

                            <h2 class="title-main">Courses</h2>
                            <div class="divider">
                                <span class="icon-star-full"></span>
                                <span class="icon-star-full"></span>
                                <span class="icon-star-full"></span>
                                <span class="icon-star-full"></span>
                                <span class="icon-star-full"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="carousel-nav-text nav-right">
                            <button class="btn-links btn-prev">
                                <span>prev</span>
                            </button>
                            <button class="btn-links btn-next">
                                <span>next</span>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-carousel owl-carousel">

                            @foreach ($courses as $course)
                                <div class="card shadow-lg p-3 mb-5 bg-white rounded">

                                    <div class="card-body">
                                        <a href="{{ route('course-list', $course->slug) }}">
                                            <h4 class="card-text text-center">{{ $course->name }}
                                                ({{ $course->sub_category->name }})
                                            </h4>
                                        </a>


                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="todos-block bg-snow ptb-100">
        <div class="container ml-b-30">
            <div class="row">

                <div class="col-12">
                    <div class="section-title text-center">
                        {{-- <h4 class="title-sub">Top-Rated Local Businesses</h4> --}}
                        <h2 class="title-main">Latest Institutes</h2>
                        <div class="divider">
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($colleges as $college)
                    @php

                        $total_rating = $college->reviews->sum('rating_number');
                        $total_count = $college->reviews->count();
                        $avarage_rating = $total_count > 0 ? $total_rating / $total_count : 0;

                    @endphp
                    <div class="col-lg-4 col-md-6">
                        <div class="todo-item">
                            <div class="todo-thumbnail-area">
                                <figure class="item-thumb">
                                    <img src="{{ asset('storage/app/' . $college->thumbline) }}" alt="Thmubnail">
                                </figure><!--./ item-thumb -->
                                <div class="todo-overlay-info">
                                    <div class="todo-type-cat">
                                        <a href="#" class="offer">{{ $college->type_of_college->name }}</a>
                                        <a href="#" class="nightlife">Rank:
                                            {{ $college->ranking_number }}</a>
                                    </div><!--./ todo-type-cat -->
                                    <div class="todo-meta-bottom">
                                        <div class="todo-rating">
                                            <span>{{ number_format($avarage_rating, 1) }}</span>{{ $total_count }}
                                            Ratings
                                        </div><!--./ todo-rating -->


                                        <div style="margin-right: -10px">
                                            <form action="{{ route('save_list_post') }}" method="POST">@csrf
                                                @if (auth()->user())
                                                    <input type="hidden" name="users"
                                                        value="{{ auth()->user()->id }}">
                                                @endif

                                                <input type="hidden" value="{{ $college->id }}" name="colleges">
                                                <button type="submit" class="btn btn-primary btn-pill"
                                                    style=" border-radius: 10%;"><i class="fa fa-heart"></i></button>


                                                </button>

                                            </form>


                                        </div>
                                        <div class="save">
                                            <a href="{{ route('compare') }}" class="">
                                                <i style="font-size:24px" class="fa">&#xf079;</i>
                                            </a>

                                        </div><!--./ save -->
                                    </div><!--./ todo-meta-bottom -->
                                </div><!--./ section-header -->
                            </div><!--./ todo-overlay-info -->
                            <div class="todo-content">
                                <h3 class="title"><a
                                        href="{{ route('college-details', $college->slug) }}">{{ $college->name }}</a>
                                </h3>
                                <div class="todo-price-status">
                                    <div class="todo-price">
                                        @if ($college->type_of_college != null && $college->type_of_college != '')
                                            {{ $college->type_of_college->name }}
                                        @endif
                                    </div>
                                    <div class="todo-status">Open Now</div>
                                </div><!--./ todo-footer -->
                                <div class="todo-meta">
                                    <div class="todo-location">
                                        <span class="icon-location"></span>
                                        Campuses:
                                        @foreach ($college->campuses as $item)
                                            {{ $item->name }} ,
                                        @endforeach

                                    </div><!--./ todo-location -->
                                    {{-- <div class="todo-number">
                                        <span class="icon-phone"></span>
                                        Courses:
                                        @foreach ($college->courses as $item)
                                            {{ $item->name }} ,
                                        @endforeach
                                    </div><!--./ todo-number --> --}}
                                </div><!--./ todo-meta -->
                            </div><!--./ todo-content -->
                        </div>
                    </div><!--~./ end todo item ~-->
                @endforeach


            </div>
            {{ $colleges->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
