<?php
include "../koneksi.php";

// Mengambil data input
$no_plat_arif = $_POST['no_plat_arif'];
$nama_mobil_arif = $_POST['nama_mobil_arif'];
$brand_mobil_arif = $_POST['brand_mobil_arif'];
$tipe_transmisi_arif = $_POST['tipe_transmisi_arif'];

// Mengambil no plat lama dari input (hidden field)
$no_plat_arif_lama = $_POST['no_plat_arif_lama'];

// Menjalankan kueri update
$update = mysqli_query($koneksi, "UPDATE tbl_mobil_arif SET
    no_plat_arif='$no_plat_arif',
    nama_mobil_arif='$nama_mobil_arif',
    brand_mobil_arif='$brand_mobil_arif',
    tipe_transmisi_arif='$tipe_transmisi_arif'
WHERE no_plat_arif='$no_plat_arif_lama'");

if ($update) {
    // Jika proses update berhasil
    header("Location: mobil.php");
    exit();
} else {
    // Jika proses update gagal
    echo "<p>Gagal Menyimpan: " . mysqli_error($koneksi) . "</p>";
    echo "<a href='mobil.php'>Coba Lagi</a>";
}
?>