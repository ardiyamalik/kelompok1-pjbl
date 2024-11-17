<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - PJBL</title>
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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    

    <section class="section dashboard">
      <div class="row">
          <div class="col-xxl-4 col-xl-12"> 
            <!-- hapus kode diatas kalau mau lebih lebar -->
          <!-- <div class="col-xxl-12"> hapus ini kalau mau sebagian -->

    <!-- Filter dan Tampilan Total Penjualan -->
    <div class="card info-card sales-card">
        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start"><h6>Filter Kas Masuk</h6></li>
            <li><a class="dropdown-item" href="<?= base_url('dashboard?filterPenjualan=Semua&filterPembayaran=' . $selectedFilterPembayaran) ?>">Semua</a></li>
            <li><a class="dropdown-item" href="<?= base_url('dashboard?filterPenjualan=Piutang&filterPembayaran=' . $selectedFilterPembayaran) ?>">Piutang</a></li>
            <li><a class="dropdown-item" href="<?= base_url('dashboard?filterPenjualan=Modal&filterPembayaran=' . $selectedFilterPembayaran) ?>">Modal</a></li>
            <li><a class="dropdown-item" href="<?= base_url('dashboard?filterPenjualan=Penjualan&filterPembayaran=' . $selectedFilterPembayaran) ?>">Penjualan</a></li>
        </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Kas Masuk <span>| <?= $selectedFilterPenjualan ?></span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                    <h6><?= number_format($totalPenjualan, 0, ',', '.') ?></h6>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="col-xxl-4 col-xl-12">
      <!-- hapus kode diatas kalau mau lebih lebar -->
          <!-- <div class="col-xxl-12"> hapus ini kalau mau sebagian -->

    <!-- Filter dan Tampilan Total Pembayaran -->
    <div class="card info-card revenue-card">
        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start"><h6>Filter Kas Keluar</h6></li>
            <li><a class="dropdown-item" href="<?= base_url('dashboard?filterPenjualan=' . $selectedFilterPenjualan . '&filterPembayaran=Semua') ?>">Semua</a></li>
            <li><a class="dropdown-item" href="<?= base_url('dashboard?filterPenjualan=' . $selectedFilterPenjualan . '&filterPembayaran=Utang') ?>">Utang</a></li>
            <li><a class="dropdown-item" href="<?= base_url('dashboard?filterPenjualan=' . $selectedFilterPenjualan . '&filterPembayaran=Beban') ?>">Beban</a></li>
        </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Kas Keluar <span>| <?= $selectedFilterPembayaran ?></span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                    <h6><?= number_format($totalPembayaran, 0, ',', '.') ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>

           <!-- Reports -->
<div class="col-12">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Grafik Kas</h5>

      <!-- Line Chart -->
      <div id="reportsChart"></div>

      <script>
        document.addEventListener("DOMContentLoaded", () => {
          // Ambil data dari PHP ke dalam JavaScript
          const bulanData = <?= $bulanData; ?>;
          const penjualanData = <?= $penjualanData; ?>;
          const pembayaranData = <?= $pembayaranData; ?>;

          new ApexCharts(document.querySelector("#reportsChart"), {
            series: [{
              name: 'Kas Masuk',
              data: penjualanData,
              color: '#FF0000' // Warna merah untuk penjualan
            }, {
              name: 'Kas Keluar',
              data: pembayaranData,
              color: '#2eca6a' // Warna hijau untuk pembayaran
            }],
            chart: {
              height: 350,
              type: 'area',
              toolbar: { show: false }
            },
            markers: { size: 4 },
            fill: {
              type: "gradient",
              gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.3,
                opacityTo: 0.4,
                stops: [0, 90, 100]
              }
            },
            dataLabels: { enabled: false },
            stroke: {
              curve: 'smooth',
              width: 2 // Menyesuaikan ketebalan garis menjadi lebih tebal
            },
            xaxis: {
              categories: bulanData,
              labels: { format: 'MM-yy' }
            },
            tooltip: {
              x: { format: 'MM-yyyy' }
            }
          }).render();
        });
      </script>
      <!-- End Line Chart -->
    </div>
  </div>
