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
                        <h2 class="page-title">{{ $page->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-info-block ptb-100 pb-5 mb-5">
        <div class="container">
            <!-- Title Row -->
            <div class="row align-items-center justify-content-between">
                <!-- /.col-lg-5 -->

                <div class="col-lg-12">
                    <div class="contant-info-area">
                        <div class="section-title">
                            <h4 class="title-sub"></h4><!--  /.title-sub -->
                            <h2 class="title-main">{{ $page->title }}</h2>
                            <!-- /.title-main -->
                        </div><!-- /.section-title -->

                        <div class="contant-info-content mb-5 pb-5" data-animate="hg-fadeInUp">
                            <p>
                                {{ $page->description }}
                            </p>
                        </div>
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    @endsection
