<?php

$nama = $_REQUEST['nama'];
$tahun = $_REQUEST['tahun'];

if ($tahun >= 1944 && $tahun <=1964) {
    $gen = "Anda Generasi Baby Boomer";
} elseif ($tahun >= 1965 && $tahun <=1979) {
    $gen = "Anda Adalah Generasi X";
} elseif ($tahun >= 1980 && $tahun <=1994) {
    $gen = "Anda Adalah Generasi Y";
} elseif ($tahun >= 1995 && $tahun <=2015) {
    $gen = "Anda Adalah Generasi Z";
}

echo "Nama anda : $nama, dan $gen";

?>