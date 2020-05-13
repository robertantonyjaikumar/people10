<?php

namespace People10\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use People10\Models\Employee;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSetEmployee()
    {
        $this->artisan('employee:set 1 Yazhini 192.168.1.1')
            ->assertExitCode(0);

        $this->assertTrue(Employee::whereIpAddress("192.168.1.1")->whereEmpName("Yazhini")->count() > 0);
    }

    public function testGetEmployee() {
        $this->artisan('employee:get 192.168.1.1')
            ->assertExitCode(0);
    }

    public function testUnsetEmployee() {
        $this->artisan('employee:unset 192.168.1.1')
            ->assertExitCode(0);

        $this->assertTrue(Employee::whereIpAddress("192.168.1.1")->whereEmpName("Yazhini")->count() == 0);
    }
}
