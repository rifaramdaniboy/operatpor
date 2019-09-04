<?php
$a = array ("ahmad", "19", "true", "3.19");
//menampilkan array satu satu
echo "array menggunakan Echo <br>";
echo $a[0] . "<br>";
echo $a[3] . "<br>";

echo"<br>";
echo "array menggunakan looping for<br>";
for ($i = 0; $i < count($a); $i++ ) { 
    echo "arrray - " . $a[$i] . "<br>";
}
echo"<br>"

?>
