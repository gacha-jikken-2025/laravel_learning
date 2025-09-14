<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class GachaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gachas')->insert([
            [
                'type' => '1',
                'rate' => '0.3',
            ],
            [
                'type' => '2',
                'rate' => '0.6',
            ],
        ]);
    }
}
