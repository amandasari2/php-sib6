<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <table align="center" border="0" cellpadding="10" cellspacing="0" width="30%">
            <thead>
                <tr bgcolor="aqua">
                    <th colspan="2">Kalkulator Keren</th>
                </tr>
            </thead>
            <tbody>
                <tr bgcolor="khaki">
                    <td width="30%">Angka 1</td>
                    <td>
                        <input type="text" name="a1" id="">
                    </td>
                </tr>
                <tr bgcolor="khaki">
                    <td width="30%">Angka 2</td>
                    <td>
                        <input type="text" name="a2" id="">
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr bgcolor="aqua">
                    <th colspan="2">
                        <button type="submit" name="proses" value="Tambah">+</button>
                        <button type="submit" name="proses" value="Kurang">-</button>
                        <button type="submit" name="proses" value="Kali">*</button>
                        <button type="submit" name="proses" value="Bagi">/</button>
                        <button type="submit" name="proses" value="Pangkat">^</button>
                    </th>
                </tr>
            </tfoot>
        </table>
    </form>
</body>
</html>

<?php 
//Buat Fungsi
function hitung($a1, $a2, $tombol){
    if($tombol == 'Tambah'){
        $hasil = $a1 + $a2;
    }
    elseif ($tombol == 'Kurang') {
        $hasil = $a1 - $a2;
    }
    elseif ($tombol == 'Kali') {
        $hasil = $a1 * $a2;
    }
    elseif ($tombol == 'Bagi'){
        $hasil = $a1 / $a2;
    }
    elseif ($tombol == 'Pangkat'){
        $hasil = $a1 ** $a2;
    }
    else{
        $hasil = 0;
    }
    return $hasil;
}

// Tangkap Request Hasil
$a1 = $_GET['a1'];
$a2 = $_GET['a2'];
$tombol = $_GET['proses'];
$hasil = hitung($a1, $a2, $tombol);

// Cetak dari pemanggilan Fungsi
if(isset($tombol)){
    echo "<center><h3>Hasil Bilangan : $a1 $tombol $a2 adalah $hasil </h3></center>";
}

?>