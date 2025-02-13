<?php
include "../koneksi.php";

/* memasukan setiap data inputan kedalam setiap variabel */
$no_trx_arif = $_POST['no_trx_arif'] ?? null;
$nik_ktp_arif = $_POST['nik_ktp_arif'] ?? null;
$no_plat_arif = $_POST['no_plat_arif'] ?? null;
$tgl_rental_arif = $_POST['tgl_rental_arif'] ?? null;
$jam_rental_arif = $_POST['jam_rental_arif'] ?? 0;  // Default ke 0 jika tidak ada
$harga_arif = $_POST['harga_arif'] ?? 0;  // Default ke 0 jika tidak ada
$lama_arif = $_POST['lama_arif'] ?? 0;  // Default ke 0 jika tidak ada
$total_bayar_arif = $_POST['total_bayar_arif'] ?? 0;  // Default ke 0 jika tidak ada

// Menjalankan kueri insert
$insert = mysqli_query($koneksi, "INSERT INTO tbl_rental_arif 
(no_trx_arif, nik_ktp_arif, no_plat_arif, tgl_rental_arif, jam_rental_arif, harga_arif, lama_arif, total_bayar_arif)
VALUES 
(
    '$no_trx_arif', 
    '$nik_ktp_arif', 
    '$no_plat_arif', 
    '$tgl_rental_arif', 
    '$jam_rental_arif', 
    '$harga_arif', 
    '$lama_arif', 
    '$total_bayar_arif'
)");

if ($insert) {
    // Jika proses insert berhasil
    header("location: rental.php");
} else {
    // Jika proses insert gagal
    echo "<p>Gagal Menyimpan!</p>";
    echo "<a href='rental.php'>Coba Lagi</a>";
}
?>