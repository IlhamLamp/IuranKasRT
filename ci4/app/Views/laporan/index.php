<!-- Berikan dari template.php -->
<?= $this->extend('layout/template'); ?>

<!-- Jadikan bagian konten -->
<?= $this->section('content'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="container pt-5">

            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="card-title">Tampilkan Laporan Bulanan</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('laporan/total'); ?>">
                        <div class="form-group mb-2">
                            <label for="bulan">Bulan</label>

                            <select name="bulan" class="form-control">
                                <?php foreach ($getListBulan as $isi) { ?>

                                    <option value=<?= $isi['bulan'] ?>>
                                        <?php
                                        $monthNum  = $isi['bulan'];
                                        $monthName = date('F', mktime(0, 0, 0, $monthNum, 10));
                                        echo $monthName;
                                        ?>
                                    </option>
                                <?php } ?>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>

                            <select name="tahun" class="form-control">
                                <?php foreach ($getListTahun as $isi) { ?>
                                    <option><?= $isi['tahun'] ?></option>
                                <?php } ?>
                            </select>

                        </div>
                        <button class="btn btn-success my-3">Tampilkan</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="card-title">Jumlah Kas Pertahun</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Tahun</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($getLaporanTahun as $isi) { ?>
                                    <tr>
                                        <td><?= $isi['tahun']; ?></td>
                                        <td>
                                            <?php echo "Rp " . number_format($isi['SUM(jumlah)'], 0, ",", "."); ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>