<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GameController extends Controller
{
    //
    public function getAllGames() {

        $games = Game::paginate(50);

        $res['status'] = true;
        $res['games'] = $games;
        return response()->json($res, 200);
    }

}
