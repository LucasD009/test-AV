<?php

namespace App\Models; 

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users'; 
    protected $primaryKey = 'id'; 

    protected $allowedFields = ['first_name', 'last_name', 'email', 'phone', 'postal_address', 'professional_status', 'last_login']; 
    
    protected $returnType     = 'array'; 
    protected $useTimestamps = false; 

    // Create
    public function createUser($data)
    {
        return $this->insert($data);
    }

    // Get all
    public function getAllUsers()
    {
        $perPage = 10;
        return $this->paginate($perPage);
    }

    // Get one by id
    public function getUserById($id)
    {
        return $this->asArray()->where(['id' => $id])->first();
    }

    // Update
    public function updateUser($id, $data)
    {
        return $this->update($id, $data);
    }

    // Delete
    public function deleteUser($id)
    {
        return $this->delete($id);
    }

    // Delete inactive users
    public function deleteInactiveUsers($months)
    {
        $limitDate = date('Y-m-d H:i:s', strtotime("-{$months} months"));
        $this->where('last_login <', $limitDate);
        return $this->delete();
    }
}
