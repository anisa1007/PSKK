<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content-header">
    <div class="container-fluid ">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <h4><b>Daftar Akun User</b></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($user as $u) : ?>
                                    <tr class="text-center">
                                        <td><?= $i++; ?></td>
                                        <td><?= $u['email']; ?></td>
                                        <td><?= $u['password']; ?></td>
                                        <td><?= $u['level'] == 1 ? 'Admin' : 'User'; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
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