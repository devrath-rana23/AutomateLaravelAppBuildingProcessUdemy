<?php

namespace Tests\Feature\Http\Controllers;

use App\Events\FancyEvent;
use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
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
    public function test_behaves_as_expected()
    {
        $employee = Employee::factory()->create();

        Event::fake();

        $response = $this->get(route('employee.test'));

        $response->assertSessionHas('employee.name', $employee->name);

        Event::assertDispatched(FancyEvent::class, function ($event) use ($employee) {
            return $event->employee->is($employee);
        });
    }
}
