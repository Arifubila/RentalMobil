<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CV.Arifubila — Tambah Rental</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <style>
        :root {
            --bg: #f5f7fb;
            --surface: #ffffff;
            --text: #172033;
            --muted: #7b8496;
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --border: #e7eaf0;
            --sidebar: #111827;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", sans-serif;
            background: var(--bg) !important;
            color: var(--text);
        }

        #wrapper {
            min-height: 100vh;
        }

        /* =========================
           SIDEBAR
        ========================= */

        #accordionSidebar {
            background: linear-gradient(
                180deg,
                #111827 0%,
                #1f2937 100%
            ) !important;

            border: 0 !important;
            box-shadow: 8px 0 30px rgba(15, 23, 42, .08);
        }

        .sidebar-brand {
            height: 76px;
            font-weight: 800;
            letter-spacing: -.3px;
        }

        .sidebar-brand-icon {
            transform: none !important;
            color: #a5b4fc;
        }

        .sidebar .nav-item .nav-link {
            margin: 5px 12px;
            padding: 13px 15px;
            border-radius: 12px;
            color: #cbd5e1;
            transition: .2s ease;
        }

        .sidebar .nav-item .nav-link:hover,
        .sidebar .nav-item.active .nav-link {
            background: rgba(255,255,255,.09);
            color: #fff;
        }

        .sidebar .nav-item .nav-link i {
            color: #a5b4fc;
        }

        .sidebar-heading {
            color: #64748b !important;
            font-size: 10px;
            letter-spacing: 1.3px;
            font-weight: 800;
            padding-left: 20px;
        }

        .collapse-inner {
            background: #273449 !important;
            border: 1px solid rgba(255,255,255,.05);
        }

        /* =========================
           CONTENT
        ========================= */

        #content-wrapper {
            background: var(--bg) !important;
            border: 0 !important;
        }

        /* =========================
           TOPBAR
        ========================= */

        .topbar {
            height: 76px;
            background: rgba(255,255,255,.92) !important;
            border: 0 !important;
            box-shadow: 0 4px 20px rgba(15,23,42,.05) !important;
            backdrop-filter: blur(10px);
        }

        .navbar-search .input-group {
            width: 330px;
        }

        .navbar-search .form-control {
            height: 42px;
            border: 1px solid var(--border) !important;
            border-radius: 12px 0 0 12px !important;
            background: #f8fafc !important;
            color: var(--text);
        }

        .navbar-search .btn {
            border-radius: 0 12px 12px 0;
            background: var(--primary);
            border-color: var(--primary);
        }

        .topbar .nav-link {
            color: #64748b !important;
        }

        .topbar .nav-link:hover {
            color: var(--primary) !important;
        }

        /* =========================
           PAGE HEADER
        ========================= */

        .page-header {
            padding: 8px 0 22px;
        }

        .eyebrow {
            color: var(--primary);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.3px;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .page-title {
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -.8px;
            margin: 0;
            color: var(--text);
        }

        .page-subtitle {
            color: var(--muted);
            margin: 7px 0 0;
            font-size: 14px;
        }

        /* =========================
           RENTAL CARD
        ========================= */

        .rental-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 20px;
            box-shadow: 0 12px 35px rgba(15, 23, 42, .06);
            overflow: hidden;
            margin-bottom: 35px;
        }

        .card-header-modern {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 22px 26px;
            border-bottom: 1px solid var(--border);
            background: linear-gradient(
                135deg,
                #ffffff 0%,
                #f8faff 100%
            );
        }

        .header-icon {
            width: 44px;
            height: 44px;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #eef2ff;
            color: var(--primary);
            font-size: 18px;
        }

        .card-header-modern h2 {
            font-size: 17px;
            font-weight: 800;
            margin: 0;
            color: var(--text);
        }

        .card-header-modern p {
            margin: 3px 0 0;
            color: var(--muted);
            font-size: 12px;
        }

        .card-body-modern {
            padding: 28px;
        }

        /* =========================
           FORM
        ========================= */

        .section-label {
            font-size: 11px;
            font-weight: 800;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 4px 0 15px;
        }

        .form-group-modern {
            margin-bottom: 20px;
        }

        .form-label-modern {
            display: block;
            margin-bottom: 8px;
            font-size: 13px;
            font-weight: 700;
            color: #374151;
        }

        .input-wrap {
            position: relative;
        }

        .input-wrap i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            z-index: 2;
        }

        .form-control-modern,
        .form-select-modern {
            width: 100%;
            height: 48px;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            background: #f9fafb;
            color: #1f2937;
            padding: 0 15px;
            outline: none;
            transition: .2s ease;
        }

        .input-wrap .form-control-modern,
        .input-wrap .form-select-modern {
            padding-left: 42px;
        }

        .form-control-modern:focus,
        .form-select-modern:focus {
            border-color: #818cf8;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(79,70,229,.10);
        }

        .form-control-modern[readonly] {
            background: #f1f5f9;
            color: #64748b;
            cursor: not-allowed;
        }

        /* =========================
           TOTAL
        ========================= */

        .total-box .form-control-modern {
            height: 56px;
            font-size: 20px;
            font-weight: 800;
            color: var(--primary);
            background: #eef2ff;
            border-color: #c7d2fe;
        }

        .total-box i {
            color: var(--primary);
        }

        /* =========================
           BUTTON
        ========================= */

        .action-row {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            padding-top: 8px;
            margin-top: 8px;
            border-top: 1px solid var(--border);
        }

        .btn-modern {
            min-height: 44px;
            padding: 0 20px;
            border: 0;
            border-radius: 11px;
            font-size: 13px;
            font-weight: 700;
            transition: .2s ease;
        }

        .btn-back {
            background: #f1f5f9;
            color: #475569;
        }

        .btn-back:hover {
            background: #e2e8f0;
            color: #1e293b;
        }

        .btn-save {
            background: linear-gradient(
                135deg,
                var(--primary),
                var(--primary-dark)
            );

            color: #fff;
            box-shadow: 0 7px 18px rgba(79,70,229,.22);
        }

        .btn-save:hover {
            transform: translateY(-1px);
            color: #fff;
            box-shadow: 0 10px 22px rgba(79,70,229,.30);
        }

        /* =========================
           PROFILE
        ========================= */

        .profile-name {
            color: #334155 !important;
            font-weight: 600;
        }

        .img-profile {
            border: 2px solid #e0e7ff;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 767px) {

            .topbar {
                height: 68px;
            }

            .navbar-search {
                display: none !important;
            }

            .page-title {
                font-size: 23px;
            }

            .card-body-modern {
                padding: 20px;
            }

            .card-header-modern {
                padding: 18px 20px;
            }

            .action-row {
                justify-content: stretch;
            }

            .btn-modern {
                flex: 1;
            }
        }
    </style>
