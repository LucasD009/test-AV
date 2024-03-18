<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class BatchController extends BaseController {

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel(); 
    }

    public function deleteInactiveUsers()
    {
        $months = 36;
        $this->userModel->deleteInactiveUsers($months);
    }
}
