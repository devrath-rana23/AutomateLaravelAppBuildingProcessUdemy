<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\EmployeeController
 */
class EmployeeControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function test_responds_with()
    {
        $employee = Employee::factory()->create();

        $response = $this->get(route('employee.test'));

        $response->assertOk();
        $response->assertJson($employee);
    }
}
