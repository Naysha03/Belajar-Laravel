<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokters';
    protected $primaryKey = 'id';

    protected $fillable = [
        'idDokter', 'namaDokter', 'tanggalLahir', 'spesialisasi', 'lokasiPraktik', 'jamPraktik',
    ];

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'lokasiPraktik', 'namaRuangan');
    }
}
