<?php 
// Array sekumpulan data
// array numerik dan array asosiatif

// 1. Array Numerik
$ar_buah = ['Pepaya', 'Mangga', 'Pisang', 'Anggur', 'Jeruk'];
// $ar_buah[2] ='Jeruk'; 
echo $ar_buah[4];
echo "<hr>";
//Tampilkan jumlah total pada buah
$jumlah = count($ar_buah);
echo $jumlah;
echo "<hr>";

//Lihat Hasil Data Buah Dengan Foreach
foreach ($ar_buah as $data){
    echo $data."<br>";
}

echo "<hr>";

//2. Array Asosiatif
$ar_hewan = [10=> 'Babi Ngepet', 20=>'Bebek', 'Kucing', 30=>'Putri Duyung', 'Anjing Galak'];
echo $ar_hewan[10];

echo "<hr>";

//Lihat Hasil Data Buah Dengan Foreach
foreach ($ar_hewan as $id => $nama){
    echo "$id $nama <br>";
}

echo "<hr>";
// 3. Array Multidimensi (Array Dalam Array)
$daftar_staff = [
    ["Nama" => "Manda", "Alamat" => "Kisaran", "NoHp" => 81375052211, "Status" => "Mahasiswa"],
    ["Nama" => "Mayang", "Alamat" => "Ambalutu", "NoHp" => 81375052211, "Status" => "Mahasiswa"],
    ["Nama" => "Sarmila", "Alamat" => "Sureng", "NoHp" => 81375052211, "Status" => "Mahasiswa"],
    ["Nama" => "Nadia", "Alamat" => "Air Joman", "NoHp" => 81375052211, "Status" => "Mahasiswa"]
];

foreach ($daftar_staff as $namax){
    echo "$namax[Nama]<br>";
}

echo "<hr>";
// 3. Array Multidimensi (Array Dalam Array)
// Cara 2

$a1=    ["Nama" => "Manda", "Alamat" => "Kisaran", "NoHp" => 81375052211, "Status" => "Mahasiswa"];
 $a2=   ["Nama" => "Mayang", "Alamat" => "Ambalutu", "NoHp" => 81375052211, "Status" => "Mahasiswa"];
    $a3=["Nama" => "Sarmila", "Alamat" => "Sureng", "NoHp" => 81375052211, "Status" => "Mahasiswa"];
    $a4=["Nama" => "Nadia", "Alamat" => "Air Joman", "NoHp" => 81375052211, "Status" => "Mahasiswa"];

$daftar_sta =[$a1, $a2, $a3, $a4];

foreach ($daftar_sta as $namax){
    echo "$namax[Nama]<br>";
}

?>