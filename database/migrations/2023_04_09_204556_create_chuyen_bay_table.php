<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChuyenBayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuyen_bay', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("idmaybay");
            $table->unsignedBigInteger("idhangbay");
            $table->string("machuyenbay",255)->nullable();
            $table->dateTime("ngaydi")->nullable();
            $table->dateTime("ngayden")->nullable();
            $table->string("trangthai")->nullable();
            $table->string("quangduong",255)->nullable();
            $table->string("giave",255)->nullable();
            $table->unsignedBigInteger("sanbaydi");
            $table->unsignedBigInteger("sanbayden");
            $table->timestamps();
//            $table->foreign("idmaybay")->references("id")->on("maybay")->onDelete('cascade');
//            $table->foreign("sanbaydi")->references("id")->on("sanbay")->onDelete('cascade');
//            $table->foreign("sanbayden")->references("id")->on("sanbay")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chuyen_bay');
    }
}
