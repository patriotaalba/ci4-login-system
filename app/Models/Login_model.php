<?php

namespace App\Models;

use CodeIgniter\Model;

class Login_model extends Model
{
    public function get_user($username, $tbl)
    {

        // $db      = \Config\Database::connect();
        // $builder = $db->table('users');

        $builder = $this->db->table($tbl);
        $builder->where('username', $username);
        $log = $builder->get()->getRow();
        return $log;
    }
}
