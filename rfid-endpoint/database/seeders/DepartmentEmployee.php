<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentEmployee extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = Employee::all()->except(1);
        $departments = Department::all();

        foreach ($employees as $employee) {
            if ($employee->full_name === 'Julius Caesar') {
                continue;
            }

            $employee->departments()->attach(
                $departments->random(rand(1, $departments->count()))
                    ->pluck('id')
            );

            $this->command->info(
                "Attached {$employee->departments->count()} departments to {$employee->full_name}"
            );
        }
    }
}
