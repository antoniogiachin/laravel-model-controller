<?php

namespace App\Http\Controllers;

use App\movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // funzione per homepage
    public function index(){

        //richiesta al db, creo il model
        $movie = Movie::all();
        dump($movie);

        //passo movie alla vista 
        // restituisce la view da visualizzare
        return view('home', compact($movie));

    }
}
