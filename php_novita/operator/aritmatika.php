<?php
$gaji = 1000000;
$pajak = 0.025;

$thp = $gaji - ($gaji * $pajak); 
echo "gaji sebelum di potong pajak : <b>$gaji</b><br>";
echo "gaji bersih : <b>$thp</b><br>";
?>