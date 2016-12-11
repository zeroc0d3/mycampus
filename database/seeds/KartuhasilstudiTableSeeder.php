<?php

use Illuminate\Database\Seeder;

class KartuhasilstudiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// KHS Mahasiswa Teknik Elektro
        DB::table('kartuhasilstudi')->insert([
        	'karturencanastudi_id' => '1',
        	'nim'                  => '20150101',
        	'nilai'                => 80
        ]);

        DB::table('kartuhasilstudi')->insert([
        	'karturencanastudi_id' => '2',
        	'nim'                  => '20150101',
        	'nilai'                => 65
        ]);

        DB::table('kartuhasilstudi')->insert([
        	'karturencanastudi_id' => '3',
        	'nim'                  => '20150101',
        	'nilai'                => 75
        ]);

        DB::table('kartuhasilstudi')->insert([
        	'karturencanastudi_id' => '4',
        	'nim'                  => '20150101',
        	'nilai'                => 85
        ]);

        DB::table('kartuhasilstudi')->insert([
        	'karturencanastudi_id' => '5',
        	'nim'                  => '20150101',
        	'nilai'                => 70
        ]);

        DB::table('kartuhasilstudi')->insert([
        	'karturencanastudi_id' => '6',
        	'nim'                  => '20150101',
        	'nilai'                => 75
        ]);

        // KHS Mahasiswa Teknik Informatika
        DB::table('kartuhasilstudi')->insert([
        	'karturencanastudi_id' => '7',
        	'nim'                  => '20150102',
        	'nilai'                => 70
        ]);

        DB::table('kartuhasilstudi')->insert([
        	'karturencanastudi_id' => '8',
        	'nim'                  => '20150102',
        	'nilai'                => 75
        ]);

        DB::table('kartuhasilstudi')->insert([
        	'karturencanastudi_id' => '9',
        	'nim'                  => '20150102',
        	'nilai'                => 80
        ]);

        DB::table('kartuhasilstudi')->insert([
        	'karturencanastudi_id' => '10',
        	'nim'                  => '20150102',
        	'nilai'                => 85
        ]);

        DB::table('kartuhasilstudi')->insert([
        	'karturencanastudi_id' => '11',
        	'nim'                  => '20150102',
        	'nilai'                => 80
        ]);

        DB::table('kartuhasilstudi')->insert([
        	'karturencanastudi_id' => '12',
        	'nim'                  => '20150102',
        	'nilai'                => 65
        ]);
    }
}
