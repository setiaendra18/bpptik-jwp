<?php
require_once "vendor/autoload.php";

use Carbon\Carbon;

/*
*@var $today mencetak waktu hari ini
*/
$today=Carbon::now()->toDateTimeString();
echo "Waktu hari ini : ".$today."</br>";

/*
*@var $jakarta mencetak tanggal dan waktu dengan zona Asia/Jakarta
*/
$jakarta=Carbon::now('Asia/Jakarta');
echo "Waktu Asia/Jakarta : ".$jakarta."</br>";
/*
*@var $besok mencetak tanggal dan waktu untuk besok dengan zona Asia/Jakarta
*/
$besok = Carbon::now('Asia/Jakarta')->addDay();
echo "Waktu Asia/Jakarta Besok : ".$besok."</br>";
/*
*@var $parsing mencetak tanggal dan waktu dengan zona Asia/Jakarta dan di konversi 
*pada format standar di indonesia
*/
$parsing = Carbon::parse($today)->locale('id_ID')->isoFormat('LLLL');
echo "Rubah Format : ".$parsing."</br>";
/*
*@var $umur mencetak berapa tahu Indonesai berdisi
*/
$umur = Carbon::createFromDate(1945, 8, 17)->age;
echo "Umur Indonesia : ".$umur." Tahun </br>";
/*
*@var $namazona mencetak hari dengan zona waktu Asia/Jakarta
*/
$namazona=Carbon::parse($today, 'Asia/Jakarta')->timezone->getName();
echo "Nama Zona Waktu : ".$namazona."</br>";
/*
*@var $tahun mencetak selisih tahun
*/
$tahun=Carbon::create($umur)->diffForHumans();
echo "Tahun : ".$tahun."</br>";


?>