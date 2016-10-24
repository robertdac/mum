<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected  $table="productos";

    public $fillable = ['nombre','descripcion'];





}
