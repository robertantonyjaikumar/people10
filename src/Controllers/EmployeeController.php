<?php

namespace People10\Controllers;

use App\Http\Controllers\Controller;
use People10\Models\Employee;

class EmployeeController extends Controller
{
    public function get($ip_address) {
        return Employee::whereIpAddress($ip_address)->get();
    }

    public function set() {
        return Employee::create([
                "emp_id" => request('emp_id'),
                "emp_name" => request('emp_name'),
                "ip_address" => request('ip_address'),
        ]);
    }

    public function unset($ip_address) {
        return Employee::whereIpAddress($ip_address)->delete();
    }
}
