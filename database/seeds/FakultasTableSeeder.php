<?php

use Illuminate\Database\Seeder;

class FakultasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fakultas')->insert([
        	'name' => 'Teknik Industri',
    	]);

        DB::table('fakultas')->insert([
            'name' => 'Teknik Sipil',
        ]);

        DB::table('fakultas')->insert([
            'name' => 'Matematika IPA',
        ]);

        DB::table('fakultas')->insert([
            'name' => 'Desain',
        ]);
    }
}
