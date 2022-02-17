@extends('guest.layouts.base')

@section('content')
    @foreach ($movies as $movie)
        <div class="movie_card">
            <ul>
                <li> {{ $movie -> title }} </li>
            </ul>
        </div>
    @endforeach
@endsection