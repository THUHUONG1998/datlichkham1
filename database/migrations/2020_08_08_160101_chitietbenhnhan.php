<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chitietbenhnhan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietbenhnhan', function ($table) {
            $table->bigIncrements('id'); //Tự tăng, khóa chính
            $table->string('hovaten'); //Kiểu chuỗi
            $table->date('ngaykham'); //Kiểu chuỗi
            $table->unsignedBigInteger('id_benhnhan'); //Kiểu int
            $table->foreign('id_benhnhan')->references('id')->on('benhnhan');
            $table->unsignedBigInteger('id_bacsi'); //Kiểu int
            $table->foreign('id_bacsi')->references('id')->on('bacsi');
            $table->unsignedBigInteger('id_chuyenkhoa'); //Kiểu int
            $table->foreign('id_chuyenkhoa')->references('id')->on('chuyenkhoa');
            $table->unsignedBigInteger('id_khunggio'); //Kiểu int
            $table->foreign('id_khunggio')->references('id')->on('khunggio');
            $table->unsignedBigInteger('id_benhvien'); //Kiểu int
            $table->foreign('id_benhvien')->references('id')->on('benhvien');
            $table->timestamps(); //Tự cập nhật thời gian
            }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
