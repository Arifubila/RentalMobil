<?php
include "../koneksi.php";

// Cek apakah request menggunakan POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: pelanggan.php");
    exit;
}

// Mengambil data dari form
$nik_ktp_arif = $_POST['nik_ktp_arif'] ?? '';
$nama_arif = $_POST['nama_arif'] ?? '';
$no_hp_arif = $_POST['no_hp_arif'] ?? '';
$alamat_arif = $_POST['alamat_arif'] ?? '';
$nik_lama = $_POST['nik_lama'] ?? '';

// Cek data wajib
if (
    empty($nik_ktp_arif) ||
    empty($nama_arif) ||
    empty($no_hp_arif) ||
    empty($alamat_arif) ||
    empty($nik_lama)
) {
    echo "
        <script>
            alert('Data belum lengkap!');
            window.location.href = 'pelanggan.php';
        </script>
    ";
    exit;
}

// Amankan input dari SQL Injection
$nik_ktp_arif = mysqli_real_escape_string($koneksi, $nik_ktp_arif);
$nama_arif = mysqli_real_escape_string($koneksi, $nama_arif);
$no_hp_arif = mysqli_real_escape_string($koneksi, $no_hp_arif);
$alamat_arif = mysqli_real_escape_string($koneksi, $alamat_arif);
$nik_lama = mysqli_real_escape_string($koneksi, $nik_lama);

// Query update
$update = mysqli_query($koneksi, "
    UPDATE tbl_pelanggan_arif SET
        nik_ktp_arif = '$nik_ktp_arif',
        nama_arif = '$nama_arif',
        no_hp_arif = '$no_hp_arif',
        alamat_arif = '$alamat_arif'
    WHERE nik_ktp_arif = '$nik_lama'
");

// Cek hasil update
if ($update) {
    echo "
        <script>
            alert('Data pelanggan berhasil diperbarui!');
            window.location.href = 'pelanggan.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Gagal memperbarui data pelanggan!');
            window.history.back();
        </script>
    ";
}
?>