<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    protected $table = 'games';

    protected $fillable = [
        'title', 'version', 'game_date'
    ];

    public function player_games()
    {
        return $this->hasMany(PlayerGame::class);
    }
}
