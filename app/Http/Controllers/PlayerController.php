<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{

    public function getAllPlayers() {

        $players = Player::paginate(10);

        $res['status'] = true;
        $res['players'] = $players;
        return response()->json($res, 200);
    }

}
