<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'item_name' => '魔剣',
                'rarity' => 'rare',
                'image' => 'img/01_maken.png',
            ],
            [
                'item_name' => '聖剣',
                'rarity' => 'rare',
                'image' => 'img/02_seiken.png',
            ],
            [
                'item_name' => '倶利伽羅剣',
                'rarity' => 'rare',
                'image' => 'img/03_ookurikara_ken.png',
            ],
            [
                'item_name' => '草薙剣',
                'rarity' => 'normal',
                'image' => 'img/04_kusanagino_tsurugi.png',
            ],
            [
                'item_name' => '青銅剣',
                'rarity' => 'normal',
                'image' => 'img/05_seidouki_ken.png'
            ],
            [
                'item_name' => 'スコップ',
                'rarity' => 'normal',
                'image' => 'img/06_scoop.png'
            ],
            [
                'item_name' => '竹刀',
                'rarity' => 'normal',
                'image' => 'img/07_shinai.png'
            ],
        ]);
    }
}
