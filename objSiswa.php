<?php 
// Sertak File Classnya
require_once 'Siswa.php';

// Ciptakan Objek
$ns1 = new Siswa();
$ns1->nama = "Manda";
$ns1->nilai = 86;
$ns1->pelajaran = "PHP";

// Cetak
echo $ns1->nama;
echo "<br>";
echo $ns1->nilai;
echo "<br>";
echo $ns1->pelajaran;
echo "<br>";
echo $ns1->getHasil();

?>