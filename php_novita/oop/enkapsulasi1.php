<?php

class manusia{
    public $nama = "Pa Mulki Cakeup";

    private function tampilkan_nama(){
        echo "Nama Saya Rajinngoding <br/>";
    }
     public function keluarkan(){
        $this->tampilkan_nama();
     }
}

$cetak = new manusia();
//manggila method
echo $cetak->keluarkan();
//manggila property
echo $cetak->nama;

?>