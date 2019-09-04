<?php
function segitiga($alas , $tinggi){
echo "<h1> luas segitiga </h1><br>";
echo "Alas : $alas <br> Tinggi : $tinggi <br>";
echo "menghitung Luas Segitiga : " . $alas * $tinggi / 2 ." cm ";
}

$a = 8;
$b =2;
segitiga($a , $b);

function lingkaran($phi , $diameter ,$rad){
echo "<h1> luas lingkaran </h1><br> Diameter : $diameter <br> ";
echo "jari - jari : $rad <br>";
echo "menghitung Luas lingkaran : " . $phi * $rad * $rad ." cm<br> ";
}

$phi = 4.14;
$rad = 8;
$diameter =16;
lingkaran($phi ,$diameter, $rad );

function kel_lingkaran ($phi , $diameter ,$rad){
echo "<h1> keliling lingkaran </h1><br>";
echo "diameter : $diameter <br>";
echo "jari - jari : $rad <br>";
echo "menghitung keliling lingkaran : " . 2 * $phi * $diameter ." cm ";
}

$p = 4.14;
$r = 6;
$diameter =$r*2;
kel_lingkaran($p ,$diameter, $r );

?>

