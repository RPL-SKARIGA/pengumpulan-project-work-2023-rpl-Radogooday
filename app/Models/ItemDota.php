<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemDota extends Model
{
    use HasFactory;

    protected $table = 'item_dota';
    protected $primaryKey = 'id_item_dt';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'nm_item_dt',
        'pic_item_dt',
        'qual_item',
        'rty_item',
        'hero',
        'is_sold',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'id_item_dt', 'id_item_dt');
    }

    // public function inventory()
    // {
    //     return $this->hasOne(Inventory::class, 'id_item_dt');
    // }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'id_user');
    // }
}
