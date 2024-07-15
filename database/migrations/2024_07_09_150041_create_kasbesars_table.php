<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasbesarsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kasbesars', function (Blueprint $table) {
            $table->id();
            $table->string('no_bukti')->unique();
            $table->dateTime('tanggal');
            $table->string('kategori')->nullable();
            $table->text('keterangan');
            $table->bigInteger('saldo_awal');
            $table->bigInteger('nominal_transaksi');
            $table->bigInteger('sisa_saldo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasbesars');
    }
};
