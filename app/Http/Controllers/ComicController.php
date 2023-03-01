<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic as Comic;

class ComicController extends Controller
{
    public function index(){
        $comics = Comic::all();

        return view('comics', compact('comics'));
    }

    public function show ($id){

        $comic = Comic::find($id);

        $data = [
            'comic' => $comic,
        ];

        return view ('detail_comic', $data);
    }
}
