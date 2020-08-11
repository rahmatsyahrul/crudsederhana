<?php
include('koneksi.php');

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $jenkel = $_POST['jenkel'];
    $agama = $_POST['agama'];

    $sql = "INSERT INTO dapen (nama, jenkel, agama) VALUES ('$nama', '$jenkel', '$agama') ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('data berhasil ditambah');
        document.location.href='index.php'; 
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>TAMBAH DATA</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="nama">Nama :</label></td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td><label for="jenkel">Jenis Kelamin :</label></td>
                    <td><input type="radio" name="jenkel" id="jenkel" value="L">Laki-Laki
                        <input type="radio" name="jenkel" id="jenkel" value="P">Perempuan
                    </td>
                </tr>
                <tr>
                    <td><label for="agama">Agama :</label></td>
                    <td>
                        <select name="agama">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Protestan</option>
                        </select>
                    </td>
                </tr>

            </table>
            <div class="submit">
                <button type="submit" name="tambah">Tambah</button>
                <a href="index.php">Keluar</a></div>


        </form>
    </div>
</body>

</html>