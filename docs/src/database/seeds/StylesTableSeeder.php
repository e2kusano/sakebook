<?php

use Illuminate\Database\Seeder;

class StylesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('styles')->insert([
            'name' => 'かわいい',
            'directory' => 'cute'
        ]);
        DB::table('styles')->insert([
            'name' => 'かっこいい',
            'directory' => 'cool'
        ]);
        DB::table('styles')->insert([
            'name' => 'シンプル',
            'directory' => 'simple'
        ]);
        DB::table('styles')->insert([
            'name' => '豪華',
            'directory' => 'luxury'
        ]);
        DB::table('styles')->insert([
            'name' => '奇抜',
            'directory' => 'eccentric'
        ]);
    }
}
