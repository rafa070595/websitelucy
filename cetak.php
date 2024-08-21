<?php
	session_start();
	include "koneksi.php";
	$id = $_GET['id'];
	$konsultasi = $_GET['konsultasi'];
	
	?>
<title>Cetak Hasil Konsultasi</title>

<body onLoad="javascript:window:print()">
<div id="header">
  <div align="center">
    <p>
    <h4>Hasil Konsultasi </h4>
    </p>
  </div>
</div>


  <table>
    <tr>
    <?php
    $sql = mysqli_query($kon,"select * from pasien where id_user='$_GET[id]'");
	$row=mysqli_fetch_array($sql);
	if(mysqli_num_rows($sql) > 0){
		$nama = $row['nm_lengkap'];
		$jk = $row['jns_kelamin'];
		$nohp = $row['no_hp'];
		echo "<td><b>Nama Siswa &nbsp;&nbsp;:</b> $nama </td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td><b>Jenis Kelamin &nbsp;&nbsp;:</b> $jk </td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td><b>No Hp &nbsp;&nbsp;:</b> $nohp </td>";
		}
		?>
    </tr>
  </table>

 <?php
	$s = mysqli_query($kon,"select * from keterangan,penyakit where keterangan.kd_penyakit=penyakit.kd_penyakit and id_konsultasi='$konsultasi'");
	while($data=mysqli_fetch_array($s)){
			$kd_penyakit=$data['kd_penyakit'];
			$nilai=$data['nilai']*100;
			$nilaiok=number_format($nilai, 2, '.', '');
			$nm_penyakit=$data['nm_penyakit'];
			$id_konsultasi=$data['id_konsultasi'];
			$ket_penyakit=$data['ket'];
			$solusi=$data['solusi'];
			
	}
	?>

 <table border="0">
    <tr>
      <td><b>Kode Ekstrakulikuler :</b></td>
      <td><?php echo "$kd_penyakit";?></td>
    </tr>
    <tr>
    	<td><b>Nama Siswa:</b></td>
        <td> <?php echo "$nm_penyakit";?></td>
    </tr>
	
	
	<tr>
      <td><b>Kriteria:</b> </td>
      <td>
			<?php
								$sh = mysqli_query($kon,"select * from hasil_konsultasi where konsultasi='$konsultasi' and id_user='$id'");
								
								while($dh = mysqli_fetch_array($sh)){
									$sg = mysqli_query($kon,"select * from gejala where id_gejala='$dh[id_gejala]'");
									$dg = mysqli_fetch_array($sg);
									echo "&raquo; $dg[nm_gejala]<br>";
								}
							?>
                            </td>
    </tr>
	<tr>
      <td><b>Keterangan  :</b></td><td></b><?php echo "$ket_penyakit";?></td>
    </tr>
	<tr>
      <td><b>Solusi </b></td>
      <td><?php echo "$solusi";?></td>  
    </tr>
    
  </table>
 
</form>
