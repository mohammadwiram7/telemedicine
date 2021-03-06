<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    // agar dapat melakukan mass assignment
    protected $guarded = ['id'];

    // membuat relasi many to many
    public function resep_obat()
    {
        return $this->belongsToMany(ResepObat::class);
    }
}
