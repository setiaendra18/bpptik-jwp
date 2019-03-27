<?php
require_once "vendor/autoload.php";
$factory = new RandomLib\Factory;
/*
*@var $generator inialisasi objek dengan menggunakan library pada variabel dan mencetak random
string menggunakan kata BPPTIK sebanyak 32 karakte 
*/
$generator = $factory->getGenerator(new SecurityLib\Strength(SecurityLib\Strength::MEDIUM));
print $generator->generateString(32, 'BPPTIK')."\n";
echo "</br>";
/*
*@var $generator inialisasi objek dengan menggunakan library pada variabel dan mencetak random
string menggunakan kata MAJU sebanyak 16 karakter
*/
$generator = $factory->getLowStrengthGenerator();
print $generator->generateString(16, 'MAJU')."\n";
echo "</br>";
/*
*@var $generator inialisasi objek dengan menggunakan library pada variabel dan mencetak random
integer dalam range angka 1 sampai dengan 100;
*/
$generator = $factory->getLowStrengthGenerator();
print $randomInt = $generator->generateInt(1, 100);
echo "</br>";
/*
*@var $password inialisasi objek dengan menggunakan library pada variabel dan mencetak random 
password menggunakan alfabet dan angka;
*/
$password = $generator->generateString(26, 'abcdefghijklmnopqrstuvwxyz234567');
echo $password;
?>
