@if (Session::has('success'))
    <div class="alert alert-primary" role="alert">
        <strong>{{ Session::get('success') }} </strong>
    </div>
@elseif(Session::has('info'))
    <div class="alert alert-info text-bg-info border-0" role="alert">
        <strong>{{ Session::get('info') }} </strong>
    </div>
@elseif(Session::has('error'))
    <div class="alert alert-danger" role="alert">
        <strong>{{ Session::get('error') }} </strong>
    </div>
@elseif(Session::has('warning'))
    <div class="alert alert-warning" role="alert">
        <strong>{{ Session::get('warning') }} </strong>
    </div>
@endif
