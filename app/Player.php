<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'players';
    protected $fillable = [
        'name', 'email', 'password', 'nickname', 'password', 'date_join', 'last_login'
    ];
  
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function player_games()
    {
        return $this->hasMany(PlayerGame::class);
    }
}
