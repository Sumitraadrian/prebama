

<?php

include "../lib/koneksi.php";


$id_user = 1;



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
				<h4>Akun admin</h4>
			
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
		
					</section><!-- main__box -->
		
				  <div class="row">
                         <div class="col-md-4 py-3 my-3 ">
                             <center> 
                         <?php
                          if ($foto == null) {
                            echo" <img id='imgView' src='https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png'  class='rounded-circle z-depth-5' width='70%' > ";
                           
                          } else {
                            echo "<img id='imgView' src='../../../images/foto_profile/$foto'  class='rounded-circle z-depth-5' width='70%' >";
                         
                          }
                         ?>
                            

                             <!-- <img src="no-image.png" id="imgView" class="rounded-circle z-depth-5" width='70%' >   -->
                            <!-- <img id='preview'class="rounded-circle z-depth-5" src='https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png' width='70%' class='border'> -->
                      </center>
                      <br>
                  <div class="col-md-11 mb-10 ">
                  <form action="../admin/module/admin/aksi_edit.php" enctype="multipart/form-data" method="post">
                    <label><strong>Upload Foto Profile</strong></label>
                      <div class="custom-file">
                      <input type="hidden" name="id_user" value="<?= $id_user; ?>">
                        <input type="file"  name="fotop">
                       
                    
                         
                        </div>  
                      </div>
                        </div>
                     
                            <div class="col-md-7">
                                <div class="control-group form-group">
                          
                                    <div class="controls">
                                        <label><strong>Username</strong></label>
                                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?= $username; ?>" >
                                        <p class="help-block"></p>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>Email</strong></label>
                                        <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $email; ?>">
                                        <p class="help-block"></p>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>Password</strong></label>
                                        <input type="text" class="form-control" name="password" placeholder="Password" value="<?= $password; ?>">
                                        <p class="help-block"></p>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                   
                                    <button type="button" class="btn btn-secondary">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                 </div>
                                
                                 
                                    </div>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
              
                </form>
            
          <br>



          

					

					
                    </div>
    


				</div>
			</div><!-- row -->
			</div>
		</div><!-- row -->
	</main>


