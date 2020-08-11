<?php
include('koneksi.php');
$id = $_GET['id'];
$sql = "DELETE FROM dapen WHERE id=$id ";
$result = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
    echo "<script> alert('data berhasil dihapus');
    document.location.href='index.php'; 
    </script>";
} else {
    echo mysqli_error($conn);
}
