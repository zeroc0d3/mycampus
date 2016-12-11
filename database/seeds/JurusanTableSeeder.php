<?php

use Illuminate\Database\Seeder;

class JurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
        	'name'        => 'Teknik Elektro',
            'fakultas_id' => '1',
            'image'       => 'image.png',
     	    'profile'     => 'Profil Jurusan Teknik Elektro'
        ]);

        DB::table('jurusan')->insert([
            'name'        => 'Teknik Informatika',
            'fakultas_id' => '1',
            'image'       => 'image.png',
            'profile'     => 'Profil Jurusan Teknik Informatika'
        ]);

        DB::table('jurusan')->insert([
            'name'        => 'Teknik Industri',
            'fakultas_id' => '1',
            'image'       => 'image.png',
            'profile'     => 'Profil Jurusan Teknik Industri'
        ]);

        DB::table('jurusan')->insert([
            'name'        => 'Teknik Mesin',
            'fakultas_id' => '1',
            'image'       => 'image.png',
            'profile'     => 'Profil Jurusan Teknik Mesin'
        ]);

        DB::table('jurusan')->insert([
            'name'        => 'Teknik Kimia',
            'fakultas_id' => '1',
            'image'       => 'image.png',
            'profile'     => 'Profil Jurusan Teknik Kimia'
        ]);
    }
}
