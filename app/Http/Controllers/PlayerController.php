<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{

    public function getAllPlayers() {

        $players = Player::paginate(100);

        $res['status'] = true;
        $res['players'] = $players;
        return response()->json($res, 200);
    }

    public function getAllPlayersAndGame() {
        $players_and_game = Player::with(['player_games' => function($query){
                                $query->with('game');
                            }])
                            ->paginate(100);
                            
        $res['status'] = true;
        $res['players_and_game'] =  $players_and_game;
        return response()->json($res, 200);

    }   

}
