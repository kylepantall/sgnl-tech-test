<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=CardNumber>
 */
class CardNumberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rfid' => $this->faker->unique()->regexify('[A-Za-z0-9]{32}'),
            'employee_id' => Employee::factory(),
        ];
    }
}
