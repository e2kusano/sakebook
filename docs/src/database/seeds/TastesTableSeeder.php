<?php

use Illuminate\Database\Seeder;

class TastesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tastes')->insert([
            'name' => '甘口',
        ]);
        DB::table('tastes')->insert([
            'name' => '中辛',
        ]);
        DB::table('tastes')->insert([
            'name' => '辛口',
        ]);
    }
}
