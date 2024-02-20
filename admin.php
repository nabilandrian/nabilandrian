<?php
    //menghubungkan ke database
    $koneksi = mysqli_connect("localhost","root","","ujian_ukk");

    //mengambil data dari data base
    $hasil = mysqli_query($koneksi,"SELECT * FROM galleryuser");
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>WEBSITE GALERI FOTO</h1>
    <a href="">tambahan data</a>
    <table border=1>
        <thead>
            <tr>
                <th>no</th>
                <th>poto kegiatan</th>
                <th>judul kegiatan</th>
                <th>tanggal</th>
                <th>action</th>
            </tr>
        </thead>
        <body>
            <?php
            $i=1;
             while($row = mysqli_fetch_assoc($hasil)):?>
            <tr>
            <td><?= $i ?></td>
            <td><?= $row["poto"] ?></td>
            <td><?= $row["keterangan"] ?></td>
            <td><?= $row["tanggal"]?></td>
            <td>
                <a href="">edit</a> | <a href="">hapus</a>
            </td>
            </tr>
            <?php
            $i++;
         endwhile; ?>
            
        </body>
    </table>
    
</body>
</html>