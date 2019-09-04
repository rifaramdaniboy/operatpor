<?php
$array = array('saya <br>', 10);
$aso =[
    [
        'barang' => 'barang  : Buku Tulis',
        'harga'  => 'harga   : 4000',
        'berat'  =>  'berat  : 100 gram',

    ]
    ];
    foreach ($aso as $value) {
        echo $value["barang"]. "<br>";
        echo $value["harga"]. "<br>";
        echo $value["berat"]. "<br>";
    }
?>