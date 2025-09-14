<?php

namespace App\Http\Controllers;

// Productモデルを呼び出す
use App\Models\Gacha;
use App\Models\Item;

class GachaController extends Controller
{

    public function show($str){

        // ガチャの種類
        $box = Gacha::box_select($str);

        // ガチャのレア確率
        $box_rate = $box->rate;

        // ガチャで出た値
        $draw = rand(1, 100) * 0.01;

        // レアかノーマルかの抽選
        if($box_rate > $draw) {
            $rarity = 'rare';
        }
        else {
            $rarity = 'normal';
        }

        // 抽選されたアイテム
        $result = Item::item_draw($rarity);
        
        // index.blade.phpに$productsをわたす
        return view('gacha/gacha', ['result' => $result, 'rate' => $box_rate]);
    }
}
