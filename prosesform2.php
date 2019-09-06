<?php
if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
$mapel1 = $_POST['mapel1'];
$mapel2 = $_POST['mapel2'];
$ratarata =($mapel1*$mapel2)/2;
echo "nama      : <b>$nama</b><br>";
echo "mapel1     : <b>$mapel1</b> <br>";
echo "mapel2    : <b>$mapel2</b> <br>";
echo "ratarata      : <b>$ratarata</b> <br>";
if ($ratarata > 75) {
        echo "<h2> Lulus </h2>"; 
     }else {
        echo "<h2> Tidak lulus </h2>";
    }
}
?>