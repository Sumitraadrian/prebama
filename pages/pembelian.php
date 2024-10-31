<?php

include "lib/koneksi.php";


  $id_user = $_GET ['id_user'];
  $queryuser = mysqli_query ($koneksi, "select * from tbl_user WHERE id_user = '$id_user'");
  $hasilQuery = mysqli_fetch_array($queryuser);
  $id_user = $hasilQuery ['id_user'];
  $id_kabupaten = $hasilQuery ['id_kabupaten'];
  $level = $hasilQuery ['level'];

  $foto = $hasilQuery ['fotop'];
  $usernamee = $hasilQuery ['username'];
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
<div class="col-12">
                <!-- Main Content -->
                <main class="row">
                    <div class="col-12 bg-white py-3 my-3">
                        <div class="row">

                            <!-- Product Images -->
                            <div class=" py-1 my-1 col-lg-3 col-md-5 mb-3 ">
                                <div class="col-15 mb-3 ">
                                <img class="rounded-circle  mx-auto" width="100%" src="images/foto_profile/<?= $foto; ?>"
                                     data-holder-rendered="true">
                                </div>
                                <div class="col-12">  
                                
                                <?php

                            include "lib/koneksi.php";

                            if(empty($_SESSION['username']) and empty($_SESSION['password'])) {     ?>     

                            <?php }
                
                 elseif($_SESSION['username'] == $hasilQuery ['username'] ) {   ?>     

                 
                                     
<div>
                    <a class="btn btn-primary btn-lg btn-block" href="edit_profile.php?id_user= <?= $id_user; ?>" role="button"><b>Edit Profile</b></a>
                    <a class="btn btn-primary btn-lg btn-block" href="pembelian.php?id_user= <?= $id_user; ?>" role="button"><b>Pembelian</b></a>
                    <a class="btn btn-primary btn-lg btn-block" href="transaksi.php?id_user= <?= $id_user; ?>" role="button"><b>Transaksi</b></a>
                    </div>
                
                

                <?php  } ?>   


                                <!-- <div>
                                <a class=
                                 "btn btn-secondary btn-lg btn-block" href="edit_profile.php?id_user= <?= $id_user; ?>" role="button">Edit Profile</a>
    </div> -->

    <br>
 

    <div style="text-align:justify;width:75%;  padding:8px;"><img src="https://img.icons8.com/ios-glyphs/20/000000/user-male.png" style="float:left; margin:0 8px 4px 0;" /><p class="h6"><b><?= $usernamee; ?></b></p></div>
    <div style="text-align:justify;width:75%;  padding:8px;"><img src="https://img.icons8.com/metro/20/000000/phone.png" style="float:left; margin:0 8px 4px 0;" /><b><?= $tlp; ?></b></div>
        <div style="text-align:justify;width:75%;  padding:8px;"><img src="https://img.icons8.com/fluent-systems-regular/20/000000/email.png" style="float:left; margin:0 8px 4px 0;" /><b><?= $email; ?></b></div>
        <div style="text-align:justify;width:75%;  padding:8px;"><img src="https://img.icons8.com/material/20/000000/worldwide-location--v1.png" style="float:left; margin:0 8px 4px 0;" /><b><?= $nama_kabupaten; ?></b></div>


                                </div>
                                <br>
                                <div class="col-12">  
                              


 
                                </div>
          
                            </div>
                            
                            <!-- Product Images -->

                            <!-- Product Info -->
                            <div class="col-lg-9 col-md-9">
                            <div class="col-10 product-name large">
                                 <?= $nama; ?>
                                    <small class="text-primary" >Bergabung tanggal <?= date('M d, y', strtotime($hasilQuery['tgl_gabung'])); ?></small>
                                </div>
                                <div class="col-12 px-0">
                                    <hr>
                                </div>
                                <div class="col-12">
                        
                        <div class="row">
                            <div class="col-12 py-3">
                                <div class="row">  
                                <table class= "table table-bordered">
                                <thead class="thead-dark">
						<th>Tanggal</th>
						<th>Handphone</th>
						<th>Penjual</th>
						<th>Status</th>
                       <th style="width: 200px">Aksi</th>
                       </thead>
					   <?php
    include "lib/config.php";
    include "lib/koneksi.php";
    $kuerikonfirm=mysqli_query ($koneksi, "select * from tbl_konfirmasi WHERE id_user= '$id_user'");
	while ($kon=mysqli_fetch_array($kuerikonfirm))

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
        
        //kondisi transaksi
        $id_kon = $kon['id_konfirmasi'];
        $kueritran=mysqli_query ($koneksi, "select * from tbl_transaksi WHERE id_konfirmasi = '$id_kon'");
        $tran=mysqli_fetch_array($kueritran);

	

		?>
					<tr >
						<td><?php echo $kon['date']; ?></td>
						<td><?php echo $bar['nama_p']; ?></td>
						<td><?php echo $userp['nama_lengkap']; ?></td>
				
						<td><?php echo $kon['status_konfirmasi']; ?> Admin</td>

					

                        <?php

include "lib/koneksi.php";

if(empty($tran['status']) ) {     ?>    
  <td>


						<div class ="btn-group">
	
										
                                            <a href ="aksi/aksi_hapus_pembelian.php?id_konfirmasi= <?php echo $kon['id_konfirmasi'];?>&id_user=<?= $id_user ?>"
												onClick="return confirm ('Anda yakin ingin menghapus data ini')"><button class="btn btn-danger">Batalkan
												</button>
											</a>
										
											
						</div>
						</td>

<?php }

else {   ?>     
    <td >


<div class ="btn-group">

                
                    <a href ="transaksi.php?id_user=<?php echo $id_user_session?>"
                     button class="btn btn-success">Dalam Proses
                        </button>
                    </a>
                    &nbsp
                    <a href ="aksi/aksi_hapus_pembelian.php?id_konfirmasi= <?php echo $kon['id_konfirmasi'];?>&id_user=<?= $id_user ?>"
												onClick="return confirm ('Anda yakin ingin menghapus data ini')"><button class="btn btn-danger">Batalkan
												</button>
											</a>
                
                    
</div>
</td>

<?php } ?>







<!-- <td>


						<div class ="btn-group">
	
										
                                            <a href ="<?php echo $admin_url; ?>module/kabupaten/aksi_hapus.php?id_kabupaten=<?php echo $kab ['id_kabupaten']; ?>"
												onClick="return confirm ('Anda yakin ingin menghapus data ini')"><button class="btn btn-danger">Batalkan
												</button>
											</a>
										
											
						</div>
						</td> -->
					</tr>
					<?php 
					}?>
				
					</table>                               
                                </div>
  
                           
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
                </main>               <!-- Main Content -->
            </div>