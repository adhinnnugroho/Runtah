<?php

namespace App\Models;

use CodeIgniter\Model;

class jenisSampahModel extends Model
{
    protected $table      = 'jenis_sampah';
    protected $primaryKey = 'id_sampah';
    protected $allowedFields = ['berat_sampah', 'nama_sampah', 'foto_Sampah', 'slug', 'jenis_sampah', 'harga_sampah'];
    protected $useTimestamps = true;

    public function getAll($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where('id_sampah', $id)->first();
    }

    public function getAllBYSlug($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where('slug', $slug)->first();
    }


    public function joinSampahYangdijual($nama_sampah)
    {
        return $this->join("sampahyangdijual", "sampahyangdijual.id_sampahYangdijual = jenis_sampah.jenis_sampah")->where(['sampahyangdijual.nama_jenis_sampah' => $nama_sampah])->paginate(5);
    }

    public function JoinSampah()
    {
        return $this->join("sampahyangdijual", "sampahyangdijual.id_sampahYangdijual = jenis_sampah.jenis_sampah")->findAll();
    }
}
