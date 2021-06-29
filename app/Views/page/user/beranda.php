<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content2'); ?>

<div class="container">
    <div class="row my-5 mx-5">
        <div class="col">
            <div class="card ">
                <div class="card-header text-center">
                    <h3><b> Selamat Datang !</b></h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <form>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Nomor Pendaftaran </label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="PSB2021<?= $user['id']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-5">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pendaftar['nama'] == '' ? '-' : $pendaftar['nama']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-5">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pendaftar['email'] == '' ? '-' : $pendaftar['email']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-5">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pendaftar['alamat'] == '' ? '-' : $pendaftar['nama']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Asal Sekolah</label>
                                    <div class="col-sm-5">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pendaftar['asal_sekolah'] == '' ? '-' : $pendaftar['asal_sekolah']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Status Pendaftar</label>
                                    <?php if ($pendaftar['status'] == 'Menunggu Persetujuan') : ?>
                                        <div class="col-sm-5">
                                            <h5><span class="badge badge-warning">Menunggu Persetujuan</span></h5>
                                        </div>
                                    <?php elseif ($pendaftar['status'] == 'Belum Daftar') : ?>
                                        <div class="col-sm-5">
                                            <h5><span class="badge badge-warning">Belum Daftar</span></h5>
                                        </div>
                                    <?php elseif ($pendaftar['status'] == 'Diterima') : ?>
                                        <div class="col-sm-5">
                                            <h5><span class="badge badge-success">Diterima</span></h5>
                                        </div>
                                    <?php elseif ($pendaftar['status'] == 'Cadangan') : ?>
                                        <div class="col-sm-5">
                                            <h5><span class="badge badge-secondary">Cadangan</span></h5>
                                        </div>
                                    <?php elseif ($pendaftar['status'] == 'Ditolak') : ?>
                                        <div class="col-sm-5">
                                            <h5><span class="badge badge-danger">Ditolak</span></h5>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3">
                            <img src="<?= base_url(); ?>/assets/img/<?= $pendaftar['foto']; ?>" style="width: 100%;">
                        </div>
                    </div>
                </div>
                <?php if (
                    ($pendaftar['nama'] == ''
                        && $pendaftar['alamat'] == ''
                        && $pendaftar['asal_sekolah'] == ''
                        && $pendaftar['nilai_bing'] == ''
                        && $pendaftar['nilai_mtk'] == '')
                    || $pendaftar['foto'] == 'image.jpg'
                ) : ?>
                    <div class="card-footer text-center">
                        <b>Silahkan Melengkapi Data Diri!</b>
                    </div>
                    <div class="card-footer text-center">
                        <a type="button" href="/edit/<?= $pendaftar['id']; ?>" class="btn btn-primary">Edit</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<!-- ======= /MainContent ======= -->
<?= $this->endSection(); ?>