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
            'name' => 'かわいい１',
            'abv' => '1',
            'color' => '2',
            'split' => '3',
            'taste' => '1',
            'glass_type' => '2',
            'recipe' => '3',
            'style' => '1',
            'image_url' => '/photo.png',
            'detail' =>
                '作り方
                作り方
                作り方',
            'created_at' => '2019-10-01 00:00:00',
            'updated_at' => '2019-10-01 00:00:00'
        ]);
        DB::table('creates')->insert([
            'user' => '1',
            'name' => 'かっこいい１',
            'abv' => '1',
            'color' => '2',
            'split' => '3',
            'taste' => '1',
            'glass_type' => '2',
            'recipe' => '3',
            'style' => '2',
            'image_url' => '/photo.png',
            'detail' =>
                '作り方
                作り方
                作り方',
            'created_at' => '2019-10-01 00:00:00',
            'updated_at' => '2019-10-01 00:00:00'
        ]);
        DB::table('creates')->insert([
            'user' => '1',
            'name' => 'シンプル１',
            'abv' => '1',
            'color' => '2',
            'split' => '3',
            'taste' => '1',
            'glass_type' => '2',
            'recipe' => '3',
            'style' => '3',
            'image_url' => '/photo.png',
            'detail' =>
                '作り方
                作り方
                作り方',
            'created_at' => '2019-10-01 00:00:00',
            'updated_at' => '2019-10-01 00:00:00'
        ]);
        DB::table('creates')->insert([
            'user' => '1',
            'name' => '豪華１',
            'abv' => '1',
            'color' => '2',
            'split' => '3',
            'taste' => '1',
            'glass_type' => '2',
            'recipe' => '3',
            'style' => '4',
            'image_url' => '/photo.png',
            'detail' =>
                '作り方
                作り方
                作り方',
            'created_at' => '2019-10-01 00:00:00',
            'updated_at' => '2019-10-01 00:00:00'
        ]);
        DB::table('creates')->insert([
            'user' => '1',
            'name' => '奇抜１',
            'abv' => '1',
            'color' => '2',
            'split' => '3',
            'taste' => '1',
            'glass_type' => '2',
            'recipe' => '3',
            'style' => '5',
            'image_url' => '/photo.png',
            'detail' =>
                '作り方
                作り方
                作り方',
            'created_at' => '2019-10-01 00:00:00',
            'updated_at' => '2019-10-01 00:00:00'
        ]);
        DB::table('creates')->insert([
            'user' => '1',
            'name' => 'かわいい２',
            'abv' => '1',
            'color' => '2',
            'split' => '3',
            'taste' => '1',
            'glass_type' => '2',
            'recipe' => '3',
            'style' => '1',
            'image_url' => '/photo.png',
            'detail' =>
                '作り方
                作り方
                作り方',
            'created_at' => '2019-10-01 00:00:00',
            'updated_at' => '2019-10-01 00:00:00'
        ]);
        DB::table('creates')->insert([
            'user' => '1',
            'name' => 'かっこいい２',
            'abv' => '1',
            'color' => '2',
            'split' => '3',
            'taste' => '1',
            'glass_type' => '2',
            'recipe' => '3',
            'style' => '2',
            'image_url' => '/photo.png',
            'detail' =>
                '作り方
                作り方
                作り方',
            'created_at' => '2019-10-01 00:00:00',
            'updated_at' => '2019-10-01 00:00:00'
        ]);
        DB::table('creates')->insert([
            'user' => '1',
            'name' => 'シンプル２',
            'abv' => '1',
            'color' => '2',
            'split' => '3',
            'taste' => '1',
            'glass_type' => '2',
            'recipe' => '3',
            'style' => '3',
            'image_url' => '/photo.png',
            'detail' =>
                '作り方
                作り方
                作り方',
            'created_at' => '2019-10-01 00:00:00',
            'updated_at' => '2019-10-01 00:00:00'
        ]);
        DB::table('creates')->insert([
            'user' => '1',
            'name' => '豪華２',
            'abv' => '1',
            'color' => '2',
            'split' => '3',
            'taste' => '1',
            'glass_type' => '2',
            'recipe' => '3',
            'style' => '4',
            'image_url' => '/photo.png',
            'detail' =>
                '作り方
                作り方
                作り方',
            'created_at' => '2019-10-01 00:00:00',
            'updated_at' => '2019-10-01 00:00:00'
        ]);
        DB::table('creates')->insert([
            'user' => '1',
            'name' => '奇抜２',
            'abv' => '1',
            'color' => '2',
            'split' => '3',
            'taste' => '1',
            'glass_type' => '2',
            'recipe' => '3',
            'style' => '5',
            'image_url' => '/photo.png',
            'detail' =>
                '作り方作り方作り方',
            'created_at' => '2019-10-01 00:00:00',
            'updated_at' => '2019-10-01 00:00:00'
        ]);
        $colors = [
            ['透明', 1],
            ['赤', 2],
            ['オレンジ', 3],
            ['黄色', 4],
            ['緑', 5],
            ['青', 6],
            ['ピンク', 7],
            ['紫', 8],
            ['琥珀色', 9],
            ['白', 10],
            ['黒', 11],
            ['茶色', 12]
        ];
        $count = 1;
        foreach ($colors as $color) {
            DB::table('creates')->insert([
                'user' => '1',
                'name' => $color[0] . '1',
                'abv' => '1',
                'color' => $color[1],
                'split' => '3',
                'taste' => '1',
                'glass_type' => '2',
                'recipe' => '3',
                'style' => '5',
                'image_url' => '/photo.png',
                'detail' =>
                    '作り方
                作り方
                作り方',
                'created_at' => '2019-10-0' . $count . ' 00:00:00',
                'updated_at' => '2019-10-0' . $count . ' 00:00:00'
            ]);
            $count++;
        }
        foreach ($colors as $color) {
            DB::table('creates')->insert([
                'user' => '1',
                'name' => $color[0] . '2',
                'abv' => '1',
                'color' => $color[1],
                'split' => '3',
                'taste' => '1',
                'glass_type' => '2',
                'recipe' => '3',
                'style' => '5',
                'image_url' => '/photo.png',
                'detail' =>
                    '作り方
                作り方
                作り方',
                'created_at' => '2019-10-0' . $count . ' 00:00:00',
                'updated_at' => '2019-10-0' . $count . ' 00:00:00'
            ]);
            $count++;
        }
        $splits = collect([
            ['name' => '炭酸水', 'id' => 1],
            ['name' => 'トニックウォーター', 'id' => 2],
            ['name' => 'ジンジャーエール', 'id' => 3],
            ['name' => 'コーラ', 'id' => 4],
            ['name' => 'オレンジジュース', 'id' => 5],
            ['name' => 'グレープフルーツジュース', 'id' => 6],
            ['name' => 'パイナップルジュース', 'id' => 7],
            ['name' => 'レッドブル', 'id' => 8],
            ['name' => 'お茶', 'id' => 9],
            ['name' => 'その他', 'id' => 10]
        ]);
        $count = 1;
        foreach ($splits as $split) {
            DB::table('creates')->insert([
                'user' => '1',
                'name' => $split['name'] . '１',
                'abv' => '1',
                'color' => '2',
                'split' => $split['id'],
                'taste' => '1',
                'glass_type' => '2',
                'recipe' => '3',
                'style' => '3',
                'image_url' => '/photo.png',
                'detail' =>
                    '作り方
                作り方
                作り方',
                'created_at' => '2019-10-0' . $count . ' 00:00:00',
                'updated_at' => '2019-10-0' . $count . ' 00:00:00'
            ]);
            $count++;
        }
        foreach ($splits as $split) {
            DB::table('creates')->insert([
                'user' => '1',
                'name' => $split['name'] . '２',
                'abv' => '1',
                'color' => '2',
                'split' => $split['id'],
                'taste' => '1',
                'glass_type' => '2',
                'recipe' => '3',
                'style' => '3',
                'image_url' => '/photo.png',
                'detail' =>
                    '作り方
                作り方
                作り方',
                'created_at' => '2019-10-0' . $count . ' 00:00:00',
                'updated_at' => '2019-10-0' . $count . ' 00:00:00'
            ]);
            $count++;
        }

    }
}
