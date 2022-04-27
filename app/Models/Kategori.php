<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // agar dapat melakukan mass assignment
    protected $guarded = ['id'];

    // membuat relasi one to many
    public function dokter()
    {
        return $this->hasMany(Dokter::class);
    }
}
