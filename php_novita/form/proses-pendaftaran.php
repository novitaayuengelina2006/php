<?php
    $nama= @$_REQUEST['nama'];
    $email= @$_REQUEST['email'];
    $usia= @$_REQUEST['usia'];
    $tanggal_lahir= @$_REQUEST['tanggal_lahir'];
    $alamat= @$_REQUEST['alamat'];
    $jenis_kelamin= @$_REQUEST['jenis_kelamin'];
    $status= @$_REQUEST['status'];
    $hobi= @$_REQUEST['hobi'];

    echo "Nama = $nama <br>";
    echo "Email = $email <br>";
    echo "Usia = $usia <br>";
    echo "Tanggal Lahir = $tanggal_lahir <br>";
    echo "Alamat = $alamat <br>";
    echo "Jenis Kelamin = $jenis_kelamin <br>";
    echo "Status = $status <br>";
    echo "Hobi = $hobi <br>";
    
?>