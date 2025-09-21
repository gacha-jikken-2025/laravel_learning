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
            $rarity = '1';
        }
        else {
            $rarity = '0';
        }

        // 抽選されたアイテム
        // $result = Item::item_draw($rarity);

        // 抽選されたレアリティで絞り込み
        $item_box = Item::where('rarity', '=', $rarity);

        // 絞り込みされたアイテムの中からランダムで取得
        $result = $item_box->inRandomOrder()->get()->first();
        
        // index.blade.phpに$productsをわたす
        return view('gacha/gacha', ['result' => $result, 'rate' => $box_rate]);
    }
}
