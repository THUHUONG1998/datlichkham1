<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chitietkham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietkham', function ($table) {
            $table->bigIncrements('id'); //Tự tăng, khóa chính
            $table->string('trieuchung');
            $table->string('donthuoc');
            $table->unsignedBigInteger('id_chitietbenhnhan'); //Kiểu int
            $table->foreign('id_chitietbenhnhan')->references('id')->on('chitietbenhnhan');
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
