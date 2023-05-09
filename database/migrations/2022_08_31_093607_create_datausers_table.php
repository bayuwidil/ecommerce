<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datausers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->date('tgl_lahir');
            $table->string('jk');
            $table->string('email');
            $table->string('telpon');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->string('alamat_lengkap');
            $table->string('foto');
            $table->timestamps();
            $table-> unsignedBigInteger('userId');
    
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datausers');
    }
};
