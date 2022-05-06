<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResepObat extends Model
{
    use HasFactory;

    // agar dapat melakukan mass assignment
    protected $guarded = ['id'];

    // membuat relasi many to many
    public function resep()
    {
        return $this->belongsToMany(Resep::class);
    }

    // membuat relasi many to many
    public function obat()
    {
        return $this->belongsToMany(Obat::class);
    }
}
