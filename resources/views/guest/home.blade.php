@extends('guest.layouts.base')

@section('content')
    @foreach ($movies as $movie)
        <div class="movie_card">
            <div class="movie_card_contained">
                <h1> {{ $movie -> title }} </h1>
                <ul>
                    <li> {{ $movie -> nationality }} </li>
                    <li> {{ $movie -> date }} </li>
                    <li> {{ $movie -> vote }} </li>
                </ul>
            </div>
        </div>  
    @endforeach
            @dd($movie)
@endsection