

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
					<h4>Produk User </h4>
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
					<table class="table table-hover ">
					<thead class="thead-dark">
						<th>Nama Handphone</th>
						<th>Tanggal Posting</th>
						<th >Harga</th>
       				<th style="width: 100px">Aksi</th>
										<?php
						include "../lib/config.php";
						include "../lib/koneksi.php";
					

						$kuerikabupaten=mysqli_query ($koneksi, "select * from tbl_produk ");
						while ($kab=mysqli_fetch_array($kuerikabupaten)){
							?>
					<tr>
						<td><?php echo $kab['nama_p']; ?></td>
						<td><?php echo $kab['nama_p']; ?></td>
						
						<td><?php echo $kab['harga']; ?></td>

						<td>
						
						<div class ="btn-group">
						<a  href ="<?php echo $admin_url; ?>adminweb.php?module=detail_produk&id_produk=<?php echo $kab ['id_produk']; ?>"> <button class="btn btn-secondary">Detail   
												</button></a> &nbsp;
												<a href ="<?php echo $admin_url; ?>module/kabupaten/aksi_hapus.php?id_kabupaten=<?php echo $kab ['id_kabupaten']; ?>"
												onClick="return confirm ('Anda yakin ingin menghapus data ini')"><button class="btn btn-danger">Hapus
												</button>
											</a>
												 <!-- class="btn btn-danger"><i class='fa fa-power-off'></i></button></a> -->
							
						</div>
						</td>
					</tr>
					<?php 
					}?>
					</thead>
					</table>

					
					
	

	
					</section><!-- main__box -->
				</div>
			</div><!-- row -->
			</div>
		</div><!-- row -->
	</main>

