<?php

function persegi(){
    echo "<h2>Menghitung Luas Persegi</h2>";
    echo "Rumus : sisi x sisi <br>";
    $sisi = 5;
    $luas = $sisi * $sisi;
    echo "Sisi : $sisi <br>";
    echo "Luasnya : hasil <br>";
}

function persegiPanjang(){
    echo "<h2>Menghitung Luas Persegi Panjang</h2>";
    echo "Rumus : Panjang x Lebar <br>";
    $panjang = 5;
    $lebar = 10;
    $hasil = $panjang * $lebar;
    echo "Panjang : $panjang <br>";
    echo "Lebar : $lebar <br>";
    echo "Hasilnya : $hasil <br>";
}

function segitiga(){
    echo "<h2>Menghitung Luas Segitiga</h2>";
    echo "Rumus : Alas x Tinggi x 1/2(setengah) <br>";
    $alas = 5;
    $tinggi = 10;
    $hasil = $alas * $tinggi * 0.5;
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Hasilnya : $hasil <br>";
}

function lingkaran(){
    echo "<h2>Menghitung Luas Lingkaran</h2>";
    echo "Rumus : r x r <br>";
    $r = 5;
    $hasil = $r * $r * 3.14;
    echo "Jari-jari : $r <br>";
    echo "Hasilnya : $hasil <br>";
}

persegi();
echo"<hr>";
persegiPanjang();
echo"<hr>";
segitiga();
echo"<hr>";
lingkaran();
echo"<hr>";

?>