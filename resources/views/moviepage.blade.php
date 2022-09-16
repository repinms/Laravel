@extends('layout')
@section('title', 'MovieSite')
@section('content')
    @include('includes.header')
    <main>
        <div class="container">
            <div class="d-flex flex-row mt-3 justify-content-center">
                <div class="movie_card" style="background-image: url({{url($movie[0]['preview'])}});">
                    <div class="text-white fs-5 movie_rating"
                    style="background-color: #4EA141">
                    {{trim((string) $movie[0]['rating'], '0');}}</div>
                </div>
                <div class="d-flex flex-column ms-4">
                    <div class="fs-5 pb-1 mb-1 border-primary border-bottom"><a href="/" class="text-decoration-none text-white">
                    {{$movie[0]['name']}}</a></div>
                    <div class="d-flex flex-column flex-column">
                        <div class="fs-5 mb-2 text-secondary">{{$movie[0]['name_eng']}}</div>
                        <div class="fs-6 mt-3 text-secondary">Дата выхода: <span class="text-white">{{$movie[0]['year']}}</span></div>
                        <div class="fs-6 mt-2 text-secondary">Возраст: <span class="text-white">{{$movie[0]['age_limit']}}</span></div>
                        <div class="fs-6 mt-2 text-secondary">Жанры: @foreach($movie[0]->genres as $genre)
                            <span class="text-white">{{$genre['genre_name']}} </span>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="fs-6 mt-3 mb-3 text-secondary col-12 col-lg-6">{{$movie[0]->description}}</div>
            </div>

            <div class="player d-flex justify-content-center">
                <img src="/storage/images/kinozal.jpg" width="600" alt="">
            </div>
        </div>
    </main>
    @include('includes.footer')
@endsection