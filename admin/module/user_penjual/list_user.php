

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
					<h4>List User Penjual</h4>
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
						<th>Nama User</th>
						<th>Tanggal Bergabung</th>
						<th>Status</th>
       				<th style="width: 210px">Aksi</th>
					   <?php
    include "../lib/config.php";
    include "../lib/koneksi.php";
    $kueribrand=mysqli_query ($koneksi, "select * from tbl_user WHERE level = 'penjual'");
    while ($brand=mysqli_fetch_array($kueribrand)){
		?>
					<tr>
						<td><?php echo $brand['nama_lengkap']; ?></td>
						<td><?php echo $brand['tgl_gabung']; ?></td>
						<td>
							
						
						
						
						
						
						
						<?php



if($brand['status_user'] == 'aktif') {     ?>    
		<p class="text-success">Aktif</p>

<?php }

elseif($brand['status_user'] == 'blokir' ) {   ?> 

<p class="text-danger">Blokir</p>

						<?php  } ?>  
					
					
					
					</td>
						<td>
						<div class ="btn-group">
						<a  href ="<?php echo $admin_url; ?>adminweb.php?module=edit_status&id_user=<?php echo $brand ['id_user']; ?>"> <button class="btn btn-secondary">Ubah Status
												</button></a>&nbsp;
										
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
		
					</section><!-- main__box -->
				</div>
			</div><!-- row -->
			</div>
		</div><!-- row -->
	</main>

