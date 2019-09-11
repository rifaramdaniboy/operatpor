<?php
if (isset($_POST['Pilih'])) {
    echo "Band Favorit Anda Adalah : <br>";
    if (isset($_POST['bp'])) {
        echo " + " . $_POST['bp'] . "<br>";
    }
    if (isset($_POST['kp'])) {
        echo " + " . $_POST['kp'] . "<br>";
    }
    if (isset($_POST[''])) {
        echo " + " . $_POST['band03'] . "<br>";
    }
    if (isset($_POST['band04'])) {
        echo " + " . $_POST['band04'] . "<br>";
    }
}
?>