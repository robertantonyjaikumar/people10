<?php

namespace People10\Commands;

class EmployeeWebHistorySetConsole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'employeeWebHistory:set {ip_address} {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Employee Web History Set | {ip_address} {url} are required | Command used to Set Employee';


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
            $this->client->post(route("employeeWebHistory.set"), [
                    'form_params' => [
                        "ip_address" => $this->argument('ip_address'),
                        "url" => $this->argument('url'),
                    ]
            ])->getBody()
        );
    }
}
