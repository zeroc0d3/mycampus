<?php

use Illuminate\Database\Seeder;

class KarturencanastudiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // KRS Mahasiswa Jurusan Teknik Elektro
        DB::table('karturencanastudi')->insert([
            'nim'                   => '20150101',
	        'matakuliahsemester_id' => '1'
    	]);

    	DB::table('karturencanastudi')->insert([
            'nim'                   => '20150101',
	        'matakuliahsemester_id' => '2'
    	]);

    	DB::table('karturencanastudi')->insert([
            'nim'                   => '20150101',
	        'matakuliahsemester_id' => '3'
    	]);

    	DB::table('karturencanastudi')->insert([
            'nim'                   => '20150101',
	        'matakuliahsemester_id' => '4'
    	]);

    	DB::table('karturencanastudi')->insert([
            'nim'                   => '20150101',
	        'matakuliahsemester_id' => '5'
    	]);

    	DB::table('karturencanastudi')->insert([
            'nim'                   => '20150101',
	        'matakuliahsemester_id' => '6'
    	]);

    	// KRS Mahasiswa Jurusan Teknik Informatika
        DB::table('karturencanastudi')->insert([
            'nim'                   => '20150102',
	        'matakuliahsemester_id' => '7'
    	]);

    	DB::table('karturencanastudi')->insert([
            'nim'                   => '20150102',
	        'matakuliahsemester_id' => '8'
    	]);

    	DB::table('karturencanastudi')->insert([
            'nim'                   => '20150102',
	        'matakuliahsemester_id' => '9'
    	]);

    	DB::table('karturencanastudi')->insert([
            'nim'                   => '20150102',
	        'matakuliahsemester_id' => '10'
    	]);

    	DB::table('karturencanastudi')->insert([
            'nim'                   => '20150102',
	        'matakuliahsemester_id' => '11'
    	]);

    	DB::table('karturencanastudi')->insert([
            'nim'                   => '20150102',
	        'matakuliahsemester_id' => '12'
    	]);
    }
}
