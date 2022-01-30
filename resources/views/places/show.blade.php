@if (session('message'))
        {{ session('message') }}
    @endif

    {{ $place->title }}
    {{ $place->content }} 
    
    <a href="/places/{{ $place->id }}/edit">Edit</a>
