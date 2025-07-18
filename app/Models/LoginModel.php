<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table            = 'login';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id', 'nama', 'jenis_kelamin', 'telepon', 'email', 'username', 'password', 'level', 'status_user', 'alamat', 'created_user', 'created_dttm', 'updated_user', 'updated_dttm', 'nullified_user', 'nullified_dttm'];
    
    public function cek_user($username)
    {
        return $this->db->table('pengguna')
            ->where(array('username' => $username))
            ->get()->getRowArray();
    }

    public function login_check($username, $password)
    {
        return $this->db->table('pengguna')
            ->where(array('username' => $username, 'password' => $password))
            ->get()->getRowArray();
    }
}
