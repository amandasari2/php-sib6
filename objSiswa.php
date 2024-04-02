<?php 
// Sertak File Classnya
require_once 'Siswa.php';

// Ciptakan Object
$ns1 = new Siswa('Manda', 89, 'PHP');
$ns2 = new Siswa('Nadia', 39, 'HTML');
$ns3 = new Siswa('Mayang', 55, 'JavaScript');
$ns4 = new Siswa('Sarmila', 75, 'UI/UX');

//Cetak
$ar_siswa = [$ns1, $ns2, $ns3, $ns4];

// $no=1;
// foreach ($ar_siswa as $sis){
//     // $no++;
//     echo $sis->nama.'<br>';
//     echo $sis->nilai.'<br>';
//     echo $sis->pelajaran.'<br>';
//     echo $sis->getHasil().'<br>';
//     echo "<hr>";
// }

// echo $ns1->nama;
// echo "<br>";
// echo $ns1->nilai;
// echo "<br>";
// echo $ns1->pelajaran;
// echo "<br>";
// echo $ns1->getHasil();

// echo "<hr>";

// echo $ns2->nama;
// echo "<br>";
// echo $ns2->nilai;
// echo "<br>";
// echo $ns2->pelajaran;
// echo "<br>";
// echo $ns2->getHasil();

// Ciptakan Objek
// $ns1 = new Siswa();
// $ns1->nama = "Manda";
// $ns1->nilai = 86;
// $ns1->pelajaran = "PHP";

// Cetak
// echo $ns1->nama;
// echo "<br>";
// echo $ns1->nilai;
// echo "<br>";
// echo $ns1->pelajaran;
// echo "<br>";
// echo $ns1->getHasil();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Nilai</title>
</head>
<body>
    <h2 align="center">Daftar Nilai Siswa</h2>
    <table border="1" cellspacing="0" cellpadding="10" width="50%" align="center">
        <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th>Pelajaran</th>
                    <th>Status</th>
                </tr>
        </thead>
        <tbody>
            <?php 
            $no=1;
            foreach ($ar_siswa as $sis){
               
                echo '<tr align="center">';
                echo '<td>'.$no++.'</td>';
                echo '<td>'.$sis->nama .'</td>';
                echo '<td>'.$sis->nilai .'</td>';
                echo '<td>'. $sis->pelajaran .'</td>';
                echo '<td>'.$sis->getHasil() .'</td>';
                echo '</tr>';
            }
            
            ?>
        </tbody>
    </table>
</body>
</html>