<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
{
    public function show(Request $request, $id) 
    {
        $player = Player::with('team')->findOrFail($id);
        
        return view('players.show', compact('player'));
    }
}
