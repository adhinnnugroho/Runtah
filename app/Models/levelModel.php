<?php

namespace App\Models;

use CodeIgniter\Model;

class levelModel extends Model
{
    protected $table      = 'level';
    protected $primaryKey = 'id_level';
    protected $allowedFields = ['nama_level'];
    protected $useTimestamps = true;

    public function getAll($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where('id_level', $id)->first();
    }
}
