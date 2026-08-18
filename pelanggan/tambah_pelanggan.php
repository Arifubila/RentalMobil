<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tambah Pelanggan | CV. Rental Mobil Arifubila</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- SB Admin 2 -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            min-height: 100%;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #0f1115;
            color: #ffffff;
        }

        #wrapper {
            min-height: 100vh;
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
            background: linear-gradient(
                180deg,
                #111318 0%,
                #0d0f13 100%
            ) !important;

            border-right: 1px solid rgba(255, 255, 255, .07);

            width: 224px !important;

            transition: all .3s ease;
        }

        .sidebar-brand {
            height: 80px;

            padding: 0 15px;

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

            border-radius: 12px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: linear-gradient(
                135deg,
                #6f7b7f,
                #31363f
            );

            color: #fff;

            box-shadow:
                0 8px 25px rgba(0, 0, 0, .3);
        }

        .sidebar-brand-text {
            font-size: 13px;
            font-weight: 800;

            letter-spacing: .7px;

            color: #fff;

            white-space: nowrap;
        }

        .sidebar .nav-item {
            margin: 5px 10px;
        }

        .sidebar .nav-link {
            border-radius: 11px;

            padding: 12px 14px;

            color: #9ca3af !important;

            transition: all .25s ease;

            display: flex;
            align-items: center;

            overflow: hidden;
        }

        .sidebar .nav-link i {
            width: 20px;
            min-width: 20px;

            margin-right: 9px;

            color: #737b85;

            transition: .25s ease;
        }

        .sidebar .nav-link:hover {
            color: #fff !important;

            background: linear-gradient(
                135deg,
                rgba(111, 123, 127, .20),
                rgba(49, 54, 63, .20)
            );

            transform: translateX(2px);
        }

        .sidebar .nav-link:hover i {
            color: #fff;
            transform: scale(1.08);
        }

        /* ACTIVE */

        .sidebar .nav-item.active > .nav-link {
            color: #fff !important;

            background: linear-gradient(
                135deg,
                rgba(111, 123, 127, .32),
                rgba(49, 54, 63, .32)
            );

            border: 1px solid rgba(255, 255, 255, .05);

            box-shadow:
                0 8px 20px rgba(0, 0, 0, .15);
        }

        .sidebar .nav-item.active > .nav-link i {
            color: #fff;
        }

        .sidebar-heading {
            color: #666d75 !important;

            font-size: 10px;

            letter-spacing: 1.5px;

            font-weight: 700;

            padding-left: 18px;
        }

        .sidebar-divider {
            border-top: 1px solid rgba(255, 255, 255, .06);
        }


        /* =====================================================
           COLLAPSE MENU
        ===================================================== */

        .collapse-inner {
            background: #1b1f26 !important;

            border: 1px solid rgba(255, 255, 255, .05);

            border-radius: 11px !important;

            margin-top: 5px;

            padding: 8px !important;
        }

        .collapse-header {
            color: #666d75 !important;

            font-size: 9px;

            font-weight: 700;

            padding: 8px 10px;
        }

        .collapse-item {
            color: #9ca3af !important;

            border-radius: 8px;

            padding: 9px 10px !important;

            font-size: 12px;

            transition: .25s ease;
        }

        .collapse-item:hover {
            background: rgba(255, 255, 255, .08);

            color: #fff !important;

            transform: translateX(2px);
        }

        .collapse-item i {
            width: 17px;
        }

        .collapse-item.active-item {
            background: rgba(111, 123, 127, .25);

            color: #fff !important;
        }

        .collapse-item.active-item i {
            color: #fff;
        }


        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar-modern {
            background: rgba(15, 17, 21, .94) !important;

            border-bottom:
                1px solid rgba(255, 255, 255, .07) !important;

            backdrop-filter: blur(15px);

            min-height: 70px;
        }

        .search-modern {
            width: 330px;
        }

        .search-modern .form-control {
            height: 42px;

            background: #191c22 !important;

            border:
                1px solid rgba(255, 255, 255, .08) !important;

            color: #fff !important;

            border-radius: 11px 0 0 11px;
        }

        .search-modern .form-control::placeholder {
            color: #6b7280;
        }

        .search-modern .btn {
            border-radius: 0 11px 11px 0;

            background: #31363f;

            border: none;

            color: #fff;

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
            background: rgba(255, 255, 255, .07);

            transform: translateY(-1px);
        }

        .profile-name {
            color: #fff !important;

            font-weight: 600;
        }

        .img-profile {
            width: 38px;
            height: 38px;

            object-fit: cover;

            border: 2px solid #31363f;
        }


        /* =====================================================
           PAGE HEADER
        ===================================================== */

        .page-header {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 25px;

            animation: fadeUp .5s ease;
        }

        .page-title {
            font-size: 25px;

            font-weight: 800;

            margin: 0;

            color: #fff;
        }

        .page-subtitle {
            color: #7f8791;

            font-size: 13px;

            margin-top: 6px;
        }


        /* =====================================================
           FORM CARD
        ===================================================== */

        .modern-card {
            background: #171a20;

            border:
                1px solid rgba(255, 255, 255, .06);

            border-radius: 20px;

            overflow: hidden;

            box-shadow:
                0 15px 40px rgba(0, 0, 0, .25);

            animation: fadeUp .65s ease;
        }

        .card-header-modern {
            padding: 20px 24px;

            border-bottom:
                1px solid rgba(255, 255, 255, .06);

            display: flex;

            align-items: center;
        }

        .card-title-modern {
            margin: 0;

            font-size: 16px;

            font-weight: 700;

            color: #fff;
        }

        .card-title-modern i {
            color: #aeb6bc;

            margin-right: 9px;
        }

        .card-body-modern {
            padding: 25px;
        }


        /* =====================================================
           FORM
        ===================================================== */

        .form-group-modern {
            margin-bottom: 20px;
        }

        .form-label-modern {
            display: block;

            color: #c8ced2;

            font-size: 12px;

            font-weight: 600;

            margin-bottom: 8px;
        }

        .form-label-modern i {
            color: #7f8791;

            margin-right: 6px;
        }

        .form-control-modern {
            width: 100%;

            height: 45px;

            background: #1d2128 !important;

            border:
                1px solid rgba(255, 255, 255, .08) !important;

            border-radius: 10px;

            color: #fff !important;

            padding: 10px 13px;

            font-size: 13px;

            transition: all .25s ease;
        }

        .form-control-modern::placeholder {
            color: #646c76;
        }

        .form-control-modern:focus {
            background: #20242b !important;

            border-color: #6f7b7f !important;

            box-shadow:
                0 0 0 3px rgba(111, 123, 127, .12) !important;

            outline: none;
        }

        select.form-control-modern {
            cursor: pointer;
        }

        select.form-control-modern option {
            background: #1b1f26;

            color: #fff;
        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .form-actions {
            display: flex;

            gap: 10px;

            padding-top: 5px;
        }

        .btn-back {
            background: #343a40;

            color: #d9dde1 !important;

            border: 1px solid rgba(255, 255, 255, .06);

            border-radius: 9px;

            padding: 10px 17px;

            font-size: 12px;

            font-weight: 600;

            transition: .25s ease;
        }

        .btn-back:hover {
            background: #444b52;

            color: #fff !important;

            transform: translateY(-2px);
        }

        .btn-save {
            background: linear-gradient(
                135deg,
                #6f7b7f,
                #4c555a
            );

            color: #fff !important;

            border: none;

            border-radius: 9px;

            padding: 10px 18px;

            font-size: 12px;

            font-weight: 600;

            transition: all .25s ease;

            box-shadow:
                0 7px 18px rgba(0, 0, 0, .2);
        }

        .btn-save:hover {
            transform: translateY(-2px);

            box-shadow:
                0 10px 22px rgba(0, 0, 0, .3);

            color: #fff !important;
        }


        /* =====================================================
           INFO BOX
        ===================================================== */

        .form-info {
            display: flex;

            align-items: flex-start;

            gap: 10px;

            background: rgba(111, 123, 127, .08);

            border: 1px solid rgba(111, 123, 127, .15);

            border-radius: 10px;

            padding: 12px 14px;

            margin-bottom: 22px;

            color: #8e969f;

            font-size: 11px;

            line-height: 1.6;
        }

        .form-info i {
            color: #aeb6bc;

            margin-top: 2px;
        }


        /* =====================================================
           DROPDOWN
        ===================================================== */

        .dropdown-menu {
            background: #1b1f26;

            border:
                1px solid rgba(255, 255, 255, .07);

            border-radius: 10px;

            box-shadow:
                0 15px 35px rgba(0, 0, 0, .35);
        }

        .dropdown-item {
            color: #b7bec5;
        }

        .dropdown-item:hover {
            background: rgba(255, 255, 255, .07);

            color: #fff;
        }

        .dropdown-divider {
            border-top-color:
                rgba(255, 255, 255, .07);
        }

        .dropdown-header {
            background: #31363f !important;

            color: #fff !important;
        }


        /* =====================================================
           MODAL
        ===================================================== */

        .modal-content {
            background: #1b1f26;

            color: #fff;

            border:
                1px solid rgba(255, 255, 255, .08);

            border-radius: 16px;
        }

        .modal-header,
        .modal-footer {
            border-color:
                rgba(255, 255, 255, .07);
        }

        .modal-header .close {
            color: #fff;

            opacity: .7;
        }

        .btn-modal-cancel {
            background: #343a40;

            color: #fff;

            border: none;

            border-radius: 8px;
        }

        .btn-modal-delete {
            background: #8b3c46;

            color: #fff !important;

            border: none;

            border-radius: 8px;
        }


        /* =====================================================
           ANIMATION
        ===================================================== */

        @keyframes fadeUp {
            from {
                opacity: 0;

                transform: translateY(12px);
            }

            to {
                opacity: 1;

                transform: translateY(0);
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
                padding: 18px;
            }

            .card-body-modern {
                padding: 18px;
            }

            .form-actions {
                flex-direction: column;
            }

            .form-actions a,
            .form-actions button {
                width: 100%;
            }
        }


        @media (max-width: 576px) {

            .container-fluid {
                padding-left: 15px;

                padding-right: 15px;
            }

            .topbar-modern {
                min-height: 62px;
            }

            .page-title {
                font-size: 20px;
            }

            .card-title-modern {
                font-size: 14px;
            }

            .card-body-modern {
                padding: 16px;
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

                <span>
                    Dashboard
                </span>

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

                <span>
                    Data Master
                </span>

            </a>


            <div id="collapseData"
                 class="collapse show"
                 data-parent="#accordionSidebar">

                <div class="py-2 collapse-inner rounded">

                    <h6 class="collapse-header">
                        KELOLA DATA:
                    </h6>


                    <a class="collapse-item"
                       href="../mobil/mobil.php">

                        <i class="fas fa-car mr-2"></i>
                        Data Mobil

                    </a>


                    <a class="collapse-item active-item"
                       href="pelanggan.php">

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
         CONTENT WRAPPER
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
                    action="cari_pelanggan.php"
                    method="GET">

                    <div class="input-group">

                        <input
                            type="text"
                            name="keyword"
                            class="form-control"
                            placeholder="Cari data pelanggan..."
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

                            <h6 class="dropdown-header">
                                Notifikasi
                            </h6>


                            <a
                                class="dropdown-item"
                                href="#">

                                <i class="fas fa-user mr-2 text-primary"></i>

                                Data pelanggan terbaru tersedia.

                            </a>


                            <a
                                class="dropdown-item"
                                href="#">

                                <i class="fas fa-car mr-2 text-success"></i>

                                Data mobil tersedia untuk rental.

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


            <!-- =====================================================
                 MAIN CONTENT
            ====================================================== -->

            <div class="container-fluid">


                <!-- PAGE HEADER -->

                <div class="page-header">

                    <div>

                        <h1 class="page-title">
                            Tambah Pelanggan
                        </h1>

                        <div class="page-subtitle">
                            Tambahkan data pelanggan baru ke dalam sistem rental.
                        </div>

                    </div>

                </div>


                <!-- =====================================================
                     FORM CARD
                ====================================================== -->

                <div class="modern-card">


                    <!-- CARD HEADER -->

                    <div class="card-header-modern">

                        <h5 class="card-title-modern">

                            <i class="fas fa-user-plus"></i>

                            Form Data Pelanggan

                        </h5>

                    </div>


                    <!-- CARD BODY -->

                    <div class="card-body-modern">


                        <!-- INFO -->

                        <div class="form-info">

                            <i class="fas fa-circle-info"></i>

                            <div>
                                Silakan isi seluruh data pelanggan dengan benar.
                                Data ini akan digunakan untuk proses administrasi
                                rental mobil.
                            </div>

                        </div>


                        <!-- FORM -->

                        <form
                            method="POST"
                            action="insert_pelanggan.php">


                            <div class="row">


                                <!-- NIK -->

                                <div class="col-md-6">

                                    <div class="form-group-modern">

                                        <label
                                            for="nik_ktp_arif"
                                            class="form-label-modern">

                                            <i class="fas fa-id-card"></i>

                                            NIK KTP

                                        </label>


                                        <input
                                            type="text"
                                            name="nik_ktp_arif"
                                            class="form-control-modern"
                                            id="nik_ktp_arif"
                                            placeholder="Masukkan NIK KTP"
                                            maxlength="16"
                                            inputmode="numeric"
                                            required>

                                    </div>

                                </div>


                                <!-- NAMA -->

                                <div class="col-md-6">

                                    <div class="form-group-modern">

                                        <label
                                            for="nama_arif"
                                            class="form-label-modern">

                                            <i class="fas fa-user"></i>

                                            Nama Lengkap

                                        </label>


                                        <input
                                            type="text"
                                            name="nama_arif"
                                            class="form-control-modern"
                                            id="nama_arif"
                                            placeholder="Masukkan nama lengkap"
                                            required>

                                    </div>

                                </div>


                                <!-- NO HP -->

                                <div class="col-md-6">

                                    <div class="form-group-modern">

                                        <label
                                            for="no_hp_arif"
                                            class="form-label-modern">

                                            <i class="fas fa-phone"></i>

                                            Nomor HP

                                        </label>


                                        <input
                                            type="text"
                                            name="no_hp_arif"
                                            class="form-control-modern"
                                            id="no_hp_arif"
                                            placeholder="Masukkan nomor HP"
                                            inputmode="tel"
                                            required>

                                    </div>

                                </div>


                                <!-- ALAMAT -->

                                <div class="col-md-6">

                                    <div class="form-group-modern">

                                        <label
                                            for="alamat_arif"
                                            class="form-label-modern">

                                            <i class="fas fa-location-dot"></i>

                                            Alamat

                                        </label>


                                        <input
                                            type="text"
                                            name="alamat_arif"
                                            class="form-control-modern"
                                            id="alamat_arif"
                                            placeholder="Masukkan alamat lengkap"
                                            required>

                                    </div>

                                </div>


                            </div>


                            <!-- ACTION -->

                            <div class="form-actions">


                                <a
                                    href="pelanggan.php"
                                    class="btn btn-back">

                                    <i class="fas fa-arrow-left mr-2"></i>

                                    Kembali

                                </a>


                                <button
                                    type="submit"
                                    class="btn btn-save">

                                    <i class="fas fa-save mr-2"></i>

                                    Simpan Pelanggan

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