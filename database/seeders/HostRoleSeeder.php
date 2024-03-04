<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HostRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('host_roles')->insert([
            'id' => 'server',
            'name' => 'Сервер',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('host_roles')->insert([
            'id' => 'local',
            'name' => 'Рабочая станция',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
