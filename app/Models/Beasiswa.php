<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Beasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 
        'deskripsi', 
        'batas_akhir', 
        'created_by'
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}

