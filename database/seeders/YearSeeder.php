<?php

namespace Database\Seeders;

use App\Models\Year;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Create years
        Year::insert([
            [
                'name' => '2023-2024',
                'start_date' => now(),
                'end_date' => now()->addYear(),
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '2024-2025',
                'start_date' => now()->addYear(),
                'end_date' => now()->addYears(2),
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '2025-2026',
                'start_date' => now()->addYears(2),
                'end_date' => now()->addYears(3),
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '2026-2027',
                'start_date' => now()->addYears(3),
                'end_date' => now()->addYears(4),
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
