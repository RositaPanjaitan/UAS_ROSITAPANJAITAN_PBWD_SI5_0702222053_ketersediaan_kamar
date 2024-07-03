<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $fillable = ['nomor_kamar', 'tipe_kamar_id', 'status' ];

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}