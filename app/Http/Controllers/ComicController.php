<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required', 
        //     'thumb' => 'required', 
        //     'price' => 'required|max:8', 
        //     'series' => 'required',
        //     'sale_date' => 'required|max:10', 
        //     'type'=> 'required', 
        // ]); 

        $form_data = $this->validation($request->all());

        // $form_data = $request->all();

        $newComic = new Comic();
        // $newComic->title = $form_data['title'];
        // $newComic->description = $form_data['description'];
        // $newComic->thumb = $form_data['thumb'];
        // $newComic->price = $form_data['price'];
        // $newComic->series = $form_data['series'];
        // $newComic->sale_date = $form_data['sale_date'];
        // $newComic->type = $form_data['type'];
    
        
        $newComic -> fill($form_data);

        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic['id']]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);

        $form_data = $this->validation($request->all());

        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic['id']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }

    //DEFINIZIONE DELLA FUNZIONE DI VALIDAZIONE DEI DATI CON MESSAGGI PERSONALIZZATI
    private function validation($data){

        $validator = Validator::make($data, [
            'title' => 'required',
            'description' => 'required', 
            'thumb' => 'required', 
            'price' => 'required|max:8', 
            'series' => 'required',
            'sale_date' => 'required|max:10', 
            'type' => 'required'
        ],
        [
            'title.required' => 'Il titolo è obbligatorio',
            'description.required' => 'La descrizione è obbligatoria', 
            'thumb.required' => 'L\'immagine è obbligatoria', 
            'price.required' => 'Il prezzo è obbligatorio',
            'price.max' => 'Il prezzo non può essere superiore a :max caratteri',
            'series.required' => 'La serie è obbligatoria',
            'sale_date.required' => 'La data è obbligatoria',
            'sale_date.max' => 'La data non può essere superiore a :max caratteri', 
            'type.required' => 'Il tipo è obbligatorio'

        ])->validate();

        return $validator;
    }
}
