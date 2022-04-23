<?php
include "koneksi.php";

$id = $_POST['id_077'];
$nama = $_POST['nama_077'];
$email = $_POST['email_077'];

$sql = "UPDATE tbl_077 set nama_077='$nama', email_077='$email' WHERE id_077=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Edit Data gagal";
}
else{
    echo "Edit Data berhasil <br>";
    echo "<a href = 'data_077.php'>Tampilkan Data </a>";
}

?> 