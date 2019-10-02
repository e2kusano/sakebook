<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            'name' => 'ビルド',
        ]);
        DB::table('recipes')->insert([
            'name' => 'ステア',
        ]);
        DB::table('recipes')->insert([
            'name' => 'シェーク',
        ]);
        DB::table('recipes')->insert([
            'name' => 'ブレンド',
        ]);
    }
}
