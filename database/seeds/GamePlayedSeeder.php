<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
use App\GamePlayed;

class GamePlayedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        $player_id = DB::table('players')->pluck('id');
        $player_1_id = DB::table('players')->pluck('id');
        $player_2_id = DB::table('players')->pluck('id');
        $player_3_id = DB::table('players')->pluck('id');
        $game_id = DB::table('games')->pluck('id');
        
        for($i = 0; $i < 10000; $i++) {

            if($faker->randomElement($player_id) == $faker->randomElement($player_1_id)
            || $faker->randomElement($player_id) == $faker->randomElement($player_2_id)
            || $faker->randomElement($player_id) == $faker->randomElement($player_3_id)
            ){
                //Not allowed Lol
            }else {
                GamePlayed::create([
                    'player_id' => $faker->randomElement($player_id),
                    'player_1_id' => $faker->randomElement($player_1_id),
                    'player_2_id' => $faker->randomElement($player_2_id),
                    'player_3_id' => $faker->randomElement($player_3_id),
                    'game_id' => $faker->randomElement($game_id),
                    'game_date' => $faker->dateTimeBetween($startDate = '-9years', $endDate = 'now', $timezone = null)
                ]);
            }
         }
    }
}
