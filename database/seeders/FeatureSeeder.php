<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
                    ['name' => 'Leather Seats'],
                    ['name' => 'Sunroof'],
                    ['name' => 'Bluetooth Connectivity'],
                    ['name' => 'Backup Camera'],
                    ['name' => 'Heated Seats'],
                    ['name' => 'Keyless Entry'],
                    ['name' => 'Navigation System'],
                    ['name' => 'LED Headlights'],
                    ['name' => 'Parking Sensors'],
                    ['name' => 'Remote Start'],
                ]);
    }
}