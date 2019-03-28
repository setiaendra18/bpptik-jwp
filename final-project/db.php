<?php

$servername 	= "localhost";
$username 		= "root";
$password 		= "";
$db				="akademik_db";

// Membuat koneksi 
$conn = mysqli_connect($servername, $username, $password,$db);

// Mengechek Koneksi jika terjadi failed
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>