<?php
//buat class
class Manusia{
        //buat property/atribut
        public $nama = "Novita";
        public $nama2 = "Engelina";

        //buat method / function 
        public function makan(){
            echo " $this->nama suka makan Ayam";
        }
        public function minum(){
            echo " $this->nama2 suka minum powerF";
        }
}

//buat object
$cetak = new manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();

?>