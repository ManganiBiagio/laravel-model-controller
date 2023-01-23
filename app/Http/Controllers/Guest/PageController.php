<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller{
    function index(){
        // recupero i dati dal DB 
        $movies=Movie::all();
        



        return view("home",compact("movies"));
    }
    
}
