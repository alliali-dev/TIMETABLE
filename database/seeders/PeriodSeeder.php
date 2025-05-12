<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Create periods
        \App\Models\Period::insert([
            [
                'name' => '1er Trimestre',
                'year_id' => 1,
                'start_date' => now(),
                'end_date' => now()->addMonth(3),
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => '2ème Trimestre',
                'year_id' => 1,
                'start_date' => now()->addMonth(4),
                'end_date' => now()->addMonth(7),
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => '3ème Trimestre',
                'year_id' => 1,
                'start_date' => now()->addMonth(8),
                'end_date' => now()->addMonth(11),
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => '1er Semestre',
                'year_id' => 2,
                'start_date' => now(),
                'end_date' => now()->addMonth(6),
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => '2ème Semestre',
                'year_id' => 2,
                'start_date' => now()->addMonth(7),
                'end_date' => now()->addMonth(12),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
