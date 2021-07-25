<?php
require 'fungsi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATA FAKSINASI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
    <a href="#home">HOMEPAGE</a>
    <a href="#news">News</a>
    <div class="dropdown">
        <button class="dropbtn">Dropdown
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="#">HOMEPAGE</a>
        <a href="form_isi.php">INPUT DATA</a>
        </div>
    </div>
    </div>

    <div class="container">
        <h2>DATA VAKSINASI</h2>
            <table width="100%" cellspacing="0" border="1">
                <thead>
                    <tr>
                        <th>Nomor Registrasi</th>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>No. HP</th>
                        <th>Lokasi Menerima</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
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
                    
                    <tr>
                        <td><?=$noreg?></td>
                        <td><?=$nonik;?></td>
                        <td><?=$nama;?></td>
                        <td><?=$alamat;?></td>
                        <td><?=$tgllahir;?></td>
                        <td><?=$jeniskelamin;?></td>
                        <td><?=$nohp;?></td>
                        <td><?=$lokasimenerima;?></td>
                        <td>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$idm;?>">
                                CETAK
                            </button>
                        </td>
                    </tr>
                    <?php
                      };
                    ?>                                                  
                </tbody>
            </table>
            
    </div>
</body>
</html>