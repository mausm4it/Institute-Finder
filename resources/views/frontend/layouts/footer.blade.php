<div class="newsletter-block ptb-100">
    <div class="container">
        <div class="row">
            <!--~~~~~ Start Section title ~~~~~-->
            <div class="col-12">
                <div class="section-title text-center">
                    <h4 class="title-sub">subscribe with us</h4><!--  /.title-sub -->
                    <h2 class="title-main">Weekly Newsletter</h2><!-- /.title-main -->
                    <div class="divider">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
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
                    <form method="POST" action="{{ route('subscriber') }}" class="dv-form" id="mc-form">
                        @csrf
                        <div class="form-group">
                            <input id="mc-email" name="email" placeholder="Email Address" type="email">
                        </div>
                        <button class="btn btn-default" name="Subscribe" id="subscribe-btn" type="submit">Subscribe Now
                            <span class="fas fa-caret-right"></span></button>
                    </form>
                </div><!-- /.subscribe-form -->
            </div>
        </div>
    </div><!-- /.container -->
</div>


<footer class="site-footer bg-blue-violet footer-default-style footer-style-one pd-b-60">
    <div class="waves-effect top">
        <div class="footer-content-area">
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
        </div>
    </div>


    <!--~./ end footer content area ~-->
</footer>
