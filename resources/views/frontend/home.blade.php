@extends('frontend.layouts.app')

@section('content')
    <div class="frontpage-banner-section frontpage-banner-style-one bg-overlay-violet bg-image ptb-100"
        style="background-image:url('public/frontend/assets/images/bg/hero-bg.jpg')">
        <div class="waves-effect bottom" style="background: url('public/frontend/assets/images/shape/waves-bottom.png');">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="frontpage-banner-content text-center text-white">

                        <h1 class="banner-title">
                            Find <span class="toggle active span">Colleges</span>
                            <span class="toggle span">University</span>
                            <span class="toggle span">School</span> in Bangladesh
                        </h1>


                        <form action="#" class="advance-search-form">
                            <div class="inner-form">
                                <div class="advance-form-input search">
                                    <input id="search" type="text" placeholder="What are you looking for?" />
                                </div>
                                <select class="advance-form-input select-custom category">
                                    <option>Courses</option>
                                    <option>Beauty</option>
                                    <option>Nightlife</option>
                                    <option>Hotels</option>
                                    <option>Automotive</option>
                                    <option>Travels</option>
                                    <option>Real Estates</option>
                                    <option>Shopping</option>
                                </select>
                                <select class="advance-form-input select-custom location">
                                    <option>Location </option>
                                    <option>New York</option>
                                    <option>California</option>
                                    <option>Washington</option>
                                    <option>New Jersey</option>
                                    <option>Los Angeles</option>
                                    <option>Florida</option>
                                </select>
                                <div class="advance-form-input submitbtn">
                                    <button class="btn btn-default" type="button">EXPLORE NOW</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    @isset($categories)
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
                                                    alt="Zohan Smith" />
                                            </div>

                                            <div class="client-info">
                                                <h4 class="client-name">{{ $category->name }}</h4>
                                                {{-- <p class="client-designation">Aramica Founder</p> --}}
                                            </div>
                                        </div>
                                        <div class="details" style="height: 170px">
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
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endisset


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

                <div class="col-lg-4 col-md-6">
                    <div class="todo-item">
                        <div class="todo-thumbnail-area">
                            <figure class="item-thumb">
                                <img src="public/frontend/assets/images/todo/1.jpg" alt="Thmubnail">
                            </figure><!--./ item-thumb -->
                            <div class="todo-overlay-info">
                                <div class="todo-type-cat">
                                    <a href="#" class="offer">hot offer</a>
                                    <a href="#" class="nightlife">Nightlife</a>
                                </div><!--./ todo-type-cat -->
                                <div class="todo-meta-bottom">
                                    <div class="todo-rating">
                                        <span>4.8</span>19 Ratings
                                    </div><!--./ todo-rating -->
                                    <div class="save">
                                        <a href="#" class="">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div><!--./ save -->
                                </div><!--./ todo-meta-bottom -->
                            </div><!--./ section-header -->
                        </div><!--./ todo-overlay-info -->
                        <div class="todo-content">
                            <h3 class="title"><a href="listing-details.html">Marriott JW Classic Dinner</a></h3>
                            <div class="todo-price-status">
                                <div class="todo-price">$12 - $33</div>
                                <div class="todo-status">Open Now</div>
                            </div><!--./ todo-footer -->
                            <div class="todo-meta">
                                <div class="todo-location">
                                    <span class="icon-location"></span>
                                    Saint Mario, Brokelyn, New York, US
                                </div><!--./ todo-location -->
                                <div class="todo-number">
                                    <span class="icon-phone"></span>
                                    +1 2 334458887
                                </div><!--./ todo-number -->
                            </div><!--./ todo-meta -->
                        </div><!--./ todo-content -->
                    </div>
                </div><!--~./ end todo item ~-->


            </div>
        </div>
    </div>
@endsection
