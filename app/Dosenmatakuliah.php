<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosenmatakuliah extends Model
{
    protected $table    = 'dosenmatakuliah';
    protected $fillable = [ 'matakuliah_id', 'nip' ];
}
