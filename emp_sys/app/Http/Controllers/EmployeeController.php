<?php

namespace App\Http\Controllers;

use App\Mail\ThanksMail;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function test(Request $request)
    {
        $employee = Employee::find($id);

        Mail::to($employee->contactInfo->email)->send(new ThanksMail());
    }
}
