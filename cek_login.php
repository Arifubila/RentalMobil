<?php
session_start();

// Contoh data username dan password yang benar
$valid_username = "arif";
$valid_password = "123"; // Ganti dengan password yang benar

// Ambil data dari form
$username_arif = $_POST['username_arif'];
$password_arif = $_POST['password_arif'];

// Validasi username dan password
if ($username_arif === $valid_username && $password_arif === $valid_password) {
    // Jika valid, simpan session
    $_SESSION['username_arif'] = $username_arif;
    $_SESSION['password_arif'] = $password_arif; // Hati-hati menyimpan password di session
    header("Location: home.php");
    exit();
} else {
    // Jika tidak valid, kembali ke halaman login
    echo "<script>alert('Username atau password salah.'); window.location = 'login.php';</script>";
    exit();
}
?>