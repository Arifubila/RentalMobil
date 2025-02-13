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
    
    <link href="css/sb-admin-2.css" rel="stylesheet">

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

        .tkecil {
            font-size: 0.7rem;
        }

        .car-image {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px; /* Jarak antar kartu */
        }

        .card {
            flex: 1 1 300px; /* Ukuran minimum 300px, fleksibel */
            margin: 10px;
            border: none;
            background: linear-gradient(to bottom, #6F7B7F, #181D1E);
        }

        @media (max-width: 768px) {
            .card {
                flex: 1 1 100%; /* Pada perangkat kecil, kartu memenuhi lebar penuh */
            }
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
                        <a class="collapse-item text-white" href="mobil/mobil.php">Data Mobil</a>
                        <a class="collapse-item text-white" href="pelanggan/pelanggan.php">Data Pelanggan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="rental/rental.php">
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
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
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
                    </div>
                </div>
                            <!--Card Car Conten-->
                            <div class="container-fluid card-container">
                    <!-- Card 1 -->
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title text-white">BMW M440 Coupe</h5>
                            <div class="d-flex justify-content-between">
                                <p class="advice text-white tkecil border rounded-pill px-2 py-1">ADVICE OF THE DAY</p>
                                <p class="advice text-white tkecil border rounded-pill px-2 py-1">BEST IN CLASS</p>
                            </div>
                            <img src="img/car1.png" alt="BMW M440 Coupe" class="card-img-top car-image">
                            <p class="price text-white mb-0 mt-3">159.99 <span class="small">€ / HARI</span></p>
                            <div class="d-flex justify-content-between">
                                <p class="total-price text-white">1,427.84 <span class="small">€ TOTAL</span></p>
                                <p class="text-white border px-2 d-flex align-items-center small rounded-pill">Automatic</p>
                            </div>
                            <a href="rental/tambah_rental.php" class="text-decoration-none">
                                <button class="btn btn-block custom-btn"><b>START RENT</b></button>
                            </a>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title text-white">Porsche 911</h5>
                            <div class="d-flex justify-content-between">
                                <p class="advice text-white tkecil border rounded-pill px-2 py-1">ADVICE OF THE DAY</p>
                                <p class="advice text-white tkecil border rounded-pill px-2 py-1">BEST IN CLASS</p>
                            </div>
                            <img src="img/car2.png" alt="Porsche 911" class="card-img-top car-image">
                            <p class="price text-white mb-0 mt-3">159.99 <span class="small">€ / HARI</span></p>
                            <div class="d-flex justify-content-between">
                                <p class="total-price text-white">1,427.84 <span class="small">€ TOTAL</span></p>
                                <p class="text-white border px-2 d-flex align-items-center small rounded-pill">Manual</p>
                            </div>
                            <a href="rental/tambah_rental.php" class="text-decoration-none">
                                <button class="btn btn-block custom-btn"><b>START RENT</b></button>
                            </a>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title text-white">Mercedes-Benz G-Class</h5>
                            <div class="d-flex justify-content-between">
                                <p class="advice text-white tkecil border rounded-pill px-2 py-1">ADVICE OF THE DAY</p>
                                <p class="advice text-white tkecil border rounded-pill px-2 py-1">BEST IN CLASS</p>
                            </div>
                            <img src="img/car3.png" alt="Mercedes-Benz G-Class" class="card-img-top car-image">
                            <p class="price text-white mb-0 mt-3">159.99 <span class="small">€ / HARI</span></p>
                            <div class="d-flex justify-content-between">
                                <p class="total-price text-white">1,427.84 <span class="small">€ TOTAL</span></p>
                                <p class="text-white border px-2 d-flex align-items-center small rounded-pill">Automatic</p>
                            </div>
                            <a href="rental/tambah_rental.php" class="text-decoration-none">
                                <button class="btn btn-block custom-btn"><b>START RENT</b></button>
                            </a>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title text-white">Rolls-Royce Phantom</h5>
                            <div class="d-flex justify-content-between">
                                <p class="advice text-white tkecil border rounded-pill px-2 py-1">ADVICE OF THE DAY</p>
                                <p class="advice text-white tkecil border rounded-pill px-2 py-1">BEST IN CLASS</p>
                            </div>
                            <img src="img/car4.png" alt="Rolls-Royce Phantom" class="card-img-top car-image">
                            <p class="price text-white mb-0 mt-3">159.99 <span class="small">€ / HARI</span></p>
                            <div class="d-flex justify-content-between">
                                <p class="total-price text-white">1,427.84 <span class="small">€ TOTAL</span></p>
                                <p class="text-white border px-2 d-flex align-items-center small rounded-pill">Automatic</p>
                            </div>
                            <a href="rental/tambah_rental.php" class="text-decoration-none">
                                <button class="btn btn-block custom-btn"><b>START RENT</b></button>
                            </a>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title text-white">Toyota Supra</h5>
                            <div class="d-flex justify-content-between">
                                <p class="advice text-white tkecil border rounded-pill px-2 py-1">ADVICE OF THE DAY</p>
                                <p class="advice text-white tkecil border rounded-pill px-2 py-1">BEST IN CLASS</p>
                            </div>
                            <img src="img/car7.png" alt="Toyota Supra" class="card-img-top car-image">
                            <p class="price text-white mb-0 mt-3">159.99 <span class="small">€ / HARI</span></p>
                            <div class="d-flex justify-content-between">
                                <p class="total-price text-white">1,427.84 <span class="small">€ TOTAL</span></p>
                                <p class="text-white border px-2 d-flex align-items-center small rounded-pill">Manual</p>
                            </div>
                            <a href="rental/tambah_rental.php" class="text-decoration-none">
                                <button class="btn btn-block custom-btn"><b>START RENT</b></button>
                            </a>
                        </div>
                    </div>
                    <!-- Card 6 -->
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title text-white">Nissan GT-R</h5>
                            <div class="d-flex justify-content-between">
                                <p class="advice text-white tkecil border rounded-pill px-2 py-1">ADVICE OF THE DAY</p>
                                <p class="advice text-white tkecil border rounded-pill px-2 py-1">BEST IN CLASS</p>
                            </div>
                            <img src="img/car6.png" alt="Nissan GT-R" class="card-img-top car-image">
                            <p class="price text-white mb-0 mt-3">159.99 <span class="small">€ / HARI</span></p>
                            <div class="d-flex justify-content-between">
                                <p class="total-price text-white">1,427.84 <span class="small">€ TOTAL</span></p>
                                <p class="text-white border px-2 d-flex align-items-center small rounded-pill">Automatic</p>
                            </div>
                            <a href="rental/tambah_rental.php" class="text-decoration-none">
                                <button class="btn btn-block custom-btn"><b>START RENT</b></button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        function showDeleteModal(url) {
            // Set URL untuk konfirmasi hapus
            document.getElementById('confirmDelete').setAttribute('href', url);

            // Tampilkan modal
            var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            deleteModal.show();
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
                <a class="btn btn-primary" href="destroy_session.php">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>