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
            'directory' => 'low'
        ]);

        DB::table('abvs')->insert([
            'name' => 'まあまあ',
            'directory' => 'so-so'
        ]);
        DB::table('abvs')->insert([
            'name' => '強い',
            'directory' => 'high'
        ]);
    }
}
