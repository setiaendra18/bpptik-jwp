<?php
include "config/db.php";

$nim=$_GET['nim'];

$sql = "DELETE FROM mahasiswa WHERE nim='$nim'";

if ($conn->query($sql) === TRUE) {
   	header("location:data_mahasiswa.php");

} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>