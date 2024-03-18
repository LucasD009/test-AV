<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $first_name = 'User' . ($i + 1); 
            $last_name = 'Doe';
            $phone = '0612345678';
            $email = 'user' . ($i + 1) . '@example.com'; 
            $postal_address = ($i + 1).' Rue du test';
            $professional_status = true;
            
            $last_login = date('Y-m-d H:i:s', mt_rand(strtotime('2020-01-01'), time()));

            $data = [
                'first_name' => $first_name,
                'last_name'  => $last_name,
                'email'      => $email,
                'last_login' => $last_login,
                'phone' => $phone,
                'postal_address' => $postal_address,
                'professional_status' => $professional_status,
            ];

            $this->db->table('users')->insert($data);
        }
    }
}
