<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="post" action="latihan5.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Text Field</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="text" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="matkul">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="">-- Pilihan Mata Kuliah --</option>
        <option value="html">HTML &amp; CSS</option>
        <option value="uiux">UI/UX</option>
        <option value="php">PHP</option>
        <option value="laravel">Laravel</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php

$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai = $_POST['nilai']; //nilai diinput
$proses = $_POST['proses'];
//Ternary
$kriteria = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";

//If
if ($nilai >= 85 && $nilai <= 100) $grade = "Nilai A";
else if ($nilai >= 75 && $nilai <= 85) $grade = "Nilai B";
else if ($nilai >= 65 && $nilai <= 75) $grade = "Nilai C";
else if ($nilai >= 55 && $nilai <= 65) $grade = "Nilai D";
else $grade = "";

//Switch
switch ($grade) {
    case 'Nilai A':
        $predikat = 'Sangat Memuaskan';
        break;
    case 'Nilai B':
        $predikat = 'Memuaskan';
        break;
    case 'Nilai C':
        $predikat = 'Cukup';
        break;
    case 'Nilai D':
        $predikat = 'Kurang';
        break;
    default:
        $predikat = '';
        break;
}

// echo $nama . "<br>";
// echo $matkul . "<br>";
// echo $nilai . "<br>";
// echo $kriteria . "<br>";
// echo $grade . "<br>";
// echo $predikat . "<br>";
// echo "<hr>";
if(isset($proses)){
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
    
</head>

<body>
    <p>Nama Siswa : <?= $nama ?></p>
    <p>Mata Kuliah : <?= $matkul ?> </p>
    <p>Nilai : <?= $nilai ?></p>
    <p>Keterangan : <?= $kriteria ?></p>
    <p>Grade : <?= $grade ?></p>
    <p>Predikat : <?= $predikat ?></p>
</body>

</html>
<?php } ?>