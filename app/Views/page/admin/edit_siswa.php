<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content-header">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <b>Data Diri</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <form action="/admin/updatependaftar/<?= $pendaftar['id']; ?>">
                                    <div class="form-group row">
                                        <label for="nomor" class="col-sm-3 col-form-label">Nomor Pendaftaran </label>
                                        <div class="col-sm-9">
                                            <input type="text" readonly class="form-control-plaintext" id="nomor" value="<?= $pendaftar['id_pendaftaran']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-5">
                                            <input type="text" readonly class="form-control-plaintext" id="nama" value="<?= $pendaftar['nama']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-5">
                                            <input type="text" readonly class="form-control-plaintext" id="email" value="<?= $pendaftar['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-5">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pendaftar['alamat']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Asal Sekolah</label>
                                        <div class="col-sm-5">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pendaftar['asal_sekolah']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Nilai Matematika</label>
                                        <div class="col-sm-5">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pendaftar['nilai_mtk']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Nilai Bahasa Inggris</label>
                                        <div class="col-sm-5">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pendaftar['nilai_bing']; ?>">
                                        </div>
                                    </div>
                                    <fieldset class="form-group row">
                                        <label class="col-form-label col-sm-3 float-sm-left pt-0">Status Pendaftaran</label>
                                        <div class="col-sm-5">
                                            <select class="custom-select" id="status" name="status">
                                                <option selected><?= $pendaftar['status']; ?></option>
                                                <option value="Diterima">Diterima</option>
                                                <option value="Cadangan">Cadangan</option>
                                                <option value="Ditolak">Ditolak</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                    <div class="col text-right">
                                        <button type="submit" class="btn btn-success ">Simpan</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3">
                                <img src="<?= base_url(); ?>/assets/img/<?= $pendaftar['foto']; ?>" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======= /MainContent ======= -->
<?= $this->endSection(); ?>