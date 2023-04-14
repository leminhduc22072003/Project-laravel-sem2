<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table -> string("name",255);
            $table -> string("email",255);
            $table -> string("email-verified-at",255)->nullable();
            $table -> string("password",255);
            $table -> integer("role")->default(0);
            $table -> integer("active")->default(0);
            $table -> string("avatar",255)->nullable();
            $table -> string("sdt",10)->nullable();
            $table -> string("diachi",255)->nullable();
            $table -> float("dambay")->nullable();
            $table->timestamps();
        });

        \App\Models\User::create
        ([
            'email' => 'test@gmail.com',
            'name' => 'Test Administrator',
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
            'group' => GROUP_ADMIN,
            'active' => ACTIVE_TRUE
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
