<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data Pelanggan | CV. Rental Mobil Arifubila</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Bootstrap / SB Admin 2 -->
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

            border-right: 1px solid rgba(255,255,255,.08);
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

        .sidebar-brand-text {
            font-size: 15px;
            font-weight: 800;
            letter-spacing: .5px;
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
            height: 42px;
            background: #111827 !important;
            color: #fff !important;
            border: 1px solid rgba(255,255,255,.08) !important;
            border-radius: 12px 0 0 12px;
        }

        .navbar-search .form-control::placeholder {
            color: #64748b;
        }

        .navbar-search .btn {
            height: 42px;
            border-radius: 0 12px 12px 0;
            background: #2563eb !important;
            border: none;
            transition: .2s;
        }

        .navbar-search .btn:hover {
            background: #1d4ed8 !important;
        }

        .topbar .nav-link {
            color: #fff !important;
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
            margin: 25px 0 30px;
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
            margin-bottom: 0;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 8px 13px;
            border-radius: 50px;
            background: rgba(34,197,94,.08);
            border: 1px solid rgba(34,197,94,.15);
            color: #4ade80;
            font-size: 11px;
            font-weight: 600;
        }

        .status-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #22c55e;
            box-shadow: 0 0 10px #22c55e;
            animation: pulse 1.8s infinite;
        }

        @keyframes pulse {

            0%,100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: .5;
                transform: scale(.7);
            }

        }

        /* =========================
           DATA CARD
        ========================= */

        .data-card {
            position: relative;
            overflow: hidden;

            background: linear-gradient(
                145deg,
                #151b25,
                #0d1117
            );

            border: 1px solid rgba(255,255,255,.07);
            border-radius: 20px;

            box-shadow:
                0 20px 50px rgba(0,0,0,.25);

            animation: cardAppear .7s ease both;
        }

        @keyframes cardAppear {

            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

        .data-card-header {
            padding: 22px 24px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            border-bottom: 1px solid rgba(255,255,255,.06);
        }

        .data-card-title {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .data-card-icon {
            width: 40px;
            height: 40px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 11px;

            background: rgba(37,99,235,.12);
            border: 1px solid rgba(96,165,250,.12);

            color: #60a5fa;
        }

        .data-card-title h5 {
            margin: 0;
            font-size: 15px;
            font-weight: 700;
            color: #fff;
        }

        .data-card-title span {
            display: block;
            margin-top: 3px;

            color: #64748b;
            font-size: 11px;
        }

        /* =========================
           ADD BUTTON
        ========================= */

        .btn-add {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            padding: 10px 15px;

            border: none;
            border-radius: 11px;

            background: linear-gradient(
                135deg,
                #2563eb,
                #1d4ed8
            );

            color: #fff !important;

            font-size: 11px;
            font-weight: 700;

            text-decoration: none !important;

            box-shadow:
                0 8px 20px rgba(37,99,235,.18);

            transition: all .25s ease;
        }

        .btn-add:hover {
            transform: translateY(-2px);

            box-shadow:
                0 12px 25px rgba(37,99,235,.3);

            color: #fff !important;
        }

        /* =========================
           TABLE
        ========================= */

        .table-container {
            padding: 20px;
        }

        .table-wrapper {
            overflow: hidden;

            border: 1px solid rgba(255,255,255,.06);
            border-radius: 15px;

            background: rgba(17,24,39,.65);
        }

        .modern-table {
            margin-bottom: 0;
            color: #fff;
        }

        .modern-table thead th {
            background: #111827;

            border: none !important;

            color: #64748b;

            padding: 15px;

            font-size: 10px;
            font-weight: 700;

            text-transform: uppercase;
            letter-spacing: .8px;

            white-space: nowrap;
        }

        .modern-table tbody tr {
            background: rgba(13,17,23,.7);

            transition:
                background .25s ease,
                transform .25s ease;
        }

        .modern-table tbody tr:hover {
            background: rgba(37,99,235,.06);
            transform: translateY(-1px);
        }

        .modern-table tbody td {
            border-top: 1px solid rgba(255,255,255,.05) !important;

            padding: 15px;

            color: #cbd5e1;

            font-size: 12px;

            vertical-align: middle;
        }

        /* =========================
           NUMBER
        ========================= */

        .number-badge {
            width: 30px;
            height: 30px;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            border-radius: 9px;

            background: rgba(37,99,235,.10);
            border: 1px solid rgba(96,165,250,.12);

            color: #60a5fa;

            font-size: 11px;
            font-weight: 700;
        }

        /* =========================
           CUSTOMER
        ========================= */

        .customer-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .customer-avatar {
            width: 34px;
            height: 34px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            border-radius: 10px;

            background: linear-gradient(
                135deg,
                rgba(37,99,235,.25),
                rgba(14,165,233,.10)
            );

            border: 1px solid rgba(96,165,250,.15);

            color: #60a5fa;
        }

        .customer-name {
            color: #fff;
            font-weight: 600;
            font-size: 12px;
        }

        .nik-text {
            display: inline-flex;
            padding: 6px 9px;

            border-radius: 7px;

            background: rgba(255,255,255,.04);
            border: 1px solid rgba(255,255,255,.06);

            color: #94a3b8;

            font-family: monospace;
            font-size: 11px;
        }

        .phone-text {
            color: #94a3b8;
        }

        .phone-text i {
            color: #60a5fa;
        }

        .address-text {
            display: inline-flex;
            align-items: center;

            max-width: 300px;

            color: #94a3b8;
        }

        .address-text i {
            color: #60a5fa;
            margin-right: 7px;
        }

        /* =========================
           ACTION BUTTONS
        ========================= */

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 7px;
        }

        .btn-action {
            width: 35px;
            height: 35px;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            border-radius: 9px;

            border: 1px solid transparent;

            transition: all .25s ease;
        }

        .btn-edit {
            background: rgba(37,99,235,.12);
            border-color: rgba(96,165,250,.12);
            color: #60a5fa !important;
        }

        .btn-delete {
            background: rgba(239,68,68,.10);
            border-color: rgba(248,113,113,.10);
            color: #f87171 !important;
        }

        .btn-action:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(0,0,0,.25);
        }

        .btn-edit:hover {
            background: rgba(37,99,235,.25);
        }

        .btn-delete:hover {
            background: rgba(239,68,68,.22);
        }

        /* =========================
           EMPTY DATA
        ========================= */

        .empty-data {
            padding: 60px 20px !important;

            text-align: center;

            color: #64748b;
        }

        .empty-icon {
            width: 60px;
            height: 60px;

            margin: 0 auto 15px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 16px;

            background: rgba(37,99,235,.08);
            border: 1px solid rgba(96,165,250,.10);

            color: #60a5fa;

            font-size: 22px;
        }

        .empty-data h5 {
            color: #cbd5e1;
            font-size: 14px;
            font-weight: 700;
        }

        .empty-data p {
            color: #64748b;
            font-size: 11px;
            margin: 5px 0 0;
        }

        /* =========================
           DROPDOWN
        ========================= */

        .dropdown-menu {
            background: #111827;
            border: 1px solid rgba(255,255,255,.08);
            border-radius: 14px;
            padding: 8px;

            box-shadow:
                0 20px 50px rgba(0,0,0,.35);
        }

        .dropdown-item {
            color: #94a3b8;
            border-radius: 8px;
            font-size: 12px;
            transition: .2s;
        }

        .dropdown-item:hover {
            background: rgba(59,130,246,.10);
            color: #fff;
        }

        .dropdown-header {
            border-radius: 9px;
            background: #2563eb !important;
            color: #fff !important;
        }

        /* =========================
           MODAL
        ========================= */

        .modal-content {
            background: #111827;

            border: 1px solid rgba(255,255,255,.08);

            border-radius: 18px;

            color: #fff;

            box-shadow:
                0 25px 70px rgba(0,0,0,.5);
        }

        .modal-header {
            border-bottom: 1px solid rgba(255,255,255,.07);
        }

        .modal-footer {
            border-top: 1px solid rgba(255,255,255,.07);
        }

        .modal .close {
            color: #fff;
            opacity: .7;
        }

        .modal .close:hover {
            opacity: 1;
        }

        .btn-modal-cancel {
            background: #1e293b;
            color: #cbd5e1;
            border: 1px solid rgba(255,255,255,.08);
            border-radius: 9px;
        }

        .btn-modal-delete {
            background: #dc2626;
            color: #fff !important;
            border: none;
            border-radius: 9px;
        }

        .btn-modal-delete:hover {
            background: #b91c1c;
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

            .status-badge {
                margin-top: 12px;
            }

            .data-card-header {
                display: block;
            }

            .btn-add {
                margin-top: 15px;
            }

            .table-container {
                padding: 12px;
            }

            .modern-table thead {
                display: none;
            }

            .modern-table,
            .modern-table tbody,
            .modern-table tr,
            .modern-table td {
                display: block;
                width: 100%;
            }

            .modern-table tbody tr {
                margin-bottom: 14px;

                border-radius: 14px;

                border: 1px solid rgba(255,255,255,.06);

                padding: 8px;
            }

            .modern-table tbody td {
                border: none !important;

                position: relative;

                text-align: right;

                padding: 10px 8px 10px 48%;

                min-height: 40px;
            }

            .modern-table tbody td::before {
                content: attr(data-label);

                position: absolute;

                left: 8px;
                top: 10px;

                width: 42%;

                text-align: left;

                color: #64748b;

                font-size: 9px;
                font-weight: 700;

                text-transform: uppercase;
                letter-spacing: .5px;
            }

            .modern-table tbody td:first-child {
                display: none;
            }

            .customer-info {
                justify-content: flex-end;
            }

            .address-text {
                max-width: 100%;
                justify-content: flex-end;
            }

            .action-buttons {
                justify-content: flex-end;
            }

        }

        @media (max-width: 576px) {

            .container-fluid {
                padding-left: 16px;
                padding-right: 16px;
            }

            .page-title {
                font-size: 21px;
            }

            .page-subtitle {
                font-size: 12px;
            }

            .data-card-header {
                padding: 18px;
            }

            .data-card-title h5 {
                font-size: 14px;
            }

            .btn-add {
                width: 100%;
                justify-content: center;
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

        <!-- Brand -->

        <a class="sidebar-brand d-flex align-items-center justify-content-center"
           href="../home.php">

            <div class="sidebar-brand-icon">
                <i class="fa-solid fa-car-side"></i>
            </div>

            <div class="sidebar-brand-text mx-3">
                CV. ARIFUBILA
            </div>

        </a>

        <hr class="sidebar-divider my-0">

        <!-- Dashboard -->

        <li class="nav-item">

            <a class="nav-link"
               href="../home.php">

                <i class="fas fa-fw fa-chart-pie"></i>

                <span>
                    Dashboard
                </span>

            </a>

        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            MANAGEMENT
        </div>

        <!-- Data Master -->

        <li class="nav-item active">

            <a class="nav-link"
               href="#"
               data-toggle="collapse"
               data-target="#collapseTwo">

                <i class="fas fa-fw fa-database"></i>

                <span>
                    Data Master
                </span>

            </a>

            <div id="collapseTwo"
                 class="collapse show"
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
                       href="pelanggan.php">

                        <i class="fas fa-users mr-2"></i>

                        Data Pelanggan

                    </a>

                </div>

            </div>

        </li>

        <!-- Rental -->

        <li class="nav-item">

            <a class="nav-link"
               href="../rental/rental.php">

                <i class="fas fa-fw fa-file-invoice-dollar"></i>

                <span>
                    Rental Mobil
                </span>

            </a>

        </li>

        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggle -->

        <div class="text-center d-none d-md-inline">

            <button
                class="rounded-circle border-0"
                id="sidebarToggle">
            </button>

        </div>

    </ul>


    <!-- =========================
         CONTENT
    ========================== -->

    <div id="content-wrapper"
         class="d-flex flex-column">

        <div id="content">

            <!-- =========================
                 TOPBAR
            ========================== -->

            <nav class="navbar navbar-expand topbar mb-4 static-top shadow">

                <!-- Mobile Toggle -->

                <button
                    id="sidebarToggleTop"
                    class="btn btn-link d-md-none rounded-circle mr-3">

                    <i class="fa fa-bars text-white"></i>

                </button>

                <!-- Search -->

                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 navbar-search"
                    action="cari_pelanggan.php"
                    method="GET">

                    <div class="input-group">

                        <input
                            type="text"
                            name="keyword"
                            class="form-control"
                            placeholder="Cari pelanggan..."
                            required>

                        <div class="input-group-append">

                            <button
                                class="btn"
                                type="submit">

                                <i class="fas fa-search fa-sm"></i>

                            </button>

                        </div>

                    </div>

                </form>


                <!-- Right Navbar -->

                <ul class="navbar-nav ml-auto">

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
                            class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in">

                            <h6 class="dropdown-header">
                                Notification
                            </h6>

                            <a
                                class="dropdown-item d-flex align-items-center"
                                href="#">

                                <div class="mr-3">

                                    <div class="icon-circle bg-primary">

                                        <i class="fas fa-users text-white"></i>

                                    </div>

                                </div>

                                <div>

                                    <div class="small text-gray-500">
                                        Hari ini
                                    </div>

                                    <span class="font-weight-bold">
                                        Data pelanggan tersedia.
                                    </span>

                                </div>

                            </a>

                        </div>

                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>


                    <!-- User -->

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
                            class="dropdown-menu dropdown-menu-right shadow animated--grow-in">

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
                 MAIN CONTENT
            ========================== -->

            <div class="container-fluid">

                <!-- PAGE HEADER -->

                <div class="page-header d-sm-flex align-items-center justify-content-between">

                    <div>

                        <h1 class="page-title">
                            Data Pelanggan
                        </h1>

                        <p class="page-subtitle">
                            Kelola informasi pelanggan yang terdaftar pada sistem rental.
                        </p>

                    </div>

                    <div class="status-badge">

                        <span class="status-dot"></span>

                        Sistem Online

                    </div>

                </div>


                <!-- DATA CARD -->

                <div class="data-card">

                    <!-- HEADER -->

                    <div class="data-card-header">

                        <div class="data-card-title">

                            <div class="data-card-icon">

                                <i class="fas fa-users"></i>

                            </div>

                            <div>

                                <h5>
                                    Daftar Pelanggan
                                </h5>

                                <span>
                                    Informasi pelanggan yang terdaftar
                                </span>

                            </div>

                        </div>

                        <a
                            href="tambah_pelanggan.php"
                            class="btn-add">

                            <i class="fas fa-plus"></i>

                            Tambah Pelanggan

                        </a>

                    </div>


                    <!-- TABLE -->

                    <div class="table-container">

                        <div class="table-wrapper">

                            <div class="table-responsive">

                                <table class="table modern-table">

                                    <thead>

                                        <tr>

                                            <th>
                                                No
                                            </th>

                                            <th>
                                                NIK KTP
                                            </th>

                                            <th>
                                                Nama Pelanggan
                                            </th>

                                            <th>
                                                No HP
                                            </th>

                                            <th>
                                                Alamat
                                            </th>

                                            <th class="text-center">
                                                Aksi
                                            </th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                    <?php

                                    include "../koneksi.php";

                                    $i = 0;

                                    $tampil = mysqli_query(
                                        $koneksi,
                                        "SELECT * FROM tbl_pelanggan_arif"
                                    );

                                    if (mysqli_num_rows($tampil) > 0) {

                                        while ($data = mysqli_fetch_array($tampil)) {

                                            $i++;

                                    ?>

                                        <tr>

                                            <!-- No -->

                                            <td data-label="No">

                                                <span class="number-badge">
                                                    <?= $i ?>
                                                </span>

                                            </td>


                                            <!-- NIK -->

                                            <td data-label="NIK KTP">

                                                <span class="nik-text">

                                                    <?= htmlspecialchars(
                                                        $data['nik_ktp_arif']
                                                    ) ?>

                                                </span>

                                            </td>


                                            <!-- Nama -->

                                            <td data-label="Nama Pelanggan">

                                                <div class="customer-info">

                                                    <div class="customer-avatar">

                                                        <i class="fas fa-user"></i>

                                                    </div>

                                                    <span class="customer-name">

                                                        <?= htmlspecialchars(
                                                            $data['nama_arif']
                                                        ) ?>

                                                    </span>

                                                </div>

                                            </td>


                                            <!-- No HP -->

                                            <td data-label="No HP">

                                                <span class="phone-text">

                                                    <i class="fas fa-phone mr-1"></i>

                                                    <?= htmlspecialchars(
                                                        $data['no_hp_arif']
                                                    ) ?>

                                                </span>

                                            </td>


                                            <!-- Alamat -->

                                            <td data-label="Alamat">

                                                <span class="address-text">

                                                    <i class="fas fa-location-dot"></i>

                                                    <?= htmlspecialchars(
                                                        $data['alamat_arif']
                                                    ) ?>

                                                </span>

                                            </td>


                                            <!-- Action -->

                                            <td data-label="Aksi">

                                                <div class="action-buttons">

                                                    <!-- Edit -->

                                                    <a
                                                        href="edit_pelanggan.php?nik_ktp_arif=<?= urlencode(
                                                            $data['nik_ktp_arif']
                                                        ) ?>"
                                                        class="btn-action btn-edit"
                                                        title="Edit">

                                                        <i class="fas fa-pen"></i>

                                                    </a>


                                                    <!-- Delete -->

                                                    <button
                                                        type="button"
                                                        class="btn-action btn-delete"
                                                        title="Hapus"

                                                        onclick="showDeleteModal(
                                                            'delete_pelanggan.php?nik_ktp_arif=<?= urlencode(
                                                                $data['nik_ktp_arif']
                                                            ) ?>'
                                                        )">

                                                        <i class="fas fa-trash"></i>

                                                    </button>

                                                </div>

                                            </td>

                                        </tr>

                                    <?php

                                        }

                                    } else {

                                    ?>

                                        <!-- EMPTY -->

                                        <tr>

                                            <td
                                                colspan="6"
                                                class="empty-data">

                                                <div class="empty-icon">

                                                    <i class="fas fa-users"></i>

                                                </div>

                                                <h5>
                                                    Belum Ada Data Pelanggan
                                                </h5>

                                                <p>
                                                    Silakan tambahkan data pelanggan baru.
                                                </p>

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

</div>


<!-- =========================
     DELETE MODAL
========================= -->

<div
    class="modal fade"
    id="deleteModal"
    tabindex="-1"
    role="dialog">

    <div
        class="modal-dialog modal-dialog-centered"
        role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">

                    <i class="fas fa-triangle-exclamation text-warning mr-2"></i>

                    Konfirmasi Hapus

                </h5>

                <button
                    class="close"
                    type="button"
                    data-dismiss="modal">

                    <span>&times;</span>

                </button>

            </div>

            <div class="modal-body">

                Apakah Anda yakin ingin menghapus
                <strong>data pelanggan</strong> ini?

                <br>

                <small class="text-muted">

                    Data yang sudah dihapus tidak dapat dikembalikan.

                </small>

            </div>

            <div class="modal-footer">

                <button
                    type="button"
                    class="btn btn-modal-cancel"
                    data-dismiss="modal">

                    Batal

                </button>

                <a
                    href="#"
                    id="confirmDelete"
                    class="btn btn-modal-delete">

                    <i class="fas fa-trash mr-1"></i>

                    Hapus

                </a>

            </div>

        </div>

    </div>

</div>


<!-- =========================
     LOGOUT MODAL
========================= -->

<div
    class="modal fade"
    id="logoutModal"
    tabindex="-1"
    role="dialog">

    <div
        class="modal-dialog modal-dialog-centered"
        role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">

                    <i class="fas fa-sign-out-alt mr-2"></i>

                    Konfirmasi Logout

                </h5>

                <button
                    class="close"
                    type="button"
                    data-dismiss="modal">

                    <span>&times;</span>

                </button>

            </div>

            <div class="modal-body">

                Apakah kamu yakin ingin keluar dari sistem?

            </div>

            <div class="modal-footer">

                <button
                    class="btn btn-modal-cancel"
                    type="button"
                    data-dismiss="modal">

                    Batal

                </button>

                <a
                    class="btn btn-modal-delete"
                    href="../destroy_session.php">

                    <i class="fas fa-sign-out-alt mr-1"></i>

                    Logout

                </a>

            </div>

        </div>

    </div>

</div>


<!-- =========================
     JAVASCRIPT
========================= -->

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