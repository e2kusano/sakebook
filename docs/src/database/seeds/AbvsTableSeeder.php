<?php

use Illuminate\Database\Seeder;

class AbvsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abvs')->insert([
            'name' => '弱い',
        ]);
        DB::table('abvs')->insert([
            'name' => '普通',
        ]);
        DB::table('abvs')->insert([
            'name' => '強い',
        ]);
        DB::table('abvs')->insert([
            'name' => 'フィーバー',
        ]);
    }
}
