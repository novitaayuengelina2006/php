 <?php
    $nama= @$_REQUEST['nama'];
    $jenis_kelamin= @$_REQUEST['jenis_kelamin'];
    $tanggal_lahir= @$_REQUEST['tanggal_lahir'];
    $olahraga= @$_REQUEST['olahraga'];
    $kelas= @$_REQUEST['kelas'];
    $kemampuan_fisik= @$_REQUEST['kemampuan_fisik'];
    $pembayaran= @$_REQUEST['pembayaran'];
    $diskon = 0;

    if ($olahraga == "Sepak Bola") {
        $harga = 0;
        foreach ($kelas as $value) {
            if ($value == "Pemula") {
                $harga += 200000;
            } elseif ($value == "Menengah") {
                $harga += 250000
            } elseif ($value == "Lanjutan") {
                $harga += 300000;
            }
        }
    } else if ($olahraga == "Bulu Tangkis") {
        $harga = 0;
        foreach ($kelas as $value) {
            if ($value == "Pemula") {
                $harga += 150000;
                if ($jenis == "perempuan") {
                    $diskon += $harga * 0.1;
                }
            } elseif ($value == "Menengah") {
                $harga += 200000;
                if ($jenis == "perempuan") {
                    $diskon += $harga * 0.1;
                }
            } elseif ($value == "Lanjutan") {
                $harga += 250000;
                if ($jenis == "perempuan") {
                    $diskon += $harga * 0.1;
                }     
             
              }
        }
    } else if ($olahraga == "Renang") {
        $harga = 0;
        foreach ($kelas as $value) {
            if ($value == "Pemula") {
                $harga += 180000;
            } elseif ($value == "Menengah") {
                $harga += 220000;
            } elseif ($value == "Lanjutan") {
                $harga += 270000
            }
        }
    }

    $total = $harga - $diskon;

    if ($total > 500000) {
        $keputusan = "Selamat Anda Mendapatkan Hadiah Gratis";     
    } else {
        $keputusan = "Sangat Disayangkan Total Harga Anda Kurang Dari RP.500.000, Anda tidak mendapatkan hadiah";
    }

    echo "<center>";
    echo "<h1>Form Pendaftaran</h1>";
    echo "Nama : $nama<br>";
    echo "Jenis Kelamin : $jenis_kelamin<br>";
    echo "Tanggal Lahir : $tanggal_lahir<br>";
    echo "Olahraga : $olahraga<br>";
    echo "Kelas : " . implode(",", $kelas) . "<br>";
    echo "Kemampuan Fisik : $kemampuan_fisik<br>";
    echo "Pembayaran : $pembayaran<br>";
    echo "Harga : Rp. $harga<br>";
    echo "Diskon : Rp. $diskon<br>";
    echo "Total Harga : Rp. $total<br>";
    echo $keputusan;
    echo "</center>";

?>