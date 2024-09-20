@if (session('message'))
    <div class="alert {{ session('class') }} p-3">
        {{-- $message->class --}}
        {{ session('message') }}
    </div>
@endif