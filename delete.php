<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql = "DELETE FROM tbl_077 WHERE id_077=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Data gagal dihapus";
}
else {
    echo "Data berhasil dihapus <br>";
    echo "<a href='data_077.php'>Tampilkan Data </a>";
}

?>