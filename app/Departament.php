<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    protected $table='departaments';
    protected $fillable= ['id','nombre'];
}
