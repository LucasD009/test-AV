<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Commands extends BaseConfig
{
    public $commands = [
        'App\Commands\DeleteInactiveUsers' => 'batch:deleteinactive',
];
}