<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    public $timestamps = false;

    protected $fillable = [
        'id_penjual',
        'nm_penjual',
        'id_pembeli',
        'nm_pembeli',
        'id_item_dt',
        'nm_item_dt',
        'price',
        'tanggal_transaksi',
    ];
}
