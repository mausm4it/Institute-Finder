<div class="btn-close"><span class="icon-cross"></span></div>
<div class="site-logo-block">
    <a class="navbar-brand site-logo" href="{{ route('dashboard') }}">
        <img src="{{ asset('storage/app/' . $settings->logo) }}" alt="logo">
    </a>
</div><!--~./ site-logo-block ~-->
<div class="dashboard-menu-main tse-scrollable">
    <div class="tse-content">
        <ul class="dashboard-menu">
            <li><a class="active" href="{{ route('dashboard') }}">
                    <span class="icon icon-params"></span>
                    <span>Dashboard</span>
                </a></li>


            <li><a href="{{ route('apply_institute_list') }}">
                    <span class="icon-list1 mr-2"></span>
                    <span>My Applies</span>
                </a></li>


            <li><a href="{{ route('save_list') }}">
                    <span class="icon-heart2 mr-2"></span>
                    <span>Save List</span>
                </a></li>

            <li><a href="{{ route('compare') }}">
                    <span class="icon-arrows-1 mr-2"></span>

                    <span>Compare</span>
                </a></li>


            <li><a href="{{ route('home') }}">
                    <span class="icon icon-home"></span>
                    <span>Home</span>
                </a></li>
        </ul>
    </div>
</div><!--~./ dashboard-menu-main ~-->
<div class="dashboard-menu-bottom">
    <ul class="dashboard-menu">
        <li><a href="{{ route('settings-view') }}">
                <span class="icon icon-settings4"></span>
                <span>Setting</span>
            </a></li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn btn-default btn-black">

                    <span>{{ __('Log Out') }}</span>
                </button>
            </form>

        </li>
    </ul>
</div>
