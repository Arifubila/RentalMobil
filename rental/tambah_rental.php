
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CV.Rental Mobil Arifubila</title>
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <style>
        .custom-btn {
            background-color: #6F7B7F;
            color: #ffffff;
            transition: background-color 0.3s, color 0.3s;
        }

        .custom-btn:hover {
            background-color: #AFAEAE;
            color: #ffffff;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion border border-secondary-subtle border-start-0" id="accordionSidebar" style="background-color: #0F0F0F;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-solid fa-crown fs-5"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CV.Arifubila</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">Interface</div>

            <!-- Nav Item - Data Kategori -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Kategori</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner rounded" style="background-color: #6F7B7F;">
                        <h6 class="collapse-header">Data Kategori:</h6>
                        <a class="collapse-item text-white" href="../mobil/mobil.php">Data Mobil</a>
                        <a class="collapse-item text-white" href="../pelanggan/pelanggan.php">Data Pelanggan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="rental.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Rental Mobil</span>
                </a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column border border-start-0" style="background-color: #0F0F0F;">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand border-bottom topbar mb-4 static-top shadow" style="background-color: #0F0F0F;">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
<!-- Topbar Search -->
    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="cari_rental.php" method="GET">
        <div class="input-group">
            <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" required>
            <div class="input-group-append">
                <button class="btn btn-secondary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow ano_trx_arifated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw text-white"></i>
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow ano_trx_arifated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header bg-secondary">Alerts Center</h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small">Elon Musk</span>
                                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow ano_trx_arifated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-white">Choose Your Vehicle</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                        </a>
                    </div>
                </div>
                            
         <!-- Card Car Content -->
         <div class="container-fluid">
                        <div class="mb-3" style="background: #222831; border-radius: 20px;">
                            <div class="p-3" style="background-color: #31363F; border-radius: 15px 15px 0 0;">Tambah Data rental</div>
                            <div class="card-body text-white">
                                <form method="POST" action="insert_rental.php">
                                <?php
        // Menghasilkan nomor transaksi
        $no_trx_arif = "TRX-" . date("YmdHis");
        ?>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="no_trx_arif" class="form-label">No Trx :</label>
                                            <input type="text" name="no_trx_arif" class="form-control" id="no_trx_arif"  value="<?php echo $no_trx_arif; ?>" readonly>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="tgl_rental_arif" class="form-label">Tanggal Ambil :</label>
                                            <input type="date" name="tgl_rental_arif" class="form-control" id="tgl_rental_arif" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="pelanggan_arif" class="form-label">Pelanggan :</label>
                                            <select name="nik_ktp_arif" class="form-control">
                                                <option value="">-- Pilih Pelanggan --</option>
                                                <?php
    include "../koneksi.php";
    $tampil=mysqli_query($koneksi,"SELECT * FROM tbl_pelanggan_arif");
    while($data=mysqli_fetch_array($tampil)){
    echo"<option value='$data[nama_arif]'>$data[nik_ktp_arif] -
    $data[nama_arif] </option>";
    }
    ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                    <label for="jam_rental_arif" class="form-label">Jam Ambil:</label>
                                    <input type="time" name="jam_rental_arif" class="form-control" id="jam_rental_arif" required>
                                    </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nama_mobil_arif" class="form-label">Mobil :</label>
                                        <select name="no_plat_arif" class="form-control">
                                            <option value="">-- Pilih Mobil --</option>
                                            <?php
include "../koneksi.php";
$tampil=mysqli_query($koneksi,"SELECT * FROM tbl_mobil_arif");
while($data=mysqli_fetch_array($tampil)){
echo"<option value='$data[brand_mobil_arif]'>$data[no_plat_arif] -
$data[brand_mobil_arif] </option>";
}
?>
                                        </select>
                                    </div>
                                        <div class="col-md-6 mb-3">
                                        <label for="lama_arif">Lama Rental :</label>
                                        <input type="number" name="lama_arif" class="form-control" id="lama_arif" placeholder="Masukkan Lama Rental" required oninput="calculateTotal()">
                                    </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                        <label for="harga_arif">Harga Rental :</label>
                                        <input type="number" name="harga_arif" class="form-control" id="harga_arif" placeholder="Masukkan Harga Rental" required oninput="calculateTotal()">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                        <label for="total_bayar_arif">Total Bayar :</label>
                                        <input type="number" name="total_bayar_arif" class="form-control" id="total_bayar_arif" placeholder="Total Bayar" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <a href="rental.php" class="btn btn-warning">Kembali</a>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>

    <script>
        function calculateTotal() {
            const lama = document.getElementById('lama_arif').value;
            const harga = document.getElementById('harga_arif').value;
            const totalBayar = document.getElementById('total_bayar_arif');

            // Menghitung total bayar
            totalBayar.value = (lama && harga) ? lama * harga : 0; // Jika tidak ada input, set ke 0
        }
    </script>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.php">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>