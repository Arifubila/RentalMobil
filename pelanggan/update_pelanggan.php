<?php
include "../koneksi.php";

// Mengambil data input
$nik_ktp_arif = $_POST['nik_ktp_arif'];
$nama_arif = $_POST['nama_arif'];
$no_hp_arif = $_POST['no_hp_arif'];
$alamat_arif = $_POST['alamat_arif'];

// Mengambil NIK lama dari input (hidden field)
$nik_lama = $_POST['nik_lama'];

// Menjalankan kueri update
$update = mysqli_query($koneksi, "UPDATE tbl_pelanggan_arif SET
    nik_ktp_arif='$nik_ktp_arif',
    nama_arif='$nama_arif',
    no_hp_arif='$no_hp_arif',
    alamat_arif='$alamat_arif'
WHERE nik_ktp_arif='$nik_lama'");

if ($update) {
    // Jika proses update berhasil
    header("location:pelanggan.php");
} else {
    // Jika proses update gagal
    echo "<p>Gagal Menyimpan: " . mysqli_error($koneksi) . "</p>";
    echo "<a href='pelanggan.php'>Coba Lagi</a>";
}
?>