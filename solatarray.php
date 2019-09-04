<?php
$array = array('saya <br>', 10);
$aso =[
    [
        'judul'   => '<h2>judul :Belajar PHP & MYSQL untuk pemula ',
        'penulis' => '<h4>penulis :admin smk' 
    ],
    [
        'judul'   => '<h2>judul :Tutorial PHP dari Nol hingga Mahir  ',
        'penulis' => '<h4>penulis :admin smk'
    ],
    [
        'judul'   => '<h2>judul : Membuat Aplikasi Web dengan PHP ',
        'penulis' => '<h4>penulis :admin smk'
    ]

    ];
    foreach ($aso as $value) {
        echo $value["judul"]. "<br>";
        echo $value["penulis"]. "<br>";
        echo "<hr>";
    }
    
?>