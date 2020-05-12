<?php


namespace People10\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command as cmd;

class Command extends cmd
{
    public $client;

    public function __construct()
    {
        parent::__construct();
        $this->client = new Client();
    }
}
