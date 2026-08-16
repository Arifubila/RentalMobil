<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CV. Rental Mobil Arifubila</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Bootstrap / SB Admin -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #080b12 !important;
            color: #fff;
        }

        /* =========================
           SIDEBAR
        ========================= */

        #accordionSidebar {
            background: linear-gradient(
                180deg,
                #0d1117 0%,
                #080b10 100%
            ) !important;

            border-right: 1px solid rgba(255,255,255,.08) !important;
        }

        .sidebar-brand {
            height: 80px;
            transition: .3s ease;
        }

        .sidebar-brand:hover {
            transform: translateY(-2px);
        }

        .sidebar-brand-icon {
            color: #60a5fa !important;
        }

        .sidebar-brand-icon i {
            font-size: 20px;
        }

        .sidebar-brand-text {
            font-size: 15px;
            font-weight: 800;
            letter-spacing: .5px;
            color: #fff !important;
        }

        .sidebar .nav-item {
            margin: 5px 12px;
        }

        .sidebar .nav-link {
            border-radius: 12px;
            color: #94a3b8 !important;
            padding: 13px 15px;
            transition: all .25s ease;
        }

        .sidebar .nav-link i {
            color: #64748b;
            transition: .25s ease;
        }

        .sidebar .nav-link:hover {
            background: rgba(59,130,246,.12);
            color: #fff !important;
            transform: translateX(4px);
        }

        .sidebar .nav-link:hover i {
            color: #60a5fa;
        }

        .sidebar .nav-item.active .nav-link {
            background: linear-gradient(
                135deg,
                rgba(37,99,235,.25),
                rgba(14,165,233,.10)
            );

            color: #fff !important;

            border: 1px solid rgba(96,165,250,.15);
        }

        .sidebar .nav-item.active .nav-link i {
            color: #60a5fa;
        }

        .sidebar-heading {
            color: #475569 !important;
            font-size: 10px;
            letter-spacing: 1.5px;
            font-weight: 700;
            padding-left: 20px;
        }

        .sidebar-divider {
            border-top: 1px solid rgba(255,255,255,.07) !important;
        }

        .collapse-inner {
            background: #111827 !important;
            border: 1px solid rgba(255,255,255,.06);
            border-radius: 12px !important;
        }

        .collapse-header {
            color: #64748b !important;
        }

        .collapse-item {
            color: #94a3b8 !important;
            border-radius: 8px;
            transition: .2s;
        }

        .collapse-item:hover {
            background: rgba(59,130,246,.12);
            color: #fff !important;
        }

        /* =========================
           CONTENT
        ========================= */

        #content-wrapper {
            background:
                radial-gradient(
                    circle at 80% 10%,
                    rgba(37,99,235,.08),
                    transparent 25%
                ),
                #080b12 !important;
        }

        /* =========================
           TOPBAR
        ========================= */

        .topbar {
            height: 78px;

            background: rgba(8,11,18,.88) !important;

            border-bottom: 1px solid rgba(255,255,255,.07) !important;

            backdrop-filter: blur(15px);
        }

        .navbar-search .form-control {
            background: #111827 !important;
            color: #fff !important;

            border: 1px solid rgba(255,255,255,.08) !important;

            border-radius: 12px 0 0 12px;
        }

        .navbar-search .form-control::placeholder {
            color: #64748b;
        }

        .navbar-search .btn {
            border-radius: 0 12px 12px 0;

            background: #2563eb !important;

            border: none;
        }

        .topbar .nav-link {
            transition: .2s;
        }

        .topbar .nav-link:hover {
            opacity: .75;
        }

        .topbar-divider {
            border-left: 1px solid rgba(255,255,255,.1) !important;
        }

        .img-profile {
            width: 38px;
            height: 38px;

            object-fit: cover;

            border: 2px solid rgba(96,165,250,.4);
        }

        .badge-counter {
            border-radius: 50px;
            font-size: 9px;
        }

        /* =========================
           PAGE HEADER
        ========================= */

        .page-header {
            margin: 25px 0 25px;
        }

        .page-title {
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 6px;
        }

        .page-subtitle {
            color: #64748b;
            font-size: 13px;
        }

        /* =========================
           DATA CARD
        ========================= */

        .data-card {
            background: linear-gradient(
                145deg,
                #151b25,
                #0d1117
            );

            border: 1px solid rgba(255,255,255,.07);

            border-radius: 20px;

            overflow: hidden;

            box-shadow: 0 15px 40px rgba(0,0,0,.25);
        }

        .data-card-header {
            padding: 20px 24px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            border-bottom: 1px solid rgba(255,255,255,.07);
        }

        .data-card-title {
            margin: 0;

            color: #fff;

            font-size: 17px;

            font-weight: 700;
        }

        .data-card-subtitle {
            margin: 5px 0 0;

            color: #64748b;

            font-size: 11px;
        }

        /* =========================
           BUTTON
        ========================= */

        .custom-btn {
            background: linear-gradient(
                135deg,
                #2563eb,
                #1d4ed8
            );

            color: #fff !important;

            border: none;

            border-radius: 10px;

            padding: 10px 15px;

            font-size: 12px;

            font-weight: 600;

            transition: all .25s ease;

            text-decoration: none !important;
        }

        .custom-btn:hover {
            transform: translateY(-2px);

            color: #fff !important;

            box-shadow: 0 8px 20px rgba(37,99,235,.25);
        }

        /* =========================
           TABLE
        ========================= */

        .table-container {
            padding: 20px 24px 24px;
        }

        .table {
            margin-bottom: 0;

            color: #fff !important;

            border-color: rgba(255,255,255,.07) !important;
        }

        .table thead th {
            background: #111827 !important;

            color: #94a3b8 !important;

            border-color: rgba(255,255,255,.07) !important;

            font-size: 11px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: .5px;

            padding: 14px 12px;

            white-space: nowrap;
        }

        .table tbody td {
            background: #0f141c !important;

            color: #cbd5e1 !important;

            border-color: rgba(255,255,255,.06) !important;

            font-size: 12px;

            padding: 14px 12px;

            vertical-align: middle;
        }

        .table tbody tr {
            transition: .2s ease;
        }

        .table tbody tr:hover td {
            background: #151c27 !important;
        }

        /* =========================
           ACTION BUTTON
        ========================= */

        .btn-edit {
            background: rgba(37,99,235,.12);

            color: #60a5fa !important;

            border: 1px solid rgba(37,99,235,.2);

            border-radius: 8px;

            font-size: 11px;

            padding: 7px 12px;

            text-decoration: none !important;

            transition: .2s;
        }

        .btn-edit:hover {
            background: #2563eb;

            color: #fff !important;
        }

        .btn-delete {
            background: rgba(239,68,68,.10);

            color: #f87171 !important;

            border: 1px solid rgba(239,68,68,.18);

            border-radius: 8px;

            font-size: 11px;

            padding: 7px 12px;

            text-decoration: none !important;

            transition: .2s;
        }

        .btn-delete:hover {
            background: #dc2626;

            color: #fff !important;
        }

        /* =========================
           DROPDOWN
        ========================= */

        .dropdown-menu {
            border: 1px solid rgba(255,255,255,.08);

            border-radius: 14px;

            padding: 8px;

            box-shadow: 0 20px 50px rgba(0,0,0,.35);
        }

        /* =========================
           MODAL
        ========================= */

        .modal-content {
            background: #111827;

            color: #fff;

            border: 1px solid rgba(255,255,255,.08);

            border-radius: 16px;
        }

        .modal-header {
            border-bottom: 1px solid rgba(255,255,255,.08);
        }

        .modal-footer {
            border-top: 1px solid rgba(255,255,255,.08);
        }

        .modal-title {
            font-size: 16px;
            font-weight: 700;
        }

        .modal-body {
            color: #94a3b8;
            font-size: 13px;
        }

        .modal .close {
            color: #fff;
            opacity: .7;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 768px) {

            .topbar {
                height: 65px;
            }

            .page-header {
                margin-top: 20px;
            }

            .page-title {
                font-size: 23px;
            }

            .data-card-header {
                flex-direction: column;

                align-items: flex-start;

                gap: 15px;
            }

            .table-container {
                padding: 15px;
            }

            .table thead {
                display: none;
            }

            .table,
            .table tbody,
            .table tr,
            .table td {
                display: block;

                width: 100%;
            }

            .table tr {
                margin-bottom: 15px;

                border: 1px solid rgba(255,255,255,.07);

                border-radius: 12px;

                overflow: hidden;
            }

            .table td {
                text-align: right;

                position: relative;

                padding-left: 50%;

                min-height: 45px;

                display: flex;

                align-items: center;

                justify-content: flex-end;
            }

            .table td::before {
                content: attr(data-label);

                position: absolute;

                left: 12px;

                width: 45%;

                text-align: left;

                color: #64748b;

                font-size: 10px;

                font-weight: 700;

                text-transform: uppercase;
            }

            .table td:last-child {
                justify-content: center;

                padding-left: 12px;

                gap: 8px;
            }

            .table td:last-child::before {
                display: none;
            }

            .navbar-search {
                display: none !important;
            }

        }

        @media (max-width: 576px) {

            .container-fluid {
                padding-left: 15px;
                padding-right: 15px;
            }

            .page-title {
                font-size: 21px;
            }

            .data-card-header {
                padding: 18px;
            }

            .custom-btn {
                width: 100%;

                text-align: center;
            }

        }

    </style>

