<?php
include "koneksi.php";

$nama = $_POST['nama_077'];
$email = $_POST['email_077'];

$sql = "INSERT INTO tbl_077 VALUES(null, '$nama','$email')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "eksekusi tambah data gagal";
}
else{
    echo "eksekusi tambah data berhasil <br>";
    echo "<a href = 'data_077.php'>Tampilkan Data </a>";
}

?>