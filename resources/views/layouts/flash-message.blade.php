@if(Session::has('message'))
    <div id="message" class="text-center alert alert-info">
        <h4 class="font-weight-bold">{{ Session::get('message') }}</h4>
    </div>
@endif