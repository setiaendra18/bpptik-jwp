<?php
include "config/db.php";

$kode_mk=$_GET['kode_mk'];

$sql = "DELETE FROM matakuliah WHERE kode_mk='$kode_mk'";

if ($conn->query($sql) === TRUE) {
   	header("location:data_matakuliah.php");

} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>