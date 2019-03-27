<?php
require_once "vendor/autoload.php";

$factory = new RandomLib\Factory;
$generator = $factory->getGenerator(new SecurityLib\Strength(SecurityLib\Strength::MEDIUM));
print $generator->generateString(32, 'BPPTIK')."\n";
echo "</br>";
$generator = $factory->getLowStrengthGenerator();
print $generator->generateString(32, 'BPPTIK')."\n";
echo "</br>";
$generator = $factory->getLowStrengthGenerator();
print $randomInt = $generator->generateInt(1, 100);
echo "</br>";
?>