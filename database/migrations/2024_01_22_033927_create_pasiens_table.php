<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            // $table->integer('nomorRekamMedik');
            $table->string('namaPasien');
            $table->date('tanggalLahir');
            $table->string('jenisKelamin');
            $table->string('alamatPasien');
            $table->string('kotaPasien');
            $table->integer('usiaPasien');
            $table->string('penyakitPasien');
            $table->integer('idDokter');
            $table->date('tanggalMasuk');
            $table->date('tanggalKeluar');
            $table->integer('kodeRuangan');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
