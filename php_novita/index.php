<?php
$nama = "ujang rohmat"; // string
$umur = 23; // integer
$nilai =87.5; // float
$status = "true"; //boolean

echo "nama : $nama<br>";
echo 'umur : ' . $umur . '<br>';
printf("nilai : %.3f <br>", $nilai);
if ($status) {
    echo "status siswa aktif";
} else {
    echo "status siswa tidak aktif";
}