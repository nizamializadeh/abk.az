<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'name' => 'Azerbaijan',
            'code' =>'az',
            'isVisible' => 1,
        ]);
        DB::table('languages')->insert([
            'name' => 'English',
            'code' =>'en',
            'isVisible' => 1,
        ]);
        DB::table('languages')->insert([
            'name' => 'Russian',
            'code' =>'ru',
            'isVisible' => 1,
        ]);
    }
}
