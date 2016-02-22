<?php

use Illuminate\Database\Seeder;

class ParticipantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('participants')->insert([
			'event_id' => 1,
			'user_id' => 4,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 1,
			'user_id' => 5,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 1,
			'user_id' => 6,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 2,
			'user_id' => 4,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 2,
			'user_id' => 7,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 3,
			'user_id' => 5,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 3,
			'user_id' => 8,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 3,
			'user_id' => 9,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 4,
			'user_id' => 4,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 4,
			'user_id' => 5,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 4,
			'user_id' => 10,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 5,
			'user_id' => 2,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 5,
			'user_id' => 6,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 5,
			'user_id' => 9,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 6,
			'user_id' => 4,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 6,
			'user_id' => 5,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 6,
			'user_id' => 8,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('participants')->insert([
			'event_id' => 6,
			'user_id' => 10,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
    }
}
