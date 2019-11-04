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
            'name' => '〜３０',
            'directory' => 'under30'
        ]);
        DB::table('abvs')->insert([
            'name' => '３１〜４０',
            'directory' => '31-40'
        ]);
        DB::table('abvs')->insert([
            'name' => '４１〜５０',
            'directory' => '41-50'
        ]);
        DB::table('abvs')->insert([
            'name' => '５１〜６０',
            'directory' => '51-60'
        ]);
        DB::table('abvs')->insert([
            'name' => '６０〜',
            'directory' => 'over60'
        ]);
    }
}
