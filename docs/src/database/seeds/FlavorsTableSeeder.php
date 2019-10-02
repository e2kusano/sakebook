<?php

use Illuminate\Database\Seeder;

class FlavorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flavors')->insert([
            'name' => '甘い',
        ]);
        DB::table('flavors')->insert([
            'name' => 'スッキリ',
        ]);
        DB::table('flavors')->insert([
            'name' => '柑橘系',
        ]);
        DB::table('flavors')->insert([
            'name' => 'フルーティー',
        ]);
    }
}
