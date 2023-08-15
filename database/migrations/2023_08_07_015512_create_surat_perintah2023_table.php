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
        Schema::create('surat_perintah2023', function (Blueprint $table) {
            $table->id('nomor_urut');
            $table->string('nomor_surat');
            $table->text('nama_pegawai');
            $table->text('isi_ringkasan');
            $table->string('alamat');
            $table->date('tanggal');
            $table->enum('keterangan', ['UP', 'P2L', 'PAS', 'IMG', 'YK', 'KU', 'HAM']);
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
        Schema::dropIfExists('surat_perintah2023');
    }
};