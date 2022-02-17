@extends('guest.layouts.base')

@section('content')
<div class="movie_card">

    @foreach ($movies as $movie)
        <div class="movie_card_contained">
            <h1> {{ $movie -> title }} </h1>
            <ul>
                <li> Nation: {{ $movie -> nationality }} </li>
                <li> Release:{{ $movie -> date }} </li>
                <li> Vote: {{ $movie -> vote }} </li>
            </ul>
        </div>
    @endforeach
</div>  

@endsection