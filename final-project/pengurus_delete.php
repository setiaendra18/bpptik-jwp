<?php
include "config/db.php";

$nip=$_GET['nip'];

$sql = "DELETE FROM pengurus WHERE nip='$nip'";

if ($conn->query($sql) === TRUE) {
   	header("location:data_penggurus.php");

} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>