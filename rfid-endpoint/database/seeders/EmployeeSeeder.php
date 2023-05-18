<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Employee::factory()->create([
            'id' => 1,
            'full_name' => 'John Doe',
        ]);

        \App\Models\Employee::factory()->create([
            'id' => 2,
            'full_name' => 'Jane Doe',
        ]);

        $this->command->info('Employees seeded!');
    }
}
