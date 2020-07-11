<?php

Route::get('all-players', 'PlayerController@getAllPlayers'); //Get All Players
Route::get('all-players-and-games', 'PlayerController@getAllPlayersAndGame'); //Get All Players And Game
Route::get('all-games', 'GameController@getAllGames'); //Get All Games
Route::get('all-game-played', 'GamePlayedController@getAllGamesPlayed'); //All Game Played
Route::get('game-played-date-range/{startdate}/{enddate}', 'GamePlayedController@getAllGamesPlayedWithDateRange'); 