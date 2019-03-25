<?php
require "LinkedList.class.php";

$antrian = new LinkedList();
$antrian->insertFirst("Saya");
$antrian->insertLast("Makan");
$antrian->insertAfter("Makan","Nasi");
$antrian->insertBefore("Makan","Endra");
$antrian->deleteFirst();
$antrian->deleteLast();
$antrian->insertFirst("BPPTIK");
$antrian->delete("BPPTIK");

echo "<pre>";
print_r($antrian);
echo "</pre>";

?>
