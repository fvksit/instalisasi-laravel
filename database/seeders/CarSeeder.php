<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
                    ['nama' => 'Toyota Camry', 'jenis' => 'Sedan', 'harga' => 300000000, 'tanggal_pembuatan' => Carbon::create('2021', '01', '01')->format('Y-m-d'), 'manufactures_id' => 1],
                    ['nama' => 'Honda Accord', 'jenis' => 'Sedan', 'harga' => 350000000, 'tanggal_pembuatan' => Carbon::create('2020', '05', '20')->format('Y-m-d'), 'manufactures_id' => 2],
                    ['nama' => 'Ford Mustang', 'jenis' => 'Coupe', 'harga' => 500000000, 'tanggal_pembuatan' => Carbon::create('2019', '03', '15')->format('Y-m-d'), 'manufactures_id' => 3],
                    ['nama' => 'Chevrolet Camaro', 'jenis' => 'Coupe', 'harga' => 450000000, 'tanggal_pembuatan' => Carbon::create('2018', '07', '10')->format('Y-m-d'), 'manufactures_id' => 4],
                    ['nama' => 'BMW 3 Series', 'jenis' => 'Sedan', 'harga' => 600000000, 'tanggal_pembuatan' => Carbon::create('2021', '02', '01')->format('Y-m-d'), 'manufactures_id' => 5],
                    ['nama' => 'Mercedes-Benz C-Class', 'jenis' => 'Sedan', 'harga' => 700000000, 'tanggal_pembuatan' => Carbon::create('2021', '04', '05')->format('Y-m-d'), 'manufactures_id' => 6],
                    ['nama' => 'Audi A4', 'jenis' => 'Sedan', 'harga' => 650000000, 'tanggal_pembuatan' => Carbon::create('2020', '06', '25')->format('Y-m-d'), 'manufactures_id' => 7],
                    ['nama' => 'Volkswagen Golf', 'jenis' => 'Hatchback', 'harga' => 400000000, 'tanggal_pembuatan' => Carbon::create('2019', '11', '11')->format('Y-m-d'), 'manufactures_id' => 8],
                    ['nama' => 'Nissan Altima', 'jenis' => 'Sedan', 'harga' => 350000000, 'tanggal_pembuatan' => Carbon::create('2018', '09', '30')->format('Y-m-d'), 'manufactures_id' => 9],
                    ['nama' => 'Hyundai Elantra', 'jenis' => 'Sedan', 'harga' => 320000000, 'tanggal_pembuatan' => Carbon::create('2021', '03', '18')->format('Y-m-d'), 'manufactures_id' => 10],
                ]);
    }
}
