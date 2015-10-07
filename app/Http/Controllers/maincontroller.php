<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\movie;

class maincontroller extends Controller
{
    public function index(){
    	$movies = movie::now_playing();
    	$moviefirst = $movies[0];
    	$movies = array_slice($movies, 1, (count($movies)));
    	$imgurl = "http://image.tmdb.org/t/p/original";

    	$toprated = movie::top_rated();
    	
    	return view('pages.index', compact(array('moviefirst', 'movies', 'imgurl', 'toprated')));
    }

}

