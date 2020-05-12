<?php

namespace People10\Commands;

class EmployeeSetConsole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'employee:set {emp_id} {emp_name} {ip_address}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Employee Set | {emp_id} {emp_name} {ip_address} are required | Command used to Set Employee';


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info(
            $this->client->post(route("employee.set"), [
                    'form_params' => [
                        "emp_id" => $this->argument('emp_id'),
                        "emp_name" => $this->argument('emp_name'),
                        "ip_address" => $this->argument('ip_address'),
                    ]
            ])->getBody()
        );
    }
}
