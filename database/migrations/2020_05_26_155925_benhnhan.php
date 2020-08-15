<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Benhnhan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benhnhan', function ($table) {
            $table->bigIncrements('id'); //Tự tăng, khóa chính
            $table->string('hovaten'); //Kiểu chuỗi
            $table->date('ngaysinh'); //Kiểu chuỗi
            $table->string('gioitinh'); //Kiểu chuỗi
            $table->date('ngaykham'); //Kiểu chuỗi
            $table->string('sodienthoai');
            $table->string('email');
            $table->string('diachi');
            $table->unsignedBigInteger('id_user'); 
            $table->foreign('id_user')->references('id')->on('users');
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
