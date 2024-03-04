<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hosts')->insert([
            'name' => 'server2001.dom.ru',
            'ip' => '127.0.0.1',
            'type_id' => 'virtual',
            'role_id' => 'server',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('hosts')->insert([
            'name' => 'local1001.dom.ru',
            'ip' => '127.0.0.2',
            'type_id' => 'physical',
            'role_id' => 'local',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('hosts')->insert([
            'name' => 'local1002.dom.ru',
            'ip' => '127.0.0.3',
            'type_id' => 'physical',
            'role_id' => 'local',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
