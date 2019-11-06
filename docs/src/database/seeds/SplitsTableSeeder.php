<?php

use Illuminate\Database\Seeder;

class SplitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('splits')->insert([
            'name' => '使わない',
            'directory' => 'unused'
        ]);
        DB::table('splits')->insert([
            'name' => '炭酸水',
            'directory' => 'soda'
        ]);
        DB::table('splits')->insert([
            'name' => 'トニックウォーター',
            'directory' => 'tonic'
        ]);
        DB::table('splits')->insert([
            'name' => 'ジンジャーエール',
            'directory' => 'ginger'
        ]);
        DB::table('splits')->insert([
            'name' => 'コーラ',
            'directory' => 'cola'
        ]);
        DB::table('splits')->insert([
            'name' => 'オレンジジュース',
            'directory' => 'orange'
        ]);
        DB::table('splits')->insert([
            'name' => 'グレープフルーツジュース',
            'directory' => 'grapefruit'
        ]);
        DB::table('splits')->insert([
            'name' => 'パイナップルジュース',
            'directory' => 'pineapple'
        ]);
        DB::table('splits')->insert([
            'name' => 'レッドブル',
            'directory' => 'redbull'
        ]);
        DB::table('splits')->insert([
            'name' => 'お茶系',
            'directory' => 'tea'
        ]);
        DB::table('splits')->insert([
            'name' => '牛乳',
            'directory' => 'milk'
        ]);
        DB::table('splits')->insert([
            'name' => 'その他',
            'directory' => 'other'
        ]);
    }
}
