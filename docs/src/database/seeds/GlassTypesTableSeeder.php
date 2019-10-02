<?php

use Illuminate\Database\Seeder;

class GlassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('glass_types')->insert([
            'name' => 'ロックグラス',
        ]);
        DB::table('glass_types')->insert([
            'name' => 'タンブラー',
        ]);
        DB::table('glass_types')->insert([
            'name' => 'コリンズグラス',
        ]);
        DB::table('glass_types')->insert([
            'name' => 'リキュールグラス',
        ]);
        DB::table('glass_types')->insert([
            'name' => 'カクテルグラス',
        ]);
        DB::table('glass_types')->insert([
            'name' => 'ソーサー型シャンパングラス',
        ]);
        DB::table('glass_types')->insert([
            'name' => 'フルート型シャンパングラス',
        ]);
        DB::table('glass_types')->insert([
            'name' => 'ワイングラス',
        ]);
        DB::table('glass_types')->insert([
            'name' => 'ホットグラス',
        ]);
        DB::table('glass_types')->insert([
            'name' => 'ショットグラス',
        ]);
        DB::table('glass_types')->insert([
            'name' => 'ピルスナー',
        ]);
        DB::table('glass_types')->insert([
            'name' => 'その他',
        ]);

    }
}
