

<?php

include "../lib/koneksi.php";


$id_user = $_GET ['id_user'];



//Pembeli
$queryuser = mysqli_query ($koneksi, "select * from tbl_user WHERE id_user = '$id_user'");
  $hasilQuery = mysqli_fetch_array($queryuser);
  $id_user = $hasilQuery ['id_user'];
  $id_kabupaten = $hasilQuery ['id_kabupaten'];
  $level = $hasilQuery ['level'];
  $tglg = $hasilQuery ['tgl_gabung'];
  $nama_lengkap = $hasilQuery ['nama_lengkap'];
  $detail_alamat = $hasilQuery ['detail_alamat'];
  $foto = $hasilQuery ['fotop'];
  $username = $hasilQuery ['username'];
  $tlp = $hasilQuery ['notlp'];
  $detail_alamat = $hasilQuery ['detail_alamat'];
  $nama = $hasilQuery ['nama_lengkap'];
  $email = $hasilQuery ['email'];
  $password = $hasilQuery ['password'];
  $fotop = $hasilQuery ['fotop'];
  $querykab = mysqli_query ($koneksi, "select * from tbl_kabupaten WHERE id_kabupaten = '$id_kabupaten'");
  $hasilQuerykab = mysqli_fetch_array($querykab);
  $nama_kabupaten = $hasilQuerykab ['nama_kabupaten'];






?>
<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
				<h4>Detail User</h4>
			
					<ul class="breadcrumb">
				
					</ul>
				</div>				
			</header>

			<div class="col-sm-6">
			<div class="row">
				<div class="col-12">
		
				</div>

		
			
			</div><!-- row -->
			</div>

		
		

				<div class="col-12">
					<section class="content-header">
					<h6>Id user :  <?= $id_user; ?></h6>
					</section><!-- main__box -->
		
					<div class="col-12 py-3">
                            <table class="table table-borderless">
                            <form action="../admin/module/user_pembeli/aksi_edit.php" method="POST">
                            <input type="hidden" name = "id_user" value ="<?php echo $id_user; ?>">
                            <label><strong>Detail user</strong></label>
				<tr>
                    <td>Foto Profile  </td>
                    <td>:</td>
                    <td>     <img  src="../images/foto_profile/<?php echo $fotop?>" class="img-fluid " style="width:20%" size alt="10x10"></td>
                  </tr>
                  <tr>
                    <td width ="300px">Username  </td>
                    <td>:</td>
                    <td><?= $username; ?></td>
				  </tr>
				  <tr>
                    <td width ="300px">Nama lengkap  </td>
                    <td>:</td>
                    <td><?= $nama_lengkap; ?></td>
                  </tr>
                
                  <tr>
                    <td>Tanggal gabung  </td>
                    <td>:</td>
                    <td><?php echo $tglg ?></td>
				  </tr>
				  <tr>
                    <td>Kabupaten  </td>
                    <td>:</td>
                    <td><?php echo $nama_kabupaten ?></td>
				  </tr>
				  <tr>
                    <td>Detail alamat </td>
                    <td>:</td>
                    <td><?php echo $detail_alamat ?></td>
                  </tr>
                  <tr>
                  <td>Status user </td>
                    <td>:</td>
              		<td>

      <label><input type="radio" name="status" value="aktif" <?php if($hasilQuery['status_user']=='aktif') echo 'checked'?>>Aktif</label><br>
      <label><input type="radio" name="status" value="blokir" <?php if($hasilQuery['status_user']=='blokir') echo 'checked'?>>Blokir</label>
    </td>

	

    </tr>
  
                  
                 
                </table>
          <br>
		<button type="submit" class="btn btn-primary pull-left">Simpan</button>


          

					

					
                    </div>
                    </form>


				</div>
			</div><!-- row -->
			</div>
		</div><!-- row -->
	</main>

