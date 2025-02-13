<?php
include "../koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$nik_ktp_arif=$_POST['nik_ktp_arif'];
$nama_arif=$_POST['nama_arif'];
$no_hp_arif=$_POST['no_hp_arif'];
$alamat_arif=$_POST['alamat_arif'];
//Menjalankan kueri insert
$insert = mysqli_query($koneksi, "INSERT INTO tbl_pelanggan_arif 
(nik_ktp_arif, nama_arif, no_hp_arif, alamat_arif)
VALUES 
(
    '$_POST[nik_ktp_arif]', 
    '$_POST[nama_arif]', 
    '$_POST[no_hp_arif]', 
    '$_POST[alamat_arif]'
)");

if($insert){
//Jika proses delete berhasil
header("location:pelanggan.php");
}else{
//Jika proses delete gagal
echo"<p>Gagal Menyimpan !</p>";
echo"<a href='pelanggan.php'>Coba Lagi</a>";
}
?>