<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index();
            $table->text('description');
            $table->integer('region_id')->unsigned()->index();
            // Lat, Long
            //$table->decimal('latitude', 8, 6)->default(0.000000);
            //$table->decimal('longitude', 8, 6)->default(0.000000);
            // TODO: Has many Activities
            $table->timestamps();
            
            /*
            $table->foreign('region_id')
                  ->reference('id')
                  ->on('regions');
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
        Schema::drop('locations');
    }
}
