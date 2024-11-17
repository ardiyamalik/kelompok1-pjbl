<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Nama tabel di database
    protected $allowedFields = ['name', 'email', 'username', 'password', 'nim', 'foto', 'created_at'];


    // Insert new user into database
    public function register_user($data)
    {
        return $this->insert($data);
    }

    // Check if email or username already exists
    public function check_user_exists($field, $value)
    {
        return $this->where($field, $value)->first() !== null;
    }
}

