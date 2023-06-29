<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomer_induk',
        'tanggal_cuti',
        'lama_cuti',
        'keterangan',
    ];

    protected $table = 'cuti';

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'nomer_induk', 'nomer_induk');
    }
}
