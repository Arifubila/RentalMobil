<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Edit Data Mobil | CV. Rental Mobil Arifubila</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- SB Admin -->
    <link href="../css/sb-admin-2.css"
          rel="stylesheet">


    <style>

        /* =====================================================
           GLOBAL
        ===================================================== */

        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background: #0f1115;
            color: #ffffff;
        }

        body {
            overflow-x: hidden;
        }

        #wrapper {
            min-height: 100vh;
            background: #0f1115;
        }

        #content-wrapper {
            background: #0f1115 !important;
            min-height: 100vh;
        }

        #content {
            background: #0f1115;
        }


        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar-modern {

            width: 224px !important;

            min-width: 224px;

            background:
                linear-gradient(
                    180deg,
                    #111318 0%,
                    #0d0f13 100%
                ) !important;

            border-right:
                1px solid rgba(255,255,255,.07);

            transition: all .3s ease;
        }


        /* BRAND */

        .sidebar-brand {

            height: 80px;

            padding: 0 15px !important;

            transition: .3s ease;

            text-decoration: none !important;
        }

        .sidebar-brand:hover {
            transform: translateY(-1px);
        }

        .brand-icon {

            width: 38px;
            height: 38px;

            min-width: 38px;

            border-radius: 11px;

            display: flex;

            align-items: center;

            justify-content: center;

            background:
                linear-gradient(
                    135deg,
                    #6f7b7f,
                    #31363f
                );

            color: #ffffff;

            box-shadow:
                0 8px 25px rgba(0,0,0,.3);
        }

        .sidebar-brand-text {

            font-size: 13px;

            font-weight: 800;

            letter-spacing: .7px;

            color: #ffffff;

            white-space: nowrap;
        }


        /* SIDEBAR ITEM */

        .sidebar .nav-item {

            margin:
                5px 12px !important;

            width: auto !important;
        }


        .sidebar .nav-link {

            min-height: 48px;

            border-radius: 12px;

            padding:
                12px 14px !important;

            color: #9ca3af !important;

            display: flex;

            align-items: center;

            transition:
                background .25s ease,
                color .25s ease,
                transform .25s ease;

            overflow: hidden;
        }


        .sidebar .nav-link i {

            width: 22px;

            min-width: 22px;

            margin-right: 9px;

            text-align: center;

            color: #737b85;

            transition: .25s ease;
        }


        .sidebar .nav-link span {

            white-space: nowrap;

            font-size: 13px;

            font-weight: 600;
        }


        .sidebar .nav-link:hover {

            color: #ffffff !important;

            background:
                linear-gradient(
                    135deg,
                    rgba(111,123,127,.22),
                    rgba(49,54,63,.22)
                );

            transform: translateX(2px);
        }


        .sidebar .nav-link:hover i {

            color: #ffffff;

            transform: scale(1.08);
        }


        /* ACTIVE */

        .sidebar .nav-item.active > .nav-link {

            color: #ffffff !important;

            background:
                linear-gradient(
                    135deg,
                    rgba(111,123,127,.32),
                    rgba(49,54,63,.32)
                );

            border:
                1px solid rgba(255,255,255,.06);

            box-shadow:
                0 8px 20px rgba(0,0,0,.15);

            transform: none;
        }


        .sidebar .nav-item.active > .nav-link i {

            color: #ffffff;
        }


        /* SIDEBAR HEADING */

        .sidebar-heading {

            color: #666d75 !important;

            font-size: 10px;

            letter-spacing: 1.5px;

            font-weight: 700;

            padding-left: 20px !important;

            margin-top: 10px;
        }


        /* DIVIDER */

        .sidebar-divider {

            border-top:
                1px solid rgba(255,255,255,.06) !important;
        }


        /* COLLAPSE */

        .collapse-inner {

            background: #1b1f26 !important;

            border:
                1px solid rgba(255,255,255,.05);

            border-radius: 12px !important;

            margin:
                5px 4px 8px !important;

            padding:
                8px !important;

            width: auto !important;
        }


        .collapse-header {

            color: #666d75 !important;

            font-size: 9px !important;

            font-weight: 700;

            letter-spacing: .7px;
        }


        .collapse-item {

            color: #9ca3af !important;

            border-radius: 8px;

            padding:
                9px 10px !important;

            font-size: 12px;

            transition: .25s ease;

            white-space: nowrap;
        }


        .collapse-item:hover {

            background:
                rgba(255,255,255,.07);

            color: #ffffff !important;

            transform: translateX(2px);
        }


        .collapse-item.active-item {

            background:
                rgba(111,123,127,.25);

            color: #ffffff !important;
        }


        .collapse-item.active-item i {

            color: #ffffff;
        }


        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar-modern {

            height: 70px;

            background:
                rgba(15,17,21,.94) !important;

            border-bottom:
                1px solid rgba(255,255,255,.07) !important;

            backdrop-filter: blur(15px);

            box-shadow:
                none !important;
        }


        .search-modern {

            width: 330px;
        }


        .search-modern .form-control {

            height: 42px;

            background: #191c22 !important;

            border:
                1px solid rgba(255,255,255,.08) !important;

            color: #ffffff !important;

            border-radius:
                12px 0 0 12px;
        }


        .search-modern .form-control::placeholder {

            color: #6b7280;
        }


        .search-modern .btn {

            width: 45px;

            border: none;

            background: #31363f;

            color: #ffffff;

            border-radius:
                0 12px 12px 0;

            transition: .25s ease;
        }


        .search-modern .btn:hover {

            background: #6f7b7f;
        }


        .topbar-icon {

            width: 40px;
            height: 40px;

            border-radius: 11px;

            display: flex;

            align-items: center;

            justify-content: center;

            transition: .25s ease;
        }


        .topbar-icon:hover {

            background:
                rgba(255,255,255,.07);

            transform: translateY(-2px);
        }


        .profile-name {

            color: #ffffff !important;

            font-weight: 600;
        }


        .img-profile {

            width: 38px;

            height: 38px;

            object-fit: cover;

            border:
                2px solid #31363f;
        }


        /* =====================================================
           DROPDOWN
        ===================================================== */

        .dropdown-menu {

            background: #1b1f26;

            border:
                1px solid rgba(255,255,255,.08);

            border-radius: 12px;

            overflow: hidden;

            box-shadow:
                0 15px 35px rgba(0,0,0,.35);
        }


        .dropdown-item {

            color: #c5cbd1 !important;

            padding:
                10px 15px;

            font-size: 12px;

            transition: .2s ease;
        }


        .dropdown-item:hover {

            background:
                rgba(255,255,255,.07);

            color: #ffffff !important;
        }


        .topbar-divider {

            border-left:
                1px solid rgba(255,255,255,.08);
        }


        /* =====================================================
           PAGE HEADER
        ===================================================== */

        .page-header {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 24px;

            animation:
                fadeUp .6s ease;
        }


        .page-title {

            margin: 0;

            font-size: 25px;

            font-weight: 800;

            color: #ffffff;
        }


        .page-subtitle {

            margin-top: 6px;

            color: #7f8791;

            font-size: 13px;
        }


        /* =====================================================
           FORM CARD
        ===================================================== */

        .modern-card {

            background: #171a20;

            border:
                1px solid rgba(255,255,255,.06);

            border-radius: 20px;

            overflow: hidden;

            box-shadow:
                0 15px 40px rgba(0,0,0,.25);

            animation:
                fadeUp .7s ease;
        }


        .card-header-modern {

            padding:
                20px 24px;

            display: flex;

            align-items: center;

            border-bottom:
                1px solid rgba(255,255,255,.06);
        }


        .card-title-modern {

            margin: 0;

            font-size: 16px;

            font-weight: 700;

            color: #ffffff;
        }


        .card-title-modern i {

            color: #aeb6bc;

            margin-right: 8px;
        }


        .card-body-modern {

            padding: 28px 24px;
        }


        /* =====================================================
           FORM
        ===================================================== */

        .form-group-modern {

            margin-bottom: 22px;
        }


        .form-label-modern {

            display: block;

            margin-bottom: 8px;

            color: #c8ced2;

            font-size: 12px;

            font-weight: 600;
        }


        .form-label-modern i {

            color: #737b85;

            width: 18px;

            margin-right: 4px;
        }


        .form-control-modern {

            width: 100%;

            height: 46px;

            padding:
                0 14px;

            border:
                1px solid rgba(255,255,255,.08) !important;

            border-radius: 11px;

            background: #1d2128 !important;

            color: #ffffff !important;

            font-family: 'Inter', sans-serif;

            font-size: 13px;

            outline: none;

            transition:
                border .25s ease,
                background .25s ease,
                box-shadow .25s ease;
        }


        .form-control-modern::placeholder {

            color: #656d77;
        }


        .form-control-modern:focus {

            border-color:
                #6f7b7f !important;

            background: #20252d !important;

            box-shadow:
                0 0 0 3px
                rgba(111,123,127,.12) !important;
        }


        /* SELECT */

        select.form-control-modern {

            appearance: none;

            -webkit-appearance: none;

            cursor: pointer;

            padding-right: 40px;

            background-image:
                linear-gradient(45deg, transparent 50%, #737b85 50%),
                linear-gradient(135deg, #737b85 50%, transparent 50%);

            background-position:
                calc(100% - 17px) 20px,
                calc(100% - 12px) 20px;

            background-size:
                5px 5px,
                5px 5px;

            background-repeat: no-repeat;
        }


        select.form-control-modern option {

            background: #1b1f26;

            color: #ffffff;
        }


        /* =====================================================
           FORM ICON
        ===================================================== */

        .input-wrapper {

            position: relative;
        }


        .input-icon {

            position: absolute;

            left: 14px;

            top: 50%;

            transform:
                translateY(-50%);

            color: #666f79;

            font-size: 13px;

            pointer-events: none;
        }


        .input-with-icon {

            padding-left: 40px;
        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .form-actions {

            display: flex;

            gap: 10px;

            margin-top: 10px;

            padding-top: 22px;

            border-top:
                1px solid rgba(255,255,255,.06);
        }


        .btn-modern {

            min-height: 42px;

            padding:
                0 17px;

            border: none;

            border-radius: 10px;

            font-size: 12px;

            font-weight: 600;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            text-decoration: none !important;

            transition:
                all .25s ease;
        }


        .btn-back {

            background: #2b3038;

            color: #c5cbd1 !important;

            border:
                1px solid rgba(255,255,255,.06);
        }


        .btn-back:hover {

            background: #343a42;

            color: #ffffff !important;

            transform:
                translateY(-2px);
        }


        .btn-update {

            background:
                linear-gradient(
                    135deg,
                    #6f7b7f,
                    #4c555a
                );

            color: #ffffff !important;

            box-shadow:
                0 8px 20px
                rgba(0,0,0,.20);
        }


        .btn-update:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 12px 25px
                rgba(0,0,0,.32);
        }


        /* =====================================================
           INFORMATION BOX
        ===================================================== */

        .edit-info {

            display: flex;

            align-items: center;

            gap: 12px;

            padding:
                14px 16px;

            margin-bottom: 25px;

            background:
                rgba(111,123,127,.08);

            border:
                1px solid rgba(111,123,127,.16);

            border-radius: 12px;
        }


        .edit-info-icon {

            width: 34px;
            height: 34px;

            min-width: 34px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 9px;

            background:
                rgba(111,123,127,.18);

            color: #aeb6bc;
        }


        .edit-info-text {

            color: #8e969f;

            font-size: 11px;

            line-height: 1.5;
        }


        /* =====================================================
           MODAL
        ===================================================== */

        .modal-content {

            background: #1b1f26;

            color: #ffffff;

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

            color: #ffffff;

            opacity: .7;
        }


        .btn-modal-cancel {

            background: #343a40;

            color: #ffffff;

            border: none;

            border-radius: 9px;
        }


        .btn-modal-delete {

            background: #dc3545;

            color: #ffffff !important;

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

            .sidebar-modern {

                width: 224px !important;
            }


            .search-modern {

                display: none;
            }


            .page-header {

                display: block;

                margin-bottom: 20px;
            }


            .page-title {

                font-size: 21px;
            }


            .page-subtitle {

                font-size: 12px;
            }


            .card-header-modern {

                padding:
                    18px;
            }


            .card-body-modern {

                padding:
                    20px 18px;
            }


            .form-actions {

                flex-direction: column;
            }


            .btn-modern {

                width: 100%;
            }
        }


        @media (max-width: 576px) {

            .container-fluid {

                padding-left:
                    15px !important;

                padding-right:
                    15px !important;
            }


            .sidebar .nav-item {

                margin-left:
                    8px !important;

                margin-right:
                    8px !important;
            }


            .modern-card {

                border-radius: 15px;
            }
        }

    </style>

</head>


<body id="page-top">


<div id="wrapper">


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <ul class="navbar-nav sidebar sidebar-dark accordion sidebar-modern"
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

                <span>Dashboard</span>

            </a>

        </li>


        <hr class="sidebar-divider">


        <!-- HEADING -->

        <div class="sidebar-heading">

            MENU UTAMA

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

                <span>Data Master</span>

            </a>


            <div id="collapseData"
                 class="collapse show"
                 aria-labelledby="headingData"
                 data-parent="#accordionSidebar">


                <div class="py-2 collapse-inner rounded">


                    <h6 class="collapse-header">

                        KELOLA DATA:

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

                <span>Rental Mobil</span>

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
         CONTENT WRAPPER
    ====================================================== -->

    <div id="content-wrapper"
         class="d-flex flex-column">


        <div id="content">


            <!-- =================================================
                 TOPBAR
            ================================================== -->

            <nav class="navbar navbar-expand topbar topbar-modern mb-4 static-top">


                <!-- MOBILE SIDEBAR -->

                <button
                    id="sidebarToggleTop"
                    class="btn btn-link d-md-none rounded-circle mr-3">

                    <i class="fa fa-bars text-white"></i>

                </button>


                <!-- SEARCH -->

                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 search-modern"
                    action="cari_mobil.php"
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

                            <h6 class="dropdown-header bg-secondary">

                                Notifikasi

                            </h6>


                            <a
                                class="dropdown-item"
                                href="#">

                                <i class="fas fa-car mr-2 text-primary"></i>

                                Data mobil terbaru tersedia.

                            </a>


                            <a
                                class="dropdown-item"
                                href="#">

                                <i class="fas fa-key mr-2 text-success"></i>

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

                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>

                                Profile

                            </a>


                            <a
                                class="dropdown-item"
                                href="#">

                                <i class="fas fa-cog fa-sm fa-fw mr-2 text-gray-400"></i>

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


            <!-- =================================================
                 MAIN CONTENT
            ================================================== -->

            <div class="container-fluid">


                <!-- PAGE HEADER -->

                <div class="page-header">


                    <div>

                        <h1 class="page-title">

                            Edit Data Mobil

                        </h1>


                        <div class="page-subtitle">

                            Perbarui informasi kendaraan yang tersimpan dalam sistem.

                        </div>

                    </div>


                </div>


                <!-- =================================================
                     PHP DATA
                ================================================== -->

                <?php

                include "../koneksi.php";

                if (!isset($_GET['no_plat_arif'])) {

                    echo '
                    <div class="modern-card">
                        <div class="card-body-modern text-center">
                            <i class="fas fa-exclamation-triangle text-warning mb-3"
                               style="font-size:30px;"></i>

                            <div class="text-white">
                                Data mobil tidak ditemukan.
                            </div>

                            <a href="mobil.php"
                               class="btn-modern btn-back mt-3">
                                <i class="fas fa-arrow-left"></i>
                                Kembali
                            </a>
                        </div>
                    </div>';

                    exit;
                }


                $no_plat_arif = mysqli_real_escape_string(
                    $koneksi,
                    $_GET['no_plat_arif']
                );


                $tampil = mysqli_query(
                    $koneksi,
                    "SELECT * FROM tbl_mobil_arif
                     WHERE no_plat_arif='$no_plat_arif'"
                );


                if (!$tampil || mysqli_num_rows($tampil) == 0) {

                    echo '
                    <div class="modern-card">
                        <div class="card-body-modern text-center">
                            <i class="fas fa-car text-secondary mb-3"
                               style="font-size:30px;"></i>

                            <div class="text-white">
                                Data mobil tidak ditemukan.
                            </div>

                            <a href="mobil.php"
                               class="btn-modern btn-back mt-3">
                                <i class="fas fa-arrow-left"></i>
                                Kembali
                            </a>
                        </div>
                    </div>';

                    exit;
                }


                $data = mysqli_fetch_assoc($tampil);

                ?>


                <!-- =================================================
                     FORM CARD
                ================================================== -->

                <div class="modern-card">


                    <!-- CARD HEADER -->

                    <div class="card-header-modern">

                        <h5 class="card-title-modern">

                            <i class="fas fa-pen-to-square"></i>

                            Form Edit Kendaraan

                        </h5>

                    </div>


                    <!-- CARD BODY -->

                    <div class="card-body-modern">


                        <!-- INFO -->

                        <div class="edit-info">

                            <div class="edit-info-icon">

                                <i class="fas fa-circle-info"></i>

                            </div>


                            <div class="edit-info-text">

                                Silakan perbarui informasi kendaraan.
                                Pastikan data yang dimasukkan sudah benar
                                sebelum menyimpan perubahan.

                            </div>

                        </div>


                        <!-- FORM -->

                        <form
                            method="POST"
                            action="update_mobil.php">


                            <!-- NO PLAT LAMA -->

                            <input
                                type="hidden"
                                name="no_plat_arif_lama"
                                value="<?= htmlspecialchars($data['no_plat_arif']) ?>">


                            <div class="row">


                                <!-- NO PLAT -->

                                <div class="col-md-6">

                                    <div class="form-group-modern">


                                        <label
                                            for="no_plat_arif"
                                            class="form-label-modern">

                                            <i class="fas fa-id-card"></i>

                                            Nomor Plat

                                        </label>


                                        <div class="input-wrapper">

                                            <i class="fas fa-car input-icon"></i>

                                            <input
                                                type="text"
                                                name="no_plat_arif"
                                                id="no_plat_arif"
                                                class="form-control-modern input-with-icon"
                                                value="<?= htmlspecialchars($data['no_plat_arif']) ?>"
                                                placeholder="Contoh: Z 1234 AB"
                                                required>

                                        </div>


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
                                            id="nama_mobil_arif"
                                            class="form-control-modern"
                                            required>


                                            <option value="">
                                                -- Pilih Nama Mobil --
                                            </option>


                                            <option
                                                value="BMW M440 Coupe"
                                                <?= ($data['nama_mobil_arif'] == 'BMW M440 Coupe') ? 'selected' : '' ?>>

                                                BMW M440 Coupe

                                            </option>


                                            <option
                                                value="Porsche 911"
                                                <?= ($data['nama_mobil_arif'] == 'Porsche 911') ? 'selected' : '' ?>>

                                                Porsche 911

                                            </option>


                                            <option
                                                value="Mercedes-Benz G-Class"
                                                <?= ($data['nama_mobil_arif'] == 'Mercedes-Benz G-Class') ? 'selected' : '' ?>>

                                                Mercedes-Benz G-Class

                                            </option>


                                            <option
                                                value="Rolls-Royce Phantom"
                                                <?= ($data['nama_mobil_arif'] == 'Rolls-Royce Phantom') ? 'selected' : '' ?>>

                                                Rolls-Royce Phantom

                                            </option>


                                            <option
                                                value="Toyota Supra"
                                                <?= ($data['nama_mobil_arif'] == 'Toyota Supra') ? 'selected' : '' ?>>

                                                Toyota Supra

                                            </option>


                                            <option
                                                value="Nissan GT-R"
                                                <?= ($data['nama_mobil_arif'] == 'Nissan GT-R') ? 'selected' : '' ?>>

                                                Nissan GT-R

                                            </option>


                                        </select>


                                    </div>

                                </div>


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
                                            id="brand_mobil_arif"
                                            class="form-control-modern"
                                            required>


                                            <option value="">
                                                -- Pilih Brand Mobil --
                                            </option>


                                            <option
                                                value="BMW"
                                                <?= ($data['brand_mobil_arif'] == 'BMW') ? 'selected' : '' ?>>

                                                BMW

                                            </option>


                                            <option
                                                value="Porsche"
                                                <?= ($data['brand_mobil_arif'] == 'Porsche') ? 'selected' : '' ?>>

                                                Porsche

                                            </option>


                                            <option
                                                value="Mercedes-Benz"
                                                <?= ($data['brand_mobil_arif'] == 'Mercedes-Benz') ? 'selected' : '' ?>>

                                                Mercedes-Benz

                                            </option>


                                            <option
                                                value="Rolls-Royce"
                                                <?= ($data['brand_mobil_arif'] == 'Rolls-Royce') ? 'selected' : '' ?>>

                                                Rolls-Royce

                                            </option>


                                            <option
                                                value="Toyota"
                                                <?= ($data['brand_mobil_arif'] == 'Toyota') ? 'selected' : '' ?>>

                                                Toyota

                                            </option>


                                            <option
                                                value="Nissan"
                                                <?= ($data['brand_mobil_arif'] == 'Nissan') ? 'selected' : '' ?>>

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
                                            id="tipe_transmisi_arif"
                                            class="form-control-modern"
                                            required>


                                            <option value="">
                                                -- Pilih Tipe Transmisi --
                                            </option>


                                            <option
                                                value="Automatic"
                                                <?= ($data['tipe_transmisi_arif'] == 'Automatic') ? 'selected' : '' ?>>

                                                Automatic

                                            </option>


                                            <option
                                                value="Manual"
                                                <?= ($data['tipe_transmisi_arif'] == 'Manual') ? 'selected' : '' ?>>

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
                                    class="btn-modern btn-back">

                                    <i class="fas fa-arrow-left"></i>

                                    Kembali

                                </a>


                                <button
                                    type="submit"
                                    class="btn-modern btn-update">

                                    <i class="fas fa-save"></i>

                                    Perbarui Data

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
    role="dialog">


    <div
        class="modal-dialog modal-dialog-centered"
        role="document">


        <div class="modal-content">


            <div class="modal-header">

                <h5 class="modal-title">

                    <i class="fas fa-sign-out-alt mr-2 text-warning"></i>

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
                    class="btn btn-modal-delete"
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