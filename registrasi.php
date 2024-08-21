<?php
include"koneksi.php";
if(isset($_POST['simpan'])){
	$simpan=mysqli_query($kon,"insert into pasien values ('', '$_POST[username]','$_POST[password]','$_POST[nm_lengkap]', '$_POST[jns_kelamin]', '$_POST[alamat]', '$_POST[no_hp]', '$_POST[pekerjaan]')");
	
	if($simpan){
	echo"<script>
		
		window.location.href='index.php?p=login';
	</script>";
	}else{
	echo"<script>
		
		</script>";
	}
}
?>
<h2>Registrasi</h2>
<form action='' method="post">
<table>


	<tr>
    	<td>Username</td>
        <td><input name="username" type="text"/></td>
     </tr>
    <tr><td>Password</td><td><input name="password" type="password"/></td></tr>
    <tr><td>Nama Lengkap</td><td><input name="nm_lengkap" type="text"/></td></tr>
    <tr><td>Jenis Kelamin</td><td><select name="jns_kelamin" id="gender">
    								<option value="">Silahkan Dipilih</option>
                   					 <option value="L">Laki-Laki</option>
                  					  <option value="P">Perempuan</option>
     </select>
      </td></tr>
      <tr><td>Alamat</td><td><input name="alamat" type="text"/></td></tr>  
      <tr><td>Nomor Hp</td><td><input name="no_hp" type="text"/></td></tr>   
      <tr><td>Pekerjaan</td><td><input name="pekerjaan" type="text"/></td></tr>        
    
    <tr><td></td><td><input name="simpan" type="submit" value="Simpan"/></td></tr>
</table>
</form>
    