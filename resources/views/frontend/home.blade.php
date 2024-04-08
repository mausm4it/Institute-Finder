@extends('frontend.layouts.app')

@section('content')
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                Start Frontpage Banner Section
                                                                            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
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
                                </div><!--~./ search ~-->
                                <select class="advance-form-input select-custom category">
                                    <option>Courses</option>
                                    <option>Beauty</option>
                                    <option>Nightlife</option>
                                    <option>Hotels</option>
                                    <option>Automotive</option>
                                    <option>Travels</option>
                                    <option>Real Estates</option>
                                    <option>Shopping</option>
                                </select><!--~./ location ~-->
                                <select class="advance-form-input select-custom location">
                                    <option>Location </option>
                                    <option>New York</option>
                                    <option>California</option>
                                    <option>Washington</option>
                                    <option>New Jersey</option>
                                    <option>Los Angeles</option>
                                    <option>Florida</option>
                                </select><!--~./ location ~-->
                                <div class="advance-form-input submitbtn">
                                    <button class="btn btn-default" type="button">EXPLORE NOW</button>
                                </div><!--~./ location ~-->
                            </div>
                        </form><!--./ advance-search-form -->


                    </div>
                </div>
            </div>
        </div>
    </div><!--~./ end frontpage banner Section ~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                Start Poular Categories Block
                                                                            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="popular-categories-block popular-categories-style-one ptb-100">
        <div class="container ml-b-30">
            <div class="row">
                <!--~~~~~ Start Section title ~~~~~-->
                <div class="col-12">
                    <div class="section-title text-center">
                        <h4 class="title-sub">What Do You Want to Do Tonight</h4><!--  /.title-sub -->
                        <h2 class="title-main">Top Activities</h2><!-- /.title-main -->
                        <div class="divider">
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                        </div><!-- /.divider -->
                    </div><!-- /.section-title -->
                </div><!--./ col-12 -->
            </div><!--./ row -->

            <div class="row">
                <!--~~~~ Start Cat Items ~~~~-->
                <div class="col-lg-6">
                    <a href="#" class="cat-item cat-food">
                        <figure class="cat-thumb">
                            <img src="public/frontend/assets/images/categories/1.jpg" alt="Thmubnail">
                        </figure><!--./ cat-thumb -->

                        <div class="cat-content">
                            <div class="cat-content-inner">
                                <p class="listing-no">30</p>
                                <h3 class="title">Food & Drinks</h3><!--./ title -->
                            </div><!--./ cat-content-inner -->
                        </div><!--./ cat-content -->
                        <div class="cat-content-hover">
                            <div class="content-hover-inner">
                                <div class="icon">
                                    <span class="icon-fast-food"></span>
                                </div>
                                <h3 class="title">Food & Drinks</h3><!--./ title -->
                            </div>
                        </div><!--./ cat-content-hover -->
                    </a>
                </div><!--~./ end Cat Items ~-->

                <!--~~~~ Start Cat Items ~~~~-->
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="cat-item cat-nightlife">
                        <figure class="cat-thumb">
                            <img src="public/frontend/assets/images/categories/2.jpg" alt="Thmubnail">
                        </figure><!--./ cat-thumb -->

                        <div class="cat-content">
                            <div class="cat-content-inner">
                                <p class="listing-no">20</p>
                                <h3 class="title">Nightlife</h3><!--./ title -->
                            </div><!--./ cat-content-inner -->
                        </div><!--./ cat-content -->
                        <div class="cat-content-hover">
                            <div class="content-hover-inner">
                                <div class="icon">
                                    <span class="icon-cafe"></span>
                                </div>
                                <h3 class="title">Nightlife</h3><!--./ title -->
                            </div>
                        </div><!--./ cat-content-hover -->
                    </a>
                </div><!--~./ end Cat Items ~-->

                <!--~~~~ Start Cat Items ~~~~-->
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="cat-item cat-hotel">
                        <figure class="cat-thumb">
                            <img src="public/frontend/assets/images/categories/3.jpg" alt="Thmubnail">
                        </figure><!--./ cat-thumb -->

                        <div class="cat-content">
                            <div class="cat-content-inner">
                                <p class="listing-no">10</p>
                                <h3 class="title">Hotels</h3><!--./ title -->
                            </div><!--./ cat-content-inner -->
                        </div><!--./ cat-content -->
                        <div class="cat-content-hover">
                            <div class="content-hover-inner">
                                <div class="icon">
                                    <span class="icon-building"></span>
                                </div>
                                <h3 class="title">Hotels</h3><!--./ title -->
                            </div>
                        </div><!--./ cat-content-hover -->
                    </a>
                </div><!--~./ end Cat Items ~-->

                <!--~~~~ Start Cat Items ~~~~-->
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="cat-item cat-service">
                        <figure class="cat-thumb">
                            <img src="public/frontend/assets/images/categories/4.jpg" alt="Thmubnail">
                        </figure><!--./ cat-thumb -->

                        <div class="cat-content">
                            <div class="cat-content-inner">
                                <p class="listing-no">40</p>
                                <h3 class="title">Service</h3><!--./ title -->
                            </div><!--./ cat-content-inner -->
                        </div><!--./ cat-content -->
                        <div class="cat-content-hover">
                            <div class="content-hover-inner">
                                <div class="icon">
                                    <span class="icon-wrench"></span>
                                </div>
                                <h3 class="title">Service</h3><!--./ title -->
                            </div>
                        </div><!--./ cat-content-hover -->
                    </a>
                </div><!--~./ end Cat Items ~-->

                <!--~~~~ Start Cat Items ~~~~-->
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="cat-item cat-sopping">
                        <figure class="cat-thumb">
                            <img src="public/frontend/assets/images/categories/5.jpg" alt="Thmubnail">
                        </figure><!--./ cat-thumb -->

                        <div class="cat-content">
                            <div class="cat-content-inner">
                                <p class="listing-no">35</p>
                                <h3 class="title">Shopping</h3><!--./ title -->
                            </div><!--./ cat-content-inner -->
                        </div><!--./ cat-content -->
                        <div class="cat-content-hover">
                            <div class="content-hover-inner">
                                <div class="icon">
                                    <span class="icon-shopping-cart"></span>
                                </div>
                                <h3 class="title">Shopping</h3><!--./ title -->
                            </div>
                        </div><!--./ cat-content-hover -->
                    </a>
                </div><!--~./ end Cat Items ~-->

                <!--~~~~ Start Cat Items ~~~~-->
                <div class="col-lg-6">
                    <a href="#" class="cat-item cat-places">
                        <figure class="cat-thumb">
                            <img src="public/frontend/assets/images/categories/6.jpg" alt="Thmubnail">
                        </figure><!--./ cat-thumb -->

                        <div class="cat-content">
                            <div class="cat-content-inner">
                                <p class="listing-no">80</p>
                                <h3 class="title">Places</h3><!--./ title -->
                            </div><!--./ cat-content-inner -->
                        </div><!--./ cat-content -->
                        <div class="cat-content-hover">
                            <div class="content-hover-inner">
                                <div class="icon">
                                    <span class="icon-vynil"></span>
                                </div>
                                <h3 class="title">Places</h3><!--./ title -->
                            </div>
                        </div><!--./ cat-content-hover -->
                    </a>
                </div><!--~./ end Cat Items ~-->
            </div>
        </div>
    </div><!--~~./ end popular categories block ~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                Start Todos Block
                                                                            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="todos-block bg-snow ptb-100">
        <div class="container ml-b-30">
            <div class="row">
                <!--~~~~~ Start Section title ~~~~~-->
                <div class="col-12">
                    <div class="section-title text-center">
                        <h4 class="title-sub">Top-Rated Local Businesses</h4><!--  /.title-sub -->
                        <h2 class="title-main">Top Places Visited</h2><!-- /.title-main -->
                        <div class="divider">
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                        </div><!-- /.divider -->
                    </div><!-- /.section-title -->
                </div><!--./ col-12 -->
            </div><!--./ row -->

            <div class="row">
                <!--~~~~~ Start Todo Item ~~~~~-->
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

                <!--~~~~~ Start Todo Item ~~~~~-->
                <div class="col-lg-4 col-md-6">
                    <div class="todo-item status-closed">
                        <div class="todo-thumbnail-area">
                            <figure class="item-thumb">
                                <img src="public/frontend/assets/images/todo/2.jpg" alt="Thmubnail">
                            </figure><!--./ item-thumb -->
                            <div class="todo-overlay-info">
                                <div class="todo-type-cat">
                                    <a href="#" class="hotel">hotel</a>
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
                            <h3 class="title"><a href="listing-details.html">Barcelo Aqua Blue Hotel</a></h3>
                            <div class="todo-price-status">
                                <div class="todo-price"><del>$12</del> - $33</div>
                                <div class="todo-status">closed</div>
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

                <!--~~~~~ Start Todo Item ~~~~~-->
                <div class="col-lg-4 col-md-6">
                    <div class="todo-item">
                        <div class="todo-thumbnail-area">
                            <figure class="item-thumb">
                                <img src="public/frontend/assets/images/todo/3.jpg" alt="Thmubnail">
                            </figure><!--./ item-thumb -->
                            <div class="todo-overlay-info">
                                <div class="todo-type-cat">
                                    <a href="#" class="rated">top rated</a>
                                    <a href="#" class="fitness">Fitness</a>
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
                            <h3 class="title"><a href="listing-details.html">Balance Gym Summer</a></h3>
                            <div class="todo-price-status">
                                <div class="todo-price">$60</div>
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

                <!--~~~~~ Start Todo Item ~~~~~-->
                <div class="col-lg-4 col-md-6">
                    <div class="todo-item">
                        <div class="todo-thumbnail-area">
                            <figure class="item-thumb">
                                <img src="public/frontend/assets/images/todo/4.jpg" alt="Thmubnail">
                            </figure><!--./ item-thumb -->
                            <div class="todo-overlay-info">
                                <div class="todo-type-cat">
                                    <a href="#" class="sale">sale</a>
                                    <a href="#" class="services">services</a>
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

                <!--~~~~~ Start Todo Item ~~~~~-->
                <div class="col-lg-4 col-md-6">
                    <div class="todo-item status-closed">
                        <div class="todo-thumbnail-area">
                            <figure class="item-thumb">
                                <img src="public/frontend/assets/images/todo/5.jpg" alt="Thmubnail">
                            </figure><!--./ item-thumb -->
                            <div class="todo-overlay-info">
                                <div class="todo-type-cat">
                                    <a href="#" class="limited">limited</a>
                                    <a href="#" class="services">services</a>
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
                            <h3 class="title"><a href="listing-details.html">Barcelo Aqua Blue Hotel</a></h3>
                            <div class="todo-price-status">
                                <div class="todo-price">$12 - $33</div>
                                <div class="todo-status">closed</div>
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

                <!--~~~~~ Start Todo Item ~~~~~-->
                <div class="col-lg-4 col-md-6">
                    <div class="todo-item">
                        <div class="todo-thumbnail-area">
                            <figure class="item-thumb">
                                <img src="public/frontend/assets/images/todo/6.jpg" alt="Thmubnail">
                            </figure><!--./ item-thumb -->
                            <div class="todo-overlay-info">
                                <div class="todo-type-cat">
                                    <a href="#" class="restaurant">Restaurants</a>
                                    <a href="#" class="sale">sale</a>
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
                            <h3 class="title"><a href="listing-details.html">Balance Gym Summer</a></h3>
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
            </div><!--./ row -->
        </div>
    </div><!--~./ end todos block ~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                Start Work Process Block
                                                                            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="work-process-block ptb-100">
        <div class="container ml-b-45">
            <div class="row">
                <!--~~~~~ Start Section title ~~~~~-->
                <div class="col-12">
                    <div class="section-title text-center">
                        <h4 class="title-sub">easy steps in few moments</h4><!--  /.title-sub -->
                        <h2 class="title-main">How Does It Work</h2><!-- /.title-main -->
                        <div class="divider">
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                        </div><!-- /.divider -->
                    </div><!-- /.section-title -->
                </div><!--./ col-12 -->
            </div><!--./ row -->

            <div class="row process-list">
                <div class="bg-line" style="background-image:url('public/frontend/assets/images/others/linearrow.png')">
                </div>
                <!-- /.bg-line -->

                <!--~./ Start Single Process ~-->
                <div class="col-lg-4 col-md-6">
                    <div class="single-process">
                        <div class="icon">
                            <img src="public/frontend/assets/images/icon/process3.png" alt="Icon">
                        </div>
                        <h2 class="process-step">Choose What To Do</h2>
                    </div>
                </div><!--~./ end single process ~-->

                <!--~./ Start Single Process ~-->
                <div class="col-lg-4 col-md-6">
                    <div class="single-process">
                        <div class="icon">
                            <img src="public/frontend/assets/images/icon/process2.png" alt="Icon">
                        </div>
                        <h2 class="process-step">Find What You Want</h2>
                    </div>
                </div><!--~./ end single process ~-->

                <!--~./ Start Single Process ~-->
                <div class="col-lg-4 col-md-6">
                    <div class="single-process">
                        <div class="icon">
                            <img src="public/frontend/assets/images/icon/process1.png" alt="Icon">
                        </div>
                        <h2 class="process-step">Explore Place & Enjoy</h2>
                    </div>
                </div><!--~./ end single process ~-->
            </div>
        </div><!-- /.container -->
    </div><!--~~./ end work process block ~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                Start Promo Block
                                                                            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="promo-block bg-image bg-overlay ptb-100"
        style="background-image:url('public/frontend/assets/images/bg/promo-bg1.jpg')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="promo-block-content text-center">
                        <h2 class="promo-title">Add New Lisiting & Build Your Business</h2><!-- /.promo-title -->
                        <div class="action-btn-group">
                            <a href="#" class="btn btn-default">Add New Listing <span
                                    class="fas fa-caret-right"></span></a>
                        </div><!-- /.action-btn-group -->
                    </div><!-- /.promo-block-content -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /. end promo block -->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                Start Testimonial Block
                                                                            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="testimonial-block ptb-100">
        <div class="container">
            <div class="row">
                <!--~~~~~ Start Section title ~~~~~-->
                <div class="col-lg-9">
                    <div class="section-title">
                        <h4 class="title-sub">Our sastisfied people from worldwide</h4><!--  /.title-sub -->
                        <h2 class="title-main">What Our User Says</h2><!-- /.title-main -->
                        <div class="divider">
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                        </div><!-- /.divider -->
                    </div><!-- /.section-title -->
                </div><!--./ section-header -->

                <div class="col-lg-3">
                    <div class="carousel-nav-text nav-right">
                        <button class="btn-links btn-prev">
                            <span>prev</span>
                        </button>
                        <button class="btn-links btn-next">
                            <span>next</span>
                        </button>
                    </div><!--~./ end carousel nav text ~-->
                </div>
            </div><!-- /.row -->

            <!-- Title Row -->
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-carousel owl-carousel">
                        <div class="testimonial-item">
                            <div class="quote-icon">
                                <img src="public/frontend/assets/images/icon/quote2.png" alt="Icon">
                            </div><!-- /.quote-icon -->
                            <div class="client-testimonial">
                                <div class="details">
                                    <p>Now that we know who you are, I know who I am. I'm not a mistake! It makes sense! In
                                        a comic, you know how you can tell who the going to be? He's the exact opposite of
                                        the hero.</p>
                                </div><!-- /.details -->
                                <div class="client-area">
                                    <div class="client-thumb">
                                        <img src="public/frontend/assets/images/testimonials/1.png" alt="Zohan Smith" />
                                    </div><!-- /.client-thumb -->

                                    <div class="client-info">
                                        <h4 class="client-name">Fatima Mahmoud</h4><!--  /.client-name -->
                                        <p class="client-designation">Aramica Founder</p>
                                    </div><!-- /.client-info -->
                                </div><!-- /.client-area -->
                            </div><!-- /.client-testimonial -->
                        </div><!-- /.testimonial-item -->

                        <div class="testimonial-item">
                            <div class="quote-icon">
                                <img src="public/frontend/assets/images/icon/quote2.png" alt="Icon">
                            </div><!-- /.quote-icon -->
                            <div class="client-testimonial">
                                <div class="details">
                                    <p>Now that we know who you are, I know who I am. I'm not a mistake! It makes sense! In
                                        a comic, you know how you can tell who the going to be? He's the exact opposite of
                                        the hero.</p>
                                </div><!-- /.details -->
                                <div class="client-area">
                                    <div class="client-thumb">
                                        <img src="public/frontend/assets/images/testimonials/2.png" alt="Zohan Smith" />
                                    </div><!-- /.client-thumb -->

                                    <div class="client-info">
                                        <h4 class="client-name">Abdel Fattah Arafa</h4><!--  /.client-name -->
                                        <p class="client-designation">Pumas Owner</p>
                                    </div><!-- /.client-info -->
                                </div><!-- /.client-area -->
                            </div><!-- /.client-testimonial -->
                        </div><!-- /.testimonial-item -->

                        <div class="testimonial-item">
                            <div class="quote-icon">
                                <img src="public/frontend/assets/images/icon/quote2.png" alt="Icon">
                            </div><!-- /.quote-icon -->
                            <div class="client-testimonial">
                                <div class="details">
                                    <p>Now that we know who you are, I know who I am. I'm not a mistake! It makes sense! In
                                        a comic, you know how you can tell who the going to be? He's the exact opposite of
                                        the hero.</p>
                                </div><!-- /.details -->
                                <div class="client-area">
                                    <div class="client-thumb">
                                        <img src="public/frontend/assets/images/testimonials/3.png" alt="Zohan Smith" />
                                    </div><!-- /.client-thumb -->

                                    <div class="client-info">
                                        <h4 class="client-name">Kinda Mohamed</h4><!--  /.client-name -->
                                        <p class="client-designation">Project Owner</p>
                                    </div><!-- /.client-info -->
                                </div><!-- /.client-area -->
                            </div><!-- /.client-testimonial -->
                        </div><!-- /.testimonial-item -->
                    </div><!-- /.testimonial-carousel -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!--~~./ end testimonial block ~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                Start News Block
                                                                            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="news-block ptb-100 bg-snow">
        <div class="container ml-b-30">
            <div class="row">
                <!--~~~~~ Start Section title ~~~~~-->
                <div class="col-12">
                    <div class="section-title text-center">
                        <h4 class="title-sub">ALL ABOUT QAYIMA UPDATES</h4><!--  /.title-sub -->
                        <h2 class="title-main">Tips & Tricks</h2><!-- /.title-main -->
                        <div class="divider">
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                        </div><!-- /.divider -->
                    </div><!-- /.section-title -->
                </div><!--./ col-12 -->
            </div><!--./ row -->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <article class="post">
                        <figure class="post-thumb">
                            <img src="public/frontend/assets/images/blog/post/grid/1.jpg" alt="Blog Image" />
                        </figure><!-- /.post-thumb -->
                        <div class="overlay">
                            <div class="overlay-inner">
                                <div class="post-details">
                                    <h2 class="entry-title"><a href="blog-single.html">You are free to choose what you
                                            want to make.</a></h2><!-- /.entry-title -->
                                    <div class="entry-meta-content">
                                        <div class="entry-date">
                                            <span>27 feb, 2019</span>
                                        </div><!--./ entry-date -->
                                        <div class="entry-cats">
                                            <a href="#">lifestyle</a>
                                        </div><!--./ entry-cats -->
                                    </div><!--./ entry-meta-content -->
                                </div><!-- /.post-details -->
                            </div><!-- /.overlay-inner -->
                        </div><!-- /.overlay -->
                    </article><!-- /.post -->
                </div><!--./ col-lg-4 -->

                <div class="col-lg-4 col-md-6">
                    <article class="post">
                        <figure class="post-thumb">
                            <img src="public/frontend/assets/images/blog/post/grid/2.jpg" alt="Blog Image" />
                        </figure><!-- /.post-thumb -->
                        <div class="overlay">
                            <div class="overlay-inner">
                                <div class="post-details">
                                    <h2 class="entry-title"><a href="blog-single.html">You are free to choose what you
                                            want to make.</a></h2><!-- /.entry-title -->
                                    <div class="entry-meta-content">
                                        <div class="entry-date">
                                            <span>27 feb, 2019</span>
                                        </div><!--./ entry-date -->
                                        <div class="entry-cats">
                                            <a href="#">lifestyle</a>
                                        </div><!--./ entry-cats -->
                                    </div><!--./ entry-meta-content -->
                                </div><!-- /.post-details -->
                            </div><!-- /.overlay-inner -->
                        </div><!-- /.overlay -->
                    </article><!-- /.post -->
                </div><!--./ col-lg-4 -->

                <div class="col-lg-4 col-md-6">
                    <article class="post">
                        <figure class="post-thumb">
                            <img src="public/frontend/assets/images/blog/post/grid/3.jpg" alt="Blog Image" />
                        </figure><!-- /.post-thumb -->
                        <div class="overlay">
                            <div class="overlay-inner">
                                <div class="post-details">
                                    <h2 class="entry-title"><a href="blog-single.html">You are free to choose what you
                                            want to make.</a></h2><!-- /.entry-title -->
                                    <div class="entry-meta-content">
                                        <div class="entry-date">
                                            <span>27 feb, 2019</span>
                                        </div><!--./ entry-date -->
                                        <div class="entry-cats">
                                            <a href="#">lifestyle</a>
                                        </div><!--./ entry-cats -->
                                    </div><!--./ entry-meta-content -->
                                </div><!-- /.post-details -->
                            </div><!-- /.overlay-inner -->
                        </div><!-- /.overlay -->
                    </article><!-- /.post -->
                </div><!--./ col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!--~~./ end news block ~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                Start Work brand Block
                                                                            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="work-brand-block bg-main ptb-100">
        <div class="container ml-t-15 ml-b-15">
            <div class="row">
                <div class="col-12">
                    <!--~~ Start Brands Carousel ~~-->
                    <div class="brands-carousel owl-carousel">
                        <div class="brands-link">
                            <img src="public/frontend/assets/images/brand/1.png" alt="logo">
                        </div>
                        <div class="brands-link">
                            <img src="public/frontend/assets/images/brand/2.png" alt="logo">
                        </div>
                        <div class="brands-link">
                            <img src="public/frontend/assets/images/brand/3.png" alt="logo">
                        </div>
                        <div class="brands-link">
                            <img src="public/frontend/assets/images/brand/4.png" alt="logo">
                        </div>
                        <div class="brands-link">
                            <img src="public/frontend/assets/images/brand/4.png" alt="logo">
                        </div>
                    </div><!--~./ end brands carousel ~-->
                </div>
            </div>
        </div>
    </div><!--~./ end popular brands block ~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                Start Features Cat List Area
                                                                            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="features-cat-list-area bg-blue-violet">
        <div class="container">
            <div class="row">
                <!--~~~~~ Start Cat List Item ~~~~~-->
                <div class="col-lg-3 col-md-6">
                    <div class="cat-list-item">
                        <div class="cat-title">
                            <div class="icon">
                                <span class="icon-sunbed"></span>
                            </div>
                            <div class="cat-name">Beauty & Health</div>
                        </div>
                        <ul class="list">
                            <li><a href="#">Clinic<span>4</span></a></li>
                            <li><a href="#">Fitness<span>6</span></a></li>
                            <li><a href="#">Spa & Yoga<span>7</span></a></li>
                            <li><a href="#">Salon<span>10</span></a></li>
                            <li><a href="#">Skin Care<span>5</span></a></li>
                        </ul>
                    </div>
                </div><!--./ cat-list-item -->
                <!--~~~~~ Start Cat List Item ~~~~~-->
                <div class="col-lg-3 col-md-6">
                    <div class="cat-list-item">
                        <div class="cat-title">
                            <div class="icon">
                                <span class="icon-fast-food"></span>
                            </div>
                            <div class="cat-name">Travels</div>
                        </div>
                        <ul class="list">
                            <li><a href="#">Healthy Foods<span>4</span></a></li>
                            <li><a href="#">Take Away<span>6</span></a></li>
                            <li><a href="#">Fast Foods<span>7</span></a></li>
                            <li><a href="#">Desert<span>10</span></a></li>
                            <li><a href="#">Ice Cream<span>5</span></a></li>
                        </ul>
                    </div>
                </div><!--./ cat-list-item -->
                <!--~~~~~ Start Cat List Item ~~~~~-->
                <div class="col-lg-3 col-md-6">
                    <div class="cat-list-item">
                        <div class="cat-title">
                            <div class="icon">
                                <span class="icon-cafe"></span>
                            </div>
                            <div class="cat-name">Entertainments</div>
                        </div>
                        <ul class="list">
                            <li><a href="#">Night Life<span>4</span></a></li>
                            <li><a href="#">Cinema<span>6</span></a></li>
                            <li><a href="#">Theatre<span>7</span></a></li>
                            <li><a href="#">Stadium<span>10</span></a></li>
                            <li><a href="#">Art & Design<span>5</span></a></li>
                        </ul>
                    </div>
                </div><!--./ cat-list-item -->
                <!--~~~~~ Start Cat List Item ~~~~~-->
                <div class="col-lg-3 col-md-6">
                    <div class="cat-list-item">
                        <div class="cat-title">
                            <div class="icon">
                                <span class="icon-bag-1"></span>
                            </div>
                            <div class="cat-name">Shopping</div>
                        </div>
                        <ul class="list">
                            <li><a href="#">Men<span>4</span></a></li>
                            <li><a href="#">Women<span>6</span></a></li>
                            <li><a href="#">Kids<span>7</span></a></li>
                            <li><a href="#">Furniture<span>10</span></a></li>
                            <li><a href="#">Jewellery<span>5</span></a></li>
                        </ul>
                    </div>
                </div><!--./ cat-list-item -->
            </div>
        </div>
    </div><!--~./ end features cat list area ~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                Start Newsletter Block
                                                                            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="newsletter-block ptb-100">
        <div class="container">
            <div class="row">
                <!--~~~~~ Start Section title ~~~~~-->
                <div class="col-12">
                    <div class="section-title text-center">
                        <h4 class="title-sub">subscribe with us and get unlimited discount</h4><!--  /.title-sub -->
                        <h2 class="title-main">Weekly Newsletter</h2><!-- /.title-main -->
                        <div class="divider">
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                        </div><!-- /.divider -->
                    </div><!-- /.section-title -->
                </div><!--./ col-12 -->
            </div><!--./ row -->

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="subscribe-form">
                        <!-- Subscribe form -->
                        <form class="dv-form" id="mc-form">
                            <div class="form-group">
                                <input id="mc-name" name="name" placeholder="Full Name" type="text">
                            </div>
                            <div class="form-group">
                                <input id="mc-email" name="EMAIL" placeholder="Email Address" type="email">
                            </div>
                            <button class="btn btn-default" name="Subscribe" id="subscribe-btn" type="submit">Subscribe
                                Now <span class="fas fa-caret-right"></span></button>
                        </form>
                    </div><!-- /.subscribe-form -->
                </div>
            </div>
        </div><!-- /.container -->
    </div><!--~~./ end newsletter block ~~-->
@endsection
