

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
					<h4>Brand Handphone</h4>
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
					<table class= "table table-hover">
					<thead class="thead-dark">
						<th>Nama Brand</th>
       				<th style="width: 110px">Aksi</th>
					   <?php
    include "../lib/config.php";
    include "../lib/koneksi.php";
    $kueribrand=mysqli_query ($koneksi, "select * from tbl_kategori");
    while ($brand=mysqli_fetch_array($kueribrand)){
		?>
					<tr>
						<td><?php echo $brand['nama_kategori']; ?></td>
						<td>

						<div class ="btn-group">
						<a  href ="<?php echo $admin_url; ?>adminweb.php?module=edit_brand&id_brand=<?php echo $brand ['id_brand']; ?>"> <button class="btn btn-secondary">Edit
												</button></a>&nbsp;
												<a href ="<?php echo $admin_url; ?>module/brand/aksi_hapus.php?id_brand=<?php echo $brand ['id_brand']; ?>"
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
					
					<div class = "box-footer">
						<br>
		<a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_brand">
		<button class="btn btn-primary">Tambah brand</button></a>
					</section><!-- main__box -->
				</div>
			</div><!-- row -->
			</div>
		</div><!-- row -->
	</main>

