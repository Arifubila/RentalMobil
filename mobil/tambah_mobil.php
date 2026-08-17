<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tambah Mobil | CV. Rental Mobil Arifubila</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap / SB Admin -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <style>

        * {
            box-sizing: border-box;
        }

        /* =====================================================
           GLOBAL
        ===================================================== */

        body {
            font-family: 'Inter', sans-serif;
            background: #080b12 !important;
            color: #fff;
        }

        #content-wrapper {
            background:
                radial-gradient(
                    circle at 80% 10%,
                    rgba(37, 99, 235, .08),
                    transparent 25%
                ),
                #080b12 !important;
        }

        /* =====================================================
           SIDEBAR
        ===================================================== */

        #accordionSidebar {
            background:
                linear-gradient(
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

        .brand-icon {
            width: 38px;
            height: 38px;

            border-radius: 12px;

            display: flex;
            align-items: center;
            justify-content: center;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #1d4ed8
                );

            color: #fff;

            box-shadow:
                0 8px 25px rgba(37,99,235,.25);
        }

        .sidebar-brand-text {
            font-size: 14px;
            font-weight: 800;
            letter-spacing: .8px;
            color: #fff;
        }

        .sidebar .nav-item {
            margin: 5px 12px;
        }

        .sidebar .nav-link {
            border-radius: 12px;

            color: #94a3b8 !important;

            padding: 13px 15px;

            transition:
                all .25s ease;
        }

        .sidebar .nav-link i {
            width: 20px;

            margin-right: 8px;

            color: #64748b;

            transition: .25s ease;
        }

        .sidebar .nav-link:hover {
            background:
                rgba(59,130,246,.12);

            color: #fff !important;

            transform: translateX(3px);
        }

        .sidebar .nav-link:hover i {
            color: #60a5fa;

            transform: scale(1.08);
        }

        /* ACTIVE MENU */

        .sidebar .nav-item.active > .nav-link {
            background:
                linear-gradient(
                    135deg,
                    rgba(37,99,235,.25),
                    rgba(14,165,233,.10)
                );

            color: #fff !important;

            border:
                1px solid rgba(96,165,250,.15);

            box-shadow:
                0 8px 20px rgba(0,0,0,.15);
        }

        .sidebar .nav-item.active > .nav-link i {
            color: #60a5fa;
        }

        .sidebar-heading {
            color: #475569 !important;

            font-size: 10px;

            letter-spacing: 1.5px;

            font-weight: 700;

            padding-left: 20px;
        }

        /* =====================================================
           COLLAPSE SIDEBAR
        ===================================================== */

        .collapse-inner {
            background: #111827 !important;

            border:
                1px solid rgba(255,255,255,.06);

            border-radius: 12px !important;

            margin-top: 5px;

            padding: 8px !important;
        }

        .collapse-header {
            color: #475569 !important;

            font-size: 10px;

            letter-spacing: .8px;

            font-weight: 700;
        }

        .collapse-item {
            color: #94a3b8 !important;

            border-radius: 8px;

            padding: 10px 12px;

            transition: .2s ease;
        }

        .collapse-item:hover {
            background:
                rgba(59,130,246,.12);

            color: #fff !important;

            transform: translateX(3px);
        }

        /* ACTIVE DATA MOBIL */

        .collapse-item.active-item {
            background:
                rgba(37,99,235,.20);

            color: #fff !important;

            border:
                1px solid rgba(96,165,250,.12);
        }

        .collapse-item.active-item i {
            color: #60a5fa;
        }

        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar-modern {
            height: 78px;

            background:
                rgba(8,11,18,.88) !important;

            border-bottom:
                1px solid rgba(255,255,255,.07) !important;

            backdrop-filter: blur(15px);
        }

        .search-modern {
            width: 330px;
        }

        .search-modern .form-control {
            height: 42px;

            background: #111827 !important;

            border:
                1px solid rgba(255,255,255,.08) !important;

            color: #fff !important;

            border-radius: 12px 0 0 12px;
        }

        .search-modern .form-control::placeholder {
            color: #64748b;
        }

        .search-modern .btn {
            height: 42px;

            border-radius: 0 12px 12px 0;

            background: #2563eb !important;

            border: none;

            color: #fff;

            transition: .25s ease;
        }

        .search-modern .btn:hover {
            background: #1d4ed8 !important;
        }

        .topbar-icon {
            width: 40px;
            height: 40px;

            border-radius: 12px;

            display: flex;
            align-items: center;
            justify-content: center;

            transition: .25s ease;
        }

        .topbar-icon:hover {
            background:
                rgba(59,130,246,.12);

            transform: translateY(-2px);
        }

        .profile-name {
            color: #fff !important;

            font-weight: 600;
        }

        .img-profile {
            width: 38px;
            height: 38px;

            object-fit: cover;

            border:
                2px solid rgba(96,165,250,.4);
        }

        .badge-counter {
            border-radius: 50px;

            font-size: 9px;
        }

        /* =====================================================
           PAGE HEADER
        ===================================================== */

        .page-header {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin:
                25px 0 30px;

            animation:
                fadeUp .6s ease;
        }

        .page-title {
            font-size: 28px;

            font-weight: 800;

            letter-spacing: -1px;

            margin: 0;
        }

        .page-subtitle {
            color: #64748b;

            font-size: 13px;

            margin-top: 7px;
        }

        /* =====================================================
           FORM CARD
        ===================================================== */

        .form-card {
            position: relative;

            background:
                linear-gradient(
                    145deg,
                    #151b25,
                    #0d1117
                );

            border:
                1px solid rgba(255,255,255,.07);

            border-radius: 20px;

            overflow: hidden;

            box-shadow:
                0 20px 50px rgba(0,0,0,.25);

            animation:
                fadeUp .7s ease;
        }

        .form-card-header {
            padding: 20px 24px;

            display: flex;

            align-items: center;

            gap: 10px;

            border-bottom:
                1px solid rgba(255,255,255,.07);

            background:
                rgba(255,255,255,.015);
        }

        .form-card-header-icon {
            width: 38px;
            height: 38px;

            border-radius: 10px;

            display: flex;
            align-items: center;
            justify-content: center;

            background:
                rgba(37,99,235,.15);

            color: #60a5fa;

            border:
                1px solid rgba(96,165,250,.15);
        }

        .form-card-title {
            margin: 0;

            font-size: 16px;

            font-weight: 700;

            color: #fff;
        }

        .form-card-subtitle {
            color: #64748b;

            font-size: 11px;

            margin-top: 2px;
        }

        .form-body {
            padding: 28px 25px;
        }

        /* =====================================================
           FORM
        ===================================================== */

        .form-group-modern {
            margin-bottom: 22px;
        }

        .form-label-modern {
            display: block;

            color: #cbd5e1;

            font-size: 12px;

            font-weight: 600;

            margin-bottom: 8px;
        }

        .form-label-modern i {
            color: #60a5fa;

            margin-right: 6px;

            width: 15px;
        }

        .form-control-modern {
            width: 100%;

            height: 46px;

            background: #111827 !important;

            border:
                1px solid rgba(255,255,255,.08) !important;

            border-radius: 11px;

            color: #fff !important;

            font-size: 13px;

            padding:
                0 14px;

            transition:
                all .25s ease;
        }

        .form-control-modern:focus {
            background: #111827 !important;

            border-color:
                rgba(96,165,250,.55) !important;

            box-shadow:
                0 0 0 3px rgba(37,99,235,.10) !important;

            color: #fff !important;

            outline: none;
        }

        .form-control-modern::placeholder {
            color: #475569;
        }

        /* SELECT */

        select.form-control-modern {
            appearance: none;

            -webkit-appearance: none;

            background-image:
                linear-gradient(45deg, transparent 50%, #64748b 50%),
                linear-gradient(135deg, #64748b 50%, transparent 50%);

            background-position:
                calc(100% - 17px) 19px,
                calc(100% - 12px) 19px;

            background-size:
                5px 5px,
                5px 5px;

            background-repeat: no-repeat;

            padding-right: 40px;
        }

        select.form-control-modern option {
            background: #111827;

            color: #fff;
        }

        /* =====================================================
           FORM DIVIDER
        ===================================================== */

        .form-section-title {
            color: #64748b;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 1.3px;

            text-transform: uppercase;

            margin:
                5px 0 20px;

            display: flex;

            align-items: center;

            gap: 10px;
        }

        .form-section-title::after {
            content: "";

            height: 1px;

            flex: 1;

            background:
                rgba(255,255,255,.06);
        }

        /* =====================================================
           BUTTON
        ===================================================== */

        .form-actions {
            display: flex;

            justify-content: flex-end;

            gap: 10px;

            padding-top: 10px;

            margin-top: 5px;

            border-top:
                1px solid rgba(255,255,255,.06);
        }

        .btn-back {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            min-width: 105px;

            height: 42px;

            border-radius: 10px;

            background:
                rgba(255,255,255,.05);

            border:
                1px solid rgba(255,255,255,.08);

            color: #94a3b8 !important;

            font-size: 12px;

            font-weight: 600;

            text-decoration: none !important;

            transition: all .25s ease;
        }

        .btn-back:hover {
            background:
                rgba(255,255,255,.09);

            color: #fff !important;

            transform:
                translateY(-2px);
        }

        .btn-save {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            min-width: 120px;

            height: 42px;

            border: none;

            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #1d4ed8
                );

            color: #fff !important;

            font-size: 12px;

            font-weight: 700;

            box-shadow:
                0 8px 20px rgba(37,99,235,.18);

            transition: all .25s ease;
        }

        .btn-save:hover {
            transform:
                translateY(-2px);

            box-shadow:
                0 12px 25px rgba(37,99,235,.30);

            color: #fff !important;
        }

        /* =====================================================
           DROPDOWN
        ===================================================== */

        .dropdown-menu {
            background: #111827;

            border:
                1px solid rgba(255,255,255,.08);

            border-radius: 14px;

            padding: 8px;

            box-shadow:
                0 20px 50px rgba(0,0,0,.35);
        }

        .dropdown-item {
            color: #94a3b8;

            border-radius: 8px;

            padding: 9px 12px;

            font-size: 12px;

            transition: .2s ease;
        }

        .dropdown-item:hover {
            background:
                rgba(59,130,246,.12);

            color: #fff;
        }

        .dropdown-divider {
            border-top:
                1px solid rgba(255,255,255,.07);
        }

        /* =====================================================
           MODAL
        ===================================================== */

        .modal-content {
            background: #111827;

            color: #fff;

            border:
                1px solid rgba(255,255,255,.08);

            border-radius: 18px;

            overflow: hidden;
        }

        .modal-header,
        .modal-footer {
            border-color:
                rgba(255,255,255,.07);
        }

        .modal-header .close {
            color: #fff;

            opacity: .7;
        }

        .modal-body {
            color: #94a3b8;

            font-size: 13px;
        }

        .btn-modal-cancel {
            background:
                rgba(255,255,255,.06);

            color: #cbd5e1;

            border:
                1px solid rgba(255,255,255,.08);

            border-radius: 9px;
        }

        .btn-modal-cancel:hover {
            background:
                rgba(255,255,255,.10);

            color: #fff;
        }

        .btn-modal-logout {
            background:
                #dc3545;

            color: #fff !important;

            border: none;

            border-radius: 9px;
        }

        /* =====================================================
           ANIMATION
        ===================================================== */

        @keyframes fadeUp {

            from {
                opacity: 0;

                transform:
                    translateY(15px);
            }

            to {
                opacity: 1;

                transform:
                    translateY(0);
            }

        }

        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 768px) {

            .topbar-modern {
                height: 65px;
            }

            .search-modern {
                display: none;
            }

            .page-header {
                display: block;

                margin-top: 20px;
            }

            .page-title {
                font-size: 23px;
            }

            .form-body {
                padding: 22px 18px;
            }

            .form-card-header {
                padding:
                    18px;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .btn-back,
            .btn-save {
                width: 100%;
            }

        }

        @media (max-width: 576px) {

            .container-fluid {
                padding-left: 16px;
                padding-right: 16px;
            }

            .form-card {
                border-radius: 16px;
            }

            .form-card-header {
                align-items: flex-start;
            }

        }

    </style>

</head>


<body id="page-top">

<div id="wrapper">


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <ul class="navbar-nav sidebar sidebar-dark accordion"
        id="accordionSidebar">


        <!-- BRAND -->

        <a class="sidebar-brand d-flex align-items-center justify-content-center"
           href="../home.php">

            <div class="brand-icon">
                <i class="fa-solid fa-car-side"></i>
            </div>

            <div class="sidebar-brand-text mx-3">
                CV. ARIFUBILA
            </div>

        </a>


        <hr class="sidebar-divider my-0">


        <!-- DASHBOARD -->

        <li class="nav-item">

            <a class="nav-link"
               href="../home.php">

                <i class="fas fa-fw fa-house"></i>

                <span>
                    Dashboard
                </span>

            </a>

        </li>


        <hr class="sidebar-divider">


        <div class="sidebar-heading">
            MANAGEMENT
        </div>


        <!-- DATA MASTER -->

        <li class="nav-item active">

            <a class="nav-link"
               href="#"
               data-toggle="collapse"
               data-target="#collapseData"
               aria-expanded="true"
               aria-controls="collapseData">

                <i class="fas fa-fw fa-database"></i>

                <span>
                    Data Master
                </span>

            </a>


            <div id="collapseData"
                 class="collapse show"
                 data-parent="#accordionSidebar">


                <div class="py-2 collapse-inner rounded">


                    <h6 class="collapse-header">
                        KELOLA DATA
                    </h6>


                    <!-- DATA MOBIL ACTIVE -->

                    <a class="collapse-item active-item"
                       href="mobil.php">

                        <i class="fas fa-car mr-2"></i>

                        Data Mobil

                    </a>


                    <!-- DATA PELANGGAN -->

                    <a class="collapse-item"
                       href="../pelanggan/pelanggan.php">

                        <i class="fas fa-users mr-2"></i>

                        Data Pelanggan

                    </a>


                </div>

            </div>

        </li>


        <!-- RENTAL -->

        <li class="nav-item">

            <a class="nav-link"
               href="../rental/rental.php">

                <i class="fas fa-fw fa-key"></i>

                <span>
                    Rental Mobil
                </span>

            </a>

        </li>


        <hr class="sidebar-divider d-none d-md-block">


        <!-- SIDEBAR TOGGLE -->

        <div class="text-center d-none d-md-inline">

            <button
                class="rounded-circle border-0"
                id="sidebarToggle">
            </button>

        </div>


    </ul>


    <!-- =====================================================
         CONTENT
    ====================================================== -->

    <div id="content-wrapper"
         class="d-flex flex-column">


        <div id="content">


            <!-- =====================================================
                 TOPBAR
            ====================================================== -->

            <nav class="navbar navbar-expand topbar topbar-modern mb-4 static-top shadow">


                <!-- MOBILE SIDEBAR -->

                <button
                    id="sidebarToggleTop"
                    class="btn btn-link d-md-none rounded-circle mr-3">

                    <i class="fa fa-bars text-white"></i>

                </button>


                <!-- SEARCH -->

                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 search-modern"
                    action="../cari_mobil.php"
                    method="GET">

                    <div class="input-group">

                        <input
                            type="text"
                            name="keyword"
                            class="form-control"
                            placeholder="Cari data mobil..."
                            required>

                        <div class="input-group-append">

                            <button
                                class="btn"
                                type="submit">

                                <i class="fas fa-search"></i>

                            </button>

                        </div>

                    </div>

                </form>


                <!-- NAVBAR RIGHT -->

                <ul class="navbar-nav ml-auto">


                    <!-- NOTIFICATION -->

                    <li class="nav-item dropdown no-arrow mx-1">

                        <a
                            class="nav-link dropdown-toggle topbar-icon"
                            href="#"
                            data-toggle="dropdown">

                            <i class="fas fa-bell text-white"></i>

                            <span class="badge badge-danger badge-counter">
                                3
                            </span>

                        </a>


                        <div
                            class="dropdown-list dropdown-menu dropdown-menu-right shadow">

                            <h6 class="dropdown-header bg-primary">

                                Notifikasi

                            </h6>


                            <a
                                class="dropdown-item d-flex align-items-center"
                                href="#">

                                <i class="fas fa-car mr-2"
                                   style="color:#60a5fa;"></i>

                                Data mobil terbaru tersedia.

                            </a>


                            <a
                                class="dropdown-item d-flex align-items-center"
                                href="#">

                                <i class="fas fa-key mr-2"
                                   style="color:#4ade80;"></i>

                                Rental baru ditambahkan.

                            </a>


                        </div>

                    </li>


                    <div class="topbar-divider d-none d-sm-block"></div>


                    <!-- USER -->

                    <li class="nav-item dropdown no-arrow">

                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown">

                            <span
                                class="mr-2 d-none d-lg-inline profile-name small">

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

                                <i class="fas fa-user fa-sm fa-fw mr-2"
                                   style="color:#64748b;"></i>

                                Profile

                            </a>


                            <a
                                class="dropdown-item"
                                href="#">

                                <i class="fas fa-cog fa-sm fa-fw mr-2"
                                   style="color:#64748b;"></i>

                                Settings

                            </a>


                            <div class="dropdown-divider"></div>


                            <a
                                class="dropdown-item"
                                href="#"
                                data-toggle="modal"
                                data-target="#logoutModal">

                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"
                                   style="color:#64748b;"></i>

                                Logout

                            </a>


                        </div>

                    </li>


                </ul>

            </nav>


            <!-- =====================================================
                 MAIN CONTENT
            ====================================================== -->

            <div class="container-fluid">


                <!-- PAGE HEADER -->

                <div class="page-header">


                    <div>

                        <h1 class="page-title">
                            Tambah Data Mobil
                        </h1>

                        <div class="page-subtitle">
                            Tambahkan kendaraan baru ke dalam daftar rental.
                        </div>

                    </div>


                </div>


                <!-- =================================================
                     FORM CARD
                ================================================== -->

                <div class="form-card">


                    <!-- HEADER -->

                    <div class="form-card-header">


                        <div class="form-card-header-icon">

                            <i class="fas fa-car"></i>

                        </div>


                        <div>

                            <h5 class="form-card-title">
                                Informasi Kendaraan
                            </h5>

                            <div class="form-card-subtitle">
                                Lengkapi informasi kendaraan dengan benar.
                            </div>

                        </div>


                    </div>


                    <!-- FORM BODY -->

                    <div class="form-body">


                        <form
                            method="POST"
                            action="insert_mobil.php">


                            <div class="form-section-title">
                                DATA MOBIL
                            </div>


                            <!-- ROW 1 -->

                            <div class="row">


                                <!-- NO PLAT -->

                                <div class="col-md-6">

                                    <div class="form-group-modern">

                                        <label
                                            for="no_plat_arif"
                                            class="form-label-modern">

                                            <i class="fas fa-id-card"></i>

                                            No Plat

                                        </label>


                                        <input
                                            type="text"
                                            name="no_plat_arif"
                                            class="form-control-modern"
                                            id="no_plat_arif"
                                            placeholder="Contoh: Z 1234 AB"
                                            required>

                                    </div>

                                </div>


                                <!-- NAMA MOBIL -->

                                <div class="col-md-6">

                                    <div class="form-group-modern">

                                        <label
                                            for="nama_mobil_arif"
                                            class="form-label-modern">

                                            <i class="fas fa-car-side"></i>

                                            Nama Mobil

                                        </label>


                                        <select
                                            name="nama_mobil_arif"
                                            class="form-control-modern"
                                            id="nama_mobil_arif"
                                            required>

                                            <option value="">
                                                -- Pilih Nama Mobil --
                                            </option>

                                            <option value="BMW M440 Coupe">
                                                BMW M440 Coupe
                                            </option>

                                            <option value="Porsche 911">
                                                Porsche 911
                                            </option>

                                            <option value="Mercedes-Benz G-Class">
                                                Mercedes-Benz G-Class
                                            </option>

                                            <option value="Rolls-Royce Phantom">
                                                Rolls-Royce Phantom
                                            </option>

                                            <option value="Toyota Supra">
                                                Toyota Supra
                                            </option>

                                            <option value="Nissan GT-R">
                                                Nissan GT-R
                                            </option>

                                        </select>

                                    </div>

                                </div>


                            </div>


                            <!-- ROW 2 -->

                            <div class="row">


                                <!-- BRAND -->

                                <div class="col-md-6">

                                    <div class="form-group-modern">

                                        <label
                                            for="brand_mobil_arif"
                                            class="form-label-modern">

                                            <i class="fas fa-tag"></i>

                                            Brand Mobil

                                        </label>


                                        <select
                                            name="brand_mobil_arif"
                                            class="form-control-modern"
                                            id="brand_mobil_arif"
                                            required>

                                            <option value="">
                                                -- Pilih Brand Mobil --
                                            </option>

                                            <option value="BMW">
                                                BMW
                                            </option>

                                            <option value="Porsche">
                                                Porsche
                                            </option>

                                            <option value="Mercedes-Benz">
                                                Mercedes-Benz
                                            </option>

                                            <option value="Rolls-Royce">
                                                Rolls-Royce
                                            </option>

                                            <option value="Toyota">
                                                Toyota
                                            </option>

                                            <option value="Nissan">
                                                Nissan
                                            </option>

                                        </select>

                                    </div>

                                </div>


                                <!-- TRANSMISI -->

                                <div class="col-md-6">

                                    <div class="form-group-modern">

                                        <label
                                            for="tipe_transmisi_arif"
                                            class="form-label-modern">

                                            <i class="fas fa-gears"></i>

                                            Tipe Transmisi

                                        </label>


                                        <select
                                            name="tipe_transmisi_arif"
                                            class="form-control-modern"
                                            id="tipe_transmisi_arif"
                                            required>

                                            <option value="">
                                                -- Pilih Tipe Transmisi --
                                            </option>

                                            <option value="Automatic">
                                                Automatic
                                            </option>

                                            <option value="Manual">
                                                Manual
                                            </option>

                                        </select>

                                    </div>

                                </div>


                            </div>


                            <!-- ACTION -->

                            <div class="form-actions">


                                <a
                                    href="mobil.php"
                                    class="btn-back">

                                    <i class="fas fa-arrow-left"></i>

                                    Kembali

                                </a>


                                <button
                                    type="submit"
                                    class="btn-save">

                                    <i class="fas fa-save"></i>

                                    Simpan Mobil

                                </button>


                            </div>


                        </form>


                    </div>


                </div>


            </div>


        </div>


    </div>


</div>


<!-- =====================================================
     LOGOUT MODAL
====================================================== -->

<div
    class="modal fade"
    id="logoutModal"
    tabindex="-1"
    role="dialog"
    aria-hidden="true">


    <div
        class="modal-dialog modal-dialog-centered"
        role="document">


        <div class="modal-content">


            <div class="modal-header">

                <h5 class="modal-title">

                    <i class="fas fa-right-from-bracket mr-2"
                       style="color:#60a5fa;"></i>

                    Konfirmasi Logout

                </h5>


                <button
                    class="close"
                    type="button"
                    data-dismiss="modal">

                    <span>
                        &times;
                    </span>

                </button>

            </div>


            <div class="modal-body">

                Apakah Anda yakin ingin keluar dari sistem?

            </div>


            <div class="modal-footer">


                <button
                    class="btn btn-modal-cancel"
                    type="button"
                    data-dismiss="modal">

                    Batal

                </button>


                <a
                    class="btn btn-modal-logout"
                    href="../login.php">

                    <i class="fas fa-sign-out-alt mr-1"></i>

                    Logout

                </a>


            </div>


        </div>

    </div>

</div>


<!-- =====================================================
     JAVASCRIPT
====================================================== -->

<script src="../vendor/jquery/jquery.min.js"></script>

<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="../js/sb-admin-2.min.js"></script>


</body>

</html>