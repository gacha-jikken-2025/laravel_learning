<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /* protected $fillable = [
        'item_name',
        'rarity',
    ];

    public static function item_draw($rarity) {

        // 抽選されたレアリティで絞り込み
        $item_box = self::where('rarity', '=', $rarity);

        // 絞り込みされたアイテムの中からランダムで取得
        $get_item = $item_box->inRandomOrder()->get()->first();

        return $get_item;
    } */
}
