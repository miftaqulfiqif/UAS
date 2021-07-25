<?php
require 'fungsi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>FORM ISI BIODATA VAKSINASI</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>ISIKAN BIODATA ANDA</h2>
            <form action="simpandata.php" method="post">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" name="nonik" placeholder="Masukkan NIK">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Lengkap">
                </div>
                <div class="form-group">
                    <label for="tgllahir">Tanggal Lahir</label>
                    <input type="text" class="form-control" name="tgllahir" placeholder="Contoh : 21 September 2001">
                </div>
                <div class="form-group">
                    <label for="jeniskelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jeniskelamin">
                </div>
                <div class="form-group">
                    <label for="nohp">No. HP</label>
                    <input type="text" class="form-control" name="nohp">
                </div>
                <div class="form-group">
                    <label for="lokasimenerima">Lokasi Menerima</label>
                    <input type="text" class="form-control" name="lokasimenerima" placeholder="Masukkan Nama Rumah Sakit">
                </div>
                <button type="submit" class="btn btn-primary" name="masukkandata">Submit</button>
            </form>
        </div>
    </body>
</html>