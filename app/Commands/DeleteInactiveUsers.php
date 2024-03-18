<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use App\Controllers\BatchController;

class DeleteInactiveUsers extends BaseCommand
{
    protected $group       = 'Batch';
    protected $name        = 'batch:deleteinactive';
    protected $description = 'Supprime les utilisateurs inactifs depuis 36 mois.';

    public function run(array $params)
    {
        $controller = new BatchController();
        $controller->deleteInactiveUsers();

        CLI::write('Les utilisateurs inactifs ont été supprimés.', 'green');
    }
}