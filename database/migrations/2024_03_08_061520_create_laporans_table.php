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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('no_laporan');
            $table->timestamp('tanggal_melapor')->nullable();
            $table->string('nama_pelapor');
            $table->string('umur');
            $table->string('alamat_pelapor');
            $table->timestamp('waktu_kejadian')->nullable();
            $table->string('tempat_kejadian');
            $table->string('pasal_pidana');
            $table->string('identitas_pelapor');
            $table->string('identitas_korban');
            $table->string('uraian_kejadian');
            $table->string('unit');
            $table->string('perkembangan');
            $table->string('ditangani');
            $table->string('identitas_pemilik');
            $table->string('jenis_kendaraan');
            $table->string('nopol');
            $table->string('warna');
            $table->string('no_rangka');
            $table->string('no_mesin');
            $table->timestamps(); // Ini akan menambahkan created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
