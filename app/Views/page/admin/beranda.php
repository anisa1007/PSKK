<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- ======= Header ======= -->
<section class="content-header">
    <div class="container-fluid ">
        <div class="row mb-2">
            <div class="col">
                <h1 class="text-center mb-4"><b>Data Pendaftaran Siswa Baru</b></h1>
            </div>
        </div>

        <div class="row mx-5 justify-content-center">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3 class="mt-2"><?= $cadangan; ?></h3>
                        <p>Cadangan</p>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3 class="mt-2"><?= $menungguPersetujuan; ?></h3>
                        <p>Menunggu Persetujuan</p>
                        <br>
                    </div>

                </div>
            </div>
        </div>

        <div class="row mx-5 justify-content-center">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3 class="mt-3"><?= $diterima; ?></h3>
                        <p>Diterima</p>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3 class="mt-3"><?= $ditolak; ?></h3>
                        <p>Ditolak</p>
                        <br>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= /Header ======= -->

<!-- ======= MainContent -->
<section class="content">

</section>
<!-- ======= /MainContent ======= -->
<?= $this->endSection(); ?>