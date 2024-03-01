<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendors')->insert([
            'name' => 'Вендор 1',
            'agent_name' => 'Агент 1',
            'agent_email' => 'agent2@mail.ru',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('vendors')->insert([
            'name' => 'Вендор 2',
            'agent_name' => 'Агент 2',
            'agent_email' => 'agent2@mail.ru',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('vendors')->insert([
            'name' => 'Вендор 4',
            'agent_name' => 'Агент 4',
            'agent_email' => 'agent4@mail.ru',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('vendors')->insert([
            'name' => 'Вендор 3',
            'agent_name' => 'Агент 3',
            'agent_email' => 'agent3@mail.ru',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
