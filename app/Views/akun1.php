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
      <h1>Kas Masuk</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home">Home</a></li>
          <li class="breadcrumb-item active">Kas Masuk</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

 <!-- Total Kas Masuk -->
<div class="col-12">
    <div class="card info-card sales-card">
        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="<?= base_url('akun1/filter/Semua') ?>">Semua</a></li>
                <li><a class="dropdown-item" href="<?= base_url('akun1/filter/Piutang') ?>">Piutang</a></li>
                <li><a class="dropdown-item" href="<?= base_url('akun1/filter/Modal') ?>">Modal</a></li>
                <li><a class="dropdown-item" href="<?= base_url('akun1/filter/Penjualan') ?>">Penjualan</a></li>
            </ul>
        </div>

        <div class="card-body">
            <h5 class="card-title">Total Kas Masuk <span>| <?= $selectedFilter ?></span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                    <h6 id="totalPenjualanDisplay"><?= number_format($totalPenjualan, 0, ',', '.') ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Total Kas Masuk -->

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik Total Kas Masuk</h5>
            <div id="paymentChart"></div>
            <script>
document.addEventListener("DOMContentLoaded", () => {
    // Data dari controller, sudah dalam format yang dipisahkan per akun
    const monthlyTotals = <?= json_encode($monthlyTotals) ?>;

    // Inisialisasi data grafik untuk piutang, modal, dan penjualan
    const piutangData = Array(12).fill(0);
    const modalData = Array(12).fill(0);
    const penjualanData = Array(12).fill(0);
    const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

    // Mengisi data untuk piutang, modal, dan penjualan
    monthlyTotals.forEach(item => {
        const monthIndex = parseInt(item.month.split('-')[1], 10) - 1;
        if (item.akun === 'piutang') {
            piutangData[monthIndex] = parseInt(item.total, 10);
        } else if (item.akun === 'modal') {
            modalData[monthIndex] = parseInt(item.total, 10);
        } else if (item.akun === 'penjualan') {
            penjualanData[monthIndex] = parseInt(item.total, 10);
        }
    });

    // Membuat data series terpisah untuk piutang, modal, dan penjualan
    const seriesData = [
        {
            name: 'Piutang',
            data: piutangData,
            color: '#dc3545'
        },
        {
            name: 'Modal',
            data: modalData,
            color: '#28a745'
        },
        {
            name: 'Penjualan',
            data: penjualanData,
            color: '#ffc107'
        }
    ];

    // Membuat grafik
    window.paymentChart = new ApexCharts(document.querySelector("#paymentChart"), {
        series: seriesData,
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        xaxis: {
            categories: months
        },
        yaxis: {
            title: {
                text: 'Jumlah (Rupiah)'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return "Rp " + val.toLocaleString();
                }
            }
        }
    });

    // Render grafik
    window.paymentChart.render();
});
</script>

        </div>
    </div>
</div>
          </div>
        </div><!-- End Left side columns -->

         <!-- Right side columns -->
         <div class="col-lg-4">

<!-- Input Kas Masuk -->
<div class="card" id="inputPemasukanCard">
    <div class="card-body">
        <h5 class="card-title">Input Kas Masuk</h5>

        <form id="inputPemasukanForm">
            <div class="mb-3">
                <label for="inputDate" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="inputDate" name="tanggal" required>
            </div>

            <div class="mb-3">
                <label for="inputDescription" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="inputDescription" name="deskripsi" rows="3" placeholder="Masukkan deskripsi transaksi"></textarea>
            </div>

            <div class="mb-3">
                <label for="inputAkun" class="form-label">Akun</label>
                <select class="form-select" id="inputAkun" name="akun" required>
                    <option value="" disabled selected>Pilih akun</option>
                    <option value="piutang">Piutang</option>
                    <option value="modal">Modal</option>
                    <option value="penjualan">Penjualan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="inputQuantity" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="inputQuantity" name="jumlah" required min="1" value="1">
            </div>

            <div class="mb-3">
                <label for="inputPrice" class="form-label">Harga</label>
                <input type="number" class="form-control" id="inputPrice" name="harga" required min="0" step="0.01">
            </div>

            <button type="submit" class="btn btn-success">Simpan Kas Masuk</button>
        </form>
    </div>
</div>

