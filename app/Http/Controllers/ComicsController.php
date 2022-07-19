<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    public function create()
    {
        return view('admin.comics.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $formData = $request->all();

        // $comic = new Comic();
        // $comic->title = $formData['title'];
        // $comic->description = $formData['description'];
        // $comic->thumb = $formData['thumb'];
        // $comic->price = $formData['price'];
        // $comic->series = $formData['series'];
        // $comic->sale_date = $formData['sale_date'];
        // $comic->type = $formData['type'];

        // $comic->save();

        $comic = Comic::create($formData);

        // in questo modo vieni reindirizzato alla view del comic creato grazie all'id
        return redirect()->route('comics.show', ['comic' => $comic]);

        // in questo modo invece vieni reindirizzato all'index per esempio
        // return redirect()->route('comics.index');


    }

    public function show(Comic $comic)
    {
        // $comic = Comic::findOrFail($id);
        // if (!$comic) abort(404);
        return view('admin.comics.show', compact('comic'));
    }

    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        $formData = $request->all();
        $comic->update($formData);
        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    public function destroy($id)
    {
        //
    }
}
