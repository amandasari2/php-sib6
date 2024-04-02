<?php
//contoh fungsi bawaan dari php

$str = 'Belajar PHP di kampus merdeka';
echo $str;
echo '<br>';

$str =  strtoupper($str); //huruf besar (upper=besar)
echo $str;
echo '<br>';

$str = strtolower($str);  //huruf kecil(lower=kecil)
echo $str;

//ucfirst()
//ucwords()
echo '<hr>';

$ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu', 'aple'];
sort($ar_buah);
foreach ($ar_buah as $buah) {
    echo "$buah<br>";
}
echo '<hr>';
?>
<?php
//fungsi tanpa parameter argumen
function salam()
{
    echo "selamat Pagi";
}
salam();
echo '<br>';

function sapa($kawan)
{
    echo "selamat pagi $kawan";
}
sapa("azrul");
echo "<br>";
$nama = 'yasir';
sapa($nama);
echo "<br>";

//fungsi dengan parameter/argumen beserta isinya
function kabar($kawan = 'azrul', $kawan11 = 'Khatami')
{
    echo "hai apa kabar $kawan";
}
kabar();
echo '<br>';
kabar('yasir');
echo '<br>';
$siswa = 'azrul';
kabar($siswa);
echo '<hr>';

function hitung($x, $y)
{
    $z = $x + $y;
    echo $z;
}
hitung(50, 30);
echo "<br>";

//fungsi dengan return (mengembalikan nilai)
function tambah($a, $b)
{
    $c = $a + $b;
    return $c;
}
echo tambah(50, 30);
echo '<hr>';

function hitungumur($th_lahir)
{
    $th_sekarang = 2024;
    $umur = $th_sekarang - $th_lahir;
    return $umur;
}
echo hitungumur(2002);
echo '<br>';
echo 'umur saya sekarang adalah ' . hitungumur(2003) . ' tahun';
?>

<?php


?>