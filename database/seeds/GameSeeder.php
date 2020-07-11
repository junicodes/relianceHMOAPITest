<?php

use Illuminate\Database\Seeder;
use app\Game;

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

            $checkVersion = Game::where('title', $titles[$randIndexTitle])->where('version', $titles[$randIndexVersion])->exist();

            if(!$checkVersion) {
                Game::create([
                    'title' => trim( strtolower( $titles[$randIndexTitle] ) ),
                    'version' => trim( strtolower( $titles[$randIndexVersion] ))
                ]);
            }
         }
    }
}
