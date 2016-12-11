<?php

use Illuminate\Database\Seeder;

class SemesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semester')->insert([
        	'name' => 'Satu',
    	]);

        DB::table('semester')->insert([
            'name' => 'Dua',
        ]);

        DB::table('semester')->insert([
            'name' => 'Tiga',
        ]);

        DB::table('semester')->insert([
            'name' => 'Empat',
        ]);

        DB::table('semester')->insert([
            'name' => 'Lima',
        ]);

        DB::table('semester')->insert([
            'name' => 'Enam',
        ]);

        DB::table('semester')->insert([
            'name' => 'Tujuh',
        ]);

        DB::table('semester')->insert([
            'name' => 'Delapan',
        ]);

        DB::table('semester')->insert([
            'name' => 'Pendek 1',
        ]);

        DB::table('semester')->insert([
            'name' => 'Pendek 2',
        ]);
    }
}
