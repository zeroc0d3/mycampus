<?php

use Illuminate\Database\Seeder;

class MatakuliahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Jurusan Teknik Elektro
        DB::table('matakuliah')->insert([
        	'name'       => 'Kalkulus 1',
	        'jurusan_id' => '1',
    	    'sks'        => '4',
    	]);

    	DB::table('matakuliah')->insert([
        	'name'       => 'Kalkulus 2',
	        'jurusan_id' => '1',
    	    'sks'        => '4',
    	]);

    	DB::table('matakuliah')->insert([
        	'name'       => 'Elektronika Dasar 1',
	        'jurusan_id' => '1',
    	    'sks'        => '3',
    	]);

    	DB::table('matakuliah')->insert([
        	'name'       => 'Elektronika Dasar 2',
	        'jurusan_id' => '1',
    	    'sks'        => '3',
    	]);

    	DB::table('matakuliah')->insert([
        	'name'       => 'Rangkaian Listrik',
	        'jurusan_id' => '1',
    	    'sks'        => '3',
    	]);

    	DB::table('matakuliah')->insert([
        	'name'       => 'Menggambar Teknik',
	        'jurusan_id' => '1',
    	    'sks'        => '2',
    	]);

    	// Jurusan Teknik Informatika
        DB::table('matakuliah')->insert([
        	'name'       => 'Kalkulus 1',
	        'jurusan_id' => '2',
    	    'sks'        => '4',
    	]);

        DB::table('matakuliah')->insert([
        	'name'       => 'Kalkulus 2',
	        'jurusan_id' => '2',
    	    'sks'        => '4',
    	]);

    	DB::table('matakuliah')->insert([
        	'name'       => 'Basis Data',
	        'jurusan_id' => '2',
    	    'sks'        => '2',
    	]);

    	DB::table('matakuliah')->insert([
        	'name'       => 'Dasar Pemograman',
	        'jurusan_id' => '2',
    	    'sks'        => '2',
    	]);

    	DB::table('matakuliah')->insert([
        	'name'       => 'Sejarah Komputer',
	        'jurusan_id' => '2',
    	    'sks'        => '2',
    	]);

    	DB::table('matakuliah')->insert([
        	'name'       => 'Algoritma & Pemograman',
	        'jurusan_id' => '2',
    	    'sks'        => '3',
    	]);
    }
}
