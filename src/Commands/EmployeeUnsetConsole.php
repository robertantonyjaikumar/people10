<?php

namespace People10\Commands;


class EmployeeUnsetConsole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'employee:unset {ip_address}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Employee Unset | {ip_address} is required | This command will delete record based on ip_address';


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
        $this->info($this->client->post(route("employee.unset", $this->argument('ip_address')))->getBody() . " deleted");
    }
}
