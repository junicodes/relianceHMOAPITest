<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GamePlayed;

class GamePlayedController extends Controller
{
    //
      //
      public function getAllGamesPlayed() {

        $games_played = GamePlayed::with('game')
                                    ->with('player')
                                    ->with('player_1')
                                    ->with('player_2')
                                    ->with('player_3')
                                    ->paginate(100);

        $res['status'] = true;
        $res['games_played'] = $games_played;
        return response()->json($res, 200);
    }
    // public function getAllGamesPlayedWithDateRange() {
    //     $data = GamePlayed::pagina
    // }
}
