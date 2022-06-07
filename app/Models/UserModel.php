<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id_user ';
    protected $allowedFields = ['id_level', 'username', 'email', 'password', 'slug', 'foto', 'alamat_user', 'no_telp', 'rekening_sampah'];
    protected $useTimestamps = true;

    public function getAll($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where('id_user', $id)->first();
    }

    public function rekeningSampah($angka)
    {
        $code = '123456789101112' . time();
        $string = '';
        for ($i = 0; $i < $angka; $i++) {
            $pos = rand(0, strlen($code) - 1);
            $string .= $code[$pos];
        }
        return 'RN/' . $string;
    }

    public function get_foto_profile()
    {
        return $this->where(['username' => session()->get('username')])->first();
    }
}
