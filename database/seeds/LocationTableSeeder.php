<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('locations')->insert([
            'name' => 'Kyiv GAO',
            'description' => 'Main Kyiv Observatory Sports Field',
            'region_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

		DB::table('locations')->insert([
            'name' => 'KNU Stadium',
            'description' => 'Kyiv Taras Shevchenko University Stadium',
            'region_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

		DB::table('locations')->insert([
            'name' => 'NUBIP Stadium',
            'description' => 'National University of Bioresources and Environment Protection Sports Field',
            'region_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('locations')->insert([
            'name' => 'Holosiiv Park',
            'description' => 'Kyiv Holosiiv park walking track No. 2',
            'region_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
    }
}
