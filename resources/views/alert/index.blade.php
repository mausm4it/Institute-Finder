@if (Session::has('success'))
    <div class="alert bg-gradient2 text-white" role="alert"><strong>{{ Session::get('success') }}</strong>
    </div>
@elseif(Session::has('info'))
    <div class="alert bg-gradient4 text-white" role="alert"><strong> {{ Session::get('info') }}</strong>
    </div>
@elseif(Session::has('error'))
    <div class="alert bg-gradient1 text-white" role="alert"><strong>{{ Session::get('error') }}</strong>
    </div>
@elseif(Session::has('warning'))
    <div class="alert bg-gradient3 text-white" role="alert"><strong>{{ Session::get('warning') }}</strong>
    </div>
@endif
