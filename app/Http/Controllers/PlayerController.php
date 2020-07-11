<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{

    public function getOnePlayer() {

    }

    public function getAllPlayers(Player $players) {

        $players->paginate(10);

        $res['status'] = true;
        $res['players'] = $players;
        return response()->json($res, 200);
    }

}
