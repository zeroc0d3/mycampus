<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kartuhasilstudi extends Model
{
    protected $table    = 'kartuhasilstudi';
    protected $fillable = [ 'karturencanastudi_id', 'nim', 'nilai' ];
}
