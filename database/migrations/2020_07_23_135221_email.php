<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Email extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email', function ($table) {
            $table->bigIncrements('id'); //Tự tăng, khóa chính
            $table->string('diachiemai'); //Kiểu chuỗi
            $table->string('noidung'); //Kiểu int
            $table->unsignedBigInteger('id_benhnhan'); //Kiểu int
            $table->foreign('id_benhnhan')->references('id')->on('benhnhan');
            $table->unsignedBigInteger('id_user'); //Kiểu int
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
