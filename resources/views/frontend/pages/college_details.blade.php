@extends('frontend.layouts.app')

@section('meta_tag')
    <meta charset="utf-8">
    <title>{{ $college->name }}</title>
    <meta name="description" content="{{ $college->description }}">
    <!-- Facebook Open Graph tags -->
    <meta property="og:title" content="{{ $college->name }}">
    <meta property="og:description" content="{{ $college->meta_description }}">
    <meta property="og:keywords" content="{{ $college->meta_keywords }}">
    <meta property="og:image" content="{{ asset('storage/app/' . $college->thumbline) }}">
    <meta property="og:url" content="{{ route('college-details', $college->slug) }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="{{ $college->name }}">
    <meta name="twitter:site" content="{{ $college->name }}">
    <meta name="twitter:title" content="{{ $college->name }}">
    <meta name="twitter:description" content="{{ $college->meta_description }}">
    <meta name="twitter:keywords" content="{{ $college->meta_keywords }}">
    <meta name="twitter:image" content="{{ asset('storage/app/' . $college->thumbline) }}">
    <meta name="twitter:url" content="{{ route('college-details', $college->slug) }}">
@endsection


@section('header')
    @include('frontend.layouts.header')
@endsection
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
                                            </div>
                                        </div><!--./ todo-meta -->
                                    </div><!--./ info-left -->

                                    <div class="info-right">

                                        <div class="todo-rating">
                                            {{ $college->reviews->count() }} Ratings
                                        </div>

                                    </div>
                                    <div class="post-share-area">
                                        <h3><span>SHARES</span></h3>



                                        <div class="share">
                                            <a class="facebook"
                                                href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('college-details', $college->slug)) }}">
                                                <span class="fab fa-facebook-f"></span>
                                                <span class="text">SHARE INSTITUTE</span>
                                            </a>
                                            <a class="twitter"
                                                href="https://twitter.com/intent/tweet?url={{ urlencode(route('college-details', $college->slug)) }}">
                                                <span class="fab fa-twitter"></span>
                                                <span class="text">TWEET INSTITUTE</span>
                                            </a>
                                            <a class="linkedin"
                                                href="https://www.linkedin.com/shareArticle?url={{ urlencode(route('college-details', $college->slug)) }}">
                                                <span class="fab fa-linkedin"></span>
                                                <span class="text">SHARE INSTITUTE</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="todo-details-menu">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="todo-menu">
                            <li><a href="#overview">Overview</a></li>
                            <li><a href="#video">Video</a></li>
                            <li><a href="#course">Course</a></li>
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
                                </div>
                                <div class="box-inner-content">
                                    <p>{!! $college->about_college !!}</p>
                                </div>
                            </div>

                            <!--~~~~~ Start Listing Video ~~~~~-->
                            <div class="listing-video" id="video">
                                <div class="small-title">
                                    <h3 class="heading">Video</h3>
                                </div>
                                <div class="box-inner-content">
                                    <div class="listing-video-area">

                                        {{-- <iframe width="560" height="315" src="{{ $embedUrl }}" frameborder="0"
                                            allowfullscreen></iframe> --}}





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
                            <div class="listing-amenities" id="course">
                                <div class="small-title">
                                    <h3 class="heading">Courses</h3>
                                </div>
                                <div class="testimonial-block bg-snow ptb-100">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-lg-9">
                                                <div class="section-title">

                                                    <h2 class="title-main">Courses With Fee</h2>
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


                                                    @if ($college->course_fees)
                                                        @foreach ($college->course_fees as $item)
                                                            <div class="card border-success mb-3"
                                                                style="max-width: 18rem;">
                                                                <div class="card-header bg-transparent border-success">
                                                                    Course Fee: {{ $item->amount }} /-
                                                                </div>
                                                                <div class="card-body text-success">
                                                                    @if ($item->college_id == $college->id)
                                                                        <h5 class="card-title">
                                                                            {{ $item->course->name }}
                                                                        </h5>
                                                                    @endif

                                                                    <p class="card-text">
                                                                        {{ $item->course->sub_category->name }} in
                                                                        {{ $item->course->sub_category->category->name }}
                                                                    </p>

                                                                    <p class="text-dark">
                                                                        Course Duration:
                                                                        {{ $item->course->course_duration->name }}
                                                                    </p>


                                                                </div>

                                                                <div class="card text-white bg-primary"
                                                                    style="max-width: 18rem;">
                                                                    <div class="card-header">Semester/Year:
                                                                        {{ $item->course->semester }}</div>
                                                                    @php
                                                                        $course_fee = $item->amount;
                                                                        $course_semester = $item->course->semester;
                                                                        $course_credit = $item->course->credit;

                                                                        $semester_fee =
                                                                            $course_semester > 0
                                                                                ? $course_fee / $course_semester
                                                                                : 0;

                                                                        $credit_fee =
                                                                            $course_credit > 0
                                                                                ? $course_fee / $course_credit
                                                                                : 0;

                                                                    @endphp
                                                                    <div class="card-header bg-dark text-white">Per
                                                                        Semester/Year Course Fee:
                                                                        {{ number_format($semester_fee, 1) }} /-</div>
                                                                    <div class="card-header bg-warning text-dark">Course
                                                                        Credit: {{ $item->course->credit }}</div>
                                                                    <div class="card-header bg-success text-white">Per
                                                                        Credit
                                                                        Course Fee: {{ number_format($credit_fee, 1) }} /-
                                                                    </div>

                                                                </div>

                                                                <div
                                                                    class="card-footer bg-transparent border-success text-right ">
                                                                    <a class="btn btn-dark text-warning"
                                                                        href="{{ route('compare') }}">Compare Course</a>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            {{-- admisstion --}}
                            <div class="listing-amenities" id="admisstion">
                                <div class="small-title">
                                    <h3 class="heading">Admisstion {{ $college->name }}</h3>
                                </div>
                                <div class="box-inner-content">
                                    <p>{!! $college->admisstion_current_time !!}</p>
                                </div>
                            </div>


                            <div class="listing-nearby" id="schollership">
                                <div class="small-title">
                                    <h3 class="heading">Schollership {{ $college->name }}</h3>
                                </div>
                                <div class="box-inner-content">
                                    <p>{!! $college->schollership !!}</p>
                                </div>
                            </div><!--~./ end listing nearby tour ~-->

                            <!--~~~~~ Start Listing Gallery ~~~~~-->
                            <div class="listing-gallery" id="gallery">
                                <div class="small-title">
                                    <h3 class="heading">Gallery</h3>
                                </div>
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
                                </div>
                                <div class="box-inner-content">
                                    <p>{!! $college->faculty !!}</p>
                                </div>
                            </div>
                            <!--~./ end listing virtual tour ~-->
                            <div class="listing-virtual-tour" id="hostel">
                                <div class="small-title">
                                    <h3 class="heading">Hostel info {{ $college->name }}</h3>
                                </div>
                                <div class="box-inner-content">
                                    <p>{!! $college->hostel !!}</p>
                                </div>
                            </div>


                            <div class="listing-virtual-tour" id="placement">
                                <div class="small-title">
                                    <h3 class="heading">Placement info {{ $college->name }}</h3>
                                </div>
                                <div class="box-inner-content">
                                    <p>{!! $college->placement !!}</p>
                                </div>
                            </div>


                            @if ($college->reviews)
                                <div class="listing-reviews-area" id="reviews">
                                    <div class="small-title">
                                        <h3 class="heading">Reviews</h3>
                                    </div>
                                    <div class="listing-average-rating">

                                        <div class="box-inner-content">
                                            <div class="rating-overview">
                                                <div class="rating-overview-left">
                                                    <div class="rating-overview-average">

                                                        <div class="rating-no">{{ number_format($avarage_rating, 1) }}
                                                        </div>
                                                        <div class="listing-rating">
                                                            <span class="rating">
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    @if ($i <= $avarage_rating)
                                                                        <i class="fa fa-star checked"></i>
                                                                    @else
                                                                        <i class="far fa-star"></i>
                                                                    @endif
                                                                @endfor
                                                            </span>
                                                            <a href="#">{{ $total_count }} Rating</a>
                                                        </div>
                                                    </div>
                                                </div><!--~./ rating-overview-left ~-->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="box-inner-content">
                                        <ol class="comment-list">
                                            @if ($college->reviews->isNotEmpty())
                                                @foreach ($college->reviews as $review)
                                                    <li class="comment even thread-even depth-1 parent">
                                                        <article class="comment-body">
                                                            <div class="comment-author vcard">
                                                                <img alt="card"
                                                                    src="{{ asset('storage\app\user_profile\user.png') }}"
                                                                    class="avatar photo">

                                                                <div class="reviews-no">

                                                                    <span class="text">{{ $review->user->name }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="comment-info">
                                                                <div class="comment-info-inner">

                                                                    <div class="comment-rating">
                                                                        <span class="rating">
                                                                            @php
                                                                                $rating = $review->rating_number;
                                                                            @endphp
                                                                            @for ($i = 1; $i <= 5; $i++)
                                                                                @if ($i <= $rating)
                                                                                    <i class="fa fa-star checked"></i>
                                                                                @else
                                                                                    <i class="far fa-star"></i>
                                                                                @endif
                                                                            @endfor
                                                                        </span>
                                                                    </div><!-- .comment-rating -->
                                                                </div><!-- .comment-content -->
                                                                <div class="comment-content">
                                                                    <p>{!! $review->comment !!}</p>
                                                                    <div class="comment-metadata">

                                                                        <span
                                                                            class="text-primary">{{ $review->updated_at->format('F j, Y \a\t H.i A') }}</span>

                                                                    </div>
                                                                </div>
                                                                <!-- .comment-content -->
                                                                <div class="comment-meta">
                                                                    <div class="comment-meta-inner">
                                                                        <div class="like">
                                                                            <a class="comment-link" href="#"><span
                                                                                    class="icon-thumb-up"></span> Like</a>
                                                                        </div>
                                                                        <div class="dislike">
                                                                            <a class="comment-dislink"
                                                                                href="#"><span
                                                                                    class="icon-dislike-thumb"></span>
                                                                                Dislike</a>
                                                                        </div>

                                                                    </div>

                                                                </div><!-- .comment-meta -->
                                                            </div>
                                                        </article>

                                                    </li>
                                                @endforeach
                                            @endif


                                        </ol>
                                    </div>
                                </div>
                            @endif



                            <div class="listing-leave-review">
                                <div class="small-title">
                                    <h3 class="heading">Leave a Review</h3>
                                </div>
                                <div class="box-inner-content">
                                    <div class="leave-review-content">
                                        <form method="POST" action="{{ route('college-review', $college->id) }}">
                                            @csrf
                                            <div class="review-box">

                                                <style>
                                                    .star {
                                                        font-size: 50px;
                                                        cursor: pointer;
                                                        color: orangered;
                                                    }
                                                </style>
                                                <div class="star-rating">
                                                    <span class="star" data-rating="1">☆</span>
                                                    <span class="star" data-rating="2">☆</span>
                                                    <span class="star" data-rating="3">☆</span>
                                                    <span class="star" data-rating="4">☆</span>
                                                    <span class="star" data-rating="5">☆</span>
                                                </div>
                                                <input type="hidden" name="rating_number" class="rating-value"
                                                    value="0">

                                                <script>
                                                    const stars = document.querySelectorAll('.star');
                                                    const ratingValue = document.querySelector('.rating-value');

                                                    stars.forEach(star => {
                                                        star.addEventListener('click', function() {
                                                            const rating = this.dataset.rating;
                                                            ratingValue.value = rating;

                                                            // Update UI to reflect the selected rating
                                                            stars.forEach(s => {
                                                                if (s.dataset.rating <= rating) {
                                                                    s.textContent = '★';
                                                                } else {
                                                                    s.textContent = '☆';
                                                                }
                                                            });
                                                        });
                                                    });
                                                </script>
                                            </div>
                                            <div class="row">

                                                <div class="col-12">
                                                    <label for="comment">Write Review</label>
                                                    <textarea name='comment' id='comment' class="form-control" aria-required="true" placeholder="Your Review"></textarea>
                                                </div>
                                                {{-- <div class="col-12">
                                                    <div class="input-file">
                                                        <input name="image" type='file' id='upload_file'>
                                                        <label for="upload_file"> <span class="icon-photo-camera"></span>
                                                            add Photos</label>
                                                    </div>
                                                </div> --}}
                                                <div class="col-lg-12">
                                                    <div class="input-check">
                                                        <input type='checkbox' name="agree" id="agree">
                                                        <label for="agree">Save my name, email, and website in this
                                                            browser for the next time I comment</label>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="college_id" value="{{ $college->id }}">
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

                            <aside class="widget bookmark-widget ">
                                <div class="widget-content">
                                    <div class="bookmark-btn-area">
                                        <a href="{{ route('apply') }}"><button
                                                class="btn btn-default bg-success btn-black">
                                                Apply Institute</button></a>


                                    </div>
                                </div>
                            </aside>

                            <aside class="widget bookmark-widget ">
                                <div class="widget-content">
                                    <div class="bookmark-btn-area">
                                        <form action="{{ route('save_list_post') }}" method="POST">@csrf
                                            @if (auth()->user())
                                                <input type="hidden" name="users" value="{{ auth()->user()->id }}">
                                            @endif

                                            <input type="hidden" value="{{ $college->id }}" name="colleges">
                                            <button type="submit" class="btn btn-default bg-primary btn-black"><i
                                                    class="fa fa-heart"></i> Save
                                                Institute</button>


                                            </button>

                                        </form>

                                    </div>
                                </div>
                            </aside>




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



                            <aside class="widget statistic-widget">
                                <h4 class="widget-title">Statistic</h4>
                                <div class="widget-content">
                                    <div class="statistic-list">
                                        <div class="statistic-item">
                                            <span class="icon-compass1">{{ $college->views }}</span>Views
                                        </div>

                                    </div>
                                </div>
                            </aside>
                            <aside class="widget bookmark-widget">
                                <div class="widget-content">
                                    <div class="bookmark-btn-area">
                                        <a href="{{ route('compare') }}"><button class="btn btn-default btn-black">
                                                Compare Institute</button></a>

                                        <p>1400 people Compare this Institute</p>
                                    </div>
                                </div>
                            </aside>




                        </div>
                    </div><!--~./ end sidebar ~-->
                </div>
            </div>
        </div><!--~./ end single listing todo main area ~-->
    </div>
@endsection
