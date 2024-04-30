@extends('frontend.layouts.app')
@section('header')
    @include('frontend.layouts.header2')
@endsection

@section('content')
    <div class="page-title-area style-two pd-t-60 pd-b-45 bg-image bg-overlay"
        style="background-image:url('assets/images/header/1.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content">
                        <h2 class="page-title">Blogs</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-page-block ptb-100">


        @if (!$blogCategories->isEmpty())
            <div class="testimonial-block bg-snow ptb-100">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-9">
                            <div class="section-title">

                                <h2 class="title-main">Blog Categories</h2>
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

                                @foreach ($blogCategories as $blogCategory)
                                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">

                                        <div class="card-body">
                                            <a href="{{ route('blog_category', $blogCategory->slug) }}">
                                                <h4 class="card-text text-center">{{ $blogCategory->name }}
                                            </a>

                                            </h4>

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="container">
            <!-- Content Row -->
            <div class="row">
                <div class="col-12">
                    <!-- Blog Items -->
                    <div class="blog-latest-items row justify-content-center">

                        @foreach ($blogs as $blog)
                            <div class="col-lg-4 col-md-6">
                                <article class="post">
                                    <figure class="post-thumb">
                                        <img src="{{ asset('storage/app/' . $blog->blog_image) }}"
                                            alt="{{ $blog->title }}" />
                                    </figure><!-- /.post-thumb -->
                                    <div class="overlay">
                                        <div class="overlay-inner">
                                            <div class="post-details">
                                                <h2 class="entry-title"><a
                                                        href="{{ route('blog-details', $blog->slug) }}">{{ $blog->title }}</a>
                                                </h2><!-- /.entry-title -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>{{ \Carbon\Carbon::parse($blog->updated_at)->format('d F Y') }}</span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-cats">
                                                        <a
                                                            href="{{ route('blog_category', $blog->blog_category->slug) }}">{{ $blog->blog_category->name }}</a>
                                                    </div><!--./ entry-cats -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!-- /.post-details -->
                                        </div><!-- /.overlay-inner -->
                                    </div><!-- /.overlay -->
                                </article><!-- /.post -->
                            </div>
                        @endforeach




                    </div><!-- /.blog-latest-items -->

                    <!--~~~~~ Start Paging Navigation ~~~~~-->
                    <nav class="paging-navigation pagination-center pd-t-70">
                        <ul class="nav-links">
                            <li class="nav-previous"> <!-- disabled class add when no pagination -->
                                <a href="#">Previous</a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#" class="page-numbers">2</a></li>
                            <li><a href="#" class="page-numbers">3</a></li>
                            <li><a href="#" class="page-numbers">4</a></li>
                            <li class="nav-next">
                                <a href="#">Next</a>
                            </li>
                        </ul>
                    </nav><!--~./ end paging navigation ~-->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
@endsection
