<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = ['kamar_id', 'pasien_id', 'tanggal_check_in', 'tanggal_check_out'];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
