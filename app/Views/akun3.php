
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Laporan - PJBL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <!-- Favicons -->
<link href="<?= base_url('template/assets/img/favicon.png'); ?>" rel="icon">
<link href="<?= base_url('template/assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

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

    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-chat-left-text"></i>
      </a><!-- End Messages Icon -->

    </li><!-- End Messages Nav -->

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
        <h1>Laporan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home">Home</a></li>
                <li class="breadcrumb-item active">Laporan</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Kas</h5>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal</th>
                                    <th>Deskripsi</th>
                                    <th>Jenis Kas</th>
                                    <th>Akun</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kasData as $kas): ?>
                                <tr>
                                    <td><?= $kas['id']; ?></td>
                                    <td><?= date('Y-m-d', strtotime($kas['tanggal'])); ?></td>
                                    <td><?= $kas['deskripsi']; ?></td>
                                    <td><?= $kas['jenis']; ?></td>
                                    <td><?= $kas['akun']; ?></td>
                                    <td><?= $kas['jumlah']; ?></td>
                                    <td><?= number_format($kas['harga'], 0, ',', '.'); ?></td>
                                    <td>
                                        <button class="btn btn-info btn-sm btn-detail" data-id="<?= $kas['id']; ?>">Detail</button>
                                        <a href="<?= base_url('akun3/delete/'.$kas['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <a href="<?= base_url('akun3/pdf'); ?>" class="btn btn-danger">Cetak Laporan Kas ke PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Detail -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">Detail Kas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="detailModalBody"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showDetailModal(data) {
            document.getElementById('detailModalBody').innerHTML = `
                <p><strong>ID:</strong> ${data.id}</p>
                <p><strong>Tanggal:</strong> ${data.tanggal}</p>
                <p><strong>Deskripsi:</strong> ${data.deskripsi}</p>
                <p><strong>Jenis Kas:</strong> ${data.jenis}</p>
                <p><strong>Akun:</strong> ${data.akun}</p>
                <p><strong>Jumlah:</strong> ${data.jumlah}</p>
                <p><strong>Harga:</strong> ${data.harga}</p>
            `;
            new bootstrap.Modal(document.getElementById('detailModal')).show();
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.btn-detail').forEach(button => {
                button.addEventListener('click', () => {
                    fetch(`<?= base_url('akun3/detail/'); ?>${button.getAttribute('data-id')}`)
                        .then(response => response.json())
                        .then(data => showDetailModal(data));
                });
            });
        });
    </script>
</main>


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