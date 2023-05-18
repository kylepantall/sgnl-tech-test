<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departmentNames = [
            'Accounting',
            'Administration',
            'Customer Service',
            'Engineering',
            'Human Resources',
            'Information Technology',
            'Legal',
            'Marketing',
            'Production',
            'Purchasing',
            'Research and Development',
            'Sales',
        ];

        return [
            'name' => $this->faker->unique()->randomElement($departmentNames),
        ];
    }
}
