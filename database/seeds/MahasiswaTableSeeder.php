<?php

use Illuminate\Database\Seeder;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mahasiswa Jurusan Teknik Elektro
        DB::table('mahasiswa')->insert([
        	'nim'        => '20150101',
	        'name'       => 'Budi',
	        'user_id'    => '2',
            'jurusan_id' => '1',
    	]);

    	// Mahasiswa Jurusan Teknik Informatika
        DB::table('mahasiswa')->insert([
        	'nim'        => '20150102',
	        'name'       => 'Iwan',
	        'user_id'    => '3',
            'jurusan_id' => '2'
    	]);
    }
}
