<?php

use Illuminate\Database\Seeder;

class CreateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('creates')->insert([
            'user' => '1',
            'name' => 'ジントニック',
            'abv' => '1',
            'color' => '2',
            'split' => '3',
            'taste' => '1',
            'glass_type' => '2',
            'recipe' => '3',
            'flavor' => '4',
            'image_url' => '/photo.png',
            'detail' =>
                'ジン30mm
                トニックウォーターアップ
                ライム落とし',
            'created_at' => '2019-10-01 00:00:00',
            'updated_at' => '2019-10-01 00:00:00'
        ]);
    }
}
