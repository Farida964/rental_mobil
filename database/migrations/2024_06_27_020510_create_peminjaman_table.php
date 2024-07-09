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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam', 45);
            $table->string('ktp_peminjam');
            $table->string('keperluan_pinjaman');
            $table->date('mulai');
            $table->date('selesai');
            $table->double('biaya');
            $table->string('komentar_peminjam');
            $table->string('status_pinjam');
            $table->unsignedBigInteger('armada_id');
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
        Schema::dropIfExists('peminjaman');
    }
};
