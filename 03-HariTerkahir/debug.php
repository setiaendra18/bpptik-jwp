<?php
require_once "vendor/autoload.php";
$arr = array
  (
  array("Volvo",22,18,array("Mobil")),
  array("BMW",15,13,array("Mobil")),
  array("Saab",5,2,array("Mobil")),
  array("Land Rover",17,15,array("Mobil"))
  );
k($arr);
krumo($arr);

// Output the array and then exit();
kd($arr);

// Return the HTML output instead of printing it out
$my_html = krumo($arr, KRUMO_RETURN);

// Output the array with all nodes expanded
krumo($arr, KRUMO_EXPAND_ALL);

// The object based method
$krumo = new Krumo;
$krumo->dump($arr);

?>