<?php
namespace People10;

use Illuminate\Support\ServiceProvider;
use People10\Commands\EmployeeGetConsole;
use People10\Commands\EmployeeSetConsole;
use People10\Commands\EmployeeUnsetConsole;
use People10\Commands\EmployeeWebHistoryGetConsole;
use People10\Commands\EmployeeWebHistorySetConsole;
use People10\Commands\EmployeeWebHistoryUnsetConsole;


class People10ServieProvider extends ServiceProvider
{
    public function boot() {
        include __DIR__ . '/routes.php';
        $this->publishes([__DIR__ . '/Migration' => base_path('database/migrations')], 'db');
    }

    public function register() {
        $this->app->make('People10\Controllers\EmployeeController');
        $this->app->make('People10\Controllers\EmployeeWebHistoryController');
        $this->commands([
            EmployeeSetConsole::class,
            EmployeeGetConsole::class,
            EmployeeUnsetConsole::class,
            EmployeeWebHistoryGetConsole::class,
            EmployeeWebHistorySetConsole::class,
            EmployeeWebHistoryUnsetConsole::class,
        ]);
    }
}
