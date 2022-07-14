<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LaporanModel;

class Laporan extends BaseController
{
    public function index()
    {
        $model = new LaporanModel;
        $data['title'] = 'Laporan Iuran';
        $data['getLaporanTahun'] = $model->getLaporanTahun();

        $data['getListBulan'] = $model->getListBulan();
        $data['getListTahun'] = $model->getListTahun();

        echo view('Laporan/index', $data);
    }

    public function total()
    {
        $model = new LaporanModel;
        $data['title'] = 'Laporan Iuran Bulan dan Tahun';
        $db = \Config\Database::connect();
        $bulan = $this->request->getPost('bulan');
        $tahun = $this->request->getPost('tahun');
        $builder1 = $db->query("(SELECT sum(jumlah),bulan,tahun FROM iuran WHERE bulan='$bulan' and tahun='$tahun')", false);
        $data['total'] = $builder1->getResultArray();

        $builder2 = $db->query("(SELECT nama FROM warga WHERE NOT EXISTS (SELECT warga_id FROM iuran where warga.id = iuran.warga_id and bulan= '$bulan' and tahun= '$tahun' ))", false);
        $data['belumbayar'] = $builder2->getResultArray();

        echo view('Laporan/detail', $data);
    }
}
