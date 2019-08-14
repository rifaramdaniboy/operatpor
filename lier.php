<?php
$loop =10;
$num =1;
for ($i=0; $i <= $loop ; $i++) { 
    if ($i ==1) {
        echo "aku data ke -" .$num++. "dan mendaptkan mendali emas <br>";
    }elseif ($i ==2) {
        echo "aku data ke -" .$num++. "dan mendaptkan mendali perak <br>";
    }elseif ($i ==3) {
        echo "aku data ke -" .$num++. "dan mendaptkan mendali perunggu <br>";
    }elseif ($i >=4 && $i<=6) {
        echo "aku data ke -" .$num++. "dan mendaptkan mendali tas laptop <br>";
    }elseif ($i >=7 && $i<=9) {
        echo "aku data ke -" .$num++. "dan mendaptkan mendali tas karung <br>";
    }elseif ($i >= 10) {
        echo "aku data ke -" .$num++. "dan tidak mendaptkan apa apa  <br>";
    }
}

?>