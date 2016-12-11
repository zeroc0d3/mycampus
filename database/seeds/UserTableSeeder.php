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
        	'name' => 'Administrator',
        	'email' => 'admin@mycampus.app',
        	'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'User 1',
            'email' => 'user1@mycampus.app',
            'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'User 2',
            'email' => 'user2@mycampus.app',
            'password' => bcrypt('password')
        ]);
    }
}
