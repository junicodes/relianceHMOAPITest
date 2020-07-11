<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
use App\Player;
use App\PlayerGame;

class PlayerGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $player_id = DB::table('players')->pluck('id');
        $game_id = DB::table('games')->pluck('id');
        
        for($i = 0; $i < 500; $i++) {
            PlayerGame::create([
                'player_id' => $faker->randomElement($player_id),
                'game_id' => $faker->randomElement($game_id)
            ]);
         }
    }
}
