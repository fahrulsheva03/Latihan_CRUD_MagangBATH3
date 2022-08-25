<?php
    include 'connect.php';

    $id = $_GET['id'];

    $delete = mysqli_query($koneksi, "DELETE FROM data_karyawan WHERE id='$id' ");

    if($delete) {
        echo '<script>
        alert("Hapus Data Berhasil!")
        document.location.href="index.php"
        </script>';
    }else{
        echo '<script>
        alert("Hapus Data Gagal")
        </script>';
    }
?>