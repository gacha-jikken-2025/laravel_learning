<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gacha extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'rate',
    ];

    public static function box_select($gacha_type) {
        return self::where('type', '=', $gacha_type)->get()->first();
    }
}
