<?php
include "../koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$no_plat_arif=$_POST['no_plat_arif'];
$nama_mobil_arif=$_POST['nama_mobil_arif'];
$brand_mobil_arif=$_POST['brand_mobil_arif'];
$tipe_transmisi_arif=$_POST['tipe_transmisi_arif'];
//Menjalankan kueri insert
$insert = mysqli_query($koneksi, "INSERT INTO tbl_mobil_arif 
(no_plat_arif, nama_mobil_arif, brand_mobil_arif, tipe_transmisi_arif)
VALUES 
(
    '$_POST[no_plat_arif]', 
    '$_POST[nama_mobil_arif]', 
    '$_POST[brand_mobil_arif]', 
    '$_POST[tipe_transmisi_arif]'
)");

if($insert){
//Jika proses delete berhasil
header("location:mobil.php");
}else{
//Jika proses delete gagal
echo"<p>Gagal Menyimpan !</p>";
echo"<a href='mobil.php'>Coba Lagi</a>";
}
?>