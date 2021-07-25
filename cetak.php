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
    <?php
        $ambilsemuadata = mysqli_query($kon,"select * from data");
        while($data=mysqli_fetch_array($ambilsemuadata)){
            $noreg=$data['noreg'];
            $nonik=$data['nonik'];
            $nama=$data['nama'];
            $alamat=$data['alamat'];
            $tgllahir=$data['tgllahir'];
            $jeniskelamin=$data['jeniskelamin'];
            $nohp=$data['nohp'];
            $lokasimenerima=$data['lokasimenerima'];
        ?>
    <div class="container">
        <h2>DATA VAKSINASI</h2>
            <form action="simpandata.php" method="post">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" name="nonik" placeholder="<?=$noreg?>">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="<?=$nama?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="<?=$alamat?>">
                </div>
                <div class="form-group">
                    <label for="tgllahir">Tanggal Lahir</label>
                    <input type="text" class="form-control" name="tgllahir" placeholder="<?=$tgllahir?>">
                </div>
                <div class="form-group">
                    <label for="jeniskelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="<?=$jeniskelamin?>">
                </div>
                <div class="form-group">
                    <label for="nohp">No. HP</label>
                    <input type="text" class="form-control" name="<?=$nohp?>">
                </div>
                <div class="form-group">
                    <label for="lokasimenerima">Lokasi Menerima</label>
                    <input type="text" class="form-control" name="lokasimenerima" placeholder="<?=$lokasimenerima?>">
                </div>
                <button type="submit" class="btn btn-primary" name="masukkandata">Cetak</button>
            </form>
            <?php
                };
            ?>
        </div>
    </body>
</html>