<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class benhnhan extends Model
{
    protected $table = 'benhnhan';
    public $timestamp = false;
    protected $fillable=['hovaten','ngaysinh','gioitinh','email','sodienthoai','diachi', 'id_user'];
    public function User(){
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
    public function chitietbenhnhan(){
        return $this->hasMany('App\chitietbenhnhan', 'id_benhnhan', 'id');
    }
    public function chitietkham(){
        return $this->hasMany('App\chitietkham', 'id_benhnhan', 'id');
    }
}
