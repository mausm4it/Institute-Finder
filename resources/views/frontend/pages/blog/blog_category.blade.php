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
                        <h2 class="page-title">{{ $blog_category->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="todo-grid-list-block mt-5">





        <div class="todo-grid-list-block ml-t-60 pd-b-100 mt-5">
            <div class="container">


                <div class="row">
                    @foreach ($blog_category->blogs as $blog)
                        <div class="col-lg-4 col-md-6">
                            <article class="post">
                                <figure class="post-thumb">
                                    <img src="{{ asset('storage/app/' . $blog->blog_image) }}" alt="{{ $blog->title }}" />
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
                                                        href="{{ route('blog-category', $blog->blog_category->slug) }}">{{ $blog->blog_category->name }}</a>
                                                </div><!--./ entry-cats -->
                                            </div><!--./ entry-meta-content -->
                                        </div><!-- /.post-details -->
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.overlay -->
                            </article><!-- /.post -->
                        </div>
                    @endforeach
                </div><!--./ row -->
            </div><!--./ container -->
        </div>
    @endsection
