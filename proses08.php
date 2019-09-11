<?php
    if (isset($_POST['Pilih'])) {
        $film = $_POST['kartun'];
        echo "film kartun Favorit anda adalah :
        <font color ='blue'> <b> $film </b> </font> ";
    }
?>