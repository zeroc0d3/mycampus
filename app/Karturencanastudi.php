<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karturencanastudi extends Model
{
    protected $table    = 'karturencanastudi';
    protected $fillable = [ 'nim', 'matakuliahsemester_id' ];
}
