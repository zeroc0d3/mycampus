<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table    = 'matakuliah';
    protected $fillable = [ 'name', 'jurusan_id', 'sks' ];
}
