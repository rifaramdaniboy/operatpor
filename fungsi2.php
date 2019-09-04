<?php
function cetak_ganjil($awal , $ahir) {
    for ($i=$awal; $i < $ahir ; $i++) { 
       if ($i%2 == 1) {
           echo "$i";

       }
    }
} 
//pemanggil fungsi

$a =10;
$b =50;

echo "<b> bilangan ganjil dari $a sampai $b : </b> <br><br> ";
cetak_ganjil($a , $b);

?>