<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerGame extends Model
{
    //
    protected $table = 'playergames';
    
    protected $fillable = [
        'player_id', 'game_id'
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
