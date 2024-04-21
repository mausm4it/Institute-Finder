@extends('frontend.layouts.app')

@section('content')
    <div class="single-listing-todo-block style-two pd-b-100">
        <div class="listing-todo-thumbnail-area bg-image"
            style="background-image:url({{ asset('storage/app/' . $college->gallery) }})">
            <div class="listing-todo-header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="listing-todo-header text-white">
                                <div class="todo-brand-logo">
                                    <div class="brand-logo">
                                        <img src="{{ asset('storage/app/' . $college->thumbline) }}" alt="logo">
                                    </div>
                                </div><!--./ todo-brand-logo -->
                                <div class="listing-todo-header-info">
                                    <div class="info-left">
                                        <h3 class="todo-title">{{ $college->name }}</h3>
                                        <p class="todo-subtitle">{{ $college->summary }}</p>
                                        <div class="todo-cat-status">
                                            <div class="todo-type-cat">
                                                <a class="restaurant" href="#">
                                                    @if ($college->type_of_college != null && $college->type_of_college != '')
                                                        {{ $college->type_of_college->name }}
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="todo-status">open Now</div>
                                        </div><!--./ todo-cat-status -->
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
                                                +1 2 334458887
                                            </div><!--./ todo-number --> --}}
                                        </div><!--./ todo-meta -->
                                    </div><!--./ info-left -->

                                    <div class="info-right">
                                        {{-- <div class="todo-price"> Courses:
                                            @foreach ($college->courses as $item)
                                                {{ $item->name }} ,
                                            @endforeach
                                        </div> --}}
                                        <div class="todo-rating">
                                            <span>4.8</span>19 Ratings
                                        </div>
                                        <div class="listing-todo-feature-list">
                                            <a href="#" class="single-list">
                                                <span class="text">Share</span>
                                                <span class="icon-share1"></span>
                                            </a>
                                            <a href="#" class="single-list">
                                                <span class="text">Submit Review</span>
                                                <span class="icon-chat"></span>
                                            </a>
                                            <a href="#" class="single-list">
                                                <span class="text">Save</span>
                                                <span class="icon-bookmark1"></span>
                                            </a>
                                            <a href="#" class="single-list">
                                                <span class="text">Report</span>
                                                <span class="icon-flag1"></span>
                                            </a>
                                        </div><!--~~./ listing-todo-feature-list ~~-->
                                    </div><!--./ info-right -->
                                </div><!--./ listing-todo-header-info -->
                            </div><!--./ listing-todo-header -->
                        </div>
                    </div>
                </div>
            </div><!--./ listing-todo-header-content -->
        </div><!--~./ listing todo thumbnail Area ~-->
        <div class="todo-details-menu">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="todo-menu">
                            <li><a href="#overview">Overview</a></li>
                            <li><a href="#video">Video</a></li>
                            <li><a href="#admisstion">Admisstion</a></li>
                            <li><a href="#schollership">Schollership</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#faculty">Faculty</a></li>
                            <li><a href="#hostel">Hostel</a></li>
                            <li><a href="#placement">Placement</a></li>

                            <li><a href="#reviews">Reviews</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--~./ todo-details-menu ~-->
        <div class="single-listing-todo-main-area pd-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-listing-todo-main">
                            <!--~~~~~ Start Listing Description ~~~~~-->
                            <div class="listing-description" id="overview">
                                <div class="small-title">
                                    <h3 class="heading">About {{ $college->name }}</h3>
                                </div><!--~./ small-title ~-->
                                <div class="box-inner-content">
                                    <p>{!! $college->about_college !!}</p>
                                </div>
                            </div><!--~./ end listing description ~-->

                            <!--~~~~~ Start Listing Video ~~~~~-->
                            <div class="listing-video" id="video">
                                <div class="small-title">
                                    <h3 class="heading">Video</h3>
                                </div><!--~./ small-title ~-->
                                <div class="box-inner-content">
                                    <div class="listing-video-area">
                                        <div class="video-thumb bg-overlay-violet">
                                            <img src="{{ asset('storage/app/' . $college->thumbline) }}" alt="Thmubnail">
                                        </div>
                                        <div class="listing-video-icon mrb-55">
                                            <a href="{{ $college->video_link }}" class="video-btn video-popup">
                                                <span class="icon-play3"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--~./ end listing video ~-->

                            <!--~~~~~ Start Listing Amenities ~~~~~-->
                            <div class="listing-amenities" id="admisstion">
                                <div class="small-title">
                                    <h3 class="heading">Admisstion {{ $college->name }}</h3>
                                </div><!--~./ small-title ~-->
                                <div class="box-inner-content">
                                    <p>{!! $college->admisstion_current_time !!}</p>
                                </div>
                            </div><!--~./ end listing amenities ~-->

                            <!--~~~~~ Start Listing Nearby ~~~~~-->
                            <div class="listing-nearby" id="schollership">
                                <div class="small-title">
                                    <h3 class="heading">Schollership {{ $college->name }}</h3>
                                </div><!--~./ small-title ~-->
                                <div class="box-inner-content">
                                    <p>{!! $college->schollership !!}</p>
                                </div>
                            </div><!--~./ end listing nearby tour ~-->

                            <!--~~~~~ Start Listing Gallery ~~~~~-->
                            <div class="listing-gallery" id="gallery">
                                <div class="small-title">
                                    <h3 class="heading">Gallery</h3>
                                </div><!--~./ small-title ~-->
                                <div class="box-inner-content">
                                    <div class="listing-gallery-slide owl-carousel carousel-nav-dots">

                                        <div class="item">
                                            <img src="{{ asset('storage/app/' . $college->thumbline) }}" alt="img">
                                        </div>

                                        <div class="item">
                                            <img src="{{ asset('storage/app/' . $college->gallery) }}" alt="img">
                                        </div>

                                    </div>
                                </div>
                            </div><!--~./ end listing gallery ~-->



                            <!--~~~~~ Start Listing Virtual Tour ~~~~~-->
                            <div class="listing-virtual-tour" id="faculty">
                                <div class="small-title">
                                    <h3 class="heading">Faculty {{ $college->name }}</h3>
                                </div><!--~./ small-title ~-->
                                <div class="box-inner-content">
                                    <p>{!! $college->faculty !!}</p>
                                </div>
                            </div>
                            <!--~./ end listing virtual tour ~-->
                            <div class="listing-virtual-tour" id="hostel">
                                <div class="small-title">
                                    <h3 class="heading">Hostel info {{ $college->name }}</h3>
                                </div><!--~./ small-title ~-->
                                <div class="box-inner-content">
                                    <p>{!! $college->hostel !!}</p>
                                </div>
                            </div>


                            <div class="listing-virtual-tour" id="placement">
                                <div class="small-title">
                                    <h3 class="heading">Placement info {{ $college->name }}</h3>
                                </div><!--~./ small-title ~-->
                                <div class="box-inner-content">
                                    <p>{!! $college->placement !!}</p>
                                </div>
                            </div>


                            <!--~~~~~ Start Listing Reviews ~~~~~-->
                            <div class="listing-reviews-area" id="reviews">
                                <div class="small-title">
                                    <h3 class="heading">Reviews</h3>
                                </div>
                                <div class="listing-average-rating">

                                    <div class="box-inner-content">
                                        <div class="rating-overview">
                                            <div class="rating-overview-left">
                                                <div class="rating-overview-average">
                                                    <div class="rating-no">4.8</div>
                                                    <div class="listing-rating">
                                                        <span class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                        <a href="#">35 Rating</a>
                                                    </div>
                                                </div>
                                            </div><!--~./ rating-overview-left ~-->
                                            <div class="rating-overview-right">
                                                <div class="single-progress-bar">
                                                    <div class="progress-type">Quality</div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 85%;"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress-percent">25</div>
                                                </div><!--~./ single-progress-bar ~-->
                                                <div class="single-progress-bar">
                                                    <div class="progress-type">Space</div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 60%;"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress-percent">13</div>
                                                </div><!--~./ single-progress-bar ~-->
                                                <div class="single-progress-bar">
                                                    <div class="progress-type">Price</div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress-percent">4</div>
                                                </div><!--~./ single-progress-bar ~-->
                                                <div class="single-progress-bar">
                                                    <div class="progress-type">Service</div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress-percent">7</div>
                                                </div><!--~./ single-progress-bar ~-->
                                                <div class="single-progress-bar">
                                                    <div class="progress-type">Location</div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 35%;"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress-percent">5</div>
                                                </div><!--~./ single-progress-bar ~-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--~./ small-title ~-->
                                <div class="box-inner-content">
                                    <ol class="comment-list">
                                        <li id="comment-1" class="comment even thread-even depth-1 parent">
                                            <article class="comment-body">
                                                <div class="comment-author vcard">
                                                    <img alt="card" src="assets/images/todo/review/1.png"
                                                        class="avatar photo">
                                                    <b class="author-name">
                                                        <a href="#" rel="external nofollow"
                                                            class="url">Fatma</a>
                                                    </b>
                                                    <div class="reviews-no">
                                                        <span class="number"><i class="fa fa-star"></i>14</span>
                                                        <span class="text">Reviews</span>
                                                    </div>
                                                </div><!-- .comment-author -->
                                                <div class="comment-info">
                                                    <div class="comment-info-inner">
                                                        <div class="info-title-header">
                                                            <h3 class="title">So Fresh and Cooked to perfection</h3>
                                                            <div class="comment-metadata">
                                                                <a href="#">
                                                                    <span>December 14, 2019 at 20.15 pm</span>
                                                                </a>
                                                            </div><!-- .comment-metadata -->
                                                        </div><!-- .info-title-header -->
                                                        <div class="comment-rating">
                                                            <span class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </span>
                                                        </div><!-- .comment-rating -->
                                                    </div><!-- .comment-content -->
                                                    <div class="comment-content">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                            accusantium laudanti reminds eaque ipsa quae ab illo inventore
                                                            veritatis.</p>
                                                    </div><!-- .comment-content -->
                                                    <div class="comment-meta">
                                                        <div class="comment-meta-inner">
                                                            <div class="like">
                                                                <a class="comment-link" href="#"><span
                                                                        class="icon-thumb-up"></span> Like</a>
                                                            </div>
                                                            <div class="dislike">
                                                                <a class="comment-dislink" href="#"><span
                                                                        class="icon-dislike-thumb"></span> Dislike</a>
                                                            </div>
                                                            <div class="love">
                                                                <a class="comment-love" href="#"><span
                                                                        class="icon-like1"></span> Love</a>
                                                            </div>
                                                        </div>
                                                        <div class="reply">
                                                            <a class="comment-reply" href="#"><span
                                                                    class="icon-reply1"></span> Reply</a>
                                                        </div>
                                                    </div><!-- .comment-meta -->
                                                </div>
                                            </article><!-- .comment-body -->
                                            <ol class="children">
                                                <li id="comment-3" class="comment odd alt depth-2">
                                                    <article class="comment-body">
                                                        <div class="comment-author vcard">
                                                            <img alt="card" src="assets/images/todo/review/2.png"
                                                                class="avatar photo">
                                                            <b class="author-name">
                                                                <a href="#" rel="external nofollow"
                                                                    class="url">Arafa</a>
                                                            </b>
                                                            <div class="reviews-no">
                                                                <span class="number"><i class="fa fa-star"></i>14</span>
                                                                <span class="text">Reviews</span>
                                                            </div>
                                                        </div><!-- .comment-author -->
                                                        <div class="comment-info">
                                                            <div class="comment-info-inner">
                                                                <div class="info-title-header">
                                                                    <h3 class="title">I think I will refer my friend</h3>
                                                                    <div class="comment-metadata">
                                                                        <a href="#">
                                                                            <span>December 14, 2019 at 20.15 pm</span>
                                                                        </a>
                                                                    </div><!-- .comment-metadata -->
                                                                </div><!-- .info-title-header -->
                                                                <div class="comment-rating">
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                    </span>
                                                                </div><!-- .comment-rating -->
                                                            </div><!-- .comment-content -->
                                                            <div class="comment-content">
                                                                <p>Sed ut perspiciatis unde omnis iste natus error sit
                                                                    voluptatem accusantium laudanti reminds eaque ipsa quae
                                                                    ab illo inventore veritatis.</p>
                                                            </div><!-- .comment-content -->
                                                            <div class="comment-meta">
                                                                <div class="comment-meta-inner">
                                                                    <div class="like">
                                                                        <a class="comment-link" href="#"><span
                                                                                class="icon-thumb-up"></span> Like</a>
                                                                    </div>
                                                                    <div class="dislike">
                                                                        <a class="comment-dislink" href="#"><span
                                                                                class="icon-dislike-thumb"></span>
                                                                            Dislike</a>
                                                                    </div>
                                                                    <div class="love">
                                                                        <a class="comment-love" href="#"><span
                                                                                class="icon-like1"></span> Love</a>
                                                                    </div>
                                                                </div>
                                                                <div class="reply">
                                                                    <a class="comment-reply" href="#"><span
                                                                            class="icon-reply1"></span> Reply</a>
                                                                </div>
                                                            </div><!-- .comment-meta -->
                                                        </div>
                                                    </article><!-- .comment-body -->
                                                </li><!-- #comment -->
                                            </ol><!-- .children -->
                                        </li><!-- #comment-## -->
                                    </ol>
                                </div>
                            </div><!--~./ end listing reviews ~-->

                            <!--~~~~~ Start Listing Leave Review ~~~~~-->
                            <div class="listing-leave-review">
                                <div class="small-title">
                                    <h3 class="heading">Leave a Review</h3>
                                </div><!--~./ small-title ~-->
                                <div class="box-inner-content">
                                    <div class="leave-review-content">
                                        <form name="reviewForm" id='review_form' method="post" action='#'>
                                            <div class="review-box">
                                                <ul class="list-review">
                                                    <li>
                                                        <span class="text">Location</span>
                                                        <div class="review-rating"></div>
                                                    </li>
                                                    <li>
                                                        <span class="text">Quality</span>
                                                        <div class="review-rating"></div>
                                                    </li>
                                                    <li>
                                                        <span class="text">Space</span>
                                                        <div class="review-rating"></div>
                                                    </li>
                                                    <li>
                                                        <span class="text">Service</span>
                                                        <div class="review-rating"></div>
                                                    </li>
                                                    <li>
                                                        <span class="text">Price</span>
                                                        <div class="review-rating"></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type='text' name='name' id='username'
                                                        class="form-controllar" aria-required="true"
                                                        placeholder="Full Name">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type='text' name='email' id='email-comments'
                                                        class="form-controllar" aria-required="true"
                                                        placeholder="Email Address">
                                                </div>
                                                <div class="col-lg-12">
                                                    <input type='text' name='title' class="form-controllar"
                                                        aria-required="true" placeholder="Review Title">
                                                </div>
                                                <div class="col-12">
                                                    <textarea name='message' id='message' class="form-controllar" aria-required="true" placeholder="Your Review"></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <div class="input-file">
                                                        <input type='file' id='upload_file'>
                                                        <label for="upload_file"> <span class="icon-photo-camera"></span>
                                                            add Photos</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-check">
                                                        <input type='checkbox' id="agree">
                                                        <label for="agree">Save my name, email, and website in this
                                                            browser for the next time I comment</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-submit">
                                                        <button class="btn btn-default btn-black" type="submit">Submit
                                                            Review <span class="fas fa-caret-right"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!--~./ end listing leave review ~-->
                        </div>
                    </div>

                    <!--~~~~~ Start sidebar ~~~~~-->
                    <div class="col-lg-4">
                        <div class="sidebar-todos mrt-md-60">

                            <aside class="widget map-location-widget">
                                <h4 class="widget-title">Rank</h4>
                                <div class="widget-content bg-dark">
                                    <h4 class="text-warning text-center p-2">{{ $college->ranking_number }} Number Ranking
                                        in
                                        @foreach ($college->countries as $item)
                                            {{ $item->name }}
                                        @endforeach
                                    </h4>
                                </div>
                            </aside>
                            <aside class="widget map-location-widget">
                                <h4 class="widget-title">Brochuri</h4>
                                <div class="widget-content text-center">
                                    <div class="form-submit">
                                        <button class="btn btn-default">Download Brochuri</button>
                                    </div>
                                </div>
                            </aside>

                            {{-- <aside class="widget online-reservation-widget">
                                <h4 class="widget-title">Online Reservation</h4>
                                <div class="widget-content">
                                    <form name="reservationForm" id='reservation_form' method="post" action='#'>
                                        <div class="res-group">
                                            <span class="icon-user-1"></span>
                                            <input id="res_name" placeholder="Full Name" type="text"
                                                class="form-controllar">
                                        </div>
                                        <div class="res-group">
                                            <span class="icon-email"></span>
                                            <input id="res_email" placeholder="Email" type="email"
                                                class="form-controllar">
                                        </div>
                                        <div class="res-group">
                                            <span class="icon-call"></span>
                                            <input id="res_phone" placeholder="Phone Number" type="text"
                                                class="form-controllar">
                                        </div>
                                        <div class="res-group">
                                            <span class="icon-user-1"></span>
                                            <select class="select-custom">
                                                <option>Persons No.</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>
                                        <div class="res-group">
                                            <span class="icon-calendar1"></span>
                                            <input type='text' name='date' id='res_date' class="form-controllar"
                                                placeholder="Date & Time">
                                        </div>
                                        <div class="form-submit">
                                            <button class="btn btn-default">Submit Now</button>
                                        </div>
                                    </form>
                                </div>
                            </aside> --}}

                            <aside class="widget bt-business-info-widget">
                                <h4 class="widget-title">Institute Information</h4>
                                <div class="widget-content">
                                    <ul class="info-list">
                                        <li><a href="#"><span class="icon-location3"></span>1900 Pico Blvd Santa
                                                Monica, CA</a></li>
                                        <li><a href="#"><span class="icon-phone2"></span>02 001 021 258 963</a></li>
                                        <li><a href="mailto:arafawy@backyard.biz"><span
                                                    class="icon-email"></span>arafawy@backyard.biz</a></li>
                                        <li><a href="#"><span class="icon-broken-link"></span>thebackyard.biz</a>
                                        </li>
                                    </ul>
                                </div>
                            </aside><!--~./ end business info widget ~-->
                            <aside class="widget bookmark-widget">
                                <div class="widget-content">
                                    <div class="bookmark-btn-area">
                                        <button class="btn btn-default btn-black">Login to Compare Others
                                            Institute</button>
                                        <p>1400 people Compare this Institute</p>
                                    </div>
                                </div>
                            </aside>
                            <!--~~~ Start Open Hours Widget ~~~-->
                            <aside class="widget open-hours-widget">
                                <h4 class="widget-title">Open Hours</h4>
                                <div class="widget-content">
                                    <div class="listing-hours-list">
                                        <div class="listing-day">
                                            <div class="day">Monday</div>
                                            <div class="time-items">
                                                <span class="time">07:00 AM - 09:00 PM</span>
                                            </div>
                                        </div><!--./ listing-day -->
                                        <div class="listing-day">
                                            <div class="day">Tuesday</div>
                                            <div class="time-items">
                                                <span class="time">07:00 AM - 09:00 PM</span>
                                            </div>
                                        </div><!--./ listing-day -->
                                        <div class="listing-day">
                                            <div class="day">Wednesday</div>
                                            <div class="time-items">
                                                <span class="time">07:00 AM - 09:00 PM</span>
                                            </div>
                                        </div><!--./ listing-day -->
                                        <div class="listing-day">
                                            <div class="day">Thursday</div>
                                            <div class="time-items">
                                                <span class="time">07:00 AM - 09:00 PM</span>
                                            </div>
                                        </div><!--./ listing-day -->
                                        <div class="listing-day">
                                            <div class="day">Friday</div>
                                            <div class="time-items">
                                                <span class="time">07:00 AM - 09:00 PM</span>
                                            </div>
                                        </div><!--./ listing-day -->
                                        <div class="listing-day">
                                            <div class="day">Saturday</div>
                                            <div class="time-items">
                                                <span class="time">07:00 AM - 09:00 PM</span>
                                            </div>
                                        </div><!--./ listing-day -->
                                        <div class="listing-day closed">
                                            <div class="day">Sunday</div>
                                            <div class="time-items">
                                                <span class="time">Closed</span>
                                            </div>
                                        </div><!--./ listing-day -->
                                    </div>
                                </div>
                            </aside><!--~./ end open hours widget ~-->

                            <!--~~~ Start Statistic Widget ~~~-->
                            <aside class="widget statistic-widget">
                                <h4 class="widget-title">Statistic</h4>
                                <div class="widget-content">
                                    <div class="statistic-list">
                                        <div class="statistic-item">
                                            <span class="icon-compass1"></span>Views
                                        </div>
                                        <div class="statistic-item">
                                            <span class="icon-review-1"></span>2 Ratings
                                        </div>
                                        <div class="statistic-item">
                                            <span class="icon-bookmark1"></span>Favorite
                                        </div>
                                        <div class="statistic-item">
                                            <span class="icon-share1"></span>65 Share
                                        </div>
                                    </div>
                                </div>
                            </aside><!--~./ end statistic widget ~-->

                            <!--~~~~~ Start About Us Widget ~~~~~-->
                            <aside class="widget bt-about-us-widget">
                                <h4 class="widget-title">Added By</h4>
                                <div class="widget-content">
                                    <div class="about-info">
                                        <div class="thumb">
                                            <img src="assets/images/widget/author.png" alt="img">
                                        </div>
                                        <div class="info">
                                            <h3 class="name">Fatma Mohamed</h3>
                                            <p>Member Since Ocotber 2015</p>
                                        </div>
                                    </div>
                                    <ul class="info-list list">
                                        <li><a href="#"><span class="icon-phone2"></span>02 001 021 258 963</a></li>
                                        <li><a href="mailto:arafawy@backyard.biz"><span
                                                    class="icon-email"></span>arafawy@backyard.biz</a></li>
                                        <li><a href="#"><span class="icon-facebook2"></span>CreativeWebDesigner</a>
                                        </li>
                                        <li><a href="#"><span class="icon-instagram"></span>#EeveryDayDesign</a>
                                        </li>
                                        <li><a href="#"><span class="icon-dribbble"></span>CreativeDesign</a></li>
                                    </ul>
                                </div>
                            </aside><!--~./ end about us widget ~-->
                            <!--~~~ Start Bookmark Widget ~~~-->
                            <!--~./ end bookmark widget ~-->
                        </div>
                    </div><!--~./ end sidebar ~-->
                </div>
            </div>
        </div><!--~./ end single listing todo main area ~-->
    </div>
@endsection
