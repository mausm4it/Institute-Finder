@if (Session::has('success'))
    <div class="bg-success/25 text-success text-sm rounded-md p-4" role="alert">
        <span class="font-bold">{{ Session::get('success') }}</span>
    </div>
@elseif(Session::has('info'))
    <div class="bg-primary/25 text-primary text-sm rounded-md p-4" role="alert">
        <span class="font-bold">{{ Session::get('info') }}</span>
    </div>
@elseif(Session::has('error'))
    <div class="bg-danger/25 text-danger text-sm rounded-md p-4" role="alert">
        <span class="font-bold">{{ Session::get('error') }}</span>
    </div>
@elseif(Session::has('warning'))
    <div class="bg-warning/25 text-warning  text-sm rounded-md p-4" role="alert">
        <span class="font-bold">{{ Session::get('warning') }}</span>
    </div>
@endif
