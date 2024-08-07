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
        Schema::create('badan_usaha', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_usaha')->nullable();
            $table->string('bidang')->nullable();
            $table->string('subbidang')->nullable();
            $table->string('kualafikasi')->nullable();
            $table->string('alamat')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('email');
            $table->string('no_telp')->nullable();
            $table->string('last_send_email')->nullable();
            $table->boolean('status_email')->nullable();
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
        Schema::dropIfExists('badan_usaha');
    }
};
