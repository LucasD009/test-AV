<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class UserController extends BaseController {

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel(); 
    }

    public function createUser()
    {
        $data = $this->request->getPost();
        if($this->userModel->createUser($data)) {
            echo "Utilisateur créé avec succès.";
        } else {
            echo "Erreur lors de la création de l'utilisateur.";
        }
    }

    public function getAllUsers()
    {
        $users = $this->userModel->getAllUsers();
    
        if ($users) {

            $data = [
                'users' => $users,
                'pager' => $$this->userModel->pager,
            ];
            return $this->response->setJSON($data);
        } else {
            return $this->response->setStatusCode(404, 'Utilisateurs non trouvés');
        }
    }

    public function getUserById($id)
    {
        $user = $this->userModel->getUserById($id);
        if ($user) {
            return $this->response->setJSON($user);
        } else {
            return $this->response->setStatusCode(404, 'Utilisateur non trouvé');
        }
    }

    public function updateUser($id)
    {
        $data = $this->request->getRawInput(); 
        if ($this->userModel->updateUser($id, $data)) {
            echo "Utilisateur mis à jour avec succès.";
        } else {
            echo "Erreur lors de la mise à jour de l'utilisateur.";
        }
    }

    public function deleteUser($id)
    {
        if ($this->userModel->deleteUser($id)) {
            echo "Utilisateur supprimé avec succès.";
        } else {
            echo "Erreur lors de la suppression de l'utilisateur.";
        }
    }
}
