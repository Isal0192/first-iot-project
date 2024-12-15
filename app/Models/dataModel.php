<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class dataModel extends Model
{
    //
    protected $table = 'sensors';
    protected $fillable = ['tempratur', 'humidity'];


}
