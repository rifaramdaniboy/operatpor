<?php
if (isset($_POST['impan'])) {
    $bil =$_POST['bil'];
    $pangkat =$_POST['pangkat'];
    for ($i=0; $i < count($bil) ; $i++) { 
        for ($a=1; $a <= $pangkat[$i] ; $a++) { 
           echo $bil[$i];
           if ($a < $pangkat[$i]) {
               echo "x";
           }
        }
        $hasil = pow($bil[$i],$pangkat[$i]);
        echo " = " . $hasil . " -> ";
        if ($hasil % 2 == 1) {
            echo "bilangan Ganjil <br> ";
        }else {
            echo "Bilangan Genap <br> ";
        }
        echo "<br>";

    }

}
?>