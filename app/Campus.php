<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $table    = 'campus';
    protected $fillable = [ 'name', 'address', 'phone', 'fax', 'zip', 'profile', 'image1', 'image2', 'image3' ];
}
