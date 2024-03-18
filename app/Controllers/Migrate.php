<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\Migration;

class Migrate extends BaseController
{
    public function index()
    {
        $migrate = \Config\Services::migrations();

        try {
            $migrate->latest();
            echo "Migration effectuée avec succès.";
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
}