</head>


<body id="page-top">

<div id="wrapper">


    <!-- =========================
         SIDEBAR
    ========================== -->

    <ul class="navbar-nav sidebar sidebar-dark accordion"
        id="accordionSidebar">


        <!-- BRAND -->

        <a class="sidebar-brand d-flex align-items-center justify-content-center"
           href="../home.php">

            <div class="sidebar-brand-icon">

                <i class="fa-solid fa-car-side"></i>

            </div>

            <div class="sidebar-brand-text mx-3">

                CV. ARIFUBILA

            </div>

        </a>


        <!-- Divider -->

        <hr class="sidebar-divider my-0">


        <!-- DASHBOARD -->

        <li class="nav-item">

            <a class="nav-link"
               href="../home.php">

                <i class="fas fa-fw fa-chart-pie"></i>

                <span>Dashboard</span>

            </a>

        </li>


        <!-- Divider -->

        <hr class="sidebar-divider">


        <!-- Heading -->

        <div class="sidebar-heading">

            MANAGEMENT

        </div>


        <!-- DATA MASTER -->

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


                    <a class="collapse-item"
                       href="../mobil/mobil.php">

                        <i class="fas fa-car mr-2"></i>

                        Data Mobil

                    </a>


                    <a class="collapse-item"
                       href="../pelanggan/pelanggan.php">

                        <i class="fas fa-users mr-2"></i>

                        Data Pelanggan

                    </a>

                </div>

            </div>

        </li>


        <!-- RENTAL -->

        <li class="nav-item active">

            <a class="nav-link"
               href="rental.php">

                <i class="fas fa-fw fa-file-invoice-dollar"></i>

                <span>Rental Mobil</span>

            </a>

        </li>


        <!-- Divider -->

        <hr class="sidebar-divider d-none d-md-block">


        <!-- Sidebar Toggle -->

        <div class="text-center d-none d-md-inline">

            <button
                class="rounded-circle border-0"
                id="sidebarToggle">
            </button>

        </div>


    </ul>


    <!-- END SIDEBAR -->


    <!-- =========================
         CONTENT WRAPPER
    ========================== -->

    <div id="content-wrapper"
         class="d-flex flex-column">


        <div id="content">


            <!-- =========================
                 TOPBAR
            ========================== -->

            <nav class="navbar navbar-expand topbar mb-4 static-top shadow">


                <!-- Mobile Sidebar -->

                <button
                    id="sidebarToggleTop"
                    class="btn btn-link d-md-none rounded-circle mr-3">

                    <i class="fa fa-bars text-white"></i>

                </button>


                <!-- SEARCH -->

                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 navbar-search"
                    action="cari_rental.php"
                    method="GET">

                    <div class="input-group">

                        <input
                            type="text"
                            name="keyword"
                            class="form-control small"
                            placeholder="Cari rental..."
                            required>


                        <div class="input-group-append">

                            <button
                                class="btn btn-primary"
                                type="submit">

                                <i class="fas fa-search fa-sm"></i>

                            </button>

                        </div>

                    </div>

                </form>


                <!-- RIGHT NAV -->

                <ul class="navbar-nav ml-auto">


                    <!-- Search Mobile -->

                    <li class="nav-item dropdown no-arrow d-sm-none">

                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="searchDropdown"
                            data-toggle="dropdown">

                            <i class="fas fa-search fa-fw text-white"></i>

                        </a>


                        <div
                            class="dropdown-menu dropdown-menu-right p-3 shadow">

                            <form
                                class="form-inline mr-auto w-100 navbar-search"
                                action="cari_rental.php"
                                method="GET">

                                <div class="input-group">

                                    <input
                                        type="text"
                                        name="keyword"
                                        class="form-control bg-light border-0 small"
                                        placeholder="Cari rental..."
                                        required>

                                    <div class="input-group-append">

                                        <button
                                            class="btn btn-primary"
                                            type="submit">

                                            <i class="fas fa-search fa-sm"></i>

                                        </button>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </li>


                    <!-- Notification -->

                    <li class="nav-item dropdown no-arrow mx-1">

                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="alertsDropdown"
                            data-toggle="dropdown">

                            <i class="fas fa-bell fa-fw text-white"></i>

                            <span class="badge badge-danger badge-counter">

                                3+

                            </span>

                        </a>


                        <div
                            class="dropdown-list dropdown-menu dropdown-menu-right shadow">

                            <h6 class="dropdown-header bg-primary">

                                Notification

                            </h6>


                            <a
                                class="dropdown-item d-flex align-items-center"
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

                                        Data rental berhasil diperbarui.

                                    </span>

                                </div>

                            </a>


                        </div>

                    </li>


                    <div class="topbar-divider d-none d-sm-block"></div>


                    <!-- USER -->

                    <li class="nav-item dropdown no-arrow">

                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="userDropdown"
                            data-toggle="dropdown">

                            <span class="mr-2 d-none d-lg-inline text-white small">

                                Admin

                            </span>


                            <img
                                class="img-profile rounded-circle"
                                src="../img/undraw_profile.svg">

                        </a>


                        <div
                            class="dropdown-menu dropdown-menu-right shadow">

                            <a
                                class="dropdown-item"
                                href="#">

                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>

                                Profile

                            </a>


                            <a
                                class="dropdown-item"
                                href="#">

                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>

                                Settings

                            </a>


                            <div class="dropdown-divider"></div>


                            <a
                                class="dropdown-item"
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
                 PAGE CONTENT
            ========================== -->

            <div class="container-fluid">


                <!-- HEADER -->

                <div class="page-header">

                    <h1 class="page-title">

                        Data Rental

                    </h1>


                    <p class="page-subtitle">

                        Kelola seluruh transaksi rental kendaraan.

                    </p>

                </div>


                <!-- DATA CARD -->

                <div class="data-card">


                    <!-- CARD HEADER -->

                    <div class="data-card-header">

                        <div>

                            <h5 class="data-card-title">

                                Daftar Rental Mobil

                            </h5>

                            <p class="data-card-subtitle">

                                Data transaksi penyewaan kendaraan

                            </p>

                        </div>


                        <a
                            href="tambah_rental.php"
                            class="custom-btn">

                            <i class="fas fa-plus mr-2"></i>

                            Tambah Data

                        </a>

                    </div>


                    <!-- TABLE -->

                    <div class="table-container">

                        <div class="table-responsive">

                            <table class="table table-bordered table-hover">


                                <thead>

                                    <tr>

                                        <th>No Trx</th>

                                        <th>Tanggal</th>

                                        <th>Pelanggan</th>

                                        <th>Mobil</th>

                                        <th>Lama</th>

                                        <th>Harga</th>

                                        <th>Total Bayar</th>

                                        <th class="text-center">

                                            Aksi

                                        </th>

                                    </tr>

                                </thead>


                                <tbody>

                                    <?php

                                    include "../koneksi.php";

                                    $tampil = mysqli_query(
                                        $koneksi,
                                        "SELECT * FROM tbl_rental_arif"
                                    );

                                    while ($data = mysqli_fetch_array($tampil)) {

                                    ?>

                                    <tr>

                                        <td data-label="No Trx">

                                            <?= $data['no_trx_arif'] ?>

                                        </td>


                                        <td data-label="Tanggal">

                                            <?= $data['tgl_rental_arif'] ?>

                                        </td>


                                        <td data-label="Pelanggan">

                                            <?= $data['nik_ktp_arif'] ?>

                                        </td>


                                        <td data-label="Mobil">

                                            <?= $data['no_plat_arif'] ?>

                                        </td>


                                        <td data-label="Lama">

                                            <?= $data['lama_arif'] ?> Hari

                                        </td>


                                        <td data-label="Harga">

                                            Rp <?= number_format(
                                                $data['harga_arif'],
                                                0,
                                                ',',
                                                '.'
                                            ) ?>

                                        </td>


                                        <td data-label="Total Bayar">

                                            Rp <?= number_format(
                                                $data['total_bayar_arif'],
                                                0,
                                                ',',
                                                '.'
                                            ) ?>

                                        </td>


                                        <td
                                            data-label="Aksi"
                                            class="text-center">

                                            <a
                                                href="edit_rental.php?no_trx_arif=<?= $data['no_trx_arif'] ?>"
                                                class="btn-edit mr-1">

                                                <i class="fas fa-edit"></i>

                                                Edit

                                            </a>


                                            <a
                                                href="#"
                                                class="btn-delete"
                                                onclick="showDeleteModal('delete_rental.php?no_trx_arif=<?= $data['no_trx_arif'] ?>')">

                                                <i class="fas fa-trash"></i>

                                                Hapus

                                            </a>

                                        </td>

                                    </tr>

                                    <?php

                                    }

                                    ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- =========================
     DELETE MODAL
