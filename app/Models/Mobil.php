<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mobil extends Model
{
    use HasFactory;
    protected $table = "mobil";
    protected $primaryKey = 'kode_mobil';
    protected $keyType = 'string';

    protected $fillable = [
        'kode_mobil', 'merk', 'type', 'warna', 'harga', 'gambar'
    ];

    public static function get_code($merk)
    {
        $tahun = date("Y");
        $prefix = strtoupper(substr($merk, 0, 3));
        $no_urut = DB::table('mobil')->selectRaw("IFNULL(MAX(SUBSTRING(`kode_mobil`,8,5)),0) + 1 AS no_urut")->whereRaw("SUBSTRING(`kode_mobil`,4,4) = '" . $tahun . "'")->whereRaw("SUBSTRING(`kode_mobil`,1,3) = '" . $prefix . "'")->first()->no_urut;
        $kode_mobil = $prefix . $tahun . sprintf("%'.05d", $no_urut);

        return $kode_mobil;
    }
}
