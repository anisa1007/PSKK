<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PSB SMA | Register</title>

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/plugins/fontawesome-free/css/all.min.css">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/dist/css/mycss.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a><b>Registrasi</b></a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Registrasi akun baru</p>

        <form action="auth/createacc" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Kata sandi" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Ulang kata sandi" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <button type="submit" class="mb-4 btn btn-primary btn-block">Daftar</button>
            </div>
          </div>
        </form>



        <a href="/" class="text-center">Sudah Punya Akun</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>/assets/template/plugins/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>/assets/template/dist/js/adminlte.min.js"></script>
</body>