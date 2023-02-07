<?php

namespace Tests\Feature\Http\Controllers;

use App\Events\FancyEvent;
use App\Models\Project;
use App\Notification\checkDetails;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Notification;
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
        $employee = Project::factory()->create();

        Notification::fake();
        Event::fake();

        $response = $this->get(route('employee.test'));

        $response->assertSessionHas('employee.name', $employee->name);

        Notification::assertSentTo($employee, checkDetails::class, function ($notification) use ($project) {
            return $notification->project->is($project);
        });
        Event::assertDispatched(FancyEvent::class, function ($event) use ($employee) {
            return $event->employee->is($employee);
        });
    }
}
