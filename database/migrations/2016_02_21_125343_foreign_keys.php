<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->foreign('region_id')
                  ->reference('id')
                  ->on('regions');
        });
		
        Schema::table('events', function (Blueprint $table) {
            $table->foreign('activity_id')
                  ->reference('id')
                  ->on('activities');
			$table->foreign('user_id')
                  ->reference('id')
                  ->on('users');
            $table->foreign('location_id')
                  ->reference('id')
                  ->on('locations');
        });
        
        Schema::table('participants', function (Blueprint $table) {
            $table->foreign('event_id')
                  ->reference('id')
                  ->on('events')
                  ->onDelete('cascade'); // delete everything connected with an Event on Event delete.
            $table->foreign('user_id')
                  ->reference('id')
                  ->on('users');
        });
        
        Schema::table('players', function (Blueprint $table) {
            $table->foreign('user_id')
                  ->reference('id')
                  ->on('users')
                  ->onDelete('cascade'); // Delete Player on User deletion
            $table->foreign('activity_id')
                  ->reference('id')
                  ->on('activities')
                  ->onDelete('cascade'); // Delete Player on Activity deletion
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->dropForeign('locations_region_id_foreign');
        });

        Schema::table('events', function (Blueprint $table) {
			$table->dropForeign('events_activity_id_foreign');
            $table->dropForeign('events_location_id_foreign');
            $table->dropForeign('events_user_id_foreign');
        });

        Schema::table('participants', function (Blueprint $table) {
            $table->dropForeign('participants_event_id_foreign');
            $table->dropForeign('participants_user_id_foreign');
        });
        
        Schema::table('players', function (Blueprint $table) {
            $table->dropForeign('players_activity_id_foreign');
            $table->dropForeign('players_user_id_foreign');
        });
    }
}
