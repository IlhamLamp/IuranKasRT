<!-- Berikan dari template.php -->
<?= $this->extend('layout/template'); ?>

<!-- Jadikan bagian konten -->
<?= $this->section('content'); ?>
<div class="container mt-5 pt-3">
    <h1>Dashboard</h1>
    <div class="row">
        <!-- /.card -->

        <!-- Tambah Data -->
        <div class="card text-bg-primary m-3" style="max-width: 18rem;">
            <a href="/Warga/create" class="text-light text-decoration-none">
                <div class="card-body">
                    <h5 class="card-title text-center py-4 ">Tambah Data</h5>
                </div>
            </a>
        </div>

        <!-- Tambah Iuran -->
        <div class="card text-bg-success m-3" style="max-width: 18rem;">
            <a href="/Iuran/create" class="text-light text-decoration-none">
                <div class="card-body">
                    <h5 class="card-title text-center py-4">Tambah Iuran</h5>
                </div>
            </a>
        </div>

        <!-- Laporan Kas -->
        <div class="card text-bg-warning m-3" style="max-width: 38rem;">
            <a href="/laporan" class="text-light text-decoration-none">
                <div class="card-body">
                    <h5 class="card-title text-center py-4">Total Kas Tahunan</h5>
                </div>
            </a>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>