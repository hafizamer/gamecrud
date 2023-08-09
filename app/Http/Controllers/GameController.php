<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        return view('games.index', [
            'games' => Game::latest()->filter(request(['search']))->paginate(3)
        ]);
    }

    public function create()
    {

        return view('games.create');
    }

    public function show(Game $game)
    {

        return view('games.show', [
            'game' => $game
        ]);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'publisher' => 'required'
        ]);
        Game::create($formFields);
        return redirect("/");
    }

    public function edit(Game $game)
    {

        return view('games.edit', [
            'game' => $game
        ]);
    }

    public function update(Request $request, Game $game)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'publisher' => 'required'
        ]);
        $game->update($formFields);
        return back();
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect('/');
    }
}
