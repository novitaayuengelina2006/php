<!DOCTYPE html>
<html>
<head>
    <title>Form data diri</title>
</head>
<body>
    <center>
    <h2>Form Biodata Diri</h2>
     <!-- form -->
     <form method = "POST" action = "">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type = 'text' name ='nama'></td>
            </tr>
            <tr>
                <td>Tanggal_lahir</td>
                <td>:</td>
                <td><input type = 'date' name ='tanggal_lahir'></td>
            </tr>
            <tr>
                <td>Jenis_kelamin</td>
                <td>:</td>
                <td><input type = 'radio' name ='jk' value = "Laki-Laki">Laki-Laki
                    <input type = 'radio' name ='jk' value = "perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat"cols="20" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                <select name="agama">
                <OPtion value="">Pilih</OPtion>
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
                <option value="kong hhu chu">Kong hhu chu</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Pendidikan_terakhir</td>
                <td>:</td>
                <td>
                <select name="pendidikan_terakhir">
                <OPtion value="">Pilih</OPtion>
                <option value="sd">sd</option>
                <option value="smp">smp</option>
                <option value="sma">sma</option>
                <option value="smk">smk</option>
                <option value="kuliah">kuliah</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><input type = 'text' name ='status'></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type = 'text' name ='hobi'></td>
            </tr>
            <tr>
                <td>Cita_cita</td>
                <td>:</td>
                <td><input type = 'text' name ='cita_cita'></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name = "simpan" value= 'KIRIM'></td>
            </tr>
        </table>
</form> 
</center>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
    $a = $_POST['nama'];
    $b = $_POST['tanggal_lahir'];
    $c = $_POST['jk'];
    $d = $_POST['alamat'];
    $e = $_POST['agama'];
    $f = $_POST['pendidikan_terakhir'];
    $g = $_POST['status'];
    $h = $_POST['hobi'];
    $i = $_POST['cita_cita'];

    echo "========== Biodata Diri ==========<br>";
    echo "==================================<br>";

    echo "Nama = $a <br>";
    echo "Tanggal_lahir = $b <br>";
    echo "Jenis_kelamin = $c <br>";
    echo "Alamat = $d <br>";
    echo "Agama = $e <br>";
    echo "Pendidikan_terakhir = $f <br>";
    echo "Status = $g <br>";
    echo "Hobi = $h <br>";
    echo "Cita_cita = $i <br>";
}
 ?>