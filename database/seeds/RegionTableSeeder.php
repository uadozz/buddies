<?php

use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('regions')->insert([
            'name' => 'Kyiv',
            'country' => 'Ukraine',
            'country_code' => 'UA',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('regions')->insert([
            'name' => 'New York',
            'country' => 'USA',
            'country_code' => 'US',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('regions')->insert([
            'name' => 'Toronto',
            'country' => 'Canada',
            'country_code' => 'CA',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
    }
}
