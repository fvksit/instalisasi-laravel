<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
                    ['cars_id' => 11, 'nilai' => 5, 'nama' => 'John Doe', 'isi' => 'Great car with excellent features.'],
                    ['cars_id' => 12, 'nilai' => 4, 'nama' => 'Jane Smith', 'isi' => 'Good value for money, but not as fast as I expected.'],
                    ['cars_id' => 13, 'nilai' => 5, 'nama' => 'Michael Brown', 'isi' => 'Amazing performance and style!'],
                    ['cars_id' => 14, 'nilai' => 4, 'nama' => 'Sarah Johnson', 'isi' => 'Very comfortable, but a bit expensive.'],
                    ['cars_id' => 15, 'nilai' => 5, 'nama' => 'David Lee', 'isi' => 'Luxury car with top-notch features.'],
                    ['cars_id' => 16, 'nilai' => 5, 'nama' => 'Emma White', 'isi' => 'Superb driving experience and comfort.'],
                    ['cars_id' => 17, 'nilai' => 4, 'nama' => 'Chris Davis', 'isi' => 'Nice car, but the interior could be better.'],
                    ['cars_id' => 18, 'nilai' => 4, 'nama' => 'Liam Harris', 'isi' => 'Affordable and practical, but not very sporty.'],
                    ['cars_id' => 19, 'nilai' => 5, 'nama' => 'Olivia Clark', 'isi' => 'Smooth drive and excellent features!'],
                    ['cars_id' => 20, 'nilai' => 3, 'nama' => 'Lucas Walker', 'isi' => 'Decent car, but not very powerful.'],
                ]);
    }
}