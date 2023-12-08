<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opuser extends Model
{
    use HasFactory;
    protected $table = 'opuser';
    protected $primaryKey = 'id_opuser';
    protected $fillable = [
        'id_opuser',
        'pprofile',
        'phone',
        'gender',
        'birthday',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
