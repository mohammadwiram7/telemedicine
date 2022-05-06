<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    // agar dapat melakukan mass assignment
    protected $guarded = ['id'];

    // membuat relasi one to one
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    // membuat relasi one to many
    public function diagnosa()
    {
        return $this->hasMany(Diagnosa::class);
    }

    // membuat relasi one to many
    public function resep()
    {
        return $this->hasMany(Resep::class);
    }
}
