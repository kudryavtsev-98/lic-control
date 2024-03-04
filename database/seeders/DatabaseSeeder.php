<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            WorkGroupSeeder::class,
            VendorSeeder::class,
            DealerSeeder::class,
            ProductSeeder::class,
            HostTypeSeeder::class,
            HostRoleSeeder::class,
            HostSeeder::class,
            KeyTypeSeeder::class,
            KeyFamilySeeder::class,
            KeyModelSeeder::class,
            KeySeeder::class,
            LicenseTypeSeeder::class,
            LicenseMetricSeeder::class
        ]);
    }
}
