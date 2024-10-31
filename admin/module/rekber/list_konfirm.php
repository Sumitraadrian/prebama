

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
					<h4>Konfirmasi Rekber</h4>
					<ul class="breadcrumb">
				
					</ul>
				</div>				
			</header>

			<div class="col-sm-6">
			<div class="row">
				<div class="col-12">
				<!-- main__box -->
				</div>

		
			
			</div><!-- row -->
			</div>

		
		

				<div class="col-12">
					<section class="content-header">
				
					<input type="hidden" name = "status" value ="Disetujui">
					<table class= "table table-hover">
					<thead class="thead-dark">
					<th  width="150px">Id konfirmasi</th>
						<th width="150px">Tanggal</th>
						<th>Handphone</th>
						<th width="150px">Penjual</th>
						<th width="150px">Pembeli</th>
						<th>Status</th>
				

       				<th style="width:200px">Aksi</th>
					   <?php
    include "../lib/config.php";
    include "../lib/koneksi.php";
    $kuerikonfirm=mysqli_query ($koneksi, "select * from tbl_konfirmasi");
	while ($kon=mysqli_fetch_array($kuerikonfirm)
	
	
	
	)
	
	{
	
		//penjual
		$id_produk =$kon['id_produk'];
		$queryp=mysqli_query ($koneksi, " SELECT * FROM tbl_produk WHERE id_produk='$id_produk'");
		$bar=mysqli_fetch_array($queryp);
		$id_userp = $bar['id_user'];

			//mnama penjual
			$querypuser=mysqli_query ($koneksi, " SELECT * FROM tbl_user WHERE id_user='$id_userp'");
			$userp=mysqli_fetch_array($querypuser);

		//pembeli
		$id_userb =$kon['id_user'];
		$querybuser=mysqli_query ($koneksi, " SELECT * FROM tbl_user WHERE id_user='$id_userb'");
		$userb=mysqli_fetch_array($querybuser);

		$id_kon = $kon['id_konfirmasi'];
        $kueritran=mysqli_query ($koneksi, "select * from tbl_transaksi WHERE id_konfirmasi = '$id_kon'");
        $tran=mysqli_fetch_array($kueritran);

	

		?>

					<tr>
					<td><?php echo $kon['id_konfirmasi']; ?></td>
						<td><?php echo $kon['date']; ?></td>
						<td><?php echo $bar['nama_p']; ?></td>
						<td><?php echo $userp['nama_lengkap']; ?></td>
						<td><?php echo $userb['nama_lengkap']; ?></td>
						<td><?php echo $kon['status_konfirmasi']; ?></td>


						<?php

include "../lib/koneksi.php";

if(empty($tran['status']) ) {     ?>    
 
 <td>
						<form class ="from-horizontal " action="../admin/module/rekber/aksi_acc.php" method="POST">
						<input type="hidden" name="id_konfirmasi" value="<?php echo $kon ['id_konfirmasi'];?>">
						<input type="hidden" name="id_user" value="<?php echo $userb['id_user'];?>">
						<input type="hidden" name="id_produk" value="<?php echo $bar['id_produk'];?>">

							<div class ="btn-group">

						<button type="submit" class="btn btn-primary pull-right">Setujui</button>					
						</div>
	</form>

</div>
</td>
<?php }

else {   ?>     
    <td >

			
<div class ="btn-group">

                
        	<a  href ="adminweb.php?module=pembayaran"> <button class="btn btn-success">Dalam Proses
												</button>	        
                
                    
</div>
</td>

<?php } ?>

				
				

						
					</tr>
					<?php 
					}?>
				</thread>
					</table>
					
					<div class = "box-footer">
						<br>

	
					</section><!-- main__box -->
		
				</div>
			</div><!-- row -->
			</div>
		</div><!-- row -->
	</main>


	
<!-- <a href ="<?php echo $admin_url; ?>module/konfirmasi_rekber/aksi_acc.php?id_konfirmasi=<?php echo $kon ['id_konfirmasi'];?>&id_user=<?php echo $userb['id_user'];?>&id_produk=<?php echo $bar['id_produk'];?>"
												onClick="return confirm ('Anda yakin ingin menghapus data ini')"><button class="btn btn-danger">Setujui
												</button>				 -->


	<?php

include "../lib/koneksi.php";

if(empty($tran['status']) ) {     ?>    
  <td>


						<div class ="btn-group">
						<button type="submit" class="btn btn-primary pull-right">Setujui</button>					
						</div>
						</td>

<?php }

else {   ?>     
    <td >

			
<div class ="btn-group">

                
        	<a  href ="<?php echo $admin_url; ?>adminweb.php?module=konfirmasi_pembayaran"> <button class="btn btn-success">Dalam Proses
												</button>	        
                
                    
</div>
</td>

<?php } ?>

						
						















	
						<!-- <button type="submit" class="btn btn-primary pull-right">Setujui</button>
	
											
						</div>
						</td> -->
