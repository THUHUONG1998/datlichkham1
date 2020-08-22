<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietkham extends Model
{
    protected $table = 'chitietkham';
    public $timestamp = false;
    protected $fillable=['chuandoan','donthuoc','id_chitietbenhnhan', 'id_benhnhan'];
    public function chitietbenhnhan(){
        return $this->belongsTo('App\chitietbenhnhan', 'id_chitietbenhnhan', 'id');
    }
    public function benhnhan(){
        return $this->belongsTo('App\benhnhan', 'id_benhnhan', 'id');
    }
}
