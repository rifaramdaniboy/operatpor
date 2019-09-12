<html>
<head><title>Array</title></head>
<body>
<center>

</center>
<fieldset>
<legend>Form Array </legend>
<FORM ACTION="" METHOD="GET">
<label for="">Masukan Jumlah</label>
<input type="number" min="1"name="jml" require>
<br>
<br>
<input type="submit" name="Simpan" value="simpan">
<hr>
</form>
<form action="prosesarray.php" method="POST">
<?php
if (isset($_GET['Simpan'])) {
    $jml = $_GET['jml'];
for ($i=0; $i < $jml ; $i++) { 
    echo'Nama <input type="text" name="nama[]" require>
    Kelas :<input type="text" name="kelas[]"><br><br>';
}     
echo'<input type="submit" name="simpan" value="simpan"> 
<input type="reset" name="reset" value="reset">';
}
?>

</fieldset>
</FORM>
</body>
</html>
