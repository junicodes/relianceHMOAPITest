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

    public function player_1()
    {
        return $this->belongsTo(Player::class  'player_1_id', 'id');
    }
    public function player_2()
    {
        return $this->belongsTo(Player::class  'player_2_id', 'id');
    }
    public function player_3()
    {
        return $this->belongsTo(Player::class  'player_3_id', 'id');
    }
}
