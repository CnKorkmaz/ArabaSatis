<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('
        CREATE TABLE car_models (
            id SERIAL PRIMARY KEY,
            brand_id BIGINT NOT NULL,
            name VARCHAR(255) NOT NULL,
            created_at TIMESTAMP NULL DEFAULT NULL,
            updated_at TIMESTAMP NULL DEFAULT NULL,
            CONSTRAINT fk_brand_id FOREIGN KEY (brand_id) REFERENCES car_brands(id) ON DELETE CASCADE
        );
    ');
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('
            ALTER TABLE car_models DROP CONSTRAINT IF EXISTS car_models_brand_id_foreign;
            DROP TABLE IF EXISTS car_models;
        ');
    }
};
