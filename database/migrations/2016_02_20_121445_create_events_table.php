<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128)->index();
            $table->text('description');
            $table->dateTime('date_start')->index();
            $table->dateTime('date_end')->index();
            // type: private; public
            // payment: free; per player; per team; per game; per event
            $table->integer('activity_id')->unsigned()->index();
            $table->integer('location_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index(); // Creator user_id
            $table->timestamps();
            
            /*
            $table->foreign('activity_id')
                  ->reference('id')
                  ->on('activities');
			$table->foreign('user_id')
                  ->reference('id')
                  ->on('users');
            $table->foreign('location_id')
                  ->reference('id')
                  ->on('locations');
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
        Schema::drop('events');
    }
}
