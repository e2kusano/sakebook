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
                'base' => '1',
                'color' => $color[1],
                'split' => '3',
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
                'base' => '1',
                'color' => $color[1],
                'split' => '3',
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
            ['name' => 'unused', 'id' => 1],
            ['name' => '炭酸水', 'id' => 2],
            ['name' => 'トニックウォーター', 'id' => 3],
            ['name' => 'ジンジャーエール', 'id' => 4],
            ['name' => 'コーラ', 'id' => 5],
            ['name' => 'オレンジジュース', 'id' => 6],
            ['name' => 'グレープフルーツジュース', 'id' => 7],
            ['name' => 'パイナップルジュース', 'id' => 8],
            ['name' => 'レッドブル', 'id' => 9],
            ['name' => 'お茶', 'id' => 10],
            ['name' => '牛乳', 'id' => 11],
            ['name' => 'その他', 'id' => 12],
        ]);
        $count = 1;
        foreach ($splits as $split) {
            DB::table('creates')->insert([
                'user' => '1',
                'name' => $split['name'] . '１',
                'abv' => '1',
                'base' => '1',
                'color' => '2',
                'split' => $split['id'],
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
                'base' => '1',
                'color' => '2',
                'split' => $split['id'],
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
        $abvs = [
            ['弱い', 1],
            ['まあまあ', 2],
            ['強い', 3],

        ];
        $count = 1;
        foreach ($abvs as $abv) {
            DB::table('creates')->insert([
                'user' => '1',
                'name' => $abv[0] . '（１）',
                'abv' => $abv[1],
                'base' => '1',
                'color' => '2',
                'split' => 1,
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
        foreach ($abvs as $abv) {
            DB::table('creates')->insert([
                'user' => '1',
                'name' => $abv[0] . '（２）',
                'abv' => $abv[1],
                'base' => '1',
                'color' => '2',
                'split' => '1',
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
        $bases = [
            ['テキーラ', 1],
            ['イエガー', 2],
            ['コカレロ', 3],
            ['ジン', 4],
            ['ウォッカ', 5],
            ['ラム', 6],
            ['ウィスキー', 7],
            ['リキュール', 8],
            ['その他', 9]
        ];
        $count = 1;
        foreach ($bases as $base) {
            DB::table('creates')->insert([
                'user' => '1',
                'name' => $base[0] . '１',
                'abv' => '1',
                'base' => $base[1],
                'color' => '2',
                'split' => 1,
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
        foreach ($bases as $base) {
            DB::table('creates')->insert([
                'user' => '1',
                'name' => $base[0] . '２',
                'abv' => '1',
                'base' => $base[1],
                'color' => '2',
                'split' => 1,
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
        $styles = [
            ['かわいい', 1],
            ['かっこいい', 2],
            ['シンプル', 3],
            ['豪華', 4],
            ['奇抜', 5]
        ];
        $count = 1;
        foreach ($styles as $style) {
            DB::table('creates')->insert([
                'user' => '1',
                'name' => $style[0] . '1',
                'abv' => '1',
                'base' => '1',
                'color' => $style[1],
                'split' => '3',
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
        foreach ($styles as $style) {
            DB::table('creates')->insert([
                'user' => '1',
                'name' => $style[0] . '1',
                'abv' => '1',
                'base' => '1',
                'color' => $style[1],
                'split' => '3',
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
    }
}
