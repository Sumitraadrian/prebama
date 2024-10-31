

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
					<h4>Detail Produk </h4>
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

		
			<?php
						include "../lib/config.php";
						include "../lib/koneksi.php";
					
						$id_produk = $_GET['id_produk'];
						$kuerikabupaten=mysqli_query ($koneksi, "select * from tbl_produk where id_produk = '$id_produk'  ");
						$kab=mysqli_fetch_array($kuerikabupaten);
						$id_user = $kab['id_user'];
						$kueriuser=mysqli_query ($koneksi, "select * from tbl_user where id_user = '$id_user'  ");
						$user=mysqli_fetch_array($kueriuser);
						$id_u = $user['id_user'];
						$id_k = $user['id_kabupaten'];

						$kuerikabupaten=mysqli_query ($koneksi, "select * from tbl_kabupaten where id_kabupaten = '$id_k'  ");
						$k=mysqli_fetch_array($kuerikabupaten);
				
						

							?>

				<div class="col-12">
					<table>
						<tr>
							<td><b>Nama Handphone </b>  </td>
							<td> :</td>
							<td><?= $kab ['nama_p']; ?></td>
						</tr>
						<tr>
							<td><b>User Penjual Handphone </b>   </td>
							<td> :</td>
							<td><?= $user ['nama_lengkap']; ?></td>
						</tr>
						<tr>
							<td><b>Lokasi Kabupaten </b>   </td>
							<td> :</td>
							<td><?= $k ['nama_kabupaten']; ?></td>
						</tr>
					</table>
		
				<br>
				

				<h6><b>Detail gambar</b> :</h6>
					<section class="content-header">
					<table class= "table">
						<th>Gambar 1</th>
						<th>Gambar 2</th>
						<th>Gambar 2</th>
					
       				
				
					<tr>
					<td><img  src="../images/produk/<?php echo $kab['gambar1']?>" class="img-fluid " style="width:100%" size alt="100x100"></td>
						<td><img  src="../images/produk/<?php echo $kab['gambar2']?>" class="img-fluid " style="width:100%" size alt="100x100"></td>
						
						<td><img  src="../images/produk/<?php echo $kab['gambar3']?>" class="img-fluid " style="width:100%" size alt="100x100"></td>

			
					</tr>
				
				
					</table>
					<br>
					<h6><b>Spesifikasi</b></h6>
					<table>
						<tr>
							<td>layar  </td>
							<td> :</td>
							<td><?= $kab ['layar']; ?></td>
						</tr>
						<tr>
							<td>cpu    </td>
							<td> :</td>
							<td><?= $kab ['cpu']; ?></td>
						</tr>
						<tr>
							<td>kamera    </td>
							<td> :</td>
							<td><?= $kab ['kamera']; ?></td>
						</tr>
						<tr>
							<td>battrei    </td>
							<td> :</td>
							<td><?= $kab ['battrey']; ?></td>
						</tr>
				
					</table>
					<br>
					<table>
						<tr>
							<td><b>Lama Pemakaian<b>  </td>
							<td> :</td>
							<td><?= $kab ['lama_pemakaian']; ?></td>
						</tr>
					

					</table>
					<br>
					<table>
				
						<tr>
							<td><b>Detail Produk </b> </td>
							<td> :</td>
							<td><?= $kab ['detail']; ?></td>
						</tr>

					</table>


				

					
					
	

	
					</section><!-- main__box -->
				</div>
			</div><!-- row -->
			</div>
		</div><!-- row -->
	</main>

