<!-- berikan dari template.php -->
<?= $this->extend('layout/template'); ?>

<!-- Jadikan bagian konten -->
<?= $this->section('content'); ?>
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <h1 class="my-3 text-center">Formulir Data Iuran Kas</h1>
        <div class="col-8">
            <form action="<?= ('/Iuran/store'); ?>" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="warga_id" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="warga_id" autofocus required>
                            <option selected disabled>Open this select menu</option>
                            <?php foreach ($getWarga as $row) {
                                echo "<option value=" . $row['id'] . ">" . $row['nama'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="bulan" class="col-sm-2 col-form-label">Bulan</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="bulan" required>
                            <option selected disabled>Open this select menu</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="tahun" name="tahun" value="2022" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mx-3 px-4">Kirim</button>
                    <a href="<?= ('/Iuran'); ?>" class="btn btn-dark mx-3 px-4">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>