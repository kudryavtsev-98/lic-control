<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeyFamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('key_families')->insert([
            'name' => 'Guardant',
            'import' => 'false',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('key_families')->insert([
            'name' => 'Sentiel',
            'import' => 'true',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
