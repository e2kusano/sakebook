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
            'directory' => 'clear'
        ]);
        DB::table('colors')->insert([
            'name' => '赤',
            'directory' => 'red'
        ]);
        DB::table('colors')->insert([
            'name' => 'オレンジ',
            'directory' => 'orange'
        ]);
        DB::table('colors')->insert([
            'name' => '黄色',
            'directory' => 'yellow'
        ]);
        DB::table('colors')->insert([
            'name' => '緑',
            'directory' => 'green'
        ]);
        DB::table('colors')->insert([
            'name' => '青',
            'directory' => 'blue'
        ]);
        DB::table('colors')->insert([
            'name' => 'ピンク',
            'directory' => 'pink'
        ]);
        DB::table('colors')->insert([
            'name' => '紫',
            'directory' => 'purple'
        ]);
        DB::table('colors')->insert([
            'name' => '琥珀色',
            'directory' => 'gold'
        ]);
        DB::table('colors')->insert([
            'name' => '白',
            'directory' => 'white'
        ]);
        DB::table('colors')->insert([
            'name' => '黒',
            'directory' => 'black'
        ]);
        DB::table('colors')->insert([
            'name' => '茶色',
            'directory' => 'brown'
        ]);
    }
}
