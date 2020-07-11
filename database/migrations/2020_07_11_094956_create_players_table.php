<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('This is the date the project is to be done.');
            $table->string('email')->unique()->comment('Player unique email for gaming and transactions.');
            $table->string('nickname')->unique()->comment('Player unique nickaname for gaming.');
            $table->string('password')->comment('This the password to authenticate user.');
            $table->date('date_join')->nullable()->comment('This is the date the user joined the application.');
            $table->date('last_login')->nullable()->comment('This is the last login date of the user.');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
