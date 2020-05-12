<?php

namespace People10\Models;

class Employee extends \Illuminate\Database\Eloquent\Model
{
    protected $table = "employee";

    public $timestamps = false;

    protected $fillable = [
        'emp_id',
        'emp_name',
        'ip_address'
    ];

}
