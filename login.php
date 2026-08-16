<?php
session_start();

if (!empty($_SESSION['username_arif']) && !empty($_SESSION['password_arif'])) {
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rental Mobil Arifubila - Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            background:
                radial-gradient(circle at 10% 20%, rgba(37, 99, 235, 0.18), transparent 30%),
                radial-gradient(circle at 90% 80%, rgba(14, 165, 233, 0.12), transparent 30%),
                #080b12;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            overflow-x: hidden;
        }

        .login-wrapper {
            width: 100%;
            max-width: 1050px;
            min-height: 620px;
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.45);
            backdrop-filter: blur(18px);
        }

        /* LEFT */
        .login-banner {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 50px;
            background: linear-gradient(
    135deg,
    #0f172a,
    #1e293b
);
        }

        .login-banner::after {
            content: "";
            position: absolute;
            width: 250px;
            height: 250px;
            background: rgba(37, 99, 235, 0.18);
            border-radius: 50%;
            filter: blur(10px);
            right: -80px;
            top: -80px;
        }

        .brand {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-icon {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #2563eb, #0ea5e9);
            font-size: 20px;
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.3);
        }

        .brand-text h2 {
            font-size: 18px;
            font-weight: 800;
        }

        .brand-text span {
            display: block;
            margin-top: 3px;
            font-size: 12px;
            color: #94a3b8;
        }

        .banner-content {
            position: relative;
            z-index: 2;
        }

        .banner-content .tag {
            display: inline-flex;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(37, 99, 235, 0.15);
            border: 1px solid rgba(96, 165, 250, 0.2);
            color: #93c5fd;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .banner-content h1 {
            max-width: 450px;
            font-size: 44px;
            line-height: 1.12;
            font-weight: 800;
            letter-spacing: -1.5px;
            margin-bottom: 18px;
        }

        .banner-content h1 span {
            color: #60a5fa;
        }

        .banner-content p {
            max-width: 450px;
            color: #94a3b8;
            line-height: 1.7;
            font-size: 14px;
        }

        .banner-footer {
            position: relative;
            z-index: 2;
            color: #64748b;
            font-size: 12px;
        }

        /* RIGHT */
        .login-form-section {
            background: #ffffff;
            color: #0f172a;
            padding: 55px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-header {
            margin-bottom: 35px;
        }

        .login-header h2 {
            font-size: 30px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .login-header p {
            color: #64748b;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-size: 13px;
            font-weight: 600;
            color: #334155;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 14px;
        }

        .form-control {
            width: 100%;
            height: 52px;
            padding: 0 16px 0 45px;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            background: #f8fafc;
            color: #0f172a;
            font-family: inherit;
            font-size: 14px;
            outline: none;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            background: #fff;
            border-color: #2563eb;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
        }

        .form-control::placeholder {
            color: #94a3b8;
        }

        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 4px 0 25px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #64748b;
            font-size: 12px;
        }

        .remember input {
            accent-color: #2563eb;
        }

        .forgot {
            color: #2563eb;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
        }

        .forgot:hover {
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;
            height: 52px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: #fff;
            font-family: inherit;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.25);
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 30px rgba(37, 99, 235, 0.35);
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 28px 0;
            color: #94a3b8;
            font-size: 11px;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #e2e8f0;
        }

        .guest-login {
            width: 100%;
            height: 48px;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            background: #fff;
            color: #334155;
            font-family: inherit;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            transition: 0.2s ease;
        }

        .guest-login:hover {
            background: #f8fafc;
            border-color: #cbd5e1;
        }

        .register-text {
            text-align: center;
            margin-top: 28px;
            color: #64748b;
            font-size: 12px;
        }

        .register-text a {
            color: #2563eb;
            text-decoration: none;
            font-weight: 700;
        }

        /* RESPONSIVE */
        @media (max-width: 850px) {
            .login-wrapper {
                grid-template-columns: 1fr;
                max-width: 520px;
            }

            .login-banner {
                min-height: 300px;
                padding: 35px;
            }

            .banner-content h1 {
                font-size: 34px;
            }

            .banner-footer {
                margin-top: 30px;
            }

            .login-form-section {
                padding: 40px 35px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 15px;
            }

            .login-wrapper {
                border-radius: 20px;
            }

            .login-banner {
                min-height: 270px;
                padding: 28px;
            }

            .banner-content h1 {
                font-size: 28px;
            }

            .login-form-section {
                padding: 32px 25px;
            }

            .login-header h2 {
                font-size: 25px;
            }

            .form-options {
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
</head>

<body>

<div class="login-wrapper">

    <!-- LEFT -->
    <section class="login-banner">

        <div class="brand">
            <div class="brand-icon">
                <i class="fas fa-car"></i>
            </div>

            <div class="brand-text">
                <h2>RentalMobil</h2>
                <span>Arifubila</span>
            </div>
        </div>

        <div class="banner-content">

            <span class="tag">
                <i class="fas fa-shield-alt mr-2"></i>
                Secure Management System
            </span>

            <h1>
                Kelola Rental Mobil
                <span>Lebih Mudah.</span>
            </h1>

            <p>
                Selamat datang di sistem manajemen Rental Mobil Arifubila.
                Kelola kendaraan, pelanggan, transaksi, dan data rental
                dalam satu platform.
            </p>

        </div>

        <div class="banner-footer">
            © <?php echo date("Y"); ?> Rental Mobil Arifubila
        </div>

    </section>


    <!-- RIGHT -->
    <section class="login-form-section">

        <div class="login-header">
            <h2>Selamat Datang 👋</h2>
            <p>Silakan masuk untuk mengakses dashboard.</p>
        </div>

        <form method="POST" action="cek_login.php">

            <div class="form-group">

                <label class="form-label" for="username_arif">
                    Username
                </label>

                <div class="input-wrapper">

                    <i class="fas fa-user"></i>

                    <input
                        type="text"
                        name="username_arif"
                        id="username_arif"
                        class="form-control"
                        placeholder="Masukkan username"
                        autocomplete="username"
                        required
                    >

                </div>

            </div>


            <div class="form-group">

                <label class="form-label" for="password_arif">
                    Password
                </label>

                <div class="input-wrapper">

                    <i class="fas fa-lock"></i>

                    <input
                        type="password"
                        name="password_arif"
                        id="password_arif"
                        class="form-control"
                        placeholder="Masukkan password"
                        autocomplete="current-password"
                        required
                    >

                </div>

            </div>


            <div class="form-options">

                <label class="remember">
                    <input type="checkbox" name="remember">
                    Ingat saya
                </label>

                <a href="forgot-password.html" class="forgot">
                    Lupa password?
                </a>

            </div>


            <button type="submit" class="btn-login">
                <i class="fas fa-sign-in-alt mr-2"></i>
                Masuk ke Dashboard
            </button>

        </form>


        <div class="divider">
            atau
        </div>


        <a href="home.php" class="guest-login">
            <i class="fas fa-home"></i>
            Lanjut sebagai pengunjung
        </a>


        <div class="register-text">
            Belum memiliki akun?
            <a href="register.html">Buat akun</a>
        </div>

    </section>

</div>

</body>
</html>