<?php

use Illuminate\Database\Seeder;

class DosenmatakuliahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Jurusan Teknik Elektro
        DB::table('dosenmatakuliah')->insert([
        	'matakuliah_id'  => '1',
	        'nip'            => '111',
    	]);

    	DB::table('dosenmatakuliah')->insert([
        	'matakuliah_id'  => '2',
	        'nip'            => '111',
    	]);

    	DB::table('dosenmatakuliah')->insert([
        	'matakuliah_id'  => '3',
	        'nip'            => '112',
    	]);

    	DB::table('dosenmatakuliah')->insert([
        	'matakuliah_id'  => '4',
	        'nip'            => '112',
    	]);

    	DB::table('dosenmatakuliah')->insert([
        	'matakuliah_id'  => '5',
	        'nip'            => '113',
    	]);

    	DB::table('dosenmatakuliah')->insert([
        	'matakuliah_id'  => '6',
	        'nip'            => '113',
    	]);

    	// Jurusan Teknik Informatika
    	DB::table('dosenmatakuliah')->insert([
        	'matakuliah_id'  => '7',
	        'nip'            => '114',
    	]);

    	DB::table('dosenmatakuliah')->insert([
        	'matakuliah_id'  => '8',
	        'nip'            => '114',
    	]);

    	DB::table('dosenmatakuliah')->insert([
        	'matakuliah_id'  => '9',
	        'nip'            => '115',
    	]);

    	DB::table('dosenmatakuliah')->insert([
        	'matakuliah_id'  => '10',
	        'nip'            => '115',
    	]);

    	DB::table('dosenmatakuliah')->insert([
        	'matakuliah_id'  => '11',
	        'nip'            => '116',
    	]);

    	DB::table('dosenmatakuliah')->insert([
        	'matakuliah_id'  => '12',
	        'nip'            => '116',
    	]);
    }
}
