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
                'rarity' => '1',
                'code' => 'maken',
            ],
            [
                'item_name' => '聖剣',
                'rarity' => '1',
                'code' => 'seiken',
            ],
            [
                'item_name' => '倶利伽羅剣',
                'rarity' => '1',
                'code' => 'ookurikara_ken',
            ],
            [
                'item_name' => '草薙剣',
                'rarity' => '0',
                'code' => 'kusanagino_tsurugi',
            ],
            [
                'item_name' => '青銅剣',
                'rarity' => '0',
                'code' => 'seidouki_ken'
            ],
            [
                'item_name' => 'スコップ',
                'rarity' => '0',
                'code' => 'scoop'
            ],
            [
                'item_name' => '竹刀',
                'rarity' => '0',
                'code' => 'shinai'
            ],
        ]);
    }
}
