<?php
session_start(); // Start session nya
include "config/db.php"; // Load file koneksi.php
// menangkap data yang dikirim dari form
$nip = $_POST['nip'];
$password = md5($_POST['password']);
 
// menyeleksi data admin dengan nip dan password yang sesuai
$data = mysqli_query($conn,"select * from pengurus where nip='$nip' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['nip'] = $nip;

	header("location:data_mahasiswa.php");
}else{
header("location:index.php");
}