<?php
if (isset($_POST['Login'])) {
    $user = $_POST ['username'];
    $pass = $_POST ['password'];
     if ($user == "syahrul" && $pass =="boy") {
        echo "<h2> Login berhasil </h2>"; 
     }else {
        echo "<h2> Login gagal </h2>";
     }
}