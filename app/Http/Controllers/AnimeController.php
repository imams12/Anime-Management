<?php

namespace App\Http\Controllers;

use Auth;

use App\Models\Anime;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AnimeController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
        $animes = Anime::all();
        
        return view('animes.index', ['animes' => $animes]);
        } else{
            return redirect("/login");
        }
    }

    public function create(): View
    {
        return view('animes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate
        ([
            'title'     => 'required|min:5',
            'synopsis'  => 'required|min:20',
            'genres'    => 'required|min:4',
            'themes'    => 'required|min:5',
            'score'     => 'required'
        ]);

        Anime::create([
            'title'     => $request->title,
            'synopsis'  => $request->synopsis,
            'genres'    => $request->genres,
            'themes'    => $request->themes,
            'score'     => $request->score
        ]);

        return redirect("/");
    }
    
    public function show(int $id): View
    {
        $anime = Anime::findOrFail($id);

        return view('animes.show', compact('anime'));
    }

    public function edit(int $id)
    {
        $anime = Anime::findOrFail($id);

        return view('animes.edit', compact('anime'));
    }

    public function update(Request $request, int $id)
    {

        $anime = Anime::findOrFail($id);

        $request->validate([
            'title' => 'required|min:5',
            'synopsis' => 'required|min:20',
            'genres' => 'required|min:4',
            'themes' => 'required|min:5',
            'score' => 'required'
        ]);

        $anime->update([
            'title' => $request->title,
            'synopsis' => $request->synopsis,
            'genres' => $request->genres,
            'themes' => $request->themes,
            'score' => $request->score
        ]);

        return redirect("/"); 
    }

    // Delete anime
    public function destroy(int $id): RedirectResponse
    {
        $anime = Anime::findOrFail($id);

        $anime->delete();

        return redirect('/');
    }

}