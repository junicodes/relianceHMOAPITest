<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
use App\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $titles = ["Call of Duty", "Mortal Kombat", "FIFA", "Just Cause", "Apex Legend"];
        $version = ['v1', 'v2', 'v3', 'v4', 'v5', 'v6', 'v7', 'v8', 'v9', 'v10'];
        
        for($i = 0; $i < 500; $i++) {
            $randIndexTitle = array_rand($titles);
            $randIndexVersion = array_rand($version);

            $checkVersion = Game::where('title', $titles[$randIndexTitle])->where('version', $version[$randIndexVersion])->exists();

            if(!$checkVersion) {
                Game::create([
                    'title' => trim($titles[$randIndexTitle]),
                    'version' => $version[$randIndexVersion],
                    'game_date' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now', $timezone = null)
                ]);
            }
         }
    }
}
