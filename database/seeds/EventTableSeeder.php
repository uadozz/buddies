<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('events')->insert([
            'name' => 'Amateur soccer league match 1',
            'description' => 'Amateur soccer league match 1 at Kyiv Taras Shevchenko University Sports Center.',
			'activity_id' => 3,
			'location_id' => 2,			            
			'date_start' => Carbon\Carbon::parse("+1 day 10:00"),
			'date_end' => Carbon\Carbon::parse("+1 day 15:00"),
			'user_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

		DB::table('events')->insert([
            'name' => 'Amateur soccer league match 2',
            'description' => 'Amateur soccer league match 2 at Kyiv Taras Shevchenko University Sports Center.',
			'activity_id' => 3,
			'location_id' => 2,			            
			'date_start' => Carbon\Carbon::parse("+8 day 10:00"),
			'date_end' => Carbon\Carbon::parse("+8 day 15:00"),
			'user_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('events')->insert([
            'name' => 'Soccer at GAO stadium',
            'description' => 'Amateur soccer free play at Kyiv Observatory Center Stadium. Admission free.',
			'activity_id' => 3,
			'location_id' => 1,			            
			'date_start' => Carbon\Carbon::parse("+2 day 16:00"),
			'date_end' => Carbon\Carbon::parse("+2 day 18:00"),
			'user_id' => 2,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        
		DB::table('events')->insert([
            'name' => 'Interval running at KNU stadium',
            'description' => 'I plan to do an interval running session at Kyiv Taras Shevchenko University Sports Center Stadium. Everybody is welcome to join me.',
			'activity_id' => 2,
			'location_id' => 2,			            
			'date_start' => Carbon\Carbon::parse("+1 day 10:00"),
			'date_end' => Carbon\Carbon::parse("+1 day 15:00"),
			'user_id' => 2,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

		DB::table('events')->insert([
            'name' => 'Half marathon at GAO',
            'description' => 'Half marathon amateur competition at GAO. Everybody is welcome.',
			'activity_id' => 2,
			'location_id' => 4,			            
			'date_start' => Carbon\Carbon::parse("+4 day 09:00"),
			'date_end' => Carbon\Carbon::parse("+4 day 16:00"),
			'user_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

		DB::table('events')->insert([
            'name' => 'Free style swimming in Holosiiv park',
            'description' => 'Free style swimming session at Holosiiv park in Kyiv. Looking forward to see you there!',
			'activity_id' => 1,
			'location_id' => 4,			            
			'date_start' => Carbon\Carbon::parse("+6 day 17:00"),
			'date_end' => Carbon\Carbon::parse("+6 day 18:30"),
			'user_id' => 2,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
    }
}
