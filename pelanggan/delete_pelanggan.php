<?php
include "../koneksi.php";
$nik_ktp_arif=$_GET['nik_ktp_arif'];
//Menjalankan kueri delete
$delete=mysqli_query($koneksi,"DELETE FROM tbl_pelanggan_arif WHERE
nik_ktp_arif='$_GET[nik_ktp_arif]'");
if($delete){
//Jika proses delete berhasil
header("location:pelanggan.php");
}else{
//Jika proses delete gagal
echo"<p>Gagal Menghapus !</p>";
echo"<a href='pelanggan.php'>Coba Lagi</a>";
}
?>