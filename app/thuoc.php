<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thuoc extends Model
{
    protected $table = 'thuoc';
    public $timestamp = false;
    protected $fillable=['tenthuoc'];
}
