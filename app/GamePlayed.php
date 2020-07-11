<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GamePlayed extends Model
{
    //
    protected $table = 'gamesplayed';
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
