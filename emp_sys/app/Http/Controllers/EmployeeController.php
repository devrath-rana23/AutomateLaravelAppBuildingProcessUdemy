<?php

namespace App\Http\Controllers;

use App\Events\FancyEvent;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Notification\checkDetails;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function test(Request $request)
    {
        $project = Project::find($request->id);
        $employee = Employee::find(1);

        $employee->notify(new checkDetails($project));

        $request->session()->flash('employee.name', $employee->name);

        event(new FancyEvent($employee));
    }
}
