<?php
if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
echo "Nama  : $nama";
}
if (isset($_POST['Input'])) {
$nis = $_POST['nis'];
echo "Nis   : $nis<br>";
}

if (isset($_POST['Input'])) {
$saran = nl2br($_POST['saran']);
echo "Alamat: " . $saran." <br>";
}

if (isset($_POST['Input'])) {
$nama = $_POST['kelamin'];
echo "Jenis Kelamin  : $nama<br>";
}

if (isset($_POST['Input'])) {
        $film = $_POST['agama'];
        echo "Agama :" . $film ." <br> ";
    }
if (isset($_POST['Input'])) {
$nama = $_POST['asal'];
echo "Asal Sekolah  : $nama<br>";
}
if (isset($_POST['Input'])) {
$nama = $_POST['ortu'];
echo "Orang Tua Wali  : $nama<br>";
}    
if (isset($_POST['Input'])) {
    echo "Mata Pelajaran Yang Disukai : ";
    if (isset($_POST['mapel1'])) {
        echo " - " . $_POST['mapel1'] . "";
    }
    if (isset($_POST['mapel2'])) {
        echo " - " . $_POST['mapel2'] . "<br>";
    }
    if (isset($_POST['mapel3'])) {
        echo " - " . $_POST['mapel3'] . "<br>";
    }
    if (isset($_POST['mapel4'])) {
        echo " - " . $_POST['mapel4'] . "<br>";
    }
    if (isset($_POST['mapel5'])) {
        echo " - " . $_POST['mapel5'] . "<br>";
    }
}

if (isset($_POST['Input'])) {
$nilai = $_POST['ijasah'];
echo " Total Nilai Ijasah SMK  : $nilai<br>";
}

if (isset($_POST['Input'])) {
$nama = $_POST['email'];
echo "Email  : $nama<br>";
}
if ($nilai > 23) {
   echo"anda lulus";
}else {
    echo"tidak lulus";
}


?>
