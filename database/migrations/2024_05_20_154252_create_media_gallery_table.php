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
        CREATE TABLE media_gallery (
            id SERIAL PRIMARY KEY,
            car_id BIGINT NOT NULL,  -- UNSIGNED kaldırıldı
            media VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            CONSTRAINT fk_car_id FOREIGN KEY (car_id) REFERENCES cars(id) ON DELETE CASCADE
        );
    ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('
        ALTER TABLE media_gallery DROP CONSTRAINT IF EXISTS fk_car_id;
        DROP TABLE IF EXISTS media_gallery;
    ');
    }
};
