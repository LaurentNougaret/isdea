<div class="message-height">
    @if(Session::has('message'))
        <div id="message" class="text-center alert alert-success">
            <h4 class="font-weight-bold">{{ Session::get('message') }}</h4>
        </div>
    @endif
</div>
