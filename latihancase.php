<?php
$baju = 'M'; //Ukuran Baju
switch ($baju) {
    case 'S':
        echo 'Baju S';
        break;
    case 'M':
        echo 'Baju M';
        break;
    case 'L':
        echo 'Baju L';
        break;
    default:
        echo 'Baju XL';
        break;
}

echo "<hr>";

$nilai = 40;
switch ($nilai) {
    case $nilai <= 40:
        echo "$nilai : Nilai Kurang";
        break;
    case $nilai <= 70:
        echo "$nilai : Nilai Cukup";
        break;
    case $nilai <= 80:
        echo "$nilai : Nilai Memuaskan";
        break;
    case $nilai <= 100:
        echo "$nilai : Nilai Sangat Memuaskan";
        break;
    default:
        echo "Null";
        break;
}

echo "<hr>";

$nilai2 = 69;
switch ($nilai2) {
    case $nilai2 >= 0 && $nilai2 < 35:
        echo "$nilai2 : Nilai E";
        break;
    case $nilai2 >= 35 && $nilai2 < 60:
        echo "$nilai2 : Nilai D";
        break;
    case $nilai2 >= 60 && $nilai2 < 75:
        echo "$nilai2 : Nilai C";
        break;
    case $nilai2 >= 75 && $nilai2 < 85:
        echo "$nilai2 : Nilai B";
        break;
    case $nilai2 >= 85 && $nilai2 <= 100;
        echo "$nilai2 : Nilai A";
        break;
    default:
        echo "Null";
        break;
}
