<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content2'); ?>

<section class="content-header">
    <div class="container">
        <div class="row my-5">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <b>Data Diri</b>
                    </div>

                    <?php
                    session()->getFlashdata('error') !== null ? $error = session()->getFlashdata('error') : $error = null;
                    ?>
                    <div class="card-body">

                        <?= form_open_multipart(base_url("user/updatependaftar/" . $pendaftar['id'])); ?>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nomor Pendaftaran </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_pendaftaran" name="id_pendaftaran" value="PSB2021<?= $user['id']; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <div class="input-group flex-wrap">
                                    <input type="text" class="form-control <?= isset($error['nama']) && $error['nama'] !== ''  ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama') ? old('nama') : $pendaftar['nama']; ?>" placeholder="Masukkan Nama Anda">
                                    <div class="invalid-feedback d-block">
                                        <?= isset($error) ? $error['nama'] : null; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" value="<?= $pendaftar['email']; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <div class="input-group flex-wrap">
                                    <input type="text" class="form-control <?= isset($error['alamat']) && $error['alamat'] !== ''  ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" value="<?= old('alamat') ? old('alamat') : $pendaftar['alamat']; ?>" placeholder="Masukkan Alamat Anda">
                                    <div class="invalid-feedback d-block">
                                        <?= isset($error) ? $error['alamat'] : null; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="asal_sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
                            <div class="col-sm-10">
                                <select class="custom-select" id="asal_sekolah" name="asal_sekolah">
                                    <option value="MTS N 1 Bandar Lampung">MTS N 1 Bandar Lampung</option>
                                    <option value="MTS N 2 Bandar Lampung">MTS N 2 Bandar Lampung</option>
                                    <option value="MTS N 3 Bandar Lampung">MTS N 3 Bandar Lampung</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nilai Matematika</label>
                            <div class="col-sm-10">
                                <div class="input-group flex-wrap">
                                    <input type="text" class="form-control <?= isset($error['nilai_mtk']) && $error['nilai_mtk'] !== ''  ? 'is-invalid' : ''; ?>" id="Nilai" name="nilai_mtk" value="<?= old('nilai_mtk') ? old('nilai_mtk') : $pendaftar['nilai_mtk']; ?>" placeholder="Masukkan Nilai Matematika Anda">
                                    <div class="invalid-feedback d-block">
                                        <?= isset($error) ? $error['nilai_mtk'] : null; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nilai Bahasa Inggris</label>
                            <div class="col-sm-10">
                                <div class="input-group flex-wrap">
                                    <input type="text" class="form-control <?= isset($error['nilai_bing']) && $error['nilai_bing'] !== ''  ? 'is-invalid' : ''; ?>" id="Nilai" name="nilai_bing" value="<?= old('nilai_bing') ? old('nilai_bing') : $pendaftar['nilai_bing']; ?>" placeholder="Masukkan Nilai Bahasa Inggris Anda">
                                    <div class="invalid-feedback d-block">
                                        <?= isset($error) ? $error['nilai_bing'] : null; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Masukkan Foto</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" name="foto">
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-success text-right">Simpan</button>
                        </div>
                        <?= form_close(); ?>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<!-- ======= /MainContent ======= -->
<?= $this->endSection(); ?>