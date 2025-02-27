<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelKamar extends Model
{
    use HasFactory;
    protected $fillable = ['nama_level', 'deskripsi'];

    public function kamar()
    {
        return $this->hasMany(Kamar::class);        
    }

}
