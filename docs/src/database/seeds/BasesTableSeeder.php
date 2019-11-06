<?php

use Illuminate\Database\Seeder;

class BasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bases')->insert([
            'name' => 'テキーラ',
            'directory' => 'tequila'
        ]);
        DB::table('bases')->insert([
            'name' => 'イエガー',
            'directory' => 'jager'
        ]);
        DB::table('bases')->insert([
            'name' => 'コカレロ',
            'directory' => 'cocalero'
        ]);
        DB::table('bases')->insert([
            'name' => 'ジン',
            'directory' => 'gin'
        ]);
        DB::table('bases')->insert([
            'name' => 'ウォッカ',
            'directory' => 'vodka'
        ]);
        DB::table('bases')->insert([
            'name' => 'ラム',
            'directory' => 'rum'
        ]);
        DB::table('bases')->insert([
            'name' => 'ウィスキー',
            'directory' => 'whiskey'
        ]);
        DB::table('bases')->insert([
            'name' => 'リキュール',
            'directory' => 'liqueur'
        ]);
        DB::table('bases')->insert([
            'name' => 'その他',
            'directory' => 'other'
        ]);
    }
}
