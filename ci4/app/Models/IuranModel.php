<?php

namespace App\Models;

use CodeIgniter\Model;

class IuranModel extends Model
{
    protected $table = 'iuran';

    public function getIuran($id = false)
    {
        if ($id === false) {
            return $this->table('iuran')
                ->join('warga', 'warga.id = iuran.warga_id')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('iuran')
                ->join('warga', 'warga.id = iuran.warga_id')
                ->where('iuran.id', $id)
                ->get()
                ->getRowArray();
        }
    }

    public function tambah_iuran($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function search($keyword)
    {
        return $this->table('warga')->like('nama', $keyword);
    }
}
