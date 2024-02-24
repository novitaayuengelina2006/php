<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Formulir Pendaftaran</h2>
        <!-- form -->
        <form method= "POST" action= "proses-latihan1.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type='text' name='nama'></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <select name="jenis_kelamin">
                            <option value="">Pilih</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type='date' name='tanggal_lahir'></td>
                </tr>
                <tr>
                <td>Kategori Olahraga</td>
                <td>:</td>
                <td>
                <input type='radio' name='KO' value='Sepak Bola'> Sepak Bola
                <input type='radio' name='KO' value='Bulu Tangkis'> Bulu Tangkis
                <input type='radio' name='KO' value='Renang'> Renang
                </td>
                </tr>
                <tr>
                    <td>Pilihan Kelas</td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="PK" value="Pemula"> Pemula <br>
                        <input type="checkbox" name="PK" value="Menengah"> Menengah <br>
                        <input type="checkbox" name="PK" value="Lanjutan"> Lanjutan <br>
                    </td>
                </tr>
                <tr>
                    <td>Kemampuan Fisik</td>
                    <td>:</td>
                    <td><textarea name="KF" cols="25" rows="7"></textarea></td>
                </tr>
                <tr>
                    <td>Pembayaran</td>
                    <td>:</td>
                    <td>
                    <select name="pembayaran">
                        <option value="">Pilih</option>
                        <option value="transfer_bank">Transfer Bank</option>
                        <option value="kartu_kredit">Kartu Kredit</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Perhitungan Harga</td>
                    <td>:</td>
                    <td>
                        <select name="Harga">
                            <option value="Sepak Bola">Sepak Bola</option>
                            <option value="200000">Pemula</option>
                            <option value="250000">Menengah</option>
                            <option value="300000">Lanjutan</option>
                        </select>
                        <select name="Harga">
                             <option value="Bulu Tangkis">Bulu Tangkis</option>
                             <option value="150000">Pemula</option>
                             <option value="200000">Menengah</option>
                             <option value="250000">Lanjutan</option>
                        </select>
                        <select name="Harga">
                            <option value="Renang">Renang</option>
                            <option value="180000">Pemula</option>
                            <option value="220000">Menengah</option>
                            <option value="270000">Lanjutan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value='KIRIM'></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

</div>
    <div style="margin-bottom: 1rem;">
    <label>Metode Harga</label> <br>
    <select name="metode_harga">
        <option value="sepakbola">sepakbola</option>
        <option value="200000">Pemula</option>
        <option value="250000">Menengah</option>
        <option value="300000">Lanjutan</option>
    </select>
    <select name="harga">
    <option value="bulu_tangkis">bulu tangkis</option>
        <option value="150000">Pemula</option>
        <option value="200000">Menengah</option>
        <option value="250000">Lanjutan</option>
    </select>
    <select name="harga">
        <option value="renang">renang</option>
        <option value="180000">Pemula</option>
        <option value="220000">Menengah</option>
        <option value="270000">Lanjutan</option>
    </select>
    </div>