<!-- Tambahkan referensi JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script>
    $(document).ready(function () {
        $('#inputPemasukanForm').on('submit', function (e) {
            e.preventDefault(); // Mencegah pengiriman form secara default

            const formData = {
                tanggal: $('#inputDate').val(),
                deskripsi: $('#inputDescription').val(),
                akun: $('#inputAkun').val(),
                jumlah: $('#inputQuantity').val(),
                harga: $('#inputPrice').val(),
            };
            $.ajax({
                url: '/saveKasMasuk',
                method: 'POST',
                data: formData,
                success: function (response) {
                    if (response.status === 'success') {
                        updateTotalPenjualan();
                        updateChart();
                        alert('Kas masuk berhasil disimpan!');
                        $('#inputPemasukanForm')[0].reset();
                    } else {
                        alert('Terjadi kesalahan saat menyimpan kas masuk.');
                    }
                },
                error: function () {
                    alert('Terjadi kesalahan saat menyimpan kas masuk.');
                }
            });
        });
    });

    function updateTotalPenjualan() {
        console.log("Updating total penjualan...");
        fetch("<?= base_url('akun1/getTotalMasuk') ?>")
            .then(response => response.json())
            .then(data => {
                console.log("Total penjualan data: ", data); // Log data dari server
                if (data.status === "success") {
                    document.getElementById("totalPenjualanDisplay").textContent = data.totalPenjualan;
                }
            })
            .catch(error => console.error("Error fetching total penjualan:", error));
    }

    function updateChart() {
    fetch("<?= base_url('akun1/getMonthlyTotals') ?>")
        .then(response => response.json())
        .then(data => {
            if (data.status === "success" && Array.isArray(data.monthlyTotals)) {
                const monthlyTotals = data.monthlyTotals;

                // Inisialisasi ulang data piutang, modal, dan penjualan
                const piutangData = Array(12).fill(0);
                const modalData = Array(12).fill(0);
                const penjualanData = Array(12).fill(0);

                // Update data berdasarkan user_id
                monthlyTotals.forEach(item => {
                    const monthIndex = parseInt(item.month.split('-')[1], 10) - 1;
                    if (item.akun === 'piutang') {
                        piutangData[monthIndex] = parseInt(item.total, 10);
                    } else if (item.akun === 'modal') {
                        modalData[monthIndex] = parseInt(item.total, 10);
                    } else if (item.akun === 'penjualan') {
                        penjualanData[monthIndex] = parseInt(item.total, 10);
                    }
                });

                // Update grafik dengan data baru
                window.paymentChart.updateSeries([
                    { name: 'Piutang', data: piutangData, color: '#dc3545' },
                    { name: 'Modal', data: modalData, color: '#28a745' },
                    { name: 'Penjualan', data: penjualanData, color: '#ffc107' }
                ]);
            } else {
                console.error("Data format tidak sesuai atau monthlyTotals bukan array");
            }
        })
        .catch(error => console.error("Error fetching chart data:", error));
}

function showDetail(id) {
    fetch(`/akun1/detail/${id}`)
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                document.getElementById('detailContent').innerHTML = `
                    <p>Tanggal: ${data.kas.tanggal}</p>
                    <p>Deskripsi: ${data.kas.deskripsi}</p>
                    <p>Akun: ${data.kas.akun}</p>
                    <p>Jumlah: ${data.kas.jumlah}</p>
                    <p>Harga: ${data.kas.harga}</p>
                `;
                new bootstrap.Modal(document.getElementById('modalDetail')).show();
            }
        });
}

function showEdit(id) {
  fetch(`akun1/edit/${id}`)
    .then(response => response.json())
    .then(data => {
        console.log(data); // Debug: lihat respon yang dikembalikan server
        if (data.status === 'success') {
            document.getElementById('editId').value = data.kas.id;
            document.getElementById('editTanggal').value = data.kas.tanggal;
            document.getElementById('editDeskripsi').value = data.kas.deskripsi;
            document.getElementById('editAkun').value = data.kas.akun;
            document.getElementById('editJumlah').value = data.kas.jumlah;
            document.getElementById('editHarga').value = data.kas.harga;
            new bootstrap.Modal(document.getElementById('modalEdit')).show();
        }
    });

}

function saveEdit() {
    const form = document.getElementById('formEdit');
    fetch('/akun1/update', {
        method: 'POST',
        body: new FormData(form)
    }).then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
                alert('Perubahan berhasil disimpan.');
                location.reload();
            } else {
                alert('Gagal menyimpan perubahan.');
            }
        })
        .catch(error => console.error('Error saving edit:', error));
}

function deleteKas(id) {
    if (confirm('Yakin ingin menghapus data ini?')) {
        fetch(`/akun1/delete/${id}`, { method: 'DELETE' })
            .then(response => response.json())
            .then(data => {
              if (data.status === 'success') {
                    alert('Data berhasil dihapus.');
                    location.reload();
                } else {
                    alert('Gagal menghapus data.');
                }
            })
            .catch(error => console.error('Error deleting data:', error));
    }
}

</script>

      </div><!-- End Right side columns -->

      </div>
    </section>

<!-- Recent Sales -->
<div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Kas Masuk</h5>
                  <table class="table table-borderless datatable">
    <thead>
        <tr>
            <th>#</th>
            <th>Tanggal</th>
            <th>Deskripsi</th>
            <th>Akun</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kasMasuk as $index => $kas): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $kas['tanggal'] ?></td>
                <td><?= $kas['deskripsi'] ?></td>
                <td><?= $kas['akun'] ?></td>
                <td><?= $kas['jumlah'] ?></td>
                <td><?= $kas['harga'] ?></td>
                <td>
                    <button class="btn btn-info btn-sm" onclick="showDetail(<?= $kas['id'] ?>)">Detail</button>
                    <!-- Show Edit and Delete buttons only if the kas record belongs to the logged-in user -->
                    <?php if ($kas['user_id'] === session()->get('user_id')): ?>
                    <button class="btn btn-warning btn-sm" onclick="showEdit(<?= $kas['id'] ?>)">Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteKas(<?= $kas['id'] ?>)">Hapus</button>
            <?php endif; ?>
        </td>
    </tr>
        <?php endforeach; ?>
    </tbody>
</table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <div class="modal fade" id="modalDetail" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Kas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p id="detailContent"></p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEdit" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Kas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formEdit">
                    <input type="hidden" id="editId" name="id">
                    <div class="mb-3">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" id="editTanggal" name="tanggal">
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" id="editDeskripsi" name="deskripsi">
                    </div>
                    <div class="mb-3">
                        <label>Akun</label>
                        <select class="form-control" id="editAkun" name="akun">
                            <option value="piutang">Piutang</option>
                            <option value="modal">Modal</option>
                            <option value="penjualan">Penjualan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Jumlah</label>
                        <input type="number" class="form-control" id="editJumlah" name="jumlah">
                    </div>
                    <div class="mb-3">
                        <label>Harga</label>
                        <input type="number" class="form-control" id="editHarga" name="harga">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" onclick="saveEdit()">Simpan</button>
            </div>
        </div>
    </div>
</div>

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