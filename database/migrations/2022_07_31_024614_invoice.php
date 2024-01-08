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
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->string('no_invoice')->unique();
            $table->date('tanggal');
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->string('no_tlp')->nullable();
            $table->string('email')->nullable();
            $table->string('dp')->nullable();
            $table->string('total')->nullable();
            $table->string('status')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('invoice');
    }
};
