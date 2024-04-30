@extends('frontend.layouts.app')
@section('header')
    @include('frontend.layouts.header2')
@endsection
@section('content')
    <div class="page-title-area style-two pd-t-60 pd-b-45 bg-image bg-overlay mb-5"
        style="background-image:url('assets/images/header/1.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content">
                        <h2 class="page-title">Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact-block" class="contact-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title text-center">
                        <h4 class="title-sub">GET IN TOUCH</h4><!--  /.title-sub -->
                        <h2 class="title-main">{{ $settings->name }}</h2><!-- /.title-main -->
                        <div class="divider">
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                        </div>


                        <div class="contant-info-content hg-fadeInUp animated" data-animate="hg-fadeInUp"
                            style="visibility: visible;">
                            <div class="info-address">
                                <span>{{ $settings->address }}</span>

                            </div><!-- /.info-address -->
                            <div class="info-phone">
                                {{ $settings->phone }}
                            </div><!-- /.info-phone -->
                            <div class="info-email">
                                <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
                            </div><!-- /.info-email -->
                        </div>
                    </div><!-- /.section-title -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->

        <div class="contact-block-area">
            <div id="contact_map"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="contact-form-area" data-animate="hg-fadeInUp">
                            <form action="{{ route('contact_us') }}" method="POST" class="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="name" type="text" placeholder="Full Name" />
                                        </div>
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="email" type="email" placeholder="Email Address" />
                                        </div>
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="phone" type="text" placeholder="Phone Number" />
                                        </div>
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="subject" type="text" placeholder="Subject" />
                                        </div>
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-default btn-black btn-contact">Submit
                                            Message</button>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </form>



                        </div><!-- /.contact-form-area -->
                    </div><!-- /.col-lg-9 -->
                </div><!-- /.row -->
            </div>
        </div><!-- /.contact-block-area -->
    </div>
@endsection
