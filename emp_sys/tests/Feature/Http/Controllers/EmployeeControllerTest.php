<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\EmployeeController
 */
class EmployeeControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function test_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EmployeeController::class,
            'test',
            \App\Http\Requests\EmployeeTestRequest::class
        );
    }

    /**
     * @test
     */
    public function test_behaves_as_expected()
    {
        $employee = Employee::factory()->create();
        $name = $this->faker->name;
        $identification = $this->faker->word;
        $birth = $this->faker->dateTime();
        $salary = $this->faker->randomNumber();
        $martial_status = $this->faker->randomElement(/** enum_attributes **/);
        $order = $this->faker->randomNumber();
        $department = Department::factory()->create();

        $response = $this->get(route('employee.test'), [
            'name' => $name,
            'identification' => $identification,
            'birth' => $birth,
            'salary' => $salary,
            'martial_status' => $martial_status,
            'order' => $order,
            'department_id' => $department->id,
        ]);
    }
}
