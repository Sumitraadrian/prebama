


	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
				<h4>Cetak Transasi (Selesai) </h4>
					<ul class="breadcrumb">
				
					</ul>
				</div>				
			</header>

		  

		
		

				<div class="col-12">
					<section class="content-header">
					<!-- <form class ="from-horizontal " action="../admin/module/pembayaran/aksi_acc_pembayaran.php" method="POST"> -->
					<input type="hidden" name = "status" value ="Disetujui">
					<table class= "table table-hover " >
					<thead class="thead-dark">
						<th width="150px" >Id transaksi</th>
						<th width="150px">Tanggal</th>
		
						<th >Nama Penjual / Toko</th>
                        <th >Nama Pembeli</th>
                        <th >Nama Handphone</th>
                        <th >Harga Handphone</th>
          

	
						
			
			
				

       				<th colspan="2">Aksi</th>
					   <?php
    include "../lib/config.php";
    include "../lib/koneksi.php";
    $kuerikonfirm=mysqli_query ($koneksi, "select * from tbl_transaksi where status = 'selesai' ");
	while ($kon=mysqli_fetch_array($kuerikonfirm))

	{
		//penjual
		$id_produk =$kon['id_produk'];
		$queryp=mysqli_query ($koneksi, " SELECT * FROM tbl_produk WHERE id_produk='$id_produk'");
		$bar=mysqli_fetch_array($queryp);
		$id_userp = $bar['id_user'];
		$namap = $bar['id_user'];

			//mnama penjual
			$querypuser=mysqli_query ($koneksi, " SELECT * FROM tbl_user WHERE id_user='$id_userp'");
			$userp=mysqli_fetch_array($querypuser);

		//pembeli
		$id_userb =$kon['id_pembeli'];
		$querybuser=mysqli_query ($koneksi, " SELECT * FROM tbl_user WHERE id_user='$id_userb'");
		$userb=mysqli_fetch_array($querybuser);

	

		?>
		
					<tr>
					<td><?php echo $kon['id_transaksi']; ?></td>
						<td><?php echo $kon['tgl_tansaksi']; ?></td>
						<td><?php echo $userp['nama_lengkap']; ?></td>
                        <td width ="150"><?php echo $userb['nama_lengkap']; ?></td>
                        <td><?php echo $bar['nama_p']; ?></td>
						<td> <?php $format_angka = number_format($bar['harga'], "0", ".", ".");
                                              echo "Rp.".$format_angka;?></td>
				
						
				















				




					<td>
					
		
				


					<div class ="btn-group">

					<a  href ="<?php echo $admin_url; ?>adminweb.php?module=detail_pembayaran&id_transaksi=<?php echo $kon['id_transaksi']; ?>"> <button class="btn btn-secondary">Rincian
												</button></a>
										
										
					</div>
					</td>
					</tr>
					<?php 
					}?>
					</thead>
					</table>
				
                
                        
							<lebel>Cetak Laporan</lebel><br>
							<div class="col-sm-">
							<form action="module/cetak_transaksi/aksi_cetak.php" method="POST">
							<table>
								<tr>
								<td>Dari </td>
								<td></td>
									<td>	<input class="form-control"  type="text" name="dari" id="dari"  /></td>
									<td></td>
									<td>Sampai </td>
									<td>	<input class="form-control"  type="text" name="sampai" id="sampai"  /></td>
								</tr>
							
							</table>
							<br>
							<button type="submit" class="btn btn-danger" name="submit">Cetak Laporan Penjualan</button>
							</form>
							
				
                               
							</div>
							
              

					</section><!-- main__box -->
		
				</div>
			</div><!-- row -->
			</div>
		</div><!-- row -->
	</main>

