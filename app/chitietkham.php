<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietkham extends Model
{
    protected $table = 'chitietkham';
    public $timestamp = false;
    protected $fillable=['trieuchung','donthuoc','id_chitietbenhnhan'];
    public function chitietbenhnhan(){
        return $this->belongsTo('App\chitietbenhnhan', 'id_chitietbenhnhan', 'id');
    }
}
