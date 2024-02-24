<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>latihan</title>
</head>
<body>
    <center>
      <img src="yayasan.png" alt="" style="max-width: 300px; margin-top: 1cm;">
    <h3>PENGGAJIHAN</h3>
    <h3>GURU/KARYAWAN YAYASAN ASSALAAM</h3>
    </center>
    <!-- CONTENT -->

<div class="crad text white bg-info mt-5 ml-5 mr-5">
<div class="card-header">
  <div class="card-header">
    Data Penggajian
  </div>
  <div class="card-body">
  <form method= "post" action="">
  <div class="form-group">
  <label>No</label> <br>
        <input type="text" name="no" class="form-control">
    </div>
    <div>
        <label>Nama</label> <br>
        <input type="text" name="nama" class="form-control">
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Unit Pendidikan</label> <br>
        <select name="unit_pendidikan" class="form-control">
        <option value="tk">TK</option>
        <option value="sd">SD</option>
        <option value="smp">SMP</option>
        <option value="sma">SMA</option>
        <option value="smk">SMK</option>
        </select>
    </div>
    <div>
        <label>Tanggal Gaji</label> <br>
        <input type="date" name="tanggal_gaji" class="form-control" >
    </div>
    <br>
    <br>
  <center>
    <div class="row">
    <div class="col">
     <label><h5>GAJI</h5></label> <br>
    </div>
   <div class="col">
     <label><h5>POTONGAN</h5></label> <br>
  
    </div>
  </div>
</center>   

    <form>
  <div class="row">
    <div class="col">
     <label>Jabatan</label> <br>
     <select name="jabatan" class="form-control">
        <option value="kepala_sekolah">Kepala Sekolah</option>
        <option value="wakasek">Wakasek</option>
        <option value="guru">Guru</option>
        <option value="karyawan">Karyawan</option>
        </select>
    </div>
   <div class="col">
     <label>Bpjs</label> <br>
     <input type="text" name="bpjs" class="form-control">
    </div>
  </div>

  <div class="row">
    <div class="col">
     <label>Lama Kerja</label> <br>
     <input type="text" name="lama_kerja" class="form-control">
     </div>
   <div class="col">
     <label>Pinjaman</label> <br>
     <input type="text" name="pinjaman" class="form-control">
    </div>
  </div>

  <div class="row">
    <div class="col">
     <label>Status Kerja</label> <br>
     <select name="status_kerja" class="form-control">
     <option value="tetap">Tetap</option>
     <option value="kontrak">Kontrak</option> 
     </select>
     </div>
   <div class="col">
     <label>Tabungan</label> <br>
     <input type="text" name="tabungan" class="form-control">
    </div>
  </div>

    <div class="col">
     <label>Lainnya</label> <br>
     <input type="text" name="lainnya" class="form-control">
     </div>

     <button type="submit" class="btn btn-primary" name="daftar">Proses</button>

</form>
</body>
</html>

<?php
if(isset($_POST['daftar'])){

    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit_pendidikan = $_POST['unit_pendidikan'];
    $tanggal_gaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status_kerja = $_POST['status_kerja'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];

    if ($jabatan == "kepala_sekolah") {
        $gaji = 5000000;
    } else if ($jabatan == "wakasek") {
        $gaji = 4000000;
    } else if ($jabatan == "guru") {
        $gaji = 3000000; 
    } else if ($jabatan == "karyawan") {
        $gaji = 2000000;
    }

    if ($status_kerja == "tetap") {
      $bonus = 1000000;
    } else if ($status_kerja == "kontrak") {
      $bonus = 0;
    }

    $gajibersih = $gaji + $bonus - $bpjs - $pinjaman - $tabungan - $lainnya;
    

    class hasil{

         public function pendaftaran($no2,$nama2,$unit_pendidikan2,$tanggal_gaji2,$jabatan2,$gaji2,$lama_kerja2,$status_kerja2,$bonus2,$bpjs2,$pinjaman2,$tabungan2,$lainnya2,$gajibersih2){
?>

<center>
<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header"><h3>STRUK GAJI</h3></div>
  <div class="card-body">
    <h5 class="card-title">Pendaftaran Sukses</h5>
    <table>
      <tr>
        <td>No</td>
        <td>:</td>
        <td><?php echo $no2 ?></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $nama2 ?></td>
      </tr>
      <tr>
        <td>Unit Pendiidkan</td>
        <td>:</td>
        <td><?php echo $unit_pendidikan2 ?></td>
      </tr>
      <tr>
        <td>Tanggal Gaji</td>
        <td>:</td>
        <td><?php echo $tanggal_gaji2 ?></td>
      </tr>
      <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><?php echo $jabatan2 ?></td>
      </tr>
      <tr>
        <td>Gaji</td>
        <td>:</td>
        <td><?php echo $gaji2?></td>
      </tr>
      <tr>
        <td>Lama Kerja</td>
        <td>:</td>
        <td><?php echo $lama_kerja2 ?></td>
      </tr>
      <tr>
        <td>Status Kerja</td>
        <td>:</td>
        <td><?php echo $status_kerja2 ?></td>
      </tr>
      <tr>
        <td>Bonus</td>
        <td>:</td>
        <td><?php echo $bonus2 ?></td>
      </tr>
      <tr>
        <td>Bpjs</td>
        <td>:</td>
        <td><?php echo $bpjs2 ?></td>
      </tr>
      <tr>
        <td>Pinjaman</td>
        <td>:</td>
        <td><?php echo $pinjaman2 ?></td>
      </tr>
      <tr>
        <td>Tabungan</td>
        <td>:</td>
        <td><?php echo $tabungan2 ?></td>
      </tr>
      <tr>
        <td>Lainnya</td>
        <td>:</td>
        <td><?php echo $lainnya2 ?></td>
      </tr>
      <tr>
        <td>Gaji Bersih</td>
        <td>:</td>
        <td><?php echo $gajibersih2 ?></td>
      </tr>
    </table>
  </div>
  </div>
</center>
<?php

         }
        }

    $cetak = new hasil();

    echo $cetak->pendaftaran($no,$nama,$unit_pendidikan,$tanggal_gaji,$jabatan,$gaji,$lama_kerja,$status_kerja,$bonus,$bpjs,$pinjaman,$tabungan,$lainnya,$gajibersih);
}
?>