========================== -->

<div
    class="modal fade"
    id="deleteModal"
    tabindex="-1"
    aria-labelledby="deleteModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">


            <div class="modal-header">

                <h5
                    class="modal-title"
                    id="deleteModalLabel">

                    Konfirmasi Hapus

                </h5>


                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close">

                    <span aria-hidden="true">

                        &times;

                    </span>

                </button>

            </div>


            <div class="modal-body">

                Apakah Anda yakin ingin menghapus data rental ini?

            </div>


            <div class="modal-footer">

                <button
                    type="button"
                    class="btn btn-secondary"
                    data-dismiss="modal">

                    Batal

                </button>


                <a
                    href="#"
                    id="confirmDelete"
                    class="btn btn-danger">

                    Hapus

                </a>

            </div>

        </div>

    </div>

</div>


<!-- =========================
     LOGOUT MODAL
========================== -->

<div
    class="modal fade"
    id="logoutModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div
        class="modal-dialog modal-dialog-centered"
        role="document">

        <div class="modal-content">


            <div class="modal-header">

                <h5
                    class="modal-title"
                    id="exampleModalLabel">

                    Konfirmasi Logout

                </h5>


                <button
                    class="close"
                    type="button"
                    data-dismiss="modal"
                    aria-label="Close">

                    <span aria-hidden="true">

                        &times;

                    </span>

                </button>

            </div>


            <div class="modal-body">

                Apakah kamu yakin ingin keluar dari sistem?

            </div>


            <div class="modal-footer">

                <button
                    class="btn btn-secondary"
                    type="button"
                    data-dismiss="modal">

                    Batal

                </button>


                <a
                    class="btn btn-primary"
                    href="../login.php">

                    Logout

                </a>

            </div>

        </div>

    </div>

</div>


<!-- =========================
     JAVASCRIPT
========================== -->

<script src="../vendor/jquery/jquery.min.js"></script>

<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="../js/sb-admin-2.min.js"></script>


<script>

    function showDeleteModal(url) {

        document
            .getElementById('confirmDelete')
            .setAttribute('href', url);

        $('#deleteModal').modal('show');

    }

</script>


</body>

</html>