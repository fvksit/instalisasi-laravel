<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('manufactures')->insert([
                    ['nama' => 'Toyota', 'alamat' => 'Japan'],
                    ['nama' => 'Honda', 'alamat' => 'Japan'],
                    ['nama' => 'Ford', 'alamat' => 'USA'],
                    ['nama' => 'Chevrolet', 'alamat' => 'USA'],
                    ['nama' => 'BMW', 'alamat' => 'Germany'],
                    ['nama' => 'Mercedes-Benz', 'alamat' => 'Germany'],
                    ['nama' => 'Audi', 'alamat' => 'Germany'],
                    ['nama' => 'Volkswagen', 'alamat' => 'Germany'],
                    ['nama' => 'Nissan', 'alamat' => 'Japan'],
                    ['nama' => 'Hyundai', 'alamat' => 'South Korea'],
                ]);
    }
}