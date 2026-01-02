<?php

namespace App\Http\Controllers;

// Productモデルを呼び出す
use App\Models\Gacha;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GachaController extends Controller
{

    public function gacha(Request $request, $id){

        $request->merge(['id' => $id]);

        $request->validate([
            'id' => ['required', 'integer', 'min:1', 'max:2'],
        ]);

        try {
            // ガチャの種類
            $box = Gacha::box_select($id);

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
            // return view('gacha/gacha', ['result' => $result, 'rate' => $box_rate]);

            // Log::info('result', ['result' => $result, 'rate' => $box_rate]);

            return response()->json(['result' => $result, 'rate' => $box_rate]);
        } catch (\Exception $e) {
            return false;
        }
    }
}
