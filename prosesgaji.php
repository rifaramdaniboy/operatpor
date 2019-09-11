<?php
if (isset($_POST['Pilih'])) {
    $nama = $_POST['nama'];
    $nip =$_POST['nip'];
    $kela=$_POST['kelamin'];
    $alm =$_POST['alamat']; 
    $sts =$_POST['kartun'];
    $jaba=$_POST['jabatan'];
    $gl =$_POST['golongan'];

    echo "<center><h1>Penggajian Karyawan</h1></center>";
    echo "<h3 align ='right' > " . date("d/m/y H:i:s ") . "</h3>";
    echo "nama    :<b> $nama <br></b>";
    echo "nip     :<b> $nip <br></b>";
    echo "kelamin :<b> $kela <br></b>";
    echo "alamat  :<b> $alm <br></b>";
    echo "status  :<b> $sts<br></b>";
    echo "jabatan :<b> $jaba<br></b>";
    echo "potongan :";

    if ($gl == 'A1') {
        $gol =250000;
    }
    elseif ($gl == 'A2') {
        $gol =200000;
    }
    else {
        $gol=150000;
    }


    if ($sts == 'menikah') {
       $sta = 100000;
    }
    else {
        $sta = 50000;
    }
    
    if ($jaba == 'hrd') {
        $jbtn =5000000;
    }
    elseif ($jaba == 'manager') {
        $jbtn =4500000;
    }
    elseif ($jaba == 'staf') {
        $jbtn = 3000000;
    }
    elseif ($jaba == 'karyawan') {
        $jbtn = 2500000;
    }
    if (isset($_POST['bp'])) {
        echo "<b>" . $_POST ['bp']. "</b>";
        $potongan1 = 250000;
        $potongan =$potongan1;
    }
    if (isset($_POST['kp'])) {
        echo " <br> . <b>" . $_POST ['kp']. "</b>";
        $potongan2 = 150000;
        $potongan =$potongan2;
    }
    if (isset($_POST['jm'])) {
        echo " <br> . <b>" . $_POST ['jm']. "</b>";
        $potongan3 = 150000;
        $potongan =$potongan3 + $potongan2 +$potongan1;
    }
    echo "<br> golongan : <b> $gl </b> <br>";
    $gajikotor =($jbtn + $gol +$sta)-$potongan;
    echo "Gaji Kotor : <b> Rp. " . $gajikotor . "</b> <br>";
    $pajak =$gajikotor *2.5/100;
    $gajibersih =$gajikotor-$pajak;
    echo "pajak : <b> Rp. $pajak </b><br>";
    echo "Gaji Bersih : <b> $gajikotor-$pajak :Rp. $gajibersih </b><br>"; 
    echo "<hr>";
    echo "keterangan : <br>";
    echo "golongan :<b> $gl = Rp.$gol </b>";
    echo "<br>Status : <b> $sts = Rp.$sta </b>";
    echo "<br>Jabatan : <b> $jaba = Rp.$jbtn </b>";

    if (isset($_POST['bp'])) {
        echo "<br><b>Potongan : BPJS = Rp . $potongan1 </b>";
    }
    if (isset($_POST['kp'])) {
        echo "<b>, Koperasi  = Rp . $potongan2 </b>";
    }
    if (isset($_POST['jm'])) {
        echo "<b>, Jamsostek  = Rp . $potongan3 </b>";
    }
    echo "<br>";
    }
?>