<?php
//Fungsi IF
$umur = 21;
if ($umur > 20) {
    echo "Selamat Kamu Boleh Mengendarai Mobil";
} else if ($umur > 17) {
    echo "Selamat Kamu Boleh Mengendarai Mobil";
} else if ($umur > 10) {
    echo "Selamat Kamu Boleh Mengendarai Mobil";
} else {
    echo "Kamu Di larangi Mengendarai Mobil";
}
echo "<hr>"
?>

<?php
$nama = "Amanda Sari";
$umur = 20;

if ($umur < 40 && $umur >= 17) {
    $ket = "Dewasa";
} else if ($umur < 17 && $umur >= 9) {
    $ket = "Remaja";
} else if ($umur < 9 && $umur > 5) {
    $ket = "Anak - Anak";
} else if ($umur <= 5 && $umur > 0) {
    $ket = "Balita";
} else {
    $ket = "Orang Tua";
}

echo "Nama saya $nama, saya berumur $umur tahun, dan saya adalah $ket";
echo "<hr>";
?>

<?php
// cara if
$nilai = 5;
if ($nilai > 6) {
    echo "Baik";
} else {
    echo "Buruk";
}

echo "<hr>";
//cara ternary
echo $nilai > 6 ? "Baik" : "Buruk";

echo "<hr>";
$nilai = 7;
$status_nilai = ($nilai > 6) ? "Baik" : "Buruk";
echo "Nilai : $nilai <br>";
echo "Status Nilai : $status_nilai";
?>