</head>

<body id="page-top">

<div id="wrapper">

    <!-- =========================
         SIDEBAR
    ========================= -->

    <ul class="navbar-nav sidebar sidebar-dark accordion"
        id="accordionSidebar">

        <!-- Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center"
           href="home.php">

            <div class="sidebar-brand-icon">
                <i class="fa-solid fa-car-side"></i>
            </div>

            <div class="sidebar-brand-text mx-3">
                CV.Arifubila
            </div>

        </a>

        <hr class="sidebar-divider my-0">

        <!-- Dashboard -->
        <li class="nav-item">

            <a class="nav-link"
               href="home.php">

                <i class="fas fa-fw fa-chart-pie"></i>

                <span>Dashboard</span>

            </a>

        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            MENU UTAMA
        </div>

        <!-- Data Master -->
        <li class="nav-item">

            <a class="nav-link collapsed"
               href="#"
               data-toggle="collapse"
               data-target="#collapseTwo"
               aria-expanded="false"
               aria-controls="collapseTwo">

                <i class="fas fa-fw fa-database"></i>

                <span>Data Master</span>

            </a>

            <div id="collapseTwo"
                 class="collapse"
                 data-parent="#accordionSidebar">

                <div class="py-2 collapse-inner rounded">

                    <h6 class="collapse-header">
                        Kelola Data
                    </h6>

                    <a class="collapse-item text-white"
                       href="../mobil/mobil.php">

                        <i class="fas fa-car mr-2"></i>
                        Data Mobil

                    </a>

                    <a class="collapse-item text-white"
                       href="../pelanggan/pelanggan.php">

                        <i class="fas fa-users mr-2"></i>
                        Data Pelanggan

                    </a>

                </div>

            </div>

        </li>

        <!-- Rental -->
        <li class="nav-item active">

            <a class="nav-link"
               href="rental.php">

                <i class="fas fa-fw fa-calendar-check"></i>

                <span>Rental Mobil</span>

            </a>

        </li>

        <hr class="sidebar-divider d-none d-md-block">

        <div class="text-center d-none d-md-inline">

            <button class="rounded-circle border-0"
                    id="sidebarToggle">
            </button>

        </div>

    </ul>

    <!-- =========================
         CONTENT
    ========================= -->

    <div id="content-wrapper"
         class="d-flex flex-column">

        <div id="content">

            <!-- =========================
                 TOPBAR
            ========================= -->

            <nav class="navbar navbar-expand topbar mb-4 static-top">

                <button id="sidebarToggleTop"
                        class="btn btn-link d-md-none rounded-circle mr-3">

                    <i class="fa fa-bars"></i>

                </button>

                <!-- Search -->

                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 navbar-search"
                      action="cari_rental.php"
                      method="GET">

                    <div class="input-group">

                        <input type="text"
                               name="keyword"
                               class="form-control small"
                               placeholder="Cari transaksi rental..."
                               aria-label="Search"
                               required>

                        <div class="input-group-append">

                            <button class="btn"
                                    type="submit">

                                <i class="fas fa-search fa-sm text-white"></i>

                            </button>

                        </div>

                    </div>

                </form>

                <!-- Navbar -->

                <ul class="navbar-nav ml-auto">

                    <!-- Notification -->

                    <li class="nav-item dropdown no-arrow mx-1">

                        <a class="nav-link dropdown-toggle"
                           href="#"
                           id="alertsDropdown"
                           role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">

                            <i class="fas fa-bell fa-fw"></i>

                            <span class="badge badge-danger badge-counter">
                                3+
                            </span>

                        </a>

                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow"
                             aria-labelledby="alertsDropdown">

                            <h6 class="dropdown-header">
                                Notifikasi
                            </h6>

                            <a class="dropdown-item d-flex align-items-center"
                               href="#">

                                <div class="mr-3">

                                    <div class="icon-circle bg-primary">

                                        <i class="fas fa-car text-white"></i>

                                    </div>

                                </div>

                                <div>

                                    <div class="small text-gray-500">
                                        Hari ini
                                    </div>

                                    <span class="font-weight-bold">
                                        Data rental baru tersedia.
                                    </span>

                                </div>

                            </a>

                            <a class="dropdown-item text-center small text-gray-500"
                               href="#">

                                Lihat semua

                            </a>

                        </div>

                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- User -->

                    <li class="nav-item dropdown no-arrow">

                        <a class="nav-link dropdown-toggle"
                           href="#"
                           id="userDropdown"
                           role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">

                            <span class="mr-2 d-none d-lg-inline small profile-name">
                                Admin
                            </span>

                            <img class="img-profile rounded-circle"
                                 src="../img/undraw_profile.svg">

                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow"
                             aria-labelledby="userDropdown">

                            <a class="dropdown-item"
                               href="#">

                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>

                                Profil

                            </a>

                            <a class="dropdown-item"
                               href="#">

                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>

                                Pengaturan

                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item"
                               href="#"
                               data-toggle="modal"
                               data-target="#logoutModal">

                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                                Logout

                            </a>

                        </div>

                    </li>

                </ul>

            </nav>

            <!-- =========================
                 MAIN CONTENT
            ========================= -->

            <div class="container-fluid">

                <!-- Page Header -->

                <div class="page-header">

                    <div class="eyebrow">
                        Rental Management
                    </div>

                    <h1 class="page-title">
                        Tambah Rental Mobil
                    </h1>

                    <p class="page-subtitle">
                        Masukkan detail pelanggan, kendaraan,
                        dan pembayaran rental.
                    </p>

                </div>

                <!-- Rental Card -->

                <div class="rental-card">

                    <!-- Card Header -->

                    <div class="card-header-modern">

                        <div class="header-icon">

                            <i class="fas fa-file-circle-plus"></i>

                        </div>

                        <div>

                            <h2>
                                Informasi Rental
                            </h2>

                            <p>
                                Lengkapi seluruh data sebelum menyimpan transaksi.
                            </p>

                        </div>

                    </div>

                    <!-- Card Body -->

                    <div class="card-body-modern">

                        <form method="POST"
                              action="insert_rental.php">

                            <?php

                            // Menghasilkan nomor transaksi

                            $no_trx_arif =
                                "TRX-" . date("YmdHis");

                            ?>

                            <!-- DETAIL TRANSAKSI -->

                            <div class="section-label">
                                Detail transaksi
                            </div>

                            <div class="row">

                                <!-- No Transaksi -->

                                <div class="col-md-6 form-group-modern">

                                    <label for="no_trx_arif"
                                           class="form-label-modern">

                                        No. Transaksi

                                    </label>

                                    <div class="input-wrap">

                                        <i class="fas fa-hashtag"></i>

                                        <input type="text"
                                               name="no_trx_arif"
                                               class="form-control-modern"
                                               id="no_trx_arif"
                                               value="<?php echo $no_trx_arif; ?>"
                                               readonly>

                                    </div>

                                </div>

                                <!-- Tanggal -->

                                <div class="col-md-6 form-group-modern">

                                    <label for="tgl_rental_arif"
                                           class="form-label-modern">

                                        Tanggal Ambil

                                    </label>

                                    <div class="input-wrap">

                                        <i class="far fa-calendar"></i>

                                        <input type="date"
                                               name="tgl_rental_arif"
                                               class="form-control-modern"
                                               id="tgl_rental_arif"
                                               required>

                                    </div>

                                </div>

                                <!-- Pelanggan -->

                                <div class="col-md-6 form-group-modern">

                                    <label for="pelanggan_arif"
                                           class="form-label-modern">

                                        Pelanggan

                                    </label>

                                    <div class="input-wrap">

                                        <i class="fas fa-user"></i>

                                        <select name="nik_ktp_arif"
                                                class="form-select-modern"
                                                id="pelanggan_arif"
                                                required>

                                            <option value="">
                                                -- Pilih Pelanggan --
                                            </option>

                                            <?php

                                            include "../koneksi.php";

                                            $tampil =
                                                mysqli_query(
                                                    $koneksi,
                                                    "SELECT * FROM tbl_pelanggan_arif"
                                                );

                                            while (
                                                $data =
                                                mysqli_fetch_array($tampil)
                                            ) {

                                                echo "
                                                <option value='$data[nama_arif]'>
                                                    $data[nik_ktp_arif] -
                                                    $data[nama_arif]
                                                </option>";

                                            }

                                            ?>

                                        </select>

                                    </div>

                                </div>

                                <!-- Jam -->

                                <div class="col-md-6 form-group-modern">

                                    <label for="jam_rental_arif"
                                           class="form-label-modern">

                                        Jam Ambil

                                    </label>

                                    <div class="input-wrap">

                                        <i class="far fa-clock"></i>

                                        <input type="time"
                                               name="jam_rental_arif"
                                               class="form-control-modern"
                                               id="jam_rental_arif"
                                               required>

                                    </div>

                                </div>

                            </div>

                            <!-- KENDARAAN -->

                            <div class="section-label mt-2">

                                Kendaraan & Pembayaran

                            </div>

                            <div class="row">

                                <!-- Mobil -->

                                <div class="col-md-6 form-group-modern">

                                    <label for="nama_mobil_arif"
                                           class="form-label-modern">

                                        Mobil

                                    </label>

                                    <div class="input-wrap">

                                        <i class="fas fa-car"></i>

                                        <select name="no_plat_arif"
                                                class="form-select-modern"
                                                id="nama_mobil_arif"
                                                required>

                                            <option value="">
                                                -- Pilih Mobil --
                                            </option>

                                            <?php

                                            include "../koneksi.php";

                                            $tampil =
                                                mysqli_query(
                                                    $koneksi,
                                                    "SELECT * FROM tbl_mobil_arif"
                                                );

                                            while (
                                                $data =
                                                mysqli_fetch_array($tampil)
                                            ) {

                                                echo "
                                                <option value='$data[brand_mobil_arif]'>
                                                    $data[no_plat_arif] -
                                                    $data[brand_mobil_arif]
                                                </option>";

                                            }

                                            ?>

                                        </select>

                                    </div>

                                </div>

                                <!-- Lama Rental -->

                                <div class="col-md-6 form-group-modern">

                                    <label for="lama_arif"
                                           class="form-label-modern">

                                        Lama Rental (Hari)

                                    </label>

                                    <div class="input-wrap">

                                        <i class="fas fa-calendar-day"></i>

                                        <input type="number"
                                               name="lama_arif"
                                               class="form-control-modern"
                                               id="lama_arif"
                                               min="1"
                                               placeholder="Contoh: 3"
                                               required
                                               oninput="calculateTotal()">

                                    </div>

                                </div>

                                <!-- Harga -->

                                <div class="col-md-6 form-group-modern">

                                    <label for="harga_arif"
                                           class="form-label-modern">

                                        Harga Rental / Hari

                                    </label>

                                    <div class="input-wrap">

                                        <i class="fas fa-money-bill-wave"></i>

                                        <input type="number"
                                               name="harga_arif"
                                               class="form-control-modern"
                                               id="harga_arif"
                                               min="0"
                                               placeholder="Contoh: 250000"
                                               required
                                               oninput="calculateTotal()">

                                    </div>

                                </div>

                                <!-- Total -->

                                <div class="col-md-6 form-group-modern total-box">

                                    <label for="total_bayar_arif"
                                           class="form-label-modern">

                                        Total Pembayaran

                                    </label>

                                    <div class="input-wrap">

                                        <i class="fas fa-receipt"></i>

                                        <input type="number"
                                               name="total_bayar_arif"
                                               class="form-control-modern"
                                               id="total_bayar_arif"
                                               placeholder="Rp 0"
                                               readonly>

                                    </div>

                                </div>

                            </div>

                            <!-- BUTTON -->

                            <div class="action-row">

                                <a href="rental.php"
                                   class="btn-modern btn-back d-flex align-items-center justify-content-center">

                                    <i class="fas fa-arrow-left mr-2"></i>

                                    Kembali

                                </a>

                                <button type="submit"
                                        class="btn-modern btn-save">

                                    <i class="fas fa-check mr-2"></i>

                                    Simpan Rental

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- =========================
     LOGOUT MODAL
