<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Project Uas</title>
    <style>
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo-container img {
            max-width: 200px;
        }
    </style>
  </head>
  <body>
    <div class="form-container">
    <div class="container mt-5">
        <!-- Logo -->
        <div class="logo-container">
            <img src="yayasan.foto.jpeg" alt="Logo Yayasan Assalaam">
        </div>
        <h2 class="text-center mb-4">Penggajihan</h2>
        <h2 class="text-center mb-4">Guru/Karyawan Yayasan Assalaam</h2>
        <form action="" method="post">
          <center>
        <div class="card" style="width: 40rem;">
        <div class="card-header">
             Data Penggajihan
        </div>
        <div class="mb-3">
                <label for="no" class="form-label">No</label>
                <input type="text" name="no" id="no" class="form-control" placeholder="No" required>
        </div>
        <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required>
        </div>
        <div class="mb-3">
                <label for="unit" class="form-label">Unit Pendidikan</label>
                <select name="unit" id="unit" class="form-select" required>
                    <option value="">Pilih Unit Pendidikan</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                </select>
        </div>
         <!-- Tanggal Gaji -->
         <div class="mb-3">
                <label for="tanggal_gaji" class="form-label">Tanggal Gaji</label>
                <input type="date" name="tanggal_gaji" id="tanggal_gaji" class="form-control" required>
            </div>


        <div class="container">
  <div class="row">
    <div class="col">
      <h2 class="text-center">Gaji</h2>
      <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <select name="jabatan" id="jabatan" class="form-select" required>
                    <option value="">Pilih Jabatan</option>
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                    <option value="Wakasek">Wakasek</option>
                    <option value="Guru">Guru</option>
                    <option value="Karyawan">Karyawan</option>
                </select>
            </div>
            <div class="mb-3"> 
                <label for="Lama Kerja" class="form-label">Lama Kerja</label>
                <input type="number" name="lk" id="Lama Kerja" class="form-control" placeholder="Lama Kerja" required>
      </div>
        <div class="mb-3">
                <label for="status" class="form-label">Status Kerja</label>
                <select name="statusk" id="status" class="form-select" required>
                    <option value="">Pilih Status Kerja</option>
                    <option value="Tetap">Tetap</option>
                    <option value="Kontrak">Kontrak</option>
                </select>
            </div>
    </div>
    <div class="col">
      <h2 class="text-center">Potongan</h2>
      <div class="mb-3">
                <label for="bpjs" class="form-label">BPJS</label>
                <input type="number" name="bpjs" id="bpjs" class="form-control" placeholder="BPJS" required>
      </div>
      <div class="mb-3"> 
                <label for="pinjaman" class="form-label">Pinjaman</label>
                <input type="number" name="pinjaman" id="pinjaman" class="form-control" placeholder="Pinjaman" required>
      </div>
      <div class="mb-3"> 
                <label for="cicilan" class="form-label">Cicilan</label>
                <input type="number" name="cicilan" id="cicilan" class="form-control" placeholder="Cicilan" required>
      </div>
      <div class="mb-3"> 
                <label for="infaq" class="form-label">Infaq</label>
                <input type="number" name="infaq" id="infaq" class="form-control" placeholder="Infaq" required>
      </div>
    </div>
  </div>
    <div class="text-center"><button class="btn btn-primary " name="proses">Proses</button>
  </div>   
  </div>
</div>
</div>
</div>
</center>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</form>
</body>
</html>

<?php
if (isset($_POST['proses'])) {
  $no =$_POST['no'];
  $nama =$_POST['nama'];
  $unit =$_POST['unit'];
  $tglg =$_POST['tanggal_gaji'];
  $jabatan=$_POST['jabatan'];
  $lamak =$_POST['lk'];
  $sk =$_POST['statusk'];
  $bpjs =$_POST['bpjs'];
  $pinjam =$_POST['pinjaman'];
  $cicil =$_POST['cicilan'];
  $infaq =$_POST['infaq'];

  $gaji =[
    "Kepala Sekolah" => 10000000,
    "Wakasek" => 7000000,
    "Guru" => 5000000,
    "Karyawan" => 2500000,
  ];

  if ($sk == "Tetap") {
    $bonus = 1000000;
  }elseif ($sk == "Kontrak") {
    $bonus =0;
  }else{
    echo "TIdak Ada Gaji";
  }

  $hasilg = $gaji[$jabatan];
  $gaji_bersih =($hasilg + $bonus)-($bpjs + $pinjam + $cicil + $infaq);

  class Gaji{
    function struk($no2,$nama2,$unit2,$tglg2,$jabatan2,$lk2,$sk2,$gaji2,$bonus2,$bpjs2,$pinjam2,$cicil2,$infaq2,$gajibersih2){
      echo "<style>
        .box {
            border: 2px solid #000; 
            padding: 20px;
            margin: 20px auto; 
            width: 50%; 
            border-radius: 10px; 
            background-color: #f8f9fa;
        }
    </style>";
      echo "<div class='container mt-5'>;
       <div class='box'>
        <h2 class='text-center'>Struk Gaji</h2>
        <table class='table table-borderless'>";
      echo "<tr>
      <td>NO</td>
      <td>:</td>
      <td>$no2</td>
      <tr>";
      echo "<tr>
      <td>Nama</td>
      <td>:</td>
      <td>$nama2</td>
      <tr>";
      echo "<tr>
      <td>Unit Pendidikan</td>
      <td>:</td>
      <td>$unit2</td>
      <tr>";
      echo "<tr>
      <td>Tanggal Gaji</td>
      <td>:</td>
      <td>$tglg2</td>
      <tr>";
      echo "<tr>
      <td>Jabatan</td>
      <td>:</td>
      <td>$jabatan2</td>
      <tr>";
      echo "<tr>
      <td>Gaji</td>
      <td>:</td>
      <td>$gaji2</td>
      <tr>";
      echo "<tr>
      <td>Lama Kerja</td>
      <td>:</td>
      <td>$lk2</td>
      <tr>";
      echo "<tr>
      <td>Status Kerja</td>
      <td>:</td>
      <td>$sk2</td>
      <tr>";
      echo "<tr>
      <td>Bonus</td>
      <td>:</td>
      <td>$bonus2</td>
      <tr>";
      echo "<tr>
      <td>BPJS</td>
      <td>:</td>
      <td>$bpjs2</td>
      <tr>";
      echo "<tr>
      <td>Pinjaman</td>
      <td>:</td>
      <td>$pinjam2</td>
      <tr>";
      echo "<tr>
      <td>Cicilan</td>
      <td>:</td>
      <td>$cicil2</td>
      <tr>";
      echo "<tr>
      <td>Infaq</td>
      <td>:</td>
      <td>$infaq2</td>
      <tr>";
      echo "<tr>
      <td>Gaji Bersih</td>
      <td>:</td>
      <td>$gajibersih2</td>
      <tr>";
      echo "</div></div></table>";
    }
  }
  $hasil_gaji =new Gaji();
  echo "<div class='card mt-5 ms-5 me-5 ps-5 pe-5'><div class='card-body fs-3'>";
  $hasil_gaji->struk($no,$nama,$unit,$tglg,$jabatan,$hasilg,$lamak,$sk,$bonus,$bpjs,$pinjam,$cicil,$infaq,$gaji_bersih);
  echo "</div></div>";

}