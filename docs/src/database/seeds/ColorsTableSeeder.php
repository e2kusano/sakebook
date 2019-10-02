<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            'name' => '透明',
        ]);
        DB::table('colors')->insert([
            'name' => '赤',
        ]);
        DB::table('colors')->insert([
            'name' => 'オレンジ',
        ]);
        DB::table('colors')->insert([
            'name' => '黄色',
        ]);
        DB::table('colors')->insert([
            'name' => '緑',
        ]);
        DB::table('colors')->insert([
            'name' => '青',
        ]);
        DB::table('colors')->insert([
            'name' => 'ピンク',
        ]);
        DB::table('colors')->insert([
            'name' => '紫',
        ]);
        DB::table('colors')->insert([
            'name' => '琥珀色',
        ]);
        DB::table('colors')->insert([
            'name' => '白',
        ]);
        DB::table('colors')->insert([
            'name' => '黒',
        ]);
    }
}
