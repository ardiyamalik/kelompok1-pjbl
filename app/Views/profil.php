<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kas Masuk - PJBL</title>
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

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
    <a href="<?= base_url('/dashboard'); ?>" class="logo d-flex align-items-center">
        <img src="<?= base_url('template/assets/img/logo-ipb.png'); ?>" alt="">
        <span class="d-none d-lg-block">PJBL</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
          </a><!-- End Notification Icon -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">
    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="<?= base_url($user['foto'] ? 'uploads/profile/' . $user['foto'] : 'template/assets/img/default-profile.png'); ?>" 
             alt="Profile" 
             class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2"><?= esc($user['username'] ?? 'Guest'); ?></span>
    </a>
    <!-- End Profile Image Icon -->

    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
            <h6><?= esc($user['name'] ?? 'User Name'); ?></h6>
            <span><?= esc($user['nim'] ?? 'NIM Tidak Tersedia'); ?></span>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <!-- Tambahkan menu lainnya di sini -->
    </ul>
</li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url(relativePath: 'home'); ?>">
          <i class="bi bi-house-door"></i>
          <span>Home</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url(relativePath: 'dashboard'); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-heading">Halaman</li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url(relativePath: 'akun1'); ?>">
          <i class="bi bi-cart"></i>
          <span>Kas Masuk</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url(relativePath: 'akun2'); ?>">
          <i class="bi bi-currency-dollar"></i>
          <span>Kas Keluar</span>
        </a>
      </li>

      <li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url(relativePath: 'akun3'); ?>">
      <i class="bi bi-clipboard-data"></i>
      <span>Laporan</span>
    </a>
  </li>
    
  <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url(relativePath: 'profil'); ?>">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url(relativePath: 'profile'); ?>">
          <i class="bi bi-people"></i>
          <span>Kelompok</span>
        </a>
      </li>

      <li class="nav-item">
    <a class="nav-link collapsed" href="#" onclick="confirmLogout(event)">
        <i class="bi bi-box-arrow-right"></i>
        <span>Log Out</span>
    </a>
</li>
<script>
    function confirmLogout(event) {
        event.preventDefault(); // Mencegah navigasi langsung

        const confirmation = confirm("Apakah anda yakin untuk log out?");
        if (confirmation) {
            window.location.href = "<?= base_url('/auth/logout'); ?>"; // Arahkan ke URL logout
        }
    }
</script>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                <img src="<?= base_url($user['foto'] ? 'uploads/profile/' . $user['foto'] : 'template/assets/img/default-profile.png'); ?>" alt="Profile" class="rounded-circle" width="150">
                    <h2><?= esc($user['name']); ?></h2>
                    <h3><?= esc($user['nim']); ?></h3>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Profile Details</h5>
                            <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?= esc($name) ?></div>
                    </div>

                    <div class="row">
                    <div div class="col-lg-3 col-md-4 label ">Username</div>
                    <div class="col-lg-9 col-md-8"><?= esc($username) ?></div>
                    </div>

                    <div class="row">
                    <div class="col-lg-3 col-md-4 label">NIM</div>
                    <div class="col-lg-9 col-md-8"><?= esc($nim) ?></div>
                    </div>

                    <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?= esc($email) ?></div>
                    </div>

                        </div>
                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
    <form action="<?= base_url('/profil/update'); ?>" method="post" enctype="multipart/form-data">
        <!-- Input untuk Foto Profil -->
        <div class="row mb-3">
            <label for="foto" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
            <div class="col-md-8 col-lg-9">
                <input type="file" name="foto" class="form-control" id="foto">
            </div>
        </div>

        <!-- Input untuk Nama Lengkap -->
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
            <div class="col-md-8 col-lg-9">
                <input name="name" type="text" class="form-control" id="name" value="<?= esc($user['name']); ?>">
            </div>
        </div>

        <!-- Input untuk Username -->
        <div class="row mb-3">
            <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
            <div class="col-md-8 col-lg-9">
                <input name="username" type="text" class="form-control" id="username" value="<?= esc($user['username']); ?>">
            </div>
        </div>

        <!-- Input untuk NIM -->
        <div class="row mb-3">
            <label for="nim" class="col-md-4 col-lg-3 col-form-label">NIM</label>
            <div class="col-md-8 col-lg-9">
                <input name="nim" type="text" class="form-control" id="nim" value="<?= esc($user['nim'] ?? ''); ?>">
            </div>
        </div>

        <!-- Input untuk Email -->
        <div class="row mb-3">
            <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
            <div class="col-md-8 col-lg-9">
                <input name="email" type="email" class="form-control" id="email" value="<?= esc($user['email']); ?>">
            </div>
        </div>

        <!-- Tombol Save Changes -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </form>
</div>

                    </div>
                    <script>
    document.querySelector('button[type="submit"]').addEventListener('click', function(e) {
        console.log("Save Changes button clicked.");
    });

    // Tampilkan notifikasi jika ada session flash data
    <?php if (session()->getFlashdata('success')): ?>
        alert("<?= session()->getFlashdata('success'); ?>");
    <?php elseif (session()->getFlashdata('error')): ?>
        alert("<?= session()->getFlashdata('error'); ?>");
    <?php endif; ?>
</script>

                </div>
            </div>
        </div>
    </div>
</section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>ahihihi</span></strong>. ahihihi
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">zz</a>
    </div>
  </footer><!-- End Footer -->

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