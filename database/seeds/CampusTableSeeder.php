<?php

use Illuminate\Database\Seeder;

class CampusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Campus
        DB::table('campus')->insert([
            'name'     => 'Institut Teknologi Jakarta',
            'address'  => 'Jln. Gajah Mada X, Jakarta Pusat',
            'phone'    => '021-654123',
            'fax'      => '021-987456',
            'zip'      => '456876',
            'profile'  => 'Profil kampus Institut Teknologi Jakarta, Terakreditasi A',
            'image1'   => 'image1.png',
            'image2'   => 'image2.png',
            'image3'   => 'image3.png',
    	]);
    }
}
