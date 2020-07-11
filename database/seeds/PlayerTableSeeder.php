<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        // create 1000 users with just one line
        $player = factory(App\Player::class, 20)->create();
        
    }
}
