<?php
$hrg_jambu =15000;
$dus =6;
$kg=5;
$hrg_dus =2000;

$kg_dus =$dus * $kg;
$jml_dus =$hrg_dus * $dus;
$jml_jambu =$hrg_jambu * $kg_dus;
$jml_seluruh=$jml_jambu + $jml_dus;

echo "jumlah seluruh jambu". $dus * $kg;
echo "<br> harga jambu dikali (X) dengan 
jumlbuah jambu : " .$hrg_jambu *$kg_dus;
echo "<br> jumlah dus dikali 2000 :". $jml_dus;
echo "<br> jumlah seluruh jambu ". $jml_seluruh;
?>
