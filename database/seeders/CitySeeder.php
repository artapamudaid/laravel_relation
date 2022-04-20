<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'name' => 'Kediri'
        ]);
        DB::table('cities')->insert([
            'name' => 'Malang'
        ]);
        DB::table('cities')->insert([
            'name' => 'Surabaya'
        ]);
    }
}
