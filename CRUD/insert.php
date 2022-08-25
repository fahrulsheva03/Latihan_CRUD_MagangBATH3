<?php
include 'connect.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$insert = mysqli_query($koneksi, "INSERT INTO data_karyawan SET nama='$nama', alamat='$alamat', no_hp= '$no_hp' ");

if ($insert){
    echo '<script>
    alert("Tambah Data Berhasil")
    document.location.href="index.php"
    </script>';
}
else{
    echo '<script>
    alert("Tambah Data Gagal!!")
    </script>';
}
?>