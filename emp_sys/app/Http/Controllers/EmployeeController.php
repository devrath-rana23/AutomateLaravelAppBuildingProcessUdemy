<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeTestRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * @param \App\Http\Requests\EmployeeTestRequest $request
     * @return \Illuminate\Http\Response
     */
    public function test(EmployeeTestRequest $request)
    {
        $employee = Employee::find($id);
    }
}
