<?php
include "../koneksi.php";
$no_trx_arif=$_GET['no_trx_arif'];
//Menjalankan kueri delete
$delete=mysqli_query($koneksi,"DELETE FROM tbl_rental_arif WHERE
no_trx_arif='$_GET[no_trx_arif]'");
if($delete){
//Jika proses delete berhasil
header("location:rental.php");
}else{
//Jika proses delete gagal
echo"<p>Gagal Menghapus !</p>";
echo"<a href='rental.php'>Coba Lagi</a>";
}
?>