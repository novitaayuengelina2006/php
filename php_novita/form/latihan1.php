<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas form</title>
</head>
<body>
<form action="proses-latihan1.php" method="POST">
        <h2>Formulir Pendaftaran</h2>
    <div style="margin-bottom: 1rem;">
        <label>Nama</label> <br>
        <input type="text" name="nama">
    </div>
    <div style="margin-bottom: 1rem;">
         <label>Jenis Kelamin</label> <br>
         <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-Laki <br>
         <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan <br>
    </div>
    <div>
        <label>Tanggal Lahir</label> <br>
        <input type="date" name= tanggal_lahir>
    </div>
    <div style="margin-bottom: 1rem;">
         <label>Olahraga</label> <br>
         <input type="radio" name="olahraga" value="sepak_bola"> sepak bola <br>
         <input type="radio" name="olahraga" value="bulu_tangkis"> bulu tangkis <br>
         <input type="radio" name="olahraga" value="renang"> renang <br>
    </div>
    <div style="margin-bottom: 1rem;">
         <label>Kelas</label> <br>
         <input type="checkbox" id="kelas1" name="kelas[]" value="Pemula">
      <label for="kelas1">Pemula</label> <br>
         <input type="checkbox" id="kelas2" name="kelas[]" value="Menengah">
      <label for="kelas2">Menengah</label> <br>
         <input type="checkbox" id="kelas3" name="kelas[]" value="Lanjutan">
      <label for="kelas3">Lanjutan</label>
    </div>
    <div style="margin-buttom: 1rem">
        <label>Kemampuan Fisik</label> <br>
        <textarea name="kemampuan_fisik" cols="30" rows="4"></textarea>
    </div>
    <div style="margin-bottom: 1rem;">
    <label>Pembayaran</label> <br>
    <select name="pembayaran">
        <option value="transfer_bank">Transfer_bank</option>
        <option value="kartu_kredit">Kartu_Kredit</option>
    </select>
    </div>
    <div>
    <button>Submit</button>
    </div>
</form>
</body>
</html>