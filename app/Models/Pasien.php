<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'tanggal_lahir', 'jenis_kelamin', 'nomor_kontak'];

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
