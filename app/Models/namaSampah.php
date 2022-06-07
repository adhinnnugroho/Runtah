<?php

namespace App\Models;

use CodeIgniter\Model;

class namaSampah extends Model
{
    protected $table      = 'sampahyangdijual';
    protected $primaryKey = 'id_sampahYangdijual';
    protected $allowedFields = ['nama_jenis_sampah'];
    protected $useTimestamps = true;

    public function getAll($nama_sampah = false)
    {
        if ($nama_sampah === false) {
            return $this->findAll();
        }

        return $this->where('nama_jenis_sampah', $nama_sampah)->first();
    }
}
