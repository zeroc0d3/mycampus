<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        // MyCampus
        $this->call(CampusTableSeeder::class);
        $this->call(FakultasTableSeeder::class);
        $this->call(JurusanTableSeeder::class);
        $this->call(SemesterTableSeeder::class);
        $this->call(MatakuliahTableSeeder::class);
        $this->call(MatakuliahsemesterTableSeeder::class);
        $this->call(DosenTableSeeder::class);
        $this->call(DosenmatakuliahTableSeeder::class);
        $this->call(MahasiswaTableSeeder::class);
        $this->call(KarturencanastudiTableSeeder::class);
        $this->call(KartuhasilstudiTableSeeder::class);
        
        Model::reguard();
    }
}
