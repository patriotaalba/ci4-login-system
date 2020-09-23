<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model

{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useTimestamps = false;
    protected $allowedFields = ['name', 'username', 'password'];
}
