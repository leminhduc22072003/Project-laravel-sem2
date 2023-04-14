<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_hoa_don', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("bill_id");
            $table->date("ngaydatve")->nullable();
            $table->string("trangthai",255)->nullable();
            $table->datetime("ngaybay")->nullable();
            $table->float("tongtien", 20, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_hoa_don');
    }
}