========================= -->

<div class="modal fade"
     id="logoutModal"
     tabindex="-1"
     role="dialog"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered"
         role="document">

        <div class="modal-content border-0 shadow">

            <div class="modal-header">

                <h5 class="modal-title"
                    id="exampleModalLabel">

                    Keluar dari sistem?

                </h5>

                <button class="close"
                        type="button"
                        data-dismiss="modal"
                        aria-label="Close">

                    <span aria-hidden="true">
                        &times;
                    </span>

                </button>

            </div>

            <div class="modal-body">

                Anda akan diarahkan ke halaman login.

            </div>

            <div class="modal-footer">

                <button class="btn btn-light"
                        type="button"
                        data-dismiss="modal">

                    Batal

                </button>

                <a class="btn btn-primary"
                   href="login.php">

                    Logout

                </a>

            </div>

        </div>

    </div>

</div>

<!-- =========================
     JAVASCRIPT
========================= -->

<script>

function calculateTotal() {

    const lama =
        parseFloat(
            document.getElementById(
                'lama_arif'
            ).value
        ) || 0;

    const harga =
        parseFloat(
            document.getElementById(
                'harga_arif'
            ).value
        ) || 0;

    const totalBayar =
        document.getElementById(
            'total_bayar_arif'
        );

    totalBayar.value =
        lama * harga;

}

</script>

<script src="../vendor/jquery/jquery.min.js"></script>

<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="../js/sb-admin-2.min.js"></script>

</body>
</html>