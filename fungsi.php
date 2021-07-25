<?php
$kon = mysqli_connect("localhost","root","","datavaksin");

//memasukkan data
if(isset($_POST['masukkandata'])){
    $nonik=$_POST['nonik'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tgllahir=$_POST['tgllahir'];
    $jeniskelamin=$_POST['jeniskelamin'];
    $nohp=$_POST['nohp'];
    $lokasimenerima=$_POST['lokasimenerima'];

    $sql=mysqli_query($kon,"insert into data (nonik,nama,alamat,tgllahir,jeniskelamin,nohp,lokasimenerima) values ('$nonik','$nama','$alamat','$tgllahir','$jeniskelamin','$nohp','$lokasimenerima')");

    if($sql){
        echo '<script>alert("Data telah diinputkan")</script>';
    }
};

?>