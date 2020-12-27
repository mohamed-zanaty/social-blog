<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'name' => 'like',
            'description' => 'stop like',
            'value' => 1,
        ]);
        DB::table('settings')->insert([
            'name' => 'create',
            'description' => 'stop posts',
            'value' => 1,
        ]);
        DB::table('settings')->insert([
            'name' => 'logo',
            'description' => 'logo',
            'value' => '5dmatk',
        ]);

    }
}
