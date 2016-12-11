<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliahsemester extends Model
{
    protected $table    = 'matakuliahsemester';
    protected $fillable = [ 'semester_id', 'matakuliah_id', 'tahun' ];
}
