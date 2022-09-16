@extends('layout')
@section('title', 'MovieSite')
@section('content')
    @include('includes.header')
    <main>
      <div id="carouselDark" class="carousel slide text-white" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#carouselDark" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselDark" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselDark" data-bs-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <video class="d-block carousel_image" autoplay muted loop>
                <source src="storage/images/carousel/lalaland.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
               </video>
            </div>
            <div class="carousel-item">
              <video class="d-block carousel_image" autoplay muted loop>
                <source src="storage/images/carousel/bladerunner2049.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
               </video>
            </div>
            <div class="carousel-item">
              <video class="d-block carousel_image" autoplay muted loop>
                <source src="storage/images/carousel/drive.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
               </video>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselDark" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselDark" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
      </div>
      <div class="container mx-auto movies">
        <div class="mt-5 d-none d-sm-block text-white">
          <div class="fs-5">Популярное</div>
          <div class="row mt-3 d-flex justify-content-between">
          @foreach($movies_order_views as $movie)
            <div class="movie_card mb-3" style="background-image: url({{url($movie['preview'])}});">
              <div class="text-white fs-5 movie_rating" style="background-color: #4EA141;">{{$movie['rating']}}</div>
              <a href="{{route('moviepage', $movie['id'])}}" class="stretched-link"></a>
            </div>
          @endforeach
          </div>
        </div>

        <div class="mt-5 text-white">
          <div class="fs-5">Список фильмов</div>
          <div class="d-flex flex-column">
          @foreach($movies as $movie)
            <div class="row mt-3 mb-5 d-flex flex-row">
              <div class="movie_card" style="background-image: url({{url($movie['preview'])}});">
                <div class="text-white fs-5 movie_rating"
                style="background-color: #4EA141">
                {{trim((string) $movie['rating'], '0');}}</div>
                <a href="{{route('moviepage', $movie['id'])}}" class="stretched-link"></a>
              </div>
              <div class="col d-flex flex-column">
                <div class="fs-5 pb-1 mb-1 border-primary border-bottom"><a href="{{route('moviepage', $movie['id'])}}" class="text-decoration-none text-white">
                  {{$movie['name']}}</a></div>
                <div class="d-flex flex-column flex-column flex-sm-row justify-content-between">
                  <div class="fs-5 mb-2 text-secondary">{{$movie['name_eng']}}</div>
                  <div class="text-secondary fs-6 d-flex flex-column flex-sm-row">
                    <div class="border border-secondary rounded-pill px-2 d-flex align-items-center me-auto me-sm-0">{{$movie['age_limit']}}</div>
                    <ul class="nav d-flex align-items-center mt-2 mt-sm-0">
                    @foreach($movie->genres as $genre)
                      <li class="ms-2">{{$genre['genre_name']}}</li>
                    @endforeach
                    </ul>
                  </div>
                </div>
                <div class="fs-6 mt-3 text-secondary d-none d-sm-block">{{$movie->description}}</div>
              </div>
            </div>
          @endforeach
          </div>
          <div class="d-flex justify-content-center">
            <a href="#" class="border border-secondary rounded-pill fs-5 px-4 py-2 text-secondary text-decoration-none">Показать еще</a>
          </div>
        </div>
      </div>
    </main>
    @include('includes.footer')
@endsection