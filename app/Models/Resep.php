<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    // agar dapat melakukan mass assignment
    protected $guarded = ['id'];

    // membuat relasi one to one
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    // membuat relasi one to one
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    // membuat relasi one to one
    public function diagnosa()
    {
        return $this->belongsTo(Diagnosa::class);
    }

    // membuat relasi many to many
    public function resep_obat()
    {
        return $this->belongsToMany(ResepObat::class);
    }
}
