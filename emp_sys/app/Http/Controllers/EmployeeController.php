<?php

namespace App\Http\Controllers;

use App\Events\FancyEvent;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function test(Request $request)
    {
        $employee = Employee::find($id);

        $request->session()->flash('employee.name', $employee->name);

        event(new FancyEvent($employee));
    }
}
