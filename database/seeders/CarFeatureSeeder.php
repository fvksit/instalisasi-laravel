<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars_features')->insert([
                    ['cars_id' => 11, 'features_id' => 1],
                    ['cars_id' => 11, 'features_id' => 2],
                    ['cars_id' => 12, 'features_id' => 3],
                    ['cars_id' => 13, 'features_id' => 4],
                    ['cars_id' => 14, 'features_id' => 5],
                    ['cars_id' => 15, 'features_id' => 6],
                    ['cars_id' => 16, 'features_id' => 7],
                    ['cars_id' => 17, 'features_id' => 8],
                    ['cars_id' => 18, 'features_id' => 9],
                    ['cars_id' => 19, 'features_id' => 10],
                ]);
    }
}