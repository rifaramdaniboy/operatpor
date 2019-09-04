<?php
$arrnilai = array ("Ajeng" => 90 , "Mamat" =>70 ,"Ucup" => 87
,"Aang" => 95 ,"Syahrul" => 75);
foreach ($arrnilai as $nama => $nilai) {
    
if ($nilai > 85) {
    echo "nama : $nama , Nilai :$nilai ,grade A ";
}elseif ($nilai > 75) {
    echo "nama : $nama , Nilai :$nilai ,grade b ";
}elseif ($nilai > 65) {
    echo "nama : $nama , Nilai :$nilai ,grade c ";
}
echo "<hr>";
}
?>