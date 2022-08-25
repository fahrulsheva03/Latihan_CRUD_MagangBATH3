<?php
$id = $_GET['id'];

include 'connect.php';

$query = mysqli_query($koneksi,"SELECT * FROM data_karyawan WHERE id='$id'");
$result = mysqli_fetch_assoc($query);

if (isset($_POST['edit'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    
    $update = mysqli_query($koneksi, "UPDATE data_karyawan SET nama='$nama', alamat='$alamat', no_hp= '$no_hp' 
WHERE id='$id' ");

if ($update){
    echo '<script>
    alert("Update Data Berhasil")
    document.location.href="index.php"
    </script>';
}
else{
    echo '<script>
    alert("Update Data Gagal!!")
    </script>';
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <h1>UPDATE DATA</h1>
    <form action="" method="POST">
    <table>

        <tr>
        <td>       
            <label for="">Nama : </label>
        </td>

        <td>
            <input type="text" name="nama" value="<?= $result['nama'];?>">    
        </td>
        </tr><br>

        <tr>
            <td>
                <label for="">Alamat : </label">
            </td>

            <td>
                <input type="text" name="alamat" value="<?= $result['alamat'];?>">
            </td>
        </tr><br>

        <tr>
            <td>
                <label for="">No HP : </label>
            </td>

            <td>
                <input type="text" name="no_hp" value="<?= $result['no_hp'];?>">
            </td>

        </tr><br>

        <tr>
            <td>
                <button type="submit" name="edit">UPDATE</button>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>