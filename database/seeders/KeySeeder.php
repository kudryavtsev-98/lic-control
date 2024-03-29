<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keys')->insert([
            'name' => 'key 1',

            'type_id' => 'physical',
            'key_model_id' => '1',

            'host_id' => '1',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('keys')->insert([
            'name' => 'key 2',

            'type_id' => 'virtual',
            'key_model_id' => '2',

            'host_id' => '2',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('keys')->insert([
            'name' => 'key 3',

            'type_id' => 'physical',
            'key_model_id' => '3',

            'host_id' => '3',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
