<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data Mobil | CV. Rental Mobil Arifubila</title>

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

    body {
        font-family: 'Inter', sans-serif;
        background: #080b12 !important;
        color: #fff;
    }

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
   SIDEBAR
========================= */

.sidebar-modern {
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

.brand-icon {
    width: 38px;
    height: 38px;
    border-radius: 12px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: linear-gradient(
        135deg,
        #2563eb,
        #1d4ed8
    );

    color: #fff;

    box-shadow:
        0 8px 25px rgba(37,99,235,.25);
}

.sidebar-brand-text {
    font-size: 15px;
    font-weight: 800;
    letter-spacing: .5px;
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
        background .25s ease,
        color .25s ease,
        box-shadow .25s ease;
}

.sidebar .nav-link i {
    width: 20px;
    margin-right: 8px;
    color: #64748b;

    transition: color .25s ease;
}

/* HOVER */
.sidebar .nav-link:hover {
    background: rgba(59,130,246,.12);
    color: #fff !important;

    /* Jangan pakai translateX */
    transform: none;
}

.sidebar .nav-link:hover i {
    color: #60a5fa;
}

/* ACTIVE NAVBAR */
.sidebar .nav-item.active > .nav-link {
    background: linear-gradient(
        135deg,
        rgba(37,99,235,.25),
        rgba(14,165,233,.10)
    );

    color: #fff !important;

    border: 1px solid rgba(96,165,250,.15);

    box-shadow:
        0 8px 20px rgba(0,0,0,.15);
}

.sidebar .nav-item.active > .nav-link i {
    color: #60a5fa;
}

/* =========================
   SIDEBAR HEADING
========================= */

.sidebar-heading {
    color: #475569 !important;
    font-size: 10px;
    letter-spacing: 1.5px;
    font-weight: 700;
    padding-left: 20px;
}

/* =========================
   COLLAPSE MENU
========================= */

.collapse-inner {
    background: #111827 !important;

    border: 1px solid rgba(255,255,255,.06);

    border-radius: 12px !important;

    margin-top: 5px;
}

.collapse-header {
    color: #475569 !important;
    font-size: 10px;
    font-weight: 700;
}

.collapse-item {
    color: #94a3b8 !important;

    border-radius: 8px;

    transition:
        background .2s ease,
        color .2s ease;
}

/* HOVER SUBMENU */
.collapse-item:hover {
    background: rgba(59,130,246,.12);
    color: #fff !important;

    /* Jangan geser */
    transform: none;
}

/* ACTIVE DATA MOBIL */
.collapse-item.active-item {
    background: linear-gradient(
        135deg,
        rgba(37,99,235,.25),
        rgba(14,165,233,.10)
    );

    color: #fff !important;

    border: 1px solid rgba(96,165,250,.12);
}

.collapse-item.active-item i {
    color: #60a5fa;
}

    /* =====================================================
       TOPBAR
    ===================================================== */

    .topbar-modern {
        height: 78px;

        background: rgba(8,11,18,.88) !important;

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
        background: rgba(59,130,246,.12);
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

        margin: 25px 0 30px;

        animation: fadeUp .6s ease;
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

        margin-top: 6px;
    }

    /* =====================================================
       MAIN CARD
    ===================================================== */

    .modern-card {
        background: linear-gradient(
            145deg,
            #151b25,
            #0d1117
        );

        border:
            1px solid rgba(255,255,255,.07);

        border-radius: 20px;

        overflow: hidden;

        box-shadow:
            0 20px 50px rgba(0,0,0,.30);

        animation: fadeUp .7s ease;

        transition:
            border-color .3s ease,
            box-shadow .3s ease;
    }

    .modern-card:hover {
        border-color: rgba(96,165,250,.15);

        box-shadow:
            0 20px 55px rgba(0,0,0,.35),
            0 0 30px rgba(37,99,235,.05);
    }

    .card-header-modern {
        padding: 20px 24px;

        border-bottom:
            1px solid rgba(255,255,255,.06);

        display: flex;

        justify-content: space-between;
        align-items: center;
    }

    .card-title-modern {
        margin: 0;

        font-size: 16px;
        font-weight: 700;
    }

    .card-title-modern i {
        color: #60a5fa;
        margin-right: 8px;
    }

    /* =====================================================
       BUTTON ADD
    ===================================================== */

    .btn-add {
        background: linear-gradient(
            135deg,
            #2563eb,
            #1d4ed8
        );

        color: #fff !important;

        border: none;

        border-radius: 11px;

        padding: 11px 17px;

        font-size: 12px;
        font-weight: 700;

        letter-spacing: .2px;

        transition: all .25s ease;

        box-shadow:
            0 8px 20px rgba(37,99,235,.18);
    }

    .btn-add:hover {
        transform: translateY(-2px);

        color: #fff !important;

        box-shadow:
            0 12px 25px rgba(37,99,235,.30);
    }

    /* =====================================================
       TABLE
    ===================================================== */

    .table-container {
        padding: 0 20px 20px;
    }

    .modern-table {
        margin: 0;

        color: #fff;

        border-collapse: separate;

        border-spacing: 0 8px;
    }

    .modern-table thead th {
        border: none !important;

        color: #64748b;

        font-size: 10px;

        text-transform: uppercase;

        letter-spacing: 1px;

        font-weight: 700;

        padding: 15px;
    }

    .modern-table tbody tr {
        background: #111827;

        transition:
            all .25s ease;
    }

    .modern-table tbody tr:hover {
        background: #172033;

        transform: translateY(-2px);

        box-shadow:
            0 8px 20px rgba(0,0,0,.25);
    }

    .modern-table tbody td {
        border: none !important;

        padding: 16px 15px;

        vertical-align: middle;

        font-size: 13px;
    }

    .modern-table tbody td:first-child {
        border-radius: 12px 0 0 12px;

        color: #64748b;

        font-weight: 600;
    }

    .modern-table tbody td:last-child {
        border-radius: 0 12px 12px 0;
    }

    /* =====================================================
       PLATE
    ===================================================== */

    .plate {
        display: inline-flex;

        align-items: center;

        padding: 6px 10px;

        background: rgba(255,255,255,.05);

        border:
            1px solid rgba(255,255,255,.08);

        border-radius: 8px;

        font-weight: 700;

        font-size: 12px;

        letter-spacing: .5px;

        color: #e2e8f0;
    }

    .plate i {
        color: #60a5fa;
    }

    .car-name {
        font-weight: 700;
        color: #fff;
    }

    .brand {
        color: #94a3b8;
    }

    /* =====================================================
       TRANSMISSION
    ===================================================== */

    .transmission {
        display: inline-flex;

        align-items: center;

        gap: 6px;

        padding: 6px 10px;

        border-radius: 20px;

        background:
            rgba(37,99,235,.08);

        border:
            1px solid rgba(37,99,235,.15);

        color: #60a5fa;

        font-size: 10px;

        font-weight: 600;
    }

    /* =====================================================
       ACTION
    ===================================================== */

    .action-buttons {
        display: flex;

        gap: 7px;

        justify-content: center;
    }

    .btn-action {
        width: 36px;
        height: 36px;

        border: none;

        border-radius: 9px;

        display: flex;

        align-items: center;

        justify-content: center;

        color: #fff !important;

        transition: all .25s ease;
    }

    /* EDIT */

    .btn-edit {
        background: #2563eb;
    }

    .btn-edit:hover {
        background: #1d4ed8;
    }

    /* DELETE */

    .btn-delete {
        background: #dc3545;
    }

    .btn-delete:hover {
        background: #b91c1c;
    }

    .btn-action:hover {
        transform:
            translateY(-3px)
            scale(1.05);

        box-shadow:
            0 8px 18px rgba(0,0,0,.35);
    }

    /* =====================================================
       EMPTY DATA
    ===================================================== */

    .empty-data {
        text-align: center;

        padding: 45px !important;

        color: #64748b;
    }

    .empty-data i {
        font-size: 30px;

        margin-bottom: 10px;

        color: #475569;
    }

    /* =====================================================
       DROPDOWN
    ===================================================== */

    .dropdown-menu {
        background: #111827 !important;

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

        transition: .2s ease;
    }

    .dropdown-item:hover {
        background: rgba(59,130,246,.12);

        color: #fff;
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

        box-shadow:
            0 25px 70px rgba(0,0,0,.5);
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

    .modal-header .close:hover {
        opacity: 1;
    }

    .modal-body {
        color: #94a3b8;
    }

    .btn-modal-cancel {
        background: #1f2937;

        color: #fff !important;

        border:
            1px solid rgba(255,255,255,.08);

        border-radius: 9px;

        transition: .25s ease;
    }

    .btn-modal-cancel:hover {
        background: #374151;
    }

    .btn-modal-delete {
        background: #dc3545;

        color: #fff !important;

        border: none;

        border-radius: 9px;

        transition: .25s ease;
    }

    .btn-modal-delete:hover {
        background: #b91c1c;

        transform: translateY(-1px);
    }

    /* =====================================================
       ANIMATION
    ===================================================== */

    @keyframes fadeUp {

        from {
            opacity: 0;
            transform: translateY(15px);
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

        .topbar-modern {
            height: 65px;
        }

        .page-header {
            display: block;

            margin-top: 20px;
        }

        .page-header .btn-add {
            margin-top: 15px;
        }

        .search-modern {
            display: none;
        }

        .page-title {
            font-size: 23px;
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
            margin-bottom: 15px;

            padding: 10px 0;

            border-radius: 12px;
        }

        .modern-table tbody td {
            text-align: right;

            padding: 10px 15px;

            border-radius: 0 !important;

            position: relative;

            padding-left: 45%;
        }

        .modern-table tbody td::before {

            content: attr(data-label);

            position: absolute;

            left: 15px;

            color: #64748b;

            font-size: 10px;

            text-transform: uppercase;

            font-weight: 700;

            letter-spacing: .5px;
        }

        .action-buttons {
            justify-content: flex-end;
        }

        .card-header-modern {
            padding: 18px;
        }

        .table-container {
            padding: 0 10px 10px;
        }

    }

    @media (max-width: 576px) {

        .container-fluid {
            padding-left: 16px;
            padding-right: 16px;
        }

        .sidebar .nav-item {
            margin-left: 8px;
            margin-right: 8px;
        }

        .card-title-modern {
            font-size: 14px;
        }

        .btn-add {
            width: 100%;
            text-align: center;
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


            <!-- =====================================================
                 MAIN CONTENT
            ====================================================== -->

            <div class="container-fluid">


                <!-- PAGE HEADER -->

                <div class="page-header">


                    <div>

                        <h1 class="page-title">

                            Data Mobil

                        </h1>


                        <div class="page-subtitle">

                            Kelola daftar kendaraan yang tersedia untuk rental.

                        </div>

                    </div>


                    <a
                        href="tambah_mobil.php"
                        class="btn btn-add">

                        <i class="fas fa-plus mr-2"></i>

                        Tambah Mobil

                    </a>


                </div>


                <!-- MAIN CARD -->

                <div class="modern-card">


                    <div class="card-header-modern">


                        <h5 class="card-title-modern">

                            <i class="fas fa-car"></i>

                            Daftar Kendaraan

                        </h5>


                    </div>


                    <div class="table-container">


                        <div class="table-responsive">


                            <table class="table modern-table">


                                <thead>

                                    <tr>

                                        <th>
                                            No
                                        </th>

                                        <th>
                                            No Plat
                                        </th>

                                        <th>
                                            Nama Mobil
                                        </th>

                                        <th>
                                            Brand
                                        </th>

                                        <th>
                                            Transmisi
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
                                    "SELECT * FROM tbl_mobil_arif"
                                );


                                if (mysqli_num_rows($tampil) > 0) {


                                    while ($data = mysqli_fetch_array($tampil)) {

                                        $i++;

                                ?>


                                    <tr>


                                        <!-- NO -->

                                        <td data-label="No">

                                            <?= $i ?>

                                        </td>


                                        <!-- PLAT -->

                                        <td data-label="No Plat">

                                            <span class="plate">

                                                <i class="fas fa-car mr-2"></i>

                                                <?= htmlspecialchars(
                                                    $data['no_plat_arif']
                                                ) ?>

                                            </span>

                                        </td>


                                        <!-- NAMA -->

                                        <td data-label="Nama Mobil">

                                            <span class="car-name">

                                                <?= htmlspecialchars(
                                                    $data['nama_mobil_arif']
                                                ) ?>

                                            </span>

                                        </td>


                                        <!-- BRAND -->

                                        <td data-label="Brand">

                                            <span class="brand">

                                                <?= htmlspecialchars(
                                                    $data['brand_mobil_arif']
                                                ) ?>

                                            </span>

                                        </td>


                                        <!-- TRANSMISI -->

                                        <td data-label="Transmisi">

                                            <span class="transmission">

                                                <i class="fas fa-gears"></i>

                                                <?= htmlspecialchars(
                                                    $data['tipe_transmisi_arif']
                                                ) ?>

                                            </span>

                                        </td>


                                        <!-- AKSI -->

                                        <td data-label="Aksi">


                                            <div class="action-buttons">


                                                <!-- EDIT -->

                                                <a
                                                    href="edit_mobil.php?no_plat_arif=<?= urlencode($data['no_plat_arif']) ?>"
                                                    class="btn-action btn-edit"
                                                    title="Edit">

                                                    <i class="fas fa-pen"></i>

                                                </a>


                                                <!-- DELETE -->

                                                <button
                                                    type="button"
                                                    class="btn-action btn-delete"
                                                    title="Hapus"
                                                    onclick="showDeleteModal(
                                                        'delete_mobil.php?no_plat_arif=<?= urlencode($data['no_plat_arif']) ?>'
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


                                    <tr>

                                        <td
                                            colspan="6"
                                            class="empty-data">

                                            <i class="fas fa-car"></i>

                                            <div>

                                                Belum ada data mobil.

                                            </div>

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


<!-- =====================================================
     DELETE MODAL
====================================================== -->

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
                    type="button"
                    class="close"
                    data-dismiss="modal">

                    <span>&times;</span>

                </button>


            </div>


            <div class="modal-body">

                Apakah Anda yakin ingin menghapus data mobil ini?

                <div class="text-muted small mt-2">

                    Data yang sudah dihapus tidak dapat dikembalikan.

                </div>

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