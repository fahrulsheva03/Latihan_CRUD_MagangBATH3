<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>modul</title>
    </head>
    
    <body>
        <a href="tambah.php">Tambah Data</a>
        <table border="2">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Action</th>
            </tr>

            <?php 
                $no = 1;
                $query = mysqli_query($koneksi ,"SELECT * FROM  data_karyawan");
                foreach($query as $d) : 
            ?>

        <tr>
            <td><?= $no++ ?> </td>            
            <td><?= $d['nama'] ?> </td>
            <td><?= $d['alamat'] ?> </td>
            <td><?= $d['no_hp'] ?> </td>
            <td>
                <a href="update.php?id=<?= $d['id']?>">update</a>
                |
                <a href="hapus.php?id=<?= $d['id']?>">hapus</a>
            </td>
        </tr>

        <?php endforeach;?>
        </table>
</body>
</html>