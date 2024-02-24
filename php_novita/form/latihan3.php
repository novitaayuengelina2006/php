<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <center>
  <h2>Daftar Smk</h2>
  <form method = "POST" action="">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type='text'  name='name'></td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td>:</td>
            <td><input type='date' name= 'tanggal_lahir'></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
            <input type='radio' name='jenis_kelamin' value="laki-laki"> Laki-Laki <br>
            <input type='radio' name='jenis_kelamin' value="perempuan"> Perempuan <br> 
            </td>
        </tr>
        <tr>
            <td>Biaya Register</td>
            <td>:</td>
            <td><input type='number' name='biaya_register'></td>
        </tr>
        <tr>
        <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan">
                            <option value="Sepak Bola">......</option>
                            <option value="RPL">RPL</option>
                            <option value="TKRO">TKRO</option>
                            <option value="TMSM">TBSM</option>
                        </select>
                        </tr>
                        </td>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name ="Kirim" value='DAFTAR'></td>
                        </tr>
    </table> 
    </form>   
  </center>  
</body>
</html>

<?php
if(isset($_POST['Kirim'])){
$nama= $_POST['name'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$tanggal_lahir= $_POST['tanggal_lahir'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$biaya_register= $_POST['biaya_register'];
$jurusan= $_POST['jurusan'];

if ($jurusan == "RPL") {
    $bj = 2500000;
} elseif ($jurusan == "TKRO") {
    $bj = 3000000;
} elseif ($jurusan == "TBSM") {
    $bj = 3500000;
} else {
    echo "Pilih jurusan terlebih dahulu";
}

$total = $bj + $biaya_register;

echo "Struk Register";
echo "Nama : $nama <br>";
echo "Tanggal Lahir : $tanggal_lahir <br>";
echo "Jenis Kelamin : $jenis_kelamin <br>";
echo "Biaya Register : $biaya_register <br>";
echo "Total Pembeli : $total <br>";
}

?>