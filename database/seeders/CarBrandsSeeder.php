<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CarBrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['id' => 1, 'name' => 'Toyota', 'photo' => 'toyota.jpg'],
            ['id' => 2, 'name' => 'BMW', 'photo' => 'bmw.jpg'],
            ['id' => 3, 'name' => 'Mercedes', 'photo' => 'mercedes.jpg'],
            ['id' => 4, 'name' => 'Ford', 'photo' => 'ford.jpg'],
            ['id' => 5, 'name' => 'Honda', 'photo' => 'honda.jpg'],
            ['id' => 6, 'name' => 'Audi', 'photo' => 'audi.jpg'],
            ['id' => 7, 'name' => 'Volkswagen', 'photo' => 'volkswagen.jpg'],
            ['id' => 8, 'name' => 'Nissan', 'photo' => 'nissan.jpg'],
            ['id' => 9, 'name' => 'Chevrolet', 'photo' => 'chevrolet.jpg'],
            ['id' => 10, 'name' => 'Porsche', 'photo' => 'porsche.jpg'],
        ];

        foreach ($brands as $brand) {
            DB::table('car_brands')->insert([
                'id' => $brand['id'],
                'name' => $brand['name'],
                'photo' => $brand['photo'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
