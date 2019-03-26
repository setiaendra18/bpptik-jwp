<?php
include "koneksi.php";
$id_mahasiswa=$_GET['id_mahasiswa'];

$sql = "DELETE FROM tbl_mahasiswa WHERE id_mahasiswa=$id_mahasiswa";

if ($conn->query($sql) === TRUE) {
   	header("location:tampil.php");

} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>