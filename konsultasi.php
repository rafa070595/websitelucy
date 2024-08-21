<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<body>	
<?php if(!empty($_SESSION['namapas']) && ($_SESSION['passpas'])){
?>
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
			<div>
            	
                
                <div style="margin-top:10px">
                    <form name="form1" method="post" action="">
                        <table class="table table-condensed table-hover">
						<h5>Kriteria apa yang anda miliki?</h5>
                            <?php 
                                $sg = mysqli_query($kon,"select * from gejala");
                                while($dg = mysqli_fetch_array($sg)){
                                    echo
                                    "<tr>
                                        <td class='text-center' width='2%'><input type='checkbox' name='item[]' id_gejala='item[]' value='$dg[id_gejala]'></td>
                                        <td class='text-left text-error' width='98%'>$dg[nm_gejala]</td>		
                                    </tr>";
                                }
                            ?>
                        </table>
                        <div>
                            <input type="submit" class="btn btn-success" name="periksa" id="periksa" value="Periksa Konsultasi"> 
                        </div>
                            
                        <?php
							if(isset($_POST['periksa'])){
								$jumlah = count($_POST["item"]);
								
								if($jumlah<4){
									echo "<script language=javascript>
											alert('Minimal Inputkan 4 Gejala. Mohon Diulangi Kembali');
											window.location='?p=konsultasi'</script>";
								}else if($jumlah>=4){
								if($jumlah>9){
									echo "<script language=javascript>
											alert('Maksimal Inputkan 9 Gejala. Mohon Diulangi Kembali');
											window.location='?p=konsultasi'</script>";
								}else if($jumlah<=9){
								$sk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
								$dk = mysqli_fetch_array($sk);
								$k=$dk['konsultasi'];
								$konsultasi=$k+1;
								$id_user=$_SESSION['id_user'];
								
									for($i=0; $i < $jumlah; $i++){
										$gejala = $_POST["item"][$i];
										
										$sb = mysqli_query($kon,"select * from gejala where id_gejala=$gejala");
										$rb = mysqli_fetch_array($sb);
										$bobot = $rb['bobot'];
										
										$q=mysqli_query($kon,"insert into hasil_konsultasi(id_user, konsultasi, id_gejala, bobot, waktu) value ('$id_user', $konsultasi, '$gejala', '$bobot', NOW())") or die(mysqli_error());
										
										if ($q){
											$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
											$r = mysqli_fetch_array($nk);
											echo "<script language=javascript>
													alert('Lihat Hasil');
													window.location='?p=hasil&id=$id_user&konsultasi=$r[konsultasi]';
													</script>";
										}
										else{
											echo "Konsultasi Gagal";
											echo "Silahkan <a href = '?p=konsultasi'>Ulangi Disini</a>";
										}
									}                            
								}
							}
							}
                        ?>
                    </form>
				</div>
			</div>
		</div>


<br><br><br><br>
<?php }else{
		echo "<script language='javascript'>
		alert('Sebelum melakukan Konsultasi, silahkan login terlebih dahulu');
		window.location=('?p=login')</script>";
} ?>

</body>
</html>