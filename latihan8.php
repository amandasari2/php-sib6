<?php 
//Looping For 
// Hitung Pengulangan 1 s.d 10
for($x=1;$x<=10;$x=$x+2){
    echo "Perulangan ke-$x <br>";
}

echo "<hr>";

//Hitung perulangan 10 s.d 1
for($y=10;$y>=1;$y--){
    echo "Perulangan ke-$y <br>";
}

echo "<hr>";

for($x=1;$x<=10;$x=$x+1){
    echo "Saya Sedang Belajar PHP <br>";
}

//Loping While
$j = 1;
while($j<=10){
    echo "$j <br>";
    $j++;
}

?>

<form>
    Jumlah Siswa : 
    <?php 
        for($z=1;$z<=10;$z=$z+1){
            echo '<input type="radio" name="jk" id="" value="Laki-laki">'.$z;
        }
    ?>
</form>