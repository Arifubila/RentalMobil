<?php
// Memulai session
session_start();

// Menghancurkan session
session_destroy();

// Menampilkan pesan dan mengalihkan pengguna ke halaman login
echo "<script>
        alert('Anda telah keluar');
        window.location = 'login.php';
      </script>";
?>