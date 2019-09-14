<?php
if (isset($_POST['next'])) {
    $nm = $_POST['nm'];
    $alamat =$_POST['al'];
    $jl=$_POST['kelamin'];
    $tgl =$_POST['tanggal'];
    $jumlah = $_POST['jml'];
    echo "<hr>";

    echo "<center><h1>Stuktur Pembelian Buku</h1></center>";
    echo "<h3 align ='right' > " . date("d/m/y H:i:s ") . "</h3>";
    echo "Nama    :<b> $nm <br></b>";
    echo "Alamat  :<b> $alamat <br></b>";
    echo "Jenis Kelamin :<b> $jl <br></b>";
    echo "Tangal Pembelian   :<b> $tgl <br></b>";
    echo "Jumlah Buku    :<b> $jumlah <br></b>";
}
    echo "<hr>";
if (isset($_POST['next'])) {
    $jdlbk = $_POST['jdl'];
    $kdbk =$_POST['kd'];
    $pengarang=$_POST['peng'];
    $jnbk=$_POST['kartun'];
    $hrgbk =$_POST['hrg'];

    echo "Judul Buku : $jdlbk <br>";
    echo "Kode Buku  : $kdbk <br>";
    echo "Pengarang Buku  : $pengarang <br>";
    echo "Jenis Buku  : $jnbk <br>";
    echo "Harga Buku  : $hrgbk <br>";
}

?>

