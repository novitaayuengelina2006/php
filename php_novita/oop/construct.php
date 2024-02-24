<?php

class contoh{

    public function __construct(){
        echo "Assalammualaikum Akhhi <br>";
    }

    public function perkenalan(){
        echo "Nama saya Novita <br>";
    }

    public function __destruct(){
        echo "Hallo Om";
    }
}
$cetak = new contoh();

echo $cetak->perkenalan();

?>