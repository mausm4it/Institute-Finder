<header class="site-header default-header-style">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="navigation-area">
                    <div class="header-navigation-left">
                        <!-- Site Branding -->
                        <div class="site-branding">
                            <a href="{{ route('home') }}">
                                <img width="150" src="{{ asset('storage/app/' . $settings->logo) }}"
                                    alt="{{ $settings->name }}" />
                            </a>
                        </div>

                        <div class="mobile-element-meta">
                            <div class="search-wrap">
                                <div class="search-btn">
                                    <span class="icon-search32"></span>
                                </div>
                                <div class="search-form">
                                    <form action="{{ route('search') }}" method="GET">@csrf
                                        <input type="search" placeholder="Search">
                                        <button type="submit"><span class="icon-search32"></span></button>
                                    </form>
                                </div>
                            </div><!--~./ search-wrap ~-->
                            <div class="mobile-user-registration"></div>
                        </div>
                    </div><!-- /.header-navigation-left -->

                    <div class="header-navigation-right-area">
                        <!-- Site Navigation -->
                        <div class="site-navigation">
                            <div class="hamburger-menus">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <nav class="navigation">
                                <div class="overlaybg"></div><!-- /.overlaybg -->
                                <!-- Main Menu -->
                                <div class="menu-wrapper">
                                    <div class="menu-content">
                                        <ul class="mainmenu">
                                            <li>
                                                <a href="{{ route('home') }}">Home</a>

                                            </li>
                                            <li class="megamenu">
                                                <a>Category</a>
                                                <div
                                                    class="sub-menu megamenu-main megamenu-carousel carousel-nav-text owl-carousel">
                                                    @foreach ($categories as $category)
                                                        <a href="{{ route('category-list', $category->slug) }}"
                                                            class="cat-item cat-nightlife">
                                                            <figure class="cat-thumb">
                                                                <img src="{{ asset('storage/app/' . $category->category_icon) }}"
                                                                    alt="Thmubnail">
                                                            </figure><!--./ cat-thumb -->

                                                            <div class="cat-content">
                                                                <div class="cat-content-inner">

                                                                    <h3 class="title">{{ $category->name }}</h3>
                                                                    <!--./ title -->
                                                                </div><!--./ cat-content-inner -->
                                                            </div><!--./ cat-content -->
                                                            <div class="cat-content-hover">
                                                                <div class="content-hover-inner">

                                                                    <h3 class="title">{{ $category->name }}</h3>
                                                                    <!--./ title -->
                                                                </div>
                                                            </div><!--./ cat-content-hover -->
                                                        </a>
                                                    @endforeach


                                                </div><!--/.mega-menu-content-->
                                            </li>

                                            <li>
                                                <a href="#">Goal</a>
                                                <ul class="sub-menu">
                                                    @foreach ($sub_categories as $sub_category)
                                                        <li><a
                                                                href="{{ route('sub_category-list', $sub_category->slug) }}">{{ $sub_category->name }}</a>
                                                        </li>
                                                    @endforeach


                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Courses</a>
                                                <ul class="sub-menu">
                                                    @foreach ($courses as $item)
                                                        <li><a href="{{ route('course-list', $item->slug) }}">{{ $item->name }}
                                                                ({{ $item->sub_category->name }})
                                                            </a>
                                                        </li>
                                                    @endforeach


                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('all_blogs') }}">Blogs</a>

                                            </li>
                                            <li>
                                                <a href="#">Pages</a>
                                                <ul class="sub-menu">
                                                    @foreach ($pages as $item)
                                                        <li><a href="{{ route('single_page', $item->slug) }}">{{ $item->title }}
                                                            </a>
                                                        </li>
                                                    @endforeach


                                                </ul>
                                            </li>

                                            <li>
                                                <a href="{{ route('search') }}">Advance Search</a>

                                            </li>

                                            <li>
                                                @if (Auth::user())
                                                    <a class="user-reg-btn "
                                                        href=" @if (Auth::user()->hasRole('admin')) {{ route('admin.dashboard') }}
                                                @else
                                                {{ route('dashboard') }} @endif  ">
                                                        <span class="icon icon-user-1 "></span>
                                                        <span class="text ">Dashboard</span>
                                                    </a>
                                                @else
                                                    <a class="user-reg-btn " href="{{ route('login') }}">
                                                        <span class="icon icon-user-1 "></span>
                                                        <span class="text t">Sign In</span>
                                                    </a>
                                                @endif
                                            </li>



                                        </ul> <!-- /.menu-list -->
                                    </div> <!-- /.hours-content-->
                                </div><!-- /.menu-wrapper -->
                            </nav>
                        </div><!-- /.site-navigation -->

                    </div><!-- /.header-navigation-right-area -->
                </div><!-- /.navigation-area -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</header>
