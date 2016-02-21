<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ActivityTableSeeder::class);
        $this->call(RegionTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(ParticipantTableSeeder::class);
        $this->call(EventTableSeeder::class);
    }
}