</div><!-- End Reports -->

<!-- Payment Types Chart -->
<div class="col-12">
    <div class="card">
        <div class="card-body pb-0">
            <h5 class="card-title">Diagram Kas</h5>

            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const chartData = <?= $chartData ?>; // Mengambil data dari PHP

                    const renderChart = (data) => {
                        const chart = echarts.init(document.querySelector("#trafficChart"));
                        chart.setOption({
                            tooltip: {
                                trigger: 'item'
                            },
                            legend: {
                                top: '5%',
                                left: 'center'
                            },
                            series: [{
                                name: 'Akun',
                                type: 'pie',
                                radius: ['40%', '70%'],
                                avoidLabelOverlap: true,
                                label: {
                                    show: false,
                                    position: 'inside',   
                                    formatter: '{b}: {c}', 
                                },
                                labelLine: {
                                    show: true,
                                    length: 10, 
                                    length2: 10
                                },
                                data: data,
                                color: ['#5470C6', '#91CC75', '#FAC858', '#EE6666', '#73C0DE'] // Warna unik untuk tiap akun
                            }]
                        });
                    };

                    renderChart(chartData); // Render chart dengan data awal

                    // Event listener untuk opsi filter
                    document.querySelectorAll('.filter-option').forEach(item => {
                        item.addEventListener('click', (event) => {
                            event.preventDefault();
                            const filter = event.target.getAttribute('data-filter');
                            document.getElementById("filter-label").innerText = `| ${filter.charAt(0).toUpperCase() + filter.slice(1)}`;
                            
                            // Jika Anda ingin memperbarui data berdasarkan filter melalui AJAX, tambahkan logika AJAX di sini
                            renderChart(chartData); // Render ulang chart sesuai filter
                        });
                    });
                });
            </script>
        </div>
    </div>
</div>
<!-- End Payment Types Chart -->


<!-- JavaScript untuk menangani filter dan load data secara dinamis -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Event listener untuk item dropdown filter
    document.querySelectorAll('.dropdown-item').forEach(item => {
    item.addEventListener('click', function (e) {
        e.preventDefault();
        const filterType = this.textContent.trim().toLowerCase();

        fetch(`/dashboard?filterType=${filterType}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.json();
            })
            .then(data => {
                console.log(data); // Tampilkan data di console
                // Tambahkan logika untuk memproses data ke dalam tabel di sini
            })
            .catch(error => console.error('Fetch error:', error));
    });
});


    // Fungsi untuk memuat data dari server berdasarkan filter yang dipilih
    function loadData(filterType) {
      // Tentukan URL untuk request berdasarkan filter
      let url = filterType === 'penjualan' ? '/dashboard?filterType=penjualan' : '/dashboard?filterType=pembayaran';

      fetch(url)
        .then(response => response.json())
        .then(data => {
          let tableBody = document.querySelector('.datatable tbody');
          tableBody.innerHTML = '';  // Bersihkan tabel sebelum menambahkan data baru

          // Iterasi data yang diterima dan tambahkan ke dalam tabel
          data.forEach((row, index) => {
            let tableRow = document.createElement('tr');
            tableRow.innerHTML = `
              <th scope="row"><a href="#">#${row.id}</a></th>
              <td>${row.customer ?? 'Anonymous'}</td>
              <td>${row.product ?? ''}</td>
              <td>$${row.price ?? ''}</td>
              <td><span class="badge bg-${row.status === 'Approved' ? 'success' : row.status === 'Pending' ? 'warning' : 'danger'}">${row.status}</span></td>
            `;
            tableBody.appendChild(tableRow);
          });
        })
        .catch(error => console.error('Error:', error));
    }
    // Load data awal dengan filter default (Penjualan)
    loadData('penjualan');
  });
</script>


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