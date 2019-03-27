<?php
require_once "vendor/autoload.php";

use Carbon\Carbon;

$today=Carbon::now()->toDateTimeString();
echo "Waktu hari ini : ".$today."</br>";

$jakarta=Carbon::now('Asia/Jakarta');
echo "Waktu Asia/Jakarta : ".$jakarta."</br>";

$besok = Carbon::now('Asia/Jakarta')->addDay();
echo "Waktu Asia/Jakarta Besok : ".$besok."</br>";

$parsing = Carbon::parse($today)->locale('id_ID')->isoFormat('LLLL');
echo "Rubah Format : ".$parsing."</br>";

$umur = Carbon::createFromDate(1945, 8, 17)->age;
echo "Umur Indonesia : ".$umur." Tahun </br>";

$namazona=Carbon::parse($today, 'Asia/Jakarta')->timezone->getName();
echo "Nama Zona Waktu : ".$namazona."</br>";

$tahun=Carbon::create($umur)->diffForHumans();
echo "Tahun : ".$tahun."</br>";


?>