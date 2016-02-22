<?php

use Illuminate\Database\Seeder;

class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('activities')->insert([
            'name' => 'Swimming',
            'description' => 'Basketball',
            'created_at' => Carbon\Carbon::parse("now"),
            'updated_at' => Carbon\Carbon::parse("now"),
        ]);
        
		DB::table('activities')->insert([
            'name' => 'Running',
            'description' => 'Running',
            'created_at' => Carbon\Carbon::parse("now"),
            'updated_at' => Carbon\Carbon::parse("now"),
        ]);

		DB::table('activities')->insert([
            'name' => 'Soccer',
            'description' => 'Football (Soccer)',
            'created_at' => Carbon\Carbon::parse("now"),
            'updated_at' => Carbon\Carbon::parse("now"),
        ]);
    }
}
