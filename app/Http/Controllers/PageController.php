<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// è una classea
class PageController extends Controller
{
    public function index(){

            $name = 'Tom';
            $lastname = 'Bini';        

        return view('home', compact('name', 'lastname'));
    }

    public function about(){
        return view('about');
    }

    public function contacts(){

            $movies = Movie::all();
        
        return view('contacts', compact('movies'));
    }
}
