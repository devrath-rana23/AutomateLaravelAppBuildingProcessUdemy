<?php

namespace Tests\Feature\Http\Controllers;

use App\Mail\ThanksMail;
use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
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

        Mail::fake();

        $response = $this->get(route('employee.test'));

        Mail::assertSent(ThanksMail::class, function ($mail) {
            return $mail->hasTo($employee->contactInfo->email);
        });
    }
}
