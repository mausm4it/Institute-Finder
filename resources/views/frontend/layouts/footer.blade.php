<div class="newsletter-block ptb-100">
    <div class="container">


        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="subscribe-form">
                    <form method="POST" action="{{ route('subscriber') }}"
                        class="advance-search-form border border-warning rounded-left">
                        <div class="inner-form">
                            <div class="advance-form-input search">
                                <input name="email" id="email" type="email" placeholder="Enter Your Email"
                                    required />
                            </div>
                            <div class="advance-form-input submitbtn">
                                <button class="btn btn-default" type="submit">Subscribe</button>
                            </div>
                        </div>
                    </form>

                </div><!-- /.subscribe-form -->
            </div>
        </div>
    </div><!-- /.container -->
</div>


<div class="features-cat-list-area bg-blue-violet">
    <div class="container">
        <div class="row">
            <!--~~~~~ Start Cat List Item ~~~~~-->
            <div class="col-lg-3 col-md-6">
                <div class="cat-list-item">
                    <div class="cat-title">
                        <div class="icon">
                            <span class="icon-books"></span>
                        </div>
                        <div class="cat-name">Top Courses</div>
                    </div>
                    <ul class="list">
                        @foreach ($courses as $item)
                            <li><a
                                    href="{{ route('course-list', $item->slug) }}">{{ $item->name }}<span>{{ $item->colleges->count() }}</span></a>
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div><!--./ cat-list-item -->
            <!--~~~~~ Start Cat List Item ~~~~~-->
            <div class="col-lg-3 col-md-6">
                <div class="cat-list-item">
                    <div class="cat-title">
                        <div class="icon">
                            <span class="icon-list-numbered"></span>
                        </div>
                        <div class="cat-name">Top Categories</div>
                    </div>
                    <ul class="list">

                        @foreach ($categories as $category)
                            <li><a
                                    href="{{ route('category-list', $category->slug) }}">{{ $category->name }}<span>{{ $category->subcategories->count() }}</span></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div><!--./ cat-list-item -->
            <!--~~~~~ Start Cat List Item ~~~~~-->
            <div class="col-lg-3 col-md-6">
                <div class="cat-list-item">
                    <div class="cat-title">
                        <div class="icon">
                            <span class="icon-list"></span>
                        </div>
                        <div class="cat-name">Top Sub Categories</div>
                    </div>
                    <ul class="list">
                        @foreach ($sub_categories as $sub_category)
                            <li><a href="{{ route('sub_category-list', $sub_category->slug) }}">{{ $sub_category->name }}
                                    <span>{{ $sub_category->courses->count() }}</span></a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div><!--./ cat-list-item -->
            <!--~~~~~ Start Cat List Item ~~~~~-->
            <div class="col-lg-3 col-md-6">
                <div class="cat-list-item">
                    <div class="cat-title">
                        <div class="icon">
                            <span class="icon-writing"></span>
                        </div>
                        <div class="cat-name">Top Articles</div>
                    </div>
                    <ul class="list">
                        @foreach ($blogs as $blog)
                            <li><a href="{{ route('blog-details', $blog->slug) }}">
                                    {{ Str::limit($blog->title, 20, $end = '...') }}
                                    <span>{{ $blog->views }}</span></a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div><!--./ cat-list-item -->
        </div>
    </div>
</div>
<footer class="site-footer bg-blue-violet footer-default-style pd-t-60 pd-b-60">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="footer-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('storage/app/' . $settings->logo) }}"
                            alt="Logo"></a>
                </div><!-- /.footer-logo -->
            </div><!--~./ col-lg-3 ~-->
            <div class="col-lg-6">
                <ul class="footer-menu">

                    @foreach ($pages as $item)
                        <li><a href="{{ route('single_page', $item->slug) }}">{{ $item->title }}</a></li>
                    @endforeach


                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul><!--  /.footer-menu -->
            </div><!--~./ col-lg-6 ~-->
            <div class="col-lg-3">
                <ul class="footer-social">
                    @if ($settings->facebook != null && $settings->facebook != '')
                        <li><a href="{{ $settings->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                    @endif
                    @if ($settings->twitter != null && $settings->twitter != '')
                        <li><a href="{{ $settings->twitter }}"><i class="fab fa-twitter"></i></a></li>
                    @endif
                    @if ($settings->instagram != null && $settings->instagram != '')
                        <li><a href="{{ $settings->instagram }}"><i class="fab fa-instagram"></i></a></li>
                    @endif
                    @if ($settings->linkedin != null && $settings->linkedin != '')
                        <li><a href="{{ $settings->linkedin }}"><i class="fab fa-linkedin"></i></a></li>
                    @endif





                </ul><!--  /.footer-social -->
            </div><!--~./ col-lg-3 ~-->
        </div>
    </div>
</footer>
