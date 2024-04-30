<header class="dashboard-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="dashboard-header-mian">
                    <div class="author-registration-area">
                        <div class="dropdown registration">
                            <div class="user-thumb">
                                <img src="{{ asset('storage/app/' . Auth::user()->user_profile) }}" alt="img">
                            </div>
                            <button class="dropdown-toggle" type="button" id="authorButton">Hi

                                @if (Auth::user())
                                    <span>{{ Auth::user()->name }}</span>
                                @endif
                            </button>
                        </div>
                    </div>

                    <div class="user-tools-right">

                        <div class="add-listing-area">
                            <a class="btn btn-default btn-black" href="{{ route('apply') }}">Apply Institute <span
                                    class="fas fa-star"></span></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</header>
