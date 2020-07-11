<?php

Route::get('all-players', 'PlayerController@getAllPlayers'); //Get All Players
Route::get('all-players-and-games', 'PlayerController@getAllPlayersAndGame'); //Get All Players And Game
Route::get('all-games', 'GameController@getAllGames'); //Get All Games