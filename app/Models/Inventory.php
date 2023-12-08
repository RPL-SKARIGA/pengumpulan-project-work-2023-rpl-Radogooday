<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventori';
    protected $primaryKey = 'id_inventori';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'id_item_dt',
    ];

    public function item()
    {
        return $this->belongsTo(ItemDota::class, 'id_item_dt', 'id_item_dt');
    }
}
