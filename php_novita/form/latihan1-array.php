<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <center>
    <h1>Data Nilai Ujian Kelas XII RPL</h1>
    <form action="" method="post">
    <table>
        <tr>
            <td>
            <label>Jumlah Siswa</label>
            </td>
            <td>
                :
            </td>
            <td>
                <input type="number" name="jumlah">
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>

            </td>
            <td>
                <input type="submit" name="kirim" value="kirim">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
<?php
if (isset($_POST['kirim'])) {
    $jumlah = $_POST['jumlah'];

    for ($i = 1; $i <= $jumlah; $i++) {
        echo "Data Siswa ke-$i<br>";
        echo "<table>";
        echo "<tr><td>NIS</td>";
        echo "<td>:</td>";
        echo "<td><input type=text></td></tr>";
        echo "<tr><td>Nama</td>";
        echo "<td>:</td>";
        echo "<td><input type=text></td></tr>";
        echo "<tr><td>Kelas</td>";
        echo "<td>:</td>";
        echo "<td><input type=text></td></tr>";
        echo "<tr><td>Bahasa Indonesia</td>";
        echo "<td>:</td>";
        echo "<td><input type=number></td></tr>";
        echo "<tr><td>Bahasa Inggris</td>";
        echo "<td>:</td>";
        echo "<td><input type=number></td></tr>";
        echo "<tr><td>Matematika</td>";
        echo "<td>:</td>";
        echo "<td><input type=number></td></tr>";
        echo "<tr><td>Produktif</td>";
        echo "<td>:</td>";
        echo "<td><input type=number></td></tr>";
        echo "<tr><td></td>";
        echo "<td></td>";
        echo "</table>";
    }
}
?>

<tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" value="simpan"></td>
</tr>


