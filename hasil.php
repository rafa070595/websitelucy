<?php
	session_start();
	$id = $_GET['id'];
	$konsultasi = $_GET['konsultasi'];			
?>
<!DOCTYPE html>
<html lang="en">


<body>	


        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
			<div>
                
          
                    <form name="form1" method="post" action="">
                    
                   
                        
						<?php
                        //PROSES PENYAKIT P001
                        $s1 = mysqli_query($kon,"select * from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P001%') AND konsultasi=$konsultasi");
                        $r1 = mysqli_num_rows($s1);
                        
                        $ssum1 = mysqli_query($kon,"select sum(if(a.konsultasi=$konsultasi, a.bobot,0)) as j1
                                                from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P001%')")
                                                or die(mysqli_error());
                        $dsum1 = mysqli_fetch_array($ssum1);
                        $cek1=$dsum1['j1'];
						$proses1 = $dsum1['j1']/33;
						$proses1_ok = number_format($proses1, 2, '.', '');
					$peroa1 = $proses1_ok*100;
                        //echo"$cek1";
                        //PROSES PENYAKIT P002
                        $s2 = mysqli_query($kon,"select * from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P002%') AND konsultasi=$konsultasi");
                        $r2 = mysqli_num_rows($s2);
                        
                        $ssum2 = mysqli_query($kon,"select sum(if(a.konsultasi=$konsultasi, a.bobot,0)) as j2
                                                from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P002%')")
                                                or die(mysql_error());
                        $dsum2 = mysqli_fetch_array($ssum2);
						$cek2=$dsum2['j2'];
                        $proses2 = $dsum2['j2']/32;
						$proses2_ok = number_format($proses2, 2, '.', '');
					$peroa2 = $proses2_ok*100;
                        //echo"$cek2";
                        //PROSES PENYAKIT P003
                        $s3 = mysqli_query($kon,"select * from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P003%') AND konsultasi=$konsultasi");
                        $r3 = mysqli_num_rows($s3);
                        
                        $ssum3 = mysqli_query($kon,"select sum(if(a.konsultasi=$konsultasi, a.bobot,0)) as j3
                                                from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P003%')")
                                                or die(mysqli_error());
                        $dsum3 = mysqli_fetch_array($ssum3);
						$cek3=$dsum3['j3'];
                        $proses3 = $dsum3['j3']/25;
						$proses3_ok = number_format($proses3, 2, '.', '');
					$peroa3 = $proses3_ok*100;
                        //echo"$cek3";
                        //PROSES PENYAKIT P004
                        $s4 = mysqli_query($kon,"select * from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P004%') AND konsultasi=$konsultasi");
                        $r4 = mysqli_num_rows($s4);
                        
                        $ssum4 = mysqli_query($kon,"select sum(if(a.konsultasi=$konsultasi, a.bobot,0)) as j4
                                                from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P004%')")
                                                or die(mysqli_error());
                        $dsum4 = mysqli_fetch_array($ssum4);
						$cek4=$dsum4['j4'];
                        $proses4 = $dsum4['j4']/15;
						$proses4_ok = number_format($proses4, 2, '.', '');
					$peroa4 = $proses4_ok*100;
                       // echo"$cek4";
                        //PROSES PENYAKIT P005
                        $s5 = mysqli_query($kon,"select * from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P005%') AND konsultasi=$konsultasi");
                        $r5 = mysqli_num_rows($s5);
                        
                        $ssum5 = mysqli_query($kon,"select sum(if(a.konsultasi=$konsultasi, a.bobot,0)) as j5
                                                from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P005%')")
                                                or die(mysqli_error());
                        $dsum5 = mysqli_fetch_array($ssum5);
						$cek5=$dsum5['j5'];
                        $proses5 = $dsum5['j5']/23;
                        
                        $proses5_ok = number_format($proses5, 2, '.', '');
					$peroa5 = $proses5_ok*100;
                        //echo"$cek5";
 //PROSES PENYAKIT P006
                        $s6 = mysqli_query($kon,"select * from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P006%') AND konsultasi=$konsultasi");
                        $r6 = mysqli_num_rows($s6);
                        
                        $ssum6 = mysqli_query($kon,"select sum(if(a.konsultasi=$konsultasi, a.bobot,0)) as j6
                                                from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P006%')")
                                                or die(mysqli_error());
                        $dsum6 = mysqli_fetch_array($ssum6);
                        $cek6=$dsum6['j6'];
						$proses6 = $dsum6['j6']/23;
						$proses6_ok = number_format($proses6, 2, '.', '');
					$peroa6 = $proses6_ok*100;
                        //echo"$cek6";
 //PROSES PENYAKIT P007
                        $s7 = mysqli_query($kon,"select * from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P007%') AND konsultasi=$konsultasi");
                        $r7 = mysqli_num_rows($s7);
                        
                        $ssum7 = mysqli_query($kon,"select sum(if(a.konsultasi=$konsultasi, a.bobot,0)) as j7
                                                from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P007%')")
                                                or die(mysqli_error());
                        $dsum7 = mysqli_fetch_array($ssum7);
                        $cek7=$dsum7['j7'];
						$proses7 = $dsum7['j7']/32;
						$proses7_ok = number_format($proses7, 2, '.', '');
					$peroa7 = $proses7_ok*100;
                        //echo"$cek7";
						
                        
                        //MEMBANDINGKAN NILAI SIMILARITY DAN MENGAMBIL NILAI YANG PALING TINGGI
                        $MAX = max($proses1, $proses2, $proses3, $proses4, $proses5, $proses6, $proses7);
                        
                        //MENAMPILKAN HASIL AKHIR
                        if($MAX==$proses1){
                            $sp = mysqli_query($kon,"select * from penyakit where kd_penyakit LIKE 'P001%'") or die(mysqli_error());
                            $dp = mysqli_fetch_array($sp);
                            $spas =  mysqli_query($kon,"select * from pasien where id_user='$id'") or die(mysqli_error());
                            $dpas = mysqli_fetch_array($spas);
							$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
							$r = mysqli_fetch_array($nk);
							
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama Siswa: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
							$h = mysqli_query($kon, "select * from hasil_konsultasi where konsultasi='$konsultasi'");
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Kriteria yang dipilih :</font></div>";
							while($rh=mysqli_fetch_array($h)){
								$sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
								$rg = mysqli_fetch_array($sg);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
							}
                            
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Anda Terdeteksi <b ><u>$dp[nm_penyakit]</u></b></font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Saran :</b><br/>$dp[solusi]</font></div>";
							echo "<br><a href='cetak.php?id=$id&konsultasi=$konsultasi' class='btn btn-success btn-lg' >
									<span class='glyphicon glyphicon-print'></span> Cetak 
							</a>";
                            $ket = mysqli_query($kon,"insert into keterangan (id_konsultasi, nama, tgl_konsultasi, nilai, kd_penyakit) values ('$konsultasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[kd_penyakit]')");
                        }
                        else if($MAX==$proses2){
                            $sp = mysqli_query($kon,"select * from penyakit where kd_penyakit LIKE 'P002%'") or die(mysqli_error());
                            $dp = mysqli_fetch_array($sp);
                            $spas =  mysqli_query("select * from pasien where id_user='$id'") or die(mysqli_error());
                            $dpas = mysqli_fetch_array($spas);
							$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
							$r = mysqli_fetch_array($nk);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama Siswa: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
							$h = mysqli_query($kon, "select * from hasil_konsultasi where konsultasi='$konsultasi'");
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Kriteria yang dipilih :</font></div>";
							while($rh=mysqli_fetch_array($h)){
								$sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
								$rg = mysqli_fetch_array($sg);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
							}
							
                            echo "<div  style='margin-top:10px;'><font face='Times New Roman, cursive'>Anda Memiliki Bakat <b ><u>$dp[nm_penyakit]</u></b></font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Saran  :</b><br/>$dp[solusi]</font></div>";
							echo "<br><a href='cetak.php?id=$id&konsultasi=$konsultasi' class='btn btn-success btn-lg' >
									<span class='glyphicon glyphicon-print'></span> Cetak 
							</a>";
                            $ket = mysqli_query($kon,"insert into keterangan (id_konsultasi, nama, tgl_konsultasi, nilai, kd_penyakit) values ('$konsultasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[kd_penyakit]')");
                        }
                        else if($MAX==$proses3){
                            $sp = mysqli_query($kon,"select * from penyakit where kd_penyakit LIKE 'P003%'") or die(mysqli_error());
                            $dp = mysqli_fetch_array($sp);
                            $spas =  mysqli_query($kon,"select * from pasien where id_user='$id'") or die(mysqli_error());
                            $dpas = mysqli_fetch_array($spas);
							$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
							$r = mysqli_fetch_array($nk);
                            
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama Siswa: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
							$h = mysqli_query($kon, "select * from hasil_konsultasi where konsultasi='$konsultasi'");
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Kriteria yang dipilih :</font></div>";
							while($rh=mysqli_fetch_array($h)){
								$sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
								$rg = mysqli_fetch_array($sg);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
							}
							
                            echo "<div  style='margin-top:10px;'><font face='Times New Roman, cursive'>Anda Memiliki Bakat <b ><u>$dp[nm_penyakit]</u></b></font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Saran  :</b><br/>$dp[solusi]</font></div>";
							echo "<br><a href='cetak.php?id=$id&konsultasi=$konsultasi' class='btn btn-success btn-lg' >
									<span class='glyphicon glyphicon-print'></span> Cetak 
							</a>";
                            $ket = mysqli_query($kon,"insert into keterangan (id_konsultasi, nama, tgl_konsultasi, nilai, kd_penyakit) values ('$konsultasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[kd_penyakit]')");
                        }
                        else if($MAX==$proses4){
                            $sp = mysqli_query($kon,"select * from penyakit where kd_penyakit LIKE 'P004%'") or die(mysqli_error());
                            $dp = mysqli_fetch_array($sp);
                            $spas =  mysqli_query($kon,"select * from pasien where id_user='$id'") or die(mysqli_error());
                            $dpas = mysqli_fetch_array($spas);
							$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
							$r = mysqli_fetch_array($nk);
							
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama Siswa: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
							$h = mysqli_query($kon, "select * from hasil_konsultasi where konsultasi='$konsultasi'");
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Kriteria yang dipilih :</font></div>";
							while($rh=mysqli_fetch_array($h)){
								$sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
								$rg = mysqli_fetch_array($sg);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
							}
                            
                            
                            echo "<div  style='margin-top:10px;'><font face='Times New Roman, cursive'>Anda Memiliki Bakat  <b ><u>$dp[nm_penyakit]</u></b></font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Saran  :</b><br/>$dp[solusi]</font></div>";
							echo "<br><a href='cetak.php?id=$id&konsultasi=$konsultasi' class='btn btn-success btn-lg' >
									<span class='glyphicon glyphicon-print'></span> Cetak 
							</a>";
                            $ket = mysqli_query($kon,"insert into keterangan (id_konsultasi, nama, tgl_konsultasi, nilai, kd_penyakit) values ('$konsultasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[kd_penyakit]')");
                        }
                        else if($MAX==$proses5){
                            $sp = mysqli_query($kon,"select * from penyakit where kd_penyakit LIKE 'P005%'") or die(mysqli_error());
                            $dp = mysqli_fetch_array($sp);
                            $spas =  mysqli_query($kon,"select * from pasien where id_user='$id'") or die(mysqli_error());
                            $dpas = mysqli_fetch_array($spas);
							$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
							$r = mysqli_fetch_array($nk);
                            
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama siswa: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
							$h = mysqli_query($kon, "select * from hasil_konsultasi where konsultasi='$konsultasi'");
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'> kritria yang dipilih yang dipilih :</font></div>";
							while($rh=mysqli_fetch_array($h)){
								$sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
								$rg = mysqli_fetch_array($sg);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
							}
                            
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Anda memiliki bakat <b ><u>$dp[nm_penyakit]</u></b></font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Saran  :</b><br/>$dp[solusi]</font></div>";
							echo "<br><a href='cetak.php?id=$id&konsultasi=$konsultasi' class='btn btn-success btn-lg' >
									<span class='glyphicon glyphicon-print'></span> Cetak 
							</a>";
                            $ket = mysqli_query($kon,"insert into keterangan (id_konsultasi, nama, tgl_konsultasi, nilai, kd_penyakit) values ('$konsultasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[kd_penyakit]')");
 }
                        else if($MAX==$proses6){
                            $sp = mysqli_query($kon,"select * from penyakit where kd_penyakit LIKE 'P006%'") or die(mysqli_error());
                            $dp = mysqli_fetch_array($sp);
                            $spas =  mysqli_query($kon,"select * from pasien where id_user='$id'") or die(mysqli_error());
                            $dpas = mysqli_fetch_array($spas);
							$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
							$r = mysqli_fetch_array($nk);
                            
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama siswa: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
							$h = mysqli_query($kon, "select * from hasil_konsultasi where konsultasi='$konsultasi'");
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Kriteria yang dipilih :</font></div>";
							while($rh=mysqli_fetch_array($h)){
								$sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
								$rg = mysqli_fetch_array($sg);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
							}
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Anda memiliki bakat <b ><u>$dp[nm_penyakit]</u></b></font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Saran  :</b><br/>$dp[solusi]</font></div>";
							echo "<br><a href='cetak.php?id=$id&konsultasi=$konsultasi' class='btn btn-success btn-lg' >
									<span class='glyphicon glyphicon-print'></span> Cetak 
							</a>";
						
                            $ket = mysqli_query($kon,"insert into keterangan (id_konsultasi, nama, tgl_konsultasi, nilai, kd_penyakit) values ('$konsultasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[kd_penyakit]')");
                        }

                        else if($MAX==$proses7){
                            $sp = mysqli_query($kon,"select * from penyakit where kd_penyakit LIKE 'P007%'") or die(mysqli_error());
                            $dp = mysqli_fetch_array($sp);
                            $spas =  mysqli_query($kon,"select * from pasien where id_user='$id'") or die(mysqli_error());
                            $dpas = mysqli_fetch_array($spas);
							$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
							$r = mysqli_fetch_array($nk);
                            
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama siswa: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
							$h = mysqli_query($kon, "select * from hasil_konsultasi where konsultasi='$konsultasi'");
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>kriteria yang dipilih :</font></div>";
							while($rh=mysqli_fetch_array($h)){
								$sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
								$rg = mysqli_fetch_array($sg);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
							}
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Anda memiliki bakat  <b ><u>$dp[nm_penyakit]</u></b></font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Saran  :</b><br/>$dp[solusi]</font></div>";
							echo "<br><a href='cetak.php?id=$id&konsultasi=$konsultasi' class='btn btn-success btn-lg' >
									<span class='glyphicon glyphicon-print'></span> Cetak 
							</a>";
                            $ket = mysqli_query($kon,"insert into keterangan (id_konsultasi, nama, tgl_konsultasi, nilai, kd_penyakit) values ('$konsultasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[kd_penyakit]')");
                        
                        }
                    ?>
                    
                    </form>
				</div>
			
		</div>


<br><br><br><br>
S

</body>
</html>