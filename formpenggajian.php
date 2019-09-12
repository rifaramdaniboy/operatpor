<html>
<head><title>Gaji Kita Gaji Semuanya</title></head>
<body>
<FORM ACTION="prosesgaji.php" METHOD="POST" NAME="input">
<h2>Form Penggajian : </h2>
<table>
<tr>

<td> Nama </td> <td>:<input type="text" name="nama"><br></td></tr>
<td> Nip  </td> <td>:<input type="number" name="nip"><br></td>
</tr>

<td> Jenis Kelamin </td> <td>:<input type="radio" name="kelamin" value="laki laki" checked>
               Laki-Laki
              <input type="radio" name="kelamin" value="perempuan"> Perempuan<br></td></tr>
<td> Alamat :</td> <td> <textarea name="alamat" cols="40"
         rows="5"></textarea><br></td></tr>
<td>Status</td> <td>: <select name="kartun">
         <option value="menikah">Menikah</option>
         <option value="belum menikah">Belum menikah</option>
         </select>
         </td><br></tr>
<td>Jabatan</td> <td>:<select name="jabatan">
         <option value="hrd">HRD</option>
         <option value="manager">Manager</option>
         <option value="staf">Staff</option>
         <option value="karyawan">Karyawan</option>
         </select>
         </td><br></tr>
<td>Potongan</td><td>:<input type="checkbox" name="bp" value="bpjs"
         checked> BPJS
        <input type="checkbox" name="kp" value="koperasi"> 
         Koprasi
        <input type="checkbox" name="jm" value="jamsostek">
         Jamsostek</td><br></tr>
<td>Golongan</td><td>:<select name="golongan">
         <option value="a1">A1</option>
         <option value="a2">A2</option>
         <option value="a3">A3</option>
         </select>
         </td><br></tr>
<td><input type="submit" name="Pilih" value="Pilih"></td>
</tr>
</table>
</FORM>
</body>
</html>