<?php

use Illuminate\Database\Seeder;

class MatakuliahsemesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Jurusan Teknik Elektro
        DB::table('matakuliahsemester')->insert([
        	'semester_id'   => '1',
	        'matakuliah_id' => '1',
    	    'tahun'         => '2016',
        ]);

    	DB::table('matakuliahsemester')->insert([
        	'semester_id'   => '2',
	        'matakuliah_id' => '2',
            'tahun'         => '2016',
    	]);

    	DB::table('matakuliahsemester')->insert([
        	'semester_id'   => '1',
	        'matakuliah_id' => '3',
            'tahun'         => '2016',
    	]);

    	DB::table('matakuliahsemester')->insert([
        	'semester_id'   => '2',
	        'matakuliah_id' => '4',
            'tahun'         => '2016',
    	]);

    	DB::table('matakuliahsemester')->insert([
        	'semester_id'   => '3',
	        'matakuliah_id' => '5',
            'tahun'         => '2016',
    	]);

    	DB::table('matakuliahsemester')->insert([
        	'semester_id'   => '3',
	        'matakuliah_id' => '6',
            'tahun'         => '2016',
    	]);

    	// Jurusan Teknik Informatika
        DB::table('matakuliahsemester')->insert([
        	'semester_id'   => '1',
	        'matakuliah_id' => '7',
            'tahun'         => '2016',
    	]);

        DB::table('matakuliahsemester')->insert([
        	'semester_id'   => '2',
	        'matakuliah_id' => '8',
            'tahun'         => '2016',
    	]);

    	DB::table('matakuliahsemester')->insert([
        	'semester_id'   => '1',
	        'matakuliah_id' => '9',
            'tahun'         => '2016',
    	]);

    	DB::table('matakuliahsemester')->insert([
        	'semester_id'   => '2',
	        'matakuliah_id' => '10',
            'tahun'         => '2016',
    	]);

    	DB::table('matakuliahsemester')->insert([
        	'semester_id'   => '3',
	        'matakuliah_id' => '11',
            'tahun'         => '2016',
    	]);

    	DB::table('matakuliahsemester')->insert([
        	'semester_id'   => '4',
	        'matakuliah_id' => '12',
            'tahun'         => '2016',
    	]);
    }
}
