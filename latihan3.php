<?php
$nama = "Amanda Sari";
$matkul = "PHP";
$nilai = 70; //nilai diinput

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

echo $nama . "<br>";
echo $matkul . "<br>";
echo $nilai . "<br>";
echo $kriteria . "<br>";
echo $grade . "<br>";
echo $predikat . "<br>";
echo "<hr>";
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