<?php
include "../koneksi.php";

// Mengambil data input
$no_trx_arif = $_POST['no_trx_arif'];
$nik_ktp_arif = $_POST['nik_ktp_arif']; // Use the right name from your form
$no_plat_arif = $_POST['no_plat_arif'];
$tgl_rental_arif = $_POST['tgl_rental_arif'];
$jam_rental_arif = $_POST['jam_rental_arif'];
$harga_arif = $_POST['harga_arif'];
$lama_arif = $_POST['lama_arif'];
$total_bayar_arif = $_POST['total_bayar_arif'];

// Mengambil NIK lama dari input (hidden field)
$no_trx_lama = $_POST['no_trx_arif']; // Make sure this is passed as a hidden field in your form

// Menjalankan kueri update
$update = mysqli_query($koneksi, "UPDATE tbl_rental_arif SET
    no_trx_arif='$no_trx_arif',
    nik_ktp_arif='$nik_ktp_arif',
    no_plat_arif='$no_plat_arif',
    tgl_rental_arif='$tgl_rental_arif',
    jam_rental_arif='$jam_rental_arif',
    harga_arif='$harga_arif',
    lama_arif='$lama_arif',
    total_bayar_arif='$total_bayar_arif'
WHERE no_trx_arif='$no_trx_lama'");

if ($update) {
    // Jika proses update berhasil
    header("location:rental.php");
} else {
    // Jika proses update gagal
    echo "<p>Gagal Menyimpan: " . mysqli_error($koneksi) . "</p>";
    echo "<a href='rental.php'>Coba Lagi</a>";
}
?>