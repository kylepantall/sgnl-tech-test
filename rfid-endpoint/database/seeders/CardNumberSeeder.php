<?php

namespace Database\Seeders;

use App\Models\CardNumber;
use App\Models\Department;
use App\Models\DepartmentEmployee;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CardNumber::factory()->count(10)->create();

        $employee = Employee::factory()->createOne([
            'full_name' => 'Julius Caesar',
        ]);

        CardNumber::factory()->createOne([
            'rfid' => '142594708f3a5a3ac2980914a0fc954f',
            'employee_id' => $employee->id,
        ]);

        $departments = Department::factory()->createMany([
            ['name' => 'director'],
            ['name' => 'development']
        ]);

        $employee->departments()->attach($departments->pluck('id'));

        $this->command->info('Card numbers seeded!');
    }
}
