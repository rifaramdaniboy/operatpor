<html>
<head><title>Array</title></head>
<body>
<center>

</center>
<fieldset>
<legend>Form Formulir </legend>
<FORM ACTION="" METHOD="GET">
<label for="">Masukan Jumlah</label>
<input type="number" min="1"name="jml" require>
<br>
<br>
<input type="submit" name="Simpan" value="simpan">
<hr>
</form>
<form action="formformulir.php" method="POST">
<?php
if (isset($_GET['Simpan'])) {
    $jml = $_GET['jml'];
for ($i=0; $i < $jml ; $i++) { 
    echo'Masukan Bilangan : <input type="number" name="bil" require>
    Masukan Bilangan Pangkat :<input type="number" name="pangkat"><br><br>';
}     
echo'<input type="submit" name="impan" value="simpan"> 
<input type="reset" name="reset" value="reset">';
}
?>

</fieldset>
</FORM>
</body>
</html>
