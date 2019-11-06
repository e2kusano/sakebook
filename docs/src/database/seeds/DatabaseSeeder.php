<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AbvsTableSeeder::class);
        $this->call(BasesTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(SplitsTableSeeder::class);
        $this->call(StylesTableSeeder::class);
        $this->call(CreateTableSeeder::class);

    }
}
