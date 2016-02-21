<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('experience'); // years of experience
            $table->integer('level'); // level: 0-5
            $table->integer('user_id')->index();
            $table->integer('activity_id')->index();
            $table->timestamps();
            
            /*
            $table->foreign('user_id')
                  ->reference('id')
                  ->on('users');
            $table->foreign('activity_id')
                  ->reference('id')
                  ->on('activities');
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players');
    }
}
