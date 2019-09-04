<?php
$a =[
    [
        'Nama' => 'Ujang', 'kelas' => 'XI Rpl 2', 'alamat' => 'Baleendah'
    ],
    [
        'Nama' => 'Mahmud', 'kelas' => 'XI Rpl 1', 'alamat' => 'Kopo'
    ],
    [
       'Nama' => 'Ucok', 'kelas' => 'XI Rpl 3', 'alamat' => 'Cimahi'
    ]

    ];

echo "<pre>";
print_r ($a);
echo "</pre>";

foreach ($a as $b => $c) {
    echo "$c[Nama] , $c[kelas] , $c[alamat] ";
    echo "<hr>";
}
?>
