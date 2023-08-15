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
        Schema::create('suma_pas2023', function (Blueprint $table) {
            $table->id('nomor_urut');
            $table->string('nomor_surat');
            $table->string('pengirim');
            $table->date('tanggal');
            $table->text('isi_ringkasan');
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
        Schema::dropIfExists('suma_pas2023');
    }
};