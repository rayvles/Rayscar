<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $table = "pembeli";
    protected $primaryKey = 'ktp_pembeli';
    protected $keyType = 'string';

    protected $fillable = [
        'ktp_pembeli', 'nama_pembeli', 'alamat_pembeli', 'telp_pembeli'
    ];
}
