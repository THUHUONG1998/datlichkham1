<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietbenhnhan extends Model
{
    protected $table = 'chitietbenhnhan';
    public $timestamp = false;
    protected $fillable=['hovaten','ngaysinh','gioitinh','email','ngaykham','sodienthoai','diachi','id_benhvien','id_bacsi','id_chuyenkhoa','chitiet','id_khunggio'];
    public function bacsi(){
        return $this->belongsTo('App\bacsi', 'id_bacsi', 'id');
    }
    public function benhvien(){
       return $this->belongsTo('App\benhvien', 'id_benhvien', 'id');
   }
   public function chuyenkhoa(){
       return $this->belongsTo('App\chuyenkhoa', 'id_chuyenkhoa', 'id');
   }
   public function benhnhan(){
       return $this->belongsTo('App\benhnhan', 'id_benhnhan', 'id');
   }
   public function khunggio(){
       return $this->belongsTo('App\khunggio', 'id_khunggio', 'id');
   }
  
}
