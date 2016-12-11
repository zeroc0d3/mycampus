<?php

use Illuminate\Database\Seeder;

class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Jurusan Teknik Elektro
        DB::table('dosen')->insert([
        	'nip'   => '111',
	        'name'  => 'Dono',
    	]);

    	DB::table('dosen')->insert([
        	'nip'   => '112',
	        'name'  => 'Kasino',
    	]);

    	DB::table('dosen')->insert([
        	'nip'   => '113',
	        'name'  => 'Indro',
    	]);

    	DB::table('dosen')->insert([
        	'nip'   => '114',
	        'name'  => 'Ujang',
    	]);

    	DB::table('dosen')->insert([
        	'nip'   => '115',
	        'name'  => 'Ucok',
    	]);

    	DB::table('dosen')->insert([
        	'nip'   => '116',
	        'name'  => 'Asep',
    	]);
    }
}
