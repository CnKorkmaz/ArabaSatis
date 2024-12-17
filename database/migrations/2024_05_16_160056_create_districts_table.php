<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('
        CREATE TABLE districts (
            id SERIAL PRIMARY KEY,
            city_id BIGINT NOT NULL,
            name VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            CONSTRAINT fk_city_id FOREIGN KEY (city_id) REFERENCES cities(id) ON DELETE CASCADE
        );
    ');
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('
        ALTER TABLE districts DROP CONSTRAINT IF EXISTS fk_city_id;
        DROP TABLE IF EXISTS districts;
    ');
    }

};
