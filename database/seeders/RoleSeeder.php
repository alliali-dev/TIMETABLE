<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        Role::insert([
            [
                'name' => 'Super Admin',
                'description' => 'Super administrator role with all permissions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'admin',
                'description' => 'Administrator role with full access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // [
            //     'name' => 'Responsable',
            //     'description' => 'Manager role with access to management resources',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            [
                'name' => 'Directeur',
                'description' => 'Director role with access to all resources',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // [
            //     'name' => 'Secretaire',
            //     'description' => 'Secretary role with access to administrative resources',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            [
                'name' => 'Gestionnaire',
                'description' => 'Manager role with access to management resources',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // [
            //     'name' => 'Coordinateur',
            //     'description' => 'Coordinator role with access to coordination resources',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],

            // [
            //     'name' => 'Enseignant Stagiaire',
            //     'description' => 'Intern teacher role with limited access',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'name' => 'Enseignant Vacataire',
            //     'description' => 'Part-time teacher role with limited access',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'name' => 'Enseignant Permanent',
            //     'description' => 'Permanent teacher role with access to all teaching resources',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            [
                'name' => 'Enseignant',
                'description' => 'Teacher role with access to teaching resources',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Enseignant Associé',
                'description' => 'Associate teacher role with access to teaching resources',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Parent',
                'description' => 'Regular user role with limited access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Employer',
                'description' => 'Employer role with access to job resources',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Etudiant',
                'description' => 'Student role with access to student resources',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
