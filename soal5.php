<?php
$a = array ("volvo", "22", "18");
echo "data nomor 0 <br> <li>";
echo $a[0] . "<br> <li> ";
echo $a[1] . "<br> <li>";
echo $a[2] . "<br>";

$c =array ("BMW","15","13");
echo "<br>";
echo "data nomor 1 <br>";
for ($i=0; $i < count($c) ; $i++) { 
    echo "<li> " . $c[$i] . "<br> ";    
}

$d =array ("saab","5","2");
echo "<br>";
echo "data nomor 2 <br>";
for ($i=0; $i < count($d) ; $i++) { 
    echo "<li>" . $d[$i] . "<br>";    
}

$b =array ("land Rover","17","15");
echo "<br>";
echo "data nomor 3 <br>";
for ($i=0; $i < count($b) ; $i++) { 
    echo "<li>" . $b[$i] . "<br>";    
}
?>
