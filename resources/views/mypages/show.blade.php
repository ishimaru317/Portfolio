@if (session('message'))
        {{ session('message') }}
    @endif

    {{ $user->name }}
    {{ $user->email }} 
    {{ $user->password }} 

    
    <a href="/users/{{ $user->id }}/edit">Edit</a>
