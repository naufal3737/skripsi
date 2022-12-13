<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculation extends Model
{
    use HasFactory;

    protected $fillable = [
        'penetapan_konteks',
        'identifikasi_risiko',
        'analisis_risiko',
        'perencanaan_manajemen_risiko',
        'komunikasi_risiko',
        'mitigasi_risiko',
        'pemantauan_risiko',
        'evaluasi_risiko',
        'level_id',
        'audit_id'
    ];
}
