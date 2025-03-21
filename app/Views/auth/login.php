
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - PJBL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 <link href="<?= base_url('template/assets/img/logo-ipb.png'); ?>" rel="icon">

<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="<?= base_url('template/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?= base_url('template/assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
<link href="<?= base_url('template/assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
<link href="<?= base_url('template/assets/vendor/quill/quill.snow.css'); ?>" rel="stylesheet">
<link href="<?= base_url('template/assets/vendor/quill/quill.bubble.css'); ?>" rel="stylesheet">
<link href="<?= base_url('template/assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
<link href="<?= base_url('template/assets/vendor/simple-datatables/style.css'); ?>" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="<?= base_url('template/assets/css/style.css'); ?>" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
                <a href="<?= base_url('/home'); ?>" class="logo d-flex align-items-center w-auto">
                  <img src="<?= base_url('template/assets/img/logo-ipb.png'); ?>" alt="">
                  <span class="d-none d-lg-block">PJBL</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <?php if (session()->getFlashdata('error')) : ?>
<div class="alert alert-danger">
    <?= session()->getFlashdata('error'); ?>
</div>
<?php endif; ?>

<?php if (session()->getFlashdata('success')) : ?>
<div class="alert alert-success">
    <?= session()->getFlashdata('success'); ?>
</div>
<?php endif; ?>

<form class="row g-3 needs-validation" action="<?= base_url('auth/login_process'); ?>" method="post" novalidate>
    <div class="col-12">
        <label for="yourUsername" class="form-label">Username</label>
        <div class="input-group has-validation">
            <span class="input-group-text">@</span>
            <input type="text" name="username" class="form-control" id="yourUsername" required>
            <div class="invalid-feedback">Please enter your username.</div>
        </div>
    </div>
    <div class="col-12">
        <label for="yourPassword" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="yourPassword" required>
        <div class="invalid-feedback">Please enter your password!</div>
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary w-100" type="submit">Login</button>
    </div>
    <div class="col-12">
        <p class="small mb-0">Don't have an account? <a href="<?= base_url('auth/register'); ?>">Create an account</a></p>
    </div>
</form>


                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
   <script src="<?= base_url('template/assets/vendor/apexcharts/apexcharts.min.js');?>"></script>
  <script src="<?= base_url('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?= base_url('template/assets/vendor/chart.js/chart.umd.js');?>"></script>
  <script src="<?= base_url('template/assets/vendor/echarts/echarts.min.js');?>"></script>
  <script src="<?= base_url('template/assets/vendor/quill/quill.js');?>"></script>
  <script src="<?= base_url('template/assets/vendor/simple-datatables/simple-datatables.js');?>"></script>
  <script src="<?= base_url('template/assets/vendor/tinymce/tinymce.min.js');?>"></script>
  <script src="<?= base_url('template/assets/vendor/php-email-form/validate.js');?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('template/assets/js/main.js');?>"></script>


</body>

</html>