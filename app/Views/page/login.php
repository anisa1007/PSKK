<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PSB SMA | Login</title>

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/plugins/fontawesome-free/css/all.min.css">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/dist/css/mycss.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a><b>Login</b></a>
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg"></p>

        <?php if (session()->getFlashdata('success')) : ?>
          <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('success') ?>
          </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
          <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('error') ?>
          </div>
        <?php endif; ?>

        <form action="auth/cekauth" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <button type="submit" class="content-center btn btn-primary btn-block ">Masuk</button>
            </div>
          </div>
        </form>

        <div class="social-auth-links text-center mb-3">
          <p>- ATAU -</p>
          <a href="/register" class="btn btn-block btn-success">
            <i class=" mr-2"></i> Buat Akun Baru
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>/assets/template/plugins/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>/assets/template/dist/js/adminlte.min.js"></script>
</body>