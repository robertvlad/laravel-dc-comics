<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $welcome = 'HOMEPAGE - BENVENUTI NEL SITO DC COMICS';
        
        return view('home', compact('welcome'));
    }
}
