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
            $table->integer('user_id')->unsigned()->index();
            $table->integer('activity_id')->unsigned()->index();
            $table->timestamps();
            
            $table->unique(['user_id', 'activity_id']);
            
            /*
            $table->foreign('user_id')
                  ->reference('id')
                  ->on('users')
                  ->onDelete('cascade'); // Delete Player on User deletion
            $table->foreign('activity_id')
                  ->reference('id')
                  ->on('activities')
                  ->onDelete('cascade'); // Delete Player on Activity deletion
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
