<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>TAMBAH DATA</h1>
    <form action="insert.php" method="POST">
    <table>

        <tr>
        <td>       
            <label for="">Nama : </label>
        </td>

        <td>
            <input type="text" name="nama">    
        </td>
        </tr><br>

        <tr>
            <td>
                <label for="">Alamat : </label>
            </td>

            <td>
                <input type="text" name="alamat">
            </td>
        </tr><br>

        <tr>
            <td>
                <label for="">No HP : </label>
            </td>

            <td>
                <input type="text" name="no_hp">
            </td>

        </tr><br>

        <tr>
            <td>
                <button type="submit">Tambah</button>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>