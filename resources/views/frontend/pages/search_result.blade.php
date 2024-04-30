@extends('frontend.layouts.app')
@section('header')
    @include('frontend.layouts.header')
@endsection
@section('content')
    <div class="page-title-area style-two pd-t-60 pd-b-45 bg-image bg-overlay"
        style="background-image:url('public/frontend/assets/images/bg/hero-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content mt-5">
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
                    </div><!--~~./ page-header-content ~~-->
                </div>
            </div>
        </div>

        <!--~~./ end container ~~-->
    </div>


    <div class="todo-grid-list-block ml-t-60 pd-b-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-filter-options mrb-100">
                        <div class="row align-items-end">
                            <div class="col-lg-3 col-md-6">

                                <div class="products-ordering-list">
                                    <label>Ranking</label>
                                    <select class="select-custom" onchange="window.location.href=this.value;">
                                        <option value="">Sort By Ranking</option>
                                        <option value="{{ route('search', ['sort' => 'ranking_high_to_low']) }}">Lower
                                            ranking To Top
                                        </option>
                                        <option value="{{ route('search', ['sort' => 'ranking_low_to_high']) }}">Top ranking
                                            To Lower
                                        </option>
                                    </select>
                                </div><!--~./ products-ordering-list ~-->
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="products-ordering-list">
                                    <label>Type Of Institute</label>
                                    <select name="type_of_college_id" class="select-custom country"
                                        onchange="window.location.href=this.value;">
                                        <option value="">Type Of Institute</option>
                                        @foreach ($typeOfColleges as $typeOfCollege)
                                            <option
                                                value="{{ route('search', ['type_of_college_id' => $typeOfCollege->id]) }}">
                                                {{ $typeOfCollege->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="products-ordering-list">
                                    <label>Courses</label>
                                    <select name="course_id" class="select-custom country"
                                        onchange="window.location.href=this.value;">
                                        <option value="">Filter By Course</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ route('search', ['course_id' => $course->id]) }}">
                                                {{ $course->name }} (<b>{{ $course->sub_category->name }}</b>)</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="products-ordering-list">
                                    <label>Campuses</label>
                                    <select name="campus_id" class="select-custom country"
                                        onchange="window.location.href=this.value;">
                                        <option value="">Filter By Campus</option>
                                        @foreach ($campuses as $campus)
                                            <option value="{{ route('search', ['campus_id' => $campus->id]) }}">
                                                {{ $campus->name }}</option>
                                        @endforeach

                                    </select>
                                </div><!--~./ products-ordering-list ~-->
                            </div>


                        </div>
                    </div><!--~./ search-filter-options ~-->
                </div><!--./ col-12 -->
            </div><!--./ row -->

            <div class="row">
                <div class="col-12">
                    <div class="row todo-grid-list-content">
                        <div class="col-lg-8">
                            @if ('name' != '')
                                @foreach ($colleges as $college)
                                    @if ($college->publish === 1)
                                        @php

                                            $total_rating = $college->reviews->sum('rating_number');
                                            $total_count = $college->reviews->count();
                                            $avarage_rating = $total_count > 0 ? $total_rating / $total_count : 0;

                                        @endphp
                                        <div class="todo-item todo-item-list">
                                            <div class="todo-thumbnail-area">
                                                <figure class="item-thumb">
                                                    <img src="{{ asset('storage/app/' . $college->thumbline) }}"
                                                        alt="Thmubnail">
                                                </figure><!--./ item-thumb -->
                                                <div class="todo-overlay-info">
                                                    <div class="todo-type-cat">
                                                        @if ($college->type_of_college_id != null && $college->type_of_college_id != '')
                                                            <a href="#"
                                                                class="offer">{{ $college->type_of_college->name }}</a>
                                                        @endif
                                                        <a href="#" class="nightlife">Rank:
                                                            {{ $college->ranking_number }}</a>
                                                    </div><!--./ todo-type-cat -->
                                                    <div class="todo-meta-bottom">
                                                        <div class="todo-rating">
                                                            <span>{{ $avarage_rating }}</span>{{ $total_count }} Ratings
                                                        </div><!--./ todo-rating -->
                                                        <div style="margin-right: -10px">
                                                            <form action="{{ route('save_list_post') }}" method="POST">
                                                                @csrf
                                                                @if (auth()->user())
                                                                    <input type="hidden" name="users"
                                                                        value="{{ auth()->user()->id }}">
                                                                @endif

                                                                <input type="hidden" value="{{ $college->id }}"
                                                                    name="colleges">
                                                                <button type="submit" class="btn btn-primary"
                                                                    style=" border-radius: 10%;"><i
                                                                        class="fa fa-heart"></i></button>


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

                                                    <div class="todo-status">Open Now</div>
                                                </div><!--./ todo-footer -->
                                                <div class="todo-meta">
                                                    <div class="todo-location">
                                                        <span class="icon-location"></span>
                                                        @foreach ($college->campuses as $item)
                                                            {{ $item->name }} ,
                                                        @endforeach
                                                    </div><!--./ todo-location -->

                                                </div><!--./ todo-meta -->
                                                <div class="todo-summary">
                                                    <p>{{ $college->summary }}</p>
                                                </div><!--./ todo-summary -->
                                            </div><!--./ todo-content -->
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                            <!--~./ end todo item ~-->

                            {{ $colleges->links('pagination::bootstrap-4') }}
                            <!--~~~~~ Start Paging Navigation ~~~~~-->
                            {{-- <nav class="paging-navigation pagination-center pd-t-70">
                                <ul class="nav-links">
                                    <li class="nav-previous"> <!-- disabled class add when no pagination -->
                                        <a href="#">Previous</a>
                                    </li>
                                    
                                    <li class="nav-next">
                                        <a href="#">Next</a>
                                    </li>
                                </ul>
                            </nav><!--~./ end paging navigation ~--> --}}
                        </div>

                        <!--~~~~~ Start sidebar ~~~~~-->
                        <div class="col-lg-4">
                            <div class="sidebar-todos mrt-md-60">
                                <!--~~~~ Start Widget Search Filter ~~~~-->
                                <aside class="widget widget_search_filter">
                                    <h4 class="widget-title">Search Institute</h4>
                                    <div class="widget-content">
                                        <form action="{{ route('search') }}" name="searchfilterForm"
                                            id='search_filter_form' method="GET" class="search_filter_form">
                                            <div class="filter-group">
                                                <span class="icon-search32"></span>
                                                <input name="name" id="filter_search"
                                                    placeholder="What are you looking for?" type="text"
                                                    class="form-controllar" required>
                                            </div>
                                            <div class="filter-group">
                                                <span class="icon-worlwide"></span>
                                                <select name="country_id" class="select-custom category" required>
                                                    <option>Filter By Country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach


                                                </select>
                                            </div>
                                            <div class="filter-group">
                                                <span class="icon-open-book-1"></span>
                                                <select name="course_id" class="select-custom country" required>
                                                    <option>Filter By Course</option>

                                                    @foreach ($courses as $course)
                                                        <option value="{{ $course->id }}">
                                                            {{ $course->name }} (<b>{{ $course->sub_category->name }}</b>)
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="filter-group">
                                                <span class="icon-school-2"></span>
                                                <select name="type_of_college_id" class="select-custom country" required>
                                                    <option>Type of Institute</option>

                                                    @foreach ($typeOfColleges as $typeOfCollege)
                                                        <option value="{{ $typeOfCollege->id }}">
                                                            {{ $typeOfCollege->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-submit">
                                                <button type="submit" class="btn btn-default">Apply Filter</button>
                                            </div>
                                        </form>
                                    </div>
                                </aside><!--~./ end widget search filter ~-->

                                <!--~~~~ Start Widget Todo Categories ~~~~-->
                                <aside class="widget widget_todo_categories">
                                    <h4 class="widget-title">Featured Categories</h4>
                                    <div class="widget-content">
                                        <ul>
                                            @foreach ($categories as $category)
                                                <li class="cat-item">
                                                    <a href="#">{{ $category->name }}<span
                                                            class="count">{{ $category->subcategories->count() }}</span></a>
                                                </li>
                                            @endforeach


                                        </ul>
                                    </div>
                                </aside><!--~./ end widget todo categories ~-->

                                <!--~~~~ Start Recent View Todo Widget ~~~~-->
                                {{-- <aside class="widget widget_recent_view_todo">
                                    <h4 class="widget-title">Recent Viewed Lisitng</h4>
                                    <div class="widget-content">
                                        <!--~~~~~ Start Todo Item ~~~~~-->
                                        <div class="todo-side-item todo-item">
                                            <div class="todo-thumbnail-area">
                                                <figure class="item-thumb">
                                                    <img src="assets/images/widget/todo/1.jpg" alt="Todo Thumb">
                                                </figure><!--./ item-thumb -->
                                            </div><!--./ todo-thumbnail-area -->

                                            <div class="todo-content">
                                                <h3 class="title"><a href="listing-details.html">Used Vollax Car</a></h3>
                                                <div class="todo-rating">
                                                    <span>4.8</span>19 Ratings
                                                </div><!--./ todo-rating -->
                                                <div class="todo-meta">
                                                    <div class="todo-location">
                                                        <span class="icon-location"></span>
                                                        Barcelona, ES
                                                    </div>
                                                    <div class="todo-number">
                                                        <span class="icon-phone"></span>
                                                        +34 2 2458752
                                                    </div>
                                                </div><!--./ todo-meta -->
                                            </div><!--./ todo-content -->
                                        </div><!--~./ end todo item ~-->

                                        <!--~~~~~ Start Todo Item ~~~~~-->
                                        <div class="todo-side-item todo-item">
                                            <div class="todo-thumbnail-area">
                                                <figure class="item-thumb">
                                                    <img src="assets/images/widget/todo/2.jpg" alt="Todo Thumb">
                                                </figure><!--./ item-thumb -->
                                            </div><!--./ todo-thumbnail-area -->

                                            <div class="todo-content">
                                                <h3 class="title"><a href="listing-details.html">Kris Beauty Carnaval</a>
                                                </h3>
                                                <div class="todo-rating">
                                                    <span>4.8</span>19 Ratings
                                                </div><!--./ todo-rating -->
                                                <div class="todo-meta">
                                                    <div class="todo-location">
                                                        <span class="icon-location"></span>
                                                        Barcelona, ES
                                                    </div>
                                                    <div class="todo-number">
                                                        <span class="icon-phone"></span>
                                                        +34 2 2458752
                                                    </div>
                                                </div><!--./ todo-meta -->
                                            </div><!--./ todo-content -->
                                        </div><!--~./ end todo item ~-->

                                        <!--~~~~~ Start Todo Item ~~~~~-->
                                        <div class="todo-side-item todo-item">
                                            <div class="todo-thumbnail-area">
                                                <figure class="item-thumb">
                                                    <img src="assets/images/widget/todo/1.jpg" alt="Todo Thumb">
                                                </figure><!--./ item-thumb -->
                                            </div><!--./ todo-thumbnail-area -->

                                            <div class="todo-content">
                                                <h3 class="title"><a href="listing-details.html">Balance Gym Summer</a>
                                                </h3>
                                                <div class="todo-rating">
                                                    <span>4.8</span>19 Ratings
                                                </div><!--./ todo-rating -->
                                                <div class="todo-meta">
                                                    <div class="todo-location">
                                                        <span class="icon-location"></span>
                                                        Barcelona, ES
                                                    </div>
                                                    <div class="todo-number">
                                                        <span class="icon-phone"></span>
                                                        +34 2 2458752
                                                    </div>
                                                </div><!--./ todo-meta -->
                                            </div><!--./ todo-content -->
                                        </div><!--~./ end todo item ~-->

                                        <!--~~~~~ Start Todo Item ~~~~~-->
                                        <div class="todo-side-item todo-item">
                                            <div class="todo-thumbnail-area">
                                                <figure class="item-thumb">
                                                    <img src="assets/images/widget/todo/3.jpg" alt="Thmubnail">
                                                </figure><!--./ item-thumb -->
                                            </div><!--./ todo-thumbnail-area -->

                                            <div class="todo-content">
                                                <h3 class="title"><a href="listing-details.html">Barcelo Aqua Blue</a>
                                                </h3>
                                                <div class="todo-rating">
                                                    <span>4.8</span>19 Ratings
                                                </div><!--./ todo-rating -->
                                                <div class="todo-meta">
                                                    <div class="todo-location">
                                                        <span class="icon-location"></span>
                                                        Barcelona, ES
                                                    </div>
                                                    <div class="todo-number">
                                                        <span class="icon-phone"></span>
                                                        +34 2 2458752
                                                    </div>
                                                </div><!--./ todo-meta -->
                                            </div><!--./ todo-content -->
                                        </div><!--~./ end todo item ~-->
                                    </div>
                                </aside><!--~./ end recent view todo widget ~--> --}}
                            </div>
                        </div><!--~./ end sidebar ~-->
                    </div><!--./ row -->
                </div><!--./ col-12 -->
            </div><!--./ row -->
        </div><!--./ container -->
    </div>
@endsection
