<?php
include('koneksi.php');
$sql = "SELECT * FROM dapen";
$result = mysqli_query($conn, $sql);


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
        <h1>DAFTAR NAMA</h1>
        <a href="tambah.php" class="tambah">Tambah Data</a>
        <table border="1" cellpadding="10">
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>Agama</td>
                <td>Aksi</td>
            </tr>

            <?php
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) :
            ?>

                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['jenkel']; ?></td>
                    <td><?= $row['agama']; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a>
                        <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin mau dihapus?')">Hapus</a>
                    </td>
                </tr>

            <?php
                $i++;
            endwhile;
            ?>
        </table>
    </div>
</body>

</html>