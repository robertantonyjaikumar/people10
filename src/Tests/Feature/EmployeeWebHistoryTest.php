<?php

namespace People10\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use People10\Models\EmployeeWebHistory;
use Tests\TestCase;

class EmployeeWebHistoryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSetEmployeeWebHistory()
    {
        $this->artisan('employeeWebHistory:set 192.168.1.1 www.google.com')
            ->assertExitCode(0);

        $this->assertTrue(EmployeeWebHistory::whereIpAddress("192.168.1.1")->whereUrl("www.google.com")->count() > 0);
    }

    public function testGetEmployeeWebHistory() {
        $this->artisan('employeeWebHistory:get 192.168.1.1')
            ->assertExitCode(0);
    }

    public function testUnsetEmployeeWebHistory() {
        $this->artisan('employeeWebHistory:unset 192.168.1.1')
            ->assertExitCode(0);

        $this->assertTrue(EmployeeWebHistory::whereIpAddress("192.168.1.1")->whereUrl("www.google.com")->count() == 0);
    }
}
