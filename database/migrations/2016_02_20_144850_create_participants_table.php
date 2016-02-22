<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('event_id')->unsigned()->index();
            $table->timestamps();
            
            $table->unique(['user_id', 'event_id']);
            
            /*
            $table->foreign('event_id')
                  ->reference('id')
                  ->on('events')
                  ->onDelete('cascade'); // delete everything connected with an Event on Event delete.
            $table->foreign('user_id')
                  ->reference('id')
                  ->on('users');
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
        Schema::drop('participants');
    }
}
