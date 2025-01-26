<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CarModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = [
            ['brand_id' => 1, 'name' => 'Corolla'],
            ['brand_id' => 1, 'name' => 'Camry'],
            ['brand_id' => 2, 'name' => 'X5'],
            ['brand_id' => 2, 'name' => 'M3'],
            ['brand_id' => 3, 'name' => 'C-Class'],
            ['brand_id' => 3, 'name' => 'E-Class'],
            ['brand_id' => 4, 'name' => 'Focus'],
            ['brand_id' => 4, 'name' => 'Mustang'],
            ['brand_id' => 5, 'name' => 'Civic'],
            ['brand_id' => 5, 'name' => 'Accord'],
            ['brand_id' => 6, 'name' => 'A4'],
            ['brand_id' => 6, 'name' => 'Q7'],
            ['brand_id' => 7, 'name' => 'Golf'],
            ['brand_id' => 7, 'name' => 'Passat'],
            ['brand_id' => 8, 'name' => 'Altima'],
            ['brand_id' => 8, 'name' => 'Maxima'],
            ['brand_id' => 9, 'name' => 'Cruze'],
            ['brand_id' => 9, 'name' => 'Impala'],
            ['brand_id' => 10, 'name' => '911'],
            ['brand_id' => 10, 'name' => 'Cayenne'],
        ];

        foreach ($models as $model) {
            DB::table('car_models')->insert([
                'brand_id' => $model['brand_id'],
                'name' => $model['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
