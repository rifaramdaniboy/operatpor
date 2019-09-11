<html>
<head><title>Pilih Jurusan</title></head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
<h2>Masukan Bintang</h2>
Masukan Bilangan : <input type="number" name="bilangan"><br>
<input type="submit" name="masukan" value="Klik">
</FORM>
</body>
</html>

<?php
if (isset($_POST['masukan'])) {
    $bintang = $_POST['bilangan'];
    for ($a=0; $a < $bintang ; $a++) { 
       echo "*";

    } 
    echo "<br>";
    echo "Total Bintang = $bintang  <hr>  ";
}
?>
<?php
if (isset($_POST['masukan'])) {
    $bintang = $_POST['bilangan'];
    for ($a=0; $a <= $bintang ; $a++) {
        for ($b=0; $b < $a ; $b++) { 
            echo "*";
        } 
       echo "<br>";

    } 
    echo "<br>";
    echo "Total Bintang = $bintang  <hr>  ";
}
?>

<?php
if (isset($_POST['masukan'])) {
    $bintang = $_POST['bilangan'];

    $size = 5;
    for ($h=1; $h <= $bintang ; $h++) {
        for ($j=1; $j <= $bintang-$h ; $j++) { 
            echo "&nbsp;&nbsp;";
        } 
        for ($k=1; $k <= $h ; $k++) { 
            echo "*&nbsp;&nbsp;";
        }
        echo "<br />";

        }
        echo "<br>";
        echo "Total Bintang = $bintang <hr>";
    
}
?>

<?php
if (isset($_POST['masukan'])) {
    $bintang = $_POST['bilangan'];

    for ($i=1; $i <= $bintang ; $i++) {
        for ($j=1; $j <= $bintang-$h ; $j++) { 
            echo "&nbsp;&nbsp;";
        } 
        for ($k=1; $k <= $h ; $k++) { 
            echo "*&nbsp;&nbsp;";
        }
        echo "<br />";

        }
        echo "<br>";
        echo "Total Bintang = $bintang <hr>";
    
}

