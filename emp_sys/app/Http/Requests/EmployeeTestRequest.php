<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeTestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'identification' => ['required', 'string', 'max:100'],
            'birth' => ['required'],
            'salary' => ['required', 'integer', 'gt:0'],
            'martial_status' => ['required', 'in:single,married,divorced'],
            'bonus' => ['numeric', 'between:-999999.99,999999.99'],
            'order' => ['required', 'integer', 'gt:0'],
            'department_id' => ['required', 'integer', 'exists:departments,id'],
            'softdeletestz' => ['required'],
        ];
    }
}
