<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sergii Shelestiuk',
            'email' => 'admin@webinvest.kiev.ua',
            'password' => bcrypt('123456'),
            'created_at' => Carbon\Carbon::parse("01.01.2016"),
            'updated_at' => Carbon\Carbon::parse("01.01.2016"),
        ]);
        
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'johndow@buddies.com',
            'password' => bcrypt('123456'),
            'created_at' => Carbon\Carbon::parse("now -14 day"),
            'updated_at' => Carbon\Carbon::parse("now -14 day"),
        ]);
        
        DB::table('users')->insert([
            'name' => "Hackathon Judge",
            'email' => 'demo@example.org',
            'password' => bcrypt('demo'),
            'created_at' => Carbon\Carbon::parse("now -1 month"),
            'updated_at' => Carbon\Carbon::parse("now -1 month"),
        ]);
        
        DB::table('users')->insert([
            'name' => "John Wright",
            'email' => 'wright@example.org',
            'password' => bcrypt('123456'),
            'created_at' => Carbon\Carbon::parse("now -1 month"),
            'updated_at' => Carbon\Carbon::parse("now -1 month"),
        ]);
        
        DB::table('users')->insert([
            'name' => "Simon Jason",
            'email' => 'jason@example.org',
            'password' => bcrypt('123456'),
            'created_at' => Carbon\Carbon::parse("now -1 month"),
            'updated_at' => Carbon\Carbon::parse("now -1 month"),
        ]);
        
        DB::table('users')->insert([
            'name' => "Victor Diachko",
            'email' => 'dweep@example.org',
            'password' => bcrypt('123456'),
            'created_at' => Carbon\Carbon::parse("now -1 month"),
            'updated_at' => Carbon\Carbon::parse("now -1 month"),
        ]);
        
        DB::table('users')->insert([
            'name' => "Boris Johnson",
            'email' => 'johnson@example.org',
            'password' => bcrypt('123456'),
            'created_at' => Carbon\Carbon::parse("now -1 month"),
            'updated_at' => Carbon\Carbon::parse("now -1 month"),
        ]);
        
        DB::table('users')->insert([
            'name' => "Timothy Simon",
            'email' => 'tim@example.org',
            'password' => bcrypt('123456'),
            'created_at' => Carbon\Carbon::parse("now -1 month"),
            'updated_at' => Carbon\Carbon::parse("now -1 month"),
        ]);
        
        DB::table('users')->insert([
            'name' => "Jenny Jackson",
            'email' => 'jackson@example.org',
            'password' => bcrypt('123456'),
            'created_at' => Carbon\Carbon::parse("now -1 month"),
            'updated_at' => Carbon\Carbon::parse("now -1 month"),
        ]);
        
        DB::table('users')->insert([
            'name' => "Michael Trump",
            'email' => 'trump@example.org',
            'password' => bcrypt('123456'),
            'created_at' => Carbon\Carbon::parse("now -1 month"),
            'updated_at' => Carbon\Carbon::parse("now -1 month"),
        ]);
    }
}
