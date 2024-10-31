

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
					<h4>Edit Brand</h4>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="../index.html">Home</a></li>
						<li class="breadcrumb-item active">Forms</li>
					</ul>
				</div>				
			</header>

			<div class="col-sm-6">
			<div class="row">
				<div class="col-12">

				</div>

				
			
			</div><!-- row -->
			</div>
		<?php 
		 $idbrand = $_GET ['id_brand'];
		 $queryEdit=mysqli_query ($koneksi, " SELECT * FROM tbl_brand WHERE id_brand='$idbrand'");
		 
		
		 $hasilquery=mysqli_fetch_array($queryEdit);
		 $id_brand =$hasilquery['id_brand'];
		 $nama_brand=$hasilquery['nama_brand'];
		?>
		
		

				<div class="col-12">
					<section class="content-header">
						<p>Nama Brand</p>
						<form class ="from-horizontal " action="../admin/module/brand/aksi_edit.php" method="POST">
						<input type="hidden" name = "id_brand" value ="<?php echo $id_brand; ?>">
					<input type = "text" id="namabrand" name= "nama_brand" placeholder = "Namabrand" class="form form--focus-blue mt-0" value=" <?= $nama_brand; ?>">
					<br>
					<br>
					<div class="box-footer">
		<button type="submit" class="btn btn-primary pull-right">Simpan</button>
	</div>
					
					</section>
</form>
				</div>
			</div><!-- row -->
			</div>
		</div><!-- row -->
	</main>

