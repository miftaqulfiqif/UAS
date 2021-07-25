<?php
//Include file koneksi ke database
include "fungsi.php";

//menerima nilai dari kiriman form pendaftaran
$nonik=$_POST['nonik'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tgllahir=$_POST['tgllahir'];
$jeniskelamin=$_POST['jeniskelamin'];
$nohp=$_POST['nohp'];
$lokasimenerima=$_POST['lokasimenerima'];


//Query input menginput data kedalam tabel anggota
  $sql="insert into data (nonik,nama,alamat,tgllahir,jeniskelamin,nohp,lokasimenerima) values ('$nonik','$nama','$alamat','$tgllahir','$jeniskelamin','$nohp','$lokasimenerima')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data anggota";
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>
