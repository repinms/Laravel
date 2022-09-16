<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Genre_Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function homePage()
    {
        // $res = Genre_Movie::join('movies', 'genre__movies.movie_id','=','movies.id')
        //     ->join('genres', 'genre__movies.genre_id','=','genres.id')
        //     ->get();
        return view('home', ['movies'=>Movie::all(), 'movies_order_views'=>Movie::orderBy('name','desc')->limit(4)->get()]);
    }

    public function moviePage($id){
        return view('moviepage', ['movie'=>Movie::where('id','=', $id)->get()]);
    }
}