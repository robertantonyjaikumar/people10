<?php

namespace People10\Commands;

class EmployeeWebHistoryGetConsole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'employeeWebHistory:get {ip_address}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Employee Web History get | {ip_address} is required | This Command fetch Employee details based on the ip_address';


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
            $this->client->get(route("employeeWebHistory.get", $this->argument('ip_address')))->getBody()
        );
    }
}
