<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeyModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('key_models')->insert([
            'name' => 'Guardant Sign Net',
            'key_family_id' => '1',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('key_models')->insert([
            'name' => 'Guardant Sign',
            'key_family_id' => '1',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('key_models')->insert([
            'name' => 'Sentiel HL Pro',
            'key_family_id' => '2',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
