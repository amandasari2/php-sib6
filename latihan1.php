<?php
// variabel

// ini contoh komentar di dalam php

/* Komentar 1 
Komentar 2
Komentar 3
Komentar 4
*/

echo 'Belajar PHP';
echo '<br>';
echo "Saya Senang Belajar \"PHP\"";
echo '<br>';
echo "Belajar XAMPP";
echo '<hr>';

//Variabel User
$nama = "Amanda Sari"; //data string
$alamat = "Kisaran"; //data string
$umur = 21; //data integer
$berat = 60.5; //data float
$_pekerjaan = "Mahasiswa";

//cetak di dalam php
echo $nama;
echo "<br>";
echo $alamat;
echo "<br>";
echo "Nama saya $nama alamat di $alamat <br>";
echo 'Nama saya ' . $nama . ' alamat di ' . $alamat . '<br>';
echo "Umur : $umur <br>";
echo "Berat saya : $berat <br>";
echo 'Pekerjaan saya : ' . $_pekerjaan . '<br>';
echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel User</title>
</head>

<body>
    <!-- Cetak di dalam html -->
    <h2>Nama Saya : <?php echo $nama ?></h2>
    <h2>Saya Berumur : <?= $umur ?> tahun</h2>
    <hr>
</body>

</html>

<?php
// Variabel System
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<hr>";

// Variabel Konstanta
// define : Untuk memanggil variabel Konstanta
define('PELAJARAN', 'PHP Dasar');
echo "Ini MataKuliah : " . PELAJARAN;
echo "<hr>";

// Operator Aritmatika
$a = 100;
$b = 80;
echo $a + $b . '<br>';
echo $a * $b . '<br>';
echo $a - $b . '<br>';
echo $a / $b . '<br>';
echo $a ** $b . '<br>';
echo $a % $b . '<br>'; //sisa bagi
echo pow($a, $b) . '<br>'; //pangkat
echo pow(2, 3) . '<br>'; //pangkat
echo "<hr>";

define('PHI', 3.14);
$jari2 = 15; //Ubah Jari - jari
$luas = PHI * ($jari2 * $jari2);
$keliling = 2 * PHI * $jari2;

echo $jari2;
echo '<br>';
echo $luas;
echo '<br>';
echo $keliling;
echo '<hr>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <p>Jari - Jarinya adalah : <?= $jari2 ?></p>
    <hr>
</body>

</html>

<?php
// Tipe Data String 
$itungstring = "Belajar PHP Di Kampus Merdeka";
var_dump($itungstring);
echo "<br>";

// Mengetahui Tipe Variabel
$huruf = "Manda";
$hasil = gettype($huruf);
echo $hasil;
echo '<br>';

$bil = 100;
$hasil = gettype($bil);
echo $hasil;
echo '<br>';

$bil2 = 10.5;
$hasil = gettype($bil2);
echo $hasil;
echo '<br>';

// Buat nama lengkap dan alamat, cetak dengan style css menggunakan echo
echo '<style>
    h2{
        background-color:aqua;
    }
</style>';
echo '<h1 style="color:blue;">' . $nama . '</h1>';
echo '<h2>' . $alamat . '</h2>';

?>