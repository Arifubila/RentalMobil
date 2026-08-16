<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CV. Rental Mobil Arifubila</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Bootstrap -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

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
            background: linear-gradient(180deg, #0d1117 0%, #080b10 100%) !important;
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
           CAR CONTAINER
        ========================= */

        .card-container {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
            padding-bottom: 40px;
        }

        /* =========================
           CAR CARD
        ========================= */

        .car-card {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            background: linear-gradient(
                145deg,
                #151b25,
                #0d1117
            );
            border: 1px solid rgba(255,255,255,.07);
            transition:
                transform .35s ease,
                box-shadow .35s ease,
                border-color .35s ease;
            animation: cardAppear .7s ease both;
        }

        .car-card:nth-child(2) {
            animation-delay: .08s;
        }

        .car-card:nth-child(3) {
            animation-delay: .16s;
        }

        .car-card:nth-child(4) {
            animation-delay: .24s;
        }

        .car-card:nth-child(5) {
            animation-delay: .32s;
        }

        .car-card:nth-child(6) {
            animation-delay: .40s;
        }

        @keyframes cardAppear {
            from {
                opacity: 0;
                transform: translateY(25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .car-card:hover {
            transform: translateY(-8px);
            border-color: rgba(96,165,250,.3);
            box-shadow:
                0 20px 50px rgba(0,0,0,.35),
                0 0 30px rgba(37,99,235,.08);
        }

        .car-content {
            padding: 20px;
        }

        .car-title {
            font-size: 17px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 14px;
        }

        .car-tags {
            display: flex;
            gap: 6px;
            flex-wrap: wrap;
        }

        .car-tag {
            padding: 5px 9px;
            border-radius: 50px;
            background: rgba(255,255,255,.05);
            border: 1px solid rgba(255,255,255,.08);
            color: #94a3b8;
            font-size: 9px;
            font-weight: 600;
            letter-spacing: .3px;
        }

        .car-image-wrapper {
            height: 190px;
            margin: 5px 0 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .car-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
            transition: transform .5s ease;
            filter: drop-shadow(0 18px 15px rgba(0,0,0,.35));
        }

        .car-card:hover .car-image {
            transform: scale(1.06) translateY(-4px);
        }

        .car-info {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-top: 8px;
        }

        .price-label {
            display: block;
            color: #64748b;
            font-size: 9px;
            margin-bottom: 3px;
        }

        .price {
            color: #fff;
            font-size: 19px;
            font-weight: 800;
        }

        .price span {
            color: #64748b;
            font-size: 10px;
            font-weight: 500;
        }

        .transmission {
            padding: 7px 11px;
            border-radius: 50px;
            background: rgba(37,99,235,.08);
            border: 1px solid rgba(37,99,235,.15);
            color: #60a5fa;
            font-size: 10px;
            font-weight: 600;
        }

        .total-price {
            color: #64748b;
            font-size: 11px;
            margin-top: 6px;
        }

        .total-price span {
            color: #475569;
        }

        /* =========================
           RENT BUTTON
        ========================= */

        .rent-btn {
            width: 100%;
            margin-top: 15px;
            padding: 12px;
            border: none;
            border-radius: 11px;
            background: linear-gradient(
                135deg,
                #2563eb,
                #1d4ed8
            );
            color: #fff !important;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .3px;
            text-decoration: none !important;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            transition: all .25s ease;
            box-shadow: 0 8px 20px rgba(37,99,235,.18);
        }

        .rent-btn:hover {
            transform: translateY(-2px);
            color: #fff !important;
            box-shadow: 0 12px 25px rgba(37,99,235,.3);
        }

        .rent-btn i {
            transition: transform .25s;
        }

        .rent-btn:hover i {
            transform: translateX(4px);
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
           MOBILE
        ========================= */

        @media (max-width: 1100px) {
            .card-container {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

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

            .card-container {
                grid-template-columns: 1fr;
                gap: 18px;
            }

            .car-card {
                max-width: 600px;
                width: 100%;
                margin: auto;
            }

            .car-image-wrapper {
                height: 210px;
            }
        }

        @media (max-width: 576px) {

            .container-fluid {
                padding-left: 16px;
                padding-right: 16px;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start !important;
                gap: 12px;
            }

            .navbar-search {
                display: none !important;
            }

            .car-content {
                padding: 18px;
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

        <a class="sidebar-brand d-flex align-items-center justify-content-center"
           href="home.php">

            <div class="sidebar-brand-icon">
                <i class="fa-solid fa-car-side"></i>
            </div>

            <div class="sidebar-brand-text mx-3">
                CV. ARIFUBILA
            </div>

        </a>

        <hr class="sidebar-divider my-0">

        <li class="nav-item active">
            <a class="nav-link" href="home.php">
                <i class="fas fa-fw fa-chart-pie"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            MANAGEMENT
        </div>

        <li class="nav-item">

            <a class="nav-link collapsed"
               href="#"
               data-toggle="collapse"
               data-target="#collapseTwo">

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
                       href="mobil/mobil.php">
                        <i class="fas fa-car mr-2"></i>
                        Data Mobil
                    </a>

                    <a class="collapse-item"
                       href="pelanggan/pelanggan.php">
                        <i class="fas fa-users mr-2"></i>
                        Data Pelanggan
                    </a>

                </div>

            </div>

        </li>

        <li class="nav-item">

            <a class="nav-link"
               href="rental/rental.php">

                <i class="fas fa-fw fa-file-invoice-dollar"></i>
                <span>Rental Mobil</span>

            </a>

        </li>

        <hr class="sidebar-divider d-none d-md-block">

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

            <!-- TOPBAR -->

            <nav class="navbar navbar-expand topbar mb-4 static-top shadow">

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
                            placeholder="Cari kendaraan..."
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


                <!-- NAV RIGHT -->

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

                            <h6 class="dropdown-header bg-primary">
                                Notification
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
                                        Kendaraan baru tersedia.
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
                                src="img/undraw_profile.svg">

                        </a>

                        <div
                            class="dropdown-menu dropdown-menu-right shadow animated--grow-in">

                            <a class="dropdown-item" href="#">

                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>

                                Profile

                            </a>

                            <a class="dropdown-item" href="#">

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


            <!-- PAGE CONTENT -->

            <div class="container-fluid">

                <!-- HEADER -->

                <div class="page-header d-sm-flex align-items-center justify-content-between">

                    <div>

                        <h1 class="page-title">
                            Pilih Kendaraan
                        </h1>

                        <p class="page-subtitle">
                            Temukan kendaraan yang sesuai untuk kebutuhan perjalananmu.
                        </p>

                    </div>

                    <div class="status-badge">

                        <span class="status-dot"></span>

                        Sistem Online

                    </div>

                </div>


                <!-- CAR LIST -->

                <div class="card-container">


                    <!-- CAR 1 -->

                    <div class="car-card">

                        <div class="car-content">

                            <h5 class="car-title">
                                BMW M440 Coupe
                            </h5>

                            <div class="car-tags">

                                <span class="car-tag">
                                    ADVICE OF THE DAY
                                </span>

                                <span class="car-tag">
                                    BEST IN CLASS
                                </span>

                            </div>

                            <div class="car-image-wrapper">

                                <img
                                    src="img/car1.png"
                                    alt="BMW M440 Coupe"
                                    class="car-image">

                            </div>

                            <div class="car-info">

                                <div>

                                    <span class="price-label">
                                        HARGA SEWA
                                    </span>

                                    <div class="price">
                                        €159.99
                                        <span>/ HARI</span>
                                    </div>

                                    <div class="total-price">
                                        €1,427.84 TOTAL
                                    </div>

                                </div>

                                <span class="transmission">
                                    Automatic
                                </span>

                            </div>

                            <a
                                href="rental/tambah_rental.php"
                                class="rent-btn">

                                Mulai Rental

                                <i class="fas fa-arrow-right"></i>

                            </a>

                        </div>

                    </div>


                    <!-- CAR 2 -->

                    <div class="car-card">

                        <div class="car-content">

                            <h5 class="car-title">
                                Porsche 911
                            </h5>

                            <div class="car-tags">

                                <span class="car-tag">
                                    ADVICE OF THE DAY
                                </span>

                                <span class="car-tag">
                                    BEST IN CLASS
                                </span>

                            </div>

                            <div class="car-image-wrapper">

                                <img
                                    src="img/car2.png"
                                    alt="Porsche 911"
                                    class="car-image">

                            </div>

                            <div class="car-info">

                                <div>

                                    <span class="price-label">
                                        HARGA SEWA
                                    </span>

                                    <div class="price">
                                        €159.99
                                        <span>/ HARI</span>
                                    </div>

                                    <div class="total-price">
                                        €1,427.84 TOTAL
                                    </div>

                                </div>

                                <span class="transmission">
                                    Manual
                                </span>

                            </div>

                            <a
                                href="rental/tambah_rental.php"
                                class="rent-btn">

                                Mulai Rental

                                <i class="fas fa-arrow-right"></i>

                            </a>

                        </div>

                    </div>


                    <!-- CAR 3 -->

                    <div class="car-card">

                        <div class="car-content">

                            <h5 class="car-title">
                                Mercedes-Benz G-Class
                            </h5>

                            <div class="car-tags">

                                <span class="car-tag">
                                    ADVICE OF THE DAY
                                </span>

                                <span class="car-tag">
                                    BEST IN CLASS
                                </span>

                            </div>

                            <div class="car-image-wrapper">

                                <img
                                    src="img/car3.png"
                                    alt="Mercedes-Benz G-Class"
                                    class="car-image">

                            </div>

                            <div class="car-info">

                                <div>

                                    <span class="price-label">
                                        HARGA SEWA
                                    </span>

                                    <div class="price">
                                        €159.99
                                        <span>/ HARI</span>
                                    </div>

                                    <div class="total-price">
                                        €1,427.84 TOTAL
                                    </div>

                                </div>

                                <span class="transmission">
                                    Automatic
                                </span>

                            </div>

                            <a
                                href="rental/tambah_rental.php"
                                class="rent-btn">

                                Mulai Rental

                                <i class="fas fa-arrow-right"></i>

                            </a>

                        </div>

                    </div>


                    <!-- CAR 4 -->

                    <div class="car-card">

                        <div class="car-content">

                            <h5 class="car-title">
                                Rolls-Royce Phantom
                            </h5>

                            <div class="car-tags">

                                <span class="car-tag">
                                    ADVICE OF THE DAY
                                </span>

                                <span class="car-tag">
                                    BEST IN CLASS
                                </span>

                            </div>

                            <div class="car-image-wrapper">

                                <img
                                    src="img/car4.png"
                                    alt="Rolls-Royce Phantom"
                                    class="car-image">

                            </div>

                            <div class="car-info">

                                <div>

                                    <span class="price-label">
                                        HARGA SEWA
                                    </span>

                                    <div class="price">
                                        €159.99
                                        <span>/ HARI</span>
                                    </div>

                                    <div class="total-price">
                                        €1,427.84 TOTAL
                                    </div>

                                </div>

                                <span class="transmission">
                                    Automatic
                                </span>

                            </div>

                            <a
                                href="rental/tambah_rental.php"
                                class="rent-btn">

                                Mulai Rental

                                <i class="fas fa-arrow-right"></i>

                            </a>

                        </div>

                    </div>


                    <!-- CAR 5 -->

                    <div class="car-card">

                        <div class="car-content">

                            <h5 class="car-title">
                                Toyota Supra
                            </h5>

                            <div class="car-tags">

                                <span class="car-tag">
                                    ADVICE OF THE DAY
                                </span>

                                <span class="car-tag">
                                    BEST IN CLASS
                                </span>

                            </div>

                            <div class="car-image-wrapper">

                                <img
                                    src="img/car7.png"
                                    alt="Toyota Supra"
                                    class="car-image">

                            </div>

                            <div class="car-info">

                                <div>

                                    <span class="price-label">
                                        HARGA SEWA
                                    </span>

                                    <div class="price">
                                        €159.99
                                        <span>/ HARI</span>
                                    </div>

                                    <div class="total-price">
                                        €1,427.84 TOTAL
                                    </div>

                                </div>

                                <span class="transmission">
                                    Manual
                                </span>

                            </div>

                            <a
                                href="rental/tambah_rental.php"
                                class="rent-btn">

                                Mulai Rental

                                <i class="fas fa-arrow-right"></i>

                            </a>

                        </div>

                    </div>


                    <!-- CAR 6 -->

                    <div class="car-card">

                        <div class="car-content">

                            <h5 class="car-title">
                                Nissan GT-R
                            </h5>

                            <div class="car-tags">

                                <span class="car-tag">
                                    ADVICE OF THE DAY
                                </span>

                                <span class="car-tag">
                                    BEST IN CLASS
                                </span>

                            </div>

                            <div class="car-image-wrapper">

                                <img
                                    src="img/car6.png"
                                    alt="Nissan GT-R"
                                    class="car-image">

                            </div>

                            <div class="car-info">

                                <div>

                                    <span class="price-label">
                                        HARGA SEWA
                                    </span>

                                    <div class="price">
                                        €159.99
                                        <span>/ HARI</span>
                                    </div>

                                    <div class="total-price">
                                        €1,427.84 TOTAL
                                    </div>

                                </div>

                                <span class="transmission">
                                    Automatic
                                </span>

                            </div>

                            <a
                                href="rental/tambah_rental.php"
                                class="rent-btn">

                                Mulai Rental

                                <i class="fas fa-arrow-right"></i>

                            </a>

                        </div>

                    </div>

                </div>

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
                    class="btn btn-secondary"
                    type="button"
                    data-dismiss="modal">

                    Batal

                </button>

                <a
                    class="btn btn-primary"
                    href="destroy_session.php">

                    Logout

                </a>

            </div>

        </div>

    </div>

</div>


<!-- JavaScript -->

<script src="vendor/jquery/jquery.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="js/sb-admin-2.min.js"></script>

</body>
</html>
```
