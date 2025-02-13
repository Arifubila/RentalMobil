<?php
include "../koneksi.php";
$no_plat_arif=$_GET['no_plat_arif'];
//Menjalankan kueri delete
$delete=mysqli_query($koneksi,"DELETE FROM tbl_mobil_arif WHERE
no_plat_arif='$_GET[no_plat_arif]'");
if($delete){
//Jika proses delete berhasil
header("location:mobil.php");
}else{
//Jika proses delete gagal
echo"<p>Gagal Menghapus !</p>";
echo"<a href='mobil.php'>Coba Lagi</a>";
}
?>