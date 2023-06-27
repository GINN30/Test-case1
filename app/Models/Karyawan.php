<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    public function cuti()
    {
        return $this->hasMany(Cuti::class, 'nomer_induk', 'nomer_induk');
    }
}
