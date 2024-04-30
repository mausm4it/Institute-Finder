@extends('frontend.layouts.app')
@section('meta_tag')
    <meta charset="utf-8">
    <title>{{ $blog->title }}</title>
    <meta name="description" content="{{ $blog->description }}">
    <!-- Facebook Open Graph tags -->
    <meta property="og:title" content="{{ $blog->title }}">
    <meta property="og:description" content="{{ $blog->meta_description }}">
    <meta property="og:keywords" content="{{ $blog->meta_keywords }}">
    <meta property="og:image" content="{{ asset('storage/app/' . $blog->blog_image) }}">
    <meta property="og:url" content="{{ route('blog-details', $blog->slug) }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="{{ $blog->title }}">
    <meta name="twitter:site" content="{{ $blog->title }}">
    <meta name="twitter:title" content="{{ $blog->title }}">
    <meta name="twitter:description" content="{{ $blog->meta_description }}">
    <meta name="twitter:keywords" content="{{ $blog->meta_keywords }}">
    <meta name="twitter:image" content="{{ asset('storage/app/' . $blog->blog_image) }}">
@endsection

@section('header')
    @include('frontend.layouts.header2')
@endsection

@section('content')
    <div class="blog-page-block pd-b-100">
        <div class="single-post-thumbnail-area">
            <div class="post-thumb bg-image bg-overlay"
                style="background-image:url({{ asset('storage/app/' . $blog->blog_image) }})">
            </div>

            <div class="post-header single-post-header">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <h3 class="entry-title">{{ $blog->title }}</h3>
                            <!--./ entry-title -->
                            <div class="content-entry-wrap">
                                <div class="entry-meta-content">
                                    <div class="entry-date">
                                        <span>{{ \Carbon\Carbon::parse($blog->updated_at)->format('d F Y') }}</span>
                                    </div><!--./ entry-date -->


                                </div><!--./ entry-meta-content -->
                            </div><!--./ content-entry-wrap -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- Content Row -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Blog Items -->
                    <div class="blog-single-page pd-t-100">
                        <article class="post single-post">
                            <div class="post-details">
                                <div class="entry-content">
                                    <p>{{ $blog->summary }}</p>
                                    <p>{!! $blog->content !!}</p>
                                </div><!--  /.entry-content -->
                            </div><!--  /.post-details -->
                            <div class="post-share-area">
                                <h3><span>SHARES</span></h3>



                                <div class="share">
                                    <a class="facebook"
                                        href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('blog-details', $blog->slug)) }}">
                                        <span class="fab fa-facebook-f"></span>
                                        <span class="text">SHARE NEWS</span>
                                    </a>
                                    <a class="twitter"
                                        href="https://twitter.com/intent/tweet?url={{ urlencode(route('blog-details', $blog->slug)) }}">
                                        <span class="fab fa-twitter"></span>
                                        <span class="text">TWEET NEWS</span>
                                    </a>
                                    <a class="linkedin"
                                        href="https://www.linkedin.com/shareArticle?url={{ urlencode(route('blog-details', $blog->slug)) }}">
                                        <span class="fab fa-linkedin"></span>
                                        <span class="text">SHARE NEWS</span>
                                    </a>
                                </div>
                            </div>

                        </article><!--  /.post -->


                    </div><!--  /.blog-single-page -->
                </div><!-- /.col-lg-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
@endsection
