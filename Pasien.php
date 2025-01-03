<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens';
    protected $primaryKey = 'id';

    protected $fillable = [
        'namaPasien',
        'tanggalLahir',
        'jenisKelamin',
        'alamatPasien',
        'kotaPasien',
        'usiaPasien',
        'penyakitPasien',
        'idDokter',
        'tanggalMasuk',
        'tanggalKeluar',
        'tanggalKeluar',
        'kodeRuangan',
    ];

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'kodeRuangan');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'idDokter');
    }
}
