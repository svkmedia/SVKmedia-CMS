@if (Session::has('flash_message'))
    <div class="alert">
        @if(Session::has('flash_message_important'))
            <a href="#">X</a>
        @endif

        {{ session('flash_message') }}
    </div>
@endif