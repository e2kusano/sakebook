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
            'name' => '炭酸水',
        ]);
        DB::table('splits')->insert([
            'name' => 'トニックウォーター',
        ]);
        DB::table('splits')->insert([
            'name' => 'ジンジャーエール',
        ]);
        DB::table('splits')->insert([
            'name' => 'コーラ',
        ]);
        DB::table('splits')->insert([
            'name' => 'オレンジジュース',
        ]);
        DB::table('splits')->insert([
            'name' => 'グレープフルーツジュース',
        ]);
        DB::table('splits')->insert([
            'name' => 'パイナップルジュース',
        ]);
        DB::table('splits')->insert([
            'name' => 'レッドブル',
        ]);
        DB::table('splits')->insert([
            'name' => 'お茶系',
        ]);
        DB::table('splits')->insert([
            'name' => '牛乳',
        ]);
    }
}
