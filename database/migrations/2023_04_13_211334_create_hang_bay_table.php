<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHangBayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hang_bay', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('avt_url', 255);
            $table->timestamps();
        });
            \App\Models\Hangbay::create
            ([
                'name' => 'Vietnam Airlines',
                'avt_url' => 'client/anh/logo-vietnam-airlines nho.png',
            ]);

            \App\Models\Hangbay::create
            ([
                'name' => 'VietJet Air',
                'avt_url' => 'client/anh/vietjet.png',
            ]);

            \App\Models\Hangbay::create
            ([
                'name' => 'BamBoo Airways',
                'avt_url' => 'client/anh/bamboo-airways.png',
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hang_bay');
    }
}
