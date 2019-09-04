<?php
$arraynilai = array 
("ani" => 80, "otim" =>90, 
"sri" => 75 , "budi" => 85 );

echo "<b> array sebelum pengurutan </b>";
echo "<pre>";
print_r ($arraynilai);
echo"</pre>";

asort($arraynilai);
reset($arraynilai);
echo "<b> array setelah pengurutan dengan asort()</b> ";
echo "<pre>";
print_r ($arraynilai);
echo "/pre>";

arsort($arraynilai);
reset($arraynilai);
echo "<b>Array setelah pengurutan dengan arsort()</b>";
echo "<pre>";
print_r($arraynilai);
echo "</pre>";

?>