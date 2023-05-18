<?php

namespace Tests\Feature;

use App\Models\CardNumber;
use App\Models\Department;
use App\Models\Employee;
use Database\Seeders\DatabaseSeeder;
use Database\Seeders\EmployeeSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EndpointTest extends TestCase
{
    use RefreshDatabase;

    public $seeder = DatabaseSeeder::class;

    public function test_endpoint_returns_empty_when_no_card_numbers_exist(): void
    {
        $this->get('/some/endpoint?cn=12345678901234567890123456789012')
            ->assertJson([
                'full_name' => null,
                'departments' => [],
            ]);
    }

    public function test_endpoint_throws_invalid_response_when_missing_query(): void
    {
        $this->get('/some/endpoint')
            ->assertInvalid(['cn' => 'The cn field is required.']);
    }

    public function test_endpoint_returns_employee_full_name_and_departments(): void
    {
        $this->get("/some/endpoint?cn=142594708f3a5a3ac2980914a0fc954f")
            ->assertJson([
                'full_name' => 'Julius Caesar',
                'departments' => ['director', 'development'],
            ]);
    }

    public function test_endpoint_returns_employee_full_name_and_departments_when_multiple_card_numbers_exist(): void
    {
        $this->get("/some/endpoint?cn=142594708f3a5a3ac2980914a0fc954f")
            ->assertJson([
                'full_name' => 'Julius Caesar',
                'departments' => ['director', 'development'],
            ]);
    }

    public function test_endpoint_does_not_return_soft_deleted_department()
    {
        $randomDepartment = Department::find(1)->first();
        $employee = $randomDepartment->employees()->random();
    }
}
