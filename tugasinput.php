<html>
<head><title>Pengolahan Form</title></head>
<body>
<center><h2>Tugas</h2></center>
<FORM ACTION="prosesinput.php" METHOD="POST" NAME="input">
Nama          :<input type="text" name="nama"><br>
NIS           :<input type="text" name="nis"><br>
Alamat        :<textarea name="saran" cols="30"
rows="5"></textarea><br>
Jenis Kelamin : <input type="radio" name="kelamin" value="laki-laki" checked>
laki - laki
<input type="radio" name="kelamin" value="perempuan" checked>
perempuan<br>
Agama         : 
<select name="agama">
<option value="islam">Islam</option>
<option value="kristen">Kristen</option>
<option value="yahudi">Yahudi</option>
</select>
<br>
Asal Sekolah   : <input type="text" name="asal"><br>
Nama orang tua/wali   : <input type="text" name="ortu"><br>
mata pelajaran yang di sukai :
<input type="checkbox" name="mapel1" value="mtk"
checked> matematika 
<input type="checkbox" name="mapel2" value="ipa"> 
Ilmu pengetahuan alam
<input type="checkbox" name="mapel3" value="ips">
ilmu pengetahuan sosial
<input type="checkbox" name="mapel4" value="pai">
Agama
<input type="checkbox" name="mapel5" value="indo">
Indonesia<br>
Total Nilai Ijasah smk : <input type="number" name="ijasah"><br>
Email : <input type="EMAIL" name="email"><br>
<input type="submit" name="Input" value="tambah data"><br>

</FORM>
</body>
</html>
