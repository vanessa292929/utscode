<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbahanbakus', function (Blueprint $table) {
            $table->string('kode_bahan_baku', 15);
            $table->string('nama_bahan_baku', 50);
            $table->float('stok_bahan_baku');
            $table->string('satuan_bahan_baku', 10);
            $table->date('tanggal_kadaluarsa_bahan_baku');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbahanbakus');
    }
};
