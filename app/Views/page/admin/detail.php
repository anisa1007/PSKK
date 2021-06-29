<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content-header">
    <div class="container-fluid ">
        <div class="row">
            <div class="col">
                <div class="card mx-5 mt-3">
                    <div class="card-header" style="background-color: darkgray;">
                        <h4 class="text-center"><b>Penerimaan Calon Peserta Baru</b></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Nama</th>
                                    <th>No Pendaftaran</th>
                                    <th style="width: 100px">Status</th>
                                    <th class="text-center" style="width: 300px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pendaftar as $p) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $p['nama']; ?></td>
                                        <td><?= $p['id_pendaftaran']; ?></td>
                                        <td>
                                            <?php if ($p['status'] == 'Menunggu Persetujuan') : ?>
                                                <div class="col-sm-5">
                                                    <h5><span class="badge badge-warning">Menunggu Persetujuan</span></h5>
                                                </div>
                                            <?php elseif ($p['status'] == 'Belum Daftar') : ?>
                                                <div class="col-sm-5">
                                                    <h5><span class="badge badge-warning">Belum Daftar</span></h5>
                                                </div>
                                            <?php elseif ($p['status'] == 'Diterima') : ?>
                                                <div class="col-sm-5">
                                                    <h5><span class="badge badge-success">Diterima</span></h5>
                                                </div>
                                            <?php elseif ($p['status'] == 'Cadangan') : ?>
                                                <div class="col-sm-5">
                                                    <h5><span class="badge badge-secondary">Cadangan</span></h5>
                                                </div>
                                            <?php elseif ($p['status'] == 'Ditolak') : ?>
                                                <div class="col-sm-5">
                                                    <h5><span class="badge badge-danger">Ditolak</span></h5>
                                                </div>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <div class="row justify-content-center">
                                                <a href="/admin/detail-pendaftar/<?= $p['id']; ?>" type="button" class="btn btn-info">Edit</a>
                                                <button type="button" class="btn btn-danger ml-2">Hapus</button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ======= /MainContent ======= -->
<?= $this->endSection(); ?>