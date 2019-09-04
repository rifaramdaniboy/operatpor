<?php
$array = array('saya <br>', 10);
$aso =[
    [
        'nama'  => 'Rifa Ramdani',
        'kelas' => 'Informatika'
    ],
    [
        'nama'  => 'abdul',
        'kelas' => 'Informatika 111'
    ]

    ];
foreach ($aso as $value) {
    echo $value["nama"]. "<br>";
    echo $value["kelas"]. "<br>";
}
echo '<hr>';
$countaso =count($aso);
for ($i=0; $i < $countaso; $i++) { 
  echo $aso[$i]["nama"] . "<br>";
  echo $aso[$i]["kelas"] . "<br>";
}
?>