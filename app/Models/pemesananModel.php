<?php

namespace App\Models;

use CodeIgniter\Model;

class pemesananModel extends Model
{
    protected $table      = 'pemesanan';
    protected $primaryKey = 'id_pemesanan ';
    protected $allowedFields = ['order_code', 'id_user', 'email', 'nama_pemesan', 'alamat', 'harga', 'no_telp', 'status_pembayaran', 'konfirmasi_pemesanan', 'berat_sampah'];
    protected $useTimestamps = true;

    public function getAll($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where('id_pemesanan', $id)->first();
    }
}
