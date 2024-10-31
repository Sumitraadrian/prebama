<?php

include "lib/koneksi.php";


  $id_user = $_GET ['id_user'];
  $queryuser = mysqli_query ($koneksi, "select * from tbl_user WHERE id_user = '$id_user'");
  $hasilQuery = mysqli_fetch_array($queryuser);
  $id_user = $hasilQuery ['id_user'];
  $id_kabupaten = $hasilQuery ['id_kabupaten'];
  $level = $hasilQuery ['level'];

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

<?php

include "lib/koneksi.php";

if($level == 'penjual' ) {   ?>     
<a class="btn btn-primary btn-lg btn-block" href="profile.php?id_user= <?= $id_user; ?>" role="button"><b>Penjualan</b></a>

<?php }

else {   ?>     
<a class="btn btn-primary btn-lg btn-block" href="pembelian.php?id_user= <?= $id_user; ?>" role="button"><b>Pembeli</b></a>
<?php  } ?>  







<a class="btn btn-primary btn-lg btn-block" href="transaksi.php?id_user= <?= $id_user; ?>" role="button"><b>Transaksi</b></a>
</div>
                
                

                <?php  } ?>   


                                <!-- <div>
                                <a class=
                                 "btn btn-secondary btn-lg btn-block" href="edit_profile.php?id_user= <?= $id_user; ?>" role="button">Edit Profile</a>
    </div> -->

    <br>
 

    <div style="text-align:justify;width:75%;  padding:8px;"><img src="https://img.icons8.com/ios-glyphs/20/000000/user-male.png" style="float:left; margin:0 8px 4px 0;" /><p class="h6"><b><?= $username; ?></b></p></div>
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
                                 List Transaksi
                                  
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
                                <th width="130px">ID Transaksi</th>
						<th width="100px">Tanggal</th>
                        <th width="200px">Nama Handphone</th>
                        

                        <?php



if($level == 'penjual' ) {   ?>     
<th width="150px">Nama Pembeli</th>

<?php }

else {   ?>     
<th width="150px">Nama Toko / Penjual</th>
<?php  } ?>  



						
			
                        <th width="300px">Status</th>
                        <th width="130px">Aksi</th>
                        
        </thead >

       			
					   <?php
  
  if($level == 'penjual' ) {       

    $kuerikonfirm=mysqli_query ($koneksi, "select * from tbl_transaksi WHERE id_penjual= '$id_user_session'");
  }
 
  elseif($level == 'pembeli' ) {    
      
    $kuerikonfirm=mysqli_query ($koneksi, "select * from tbl_transaksi WHERE id_pembeli= '$id_user_session'");
  }
 ?>  
  


	








<?php

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
		$id_userb =$kon['id_pembeli'];
		$querybuser=mysqli_query ($koneksi, " SELECT * FROM tbl_user WHERE id_user='$id_userb'");
		$userb=mysqli_fetch_array($querybuser);

	

		?>
					<tr>
                    <td><b><?php echo $kon['id_transaksi']; ?></td>
						<td ><b><?php echo $kon['tgl_tansaksi']; ?></td>
                        <td ><b><?php echo $bar['nama_p']; ?></td>
                  

                        <?php



if($level == 'penjual' ) {   ?>     
<td ><b><?php echo $userb['nama_lengkap']; ?></td>
<?php



if($kon['status'] == 'diterima') {     ?>    
    <td ><b>	<p class="text-dark">Status : <p class="text-primary">Pembayaran telah diterima admin. Mohon Segera melakuan pengiriman produk ke pembeli.</p></p>
                                    <a href ="upload_bukti.php?id_transaksi=<?php echo $kon ['id_transaksi']; ?>"
                                                                        >
                                                                        </a>
                                                </td>

<?php }

elseif($kon['status'] == 'terkirim' ) {   ?>     
    <td><b><p class="text-dark">Status : <p class="text-danger">Pembeli Sudah mengirim bukti pembayaran ke admin <br> Tunggu admin mengkonfirmasi pembayaran dari pembeli</p></p>
                                   
                                                </td>

<?php }

elseif($kon['status'] == 'bayar' ) {   ?>     
     <td><b><p class="text-dark">Status : <p class="text-warning">Pembeli belum mengirim bukti pembayaran ke admin</p>
</td>

                                                <?php }

elseif($kon['status'] == 'selesai' ) {   ?>     
      <td><b><p class="text-dark">Status : <p class="text-success">Barang Sudah diterima, Transaksi selesai. Tunggu admin mentransfer pembayaran</p></p>

                                   
 </td>
<?php  } ?>  















<?php }

else {   ?>     
    <td ><b><?php echo $userp['nama_lengkap']; ?></td>

    <?php



if($kon['status'] == 'diterima') {     ?>    
    <td ><b>	<p class="text-dark">Status : <p class="text-primary">Pembayaran telah diterima admin. Admin akan Segera menghubungi penjual untuk segera mengirim barang.</p></p>
                                    <a href ="aksi/aksi_selesai.php?id_transaksi=<?php echo $kon ['id_transaksi']; ?>"
                                                                        ><button class="btn btn-primary"> Barang Sudah Diterima
                                                                            </button>
                                                                        </a>
                                                </td>

<?php }

elseif($kon['status'] == 'terkirim' ) {   ?>     
    <td><b><p class="text-dark">Status : <p class="text-danger">Anda Sudah Melakukan Pembayaran.<br> Tunggu admin mengkonfirmasi pembayaran anda</p></p>
                                   
                                                </td>

<?php }

elseif($kon['status'] == 'bayar' ) {   ?>     
     <td><b><p class="text-dark">Status : <p class="text-warning">Batas Waktu <p class="text-danger"><?php echo $kon['tgl_tenggat']; ?></p></p> <br>
                                    <a href ="upload_bukti.php?id_transaksi=<?php echo $kon ['id_transaksi']; ?>"
                                                                        ><button class="btn btn-danger">Upload bukti pembayaran
                                                                            </button>
                                                                        </a>
                                                </td>
 <?php }

elseif($kon['status'] == 'ditolak' ) {   ?>     
      <td><b><p class="text-dark">Status : <p class="text-danger">Maaf pembayaran ditolak</p></p>
                                   
                                   </td>
 <?php }

elseif($kon['status'] == 'selesai' ) {   ?>     
      <td><b><p class="text-dark">Status : <p class="text-success">Barang Sudah diterima, Transaksi selesai</p></p>
                                   
                                   </td>
<?php  } ?>  


    
<?php  } ?>  
                        
					
				
                   

                       

















<!--                        
                        <?php

       

                            if(empty($kon['bukti_bayar']) and empty($kon['keterangan'])) {
                                
                                ?>     
                                    <td>Batas Waktu <p class="text-danger"><?php echo $kon['tgl_tenggat']; ?></p> <br>
                                    <a href ="upload_bukti.php?id_transaksi=<?php echo $kon ['id_transaksi']; ?>"
                                                                        ><button class="btn btn-danger">Upload bukti pembayaran
                                                                            </button>
                                                                        </a>
                                                </td>
                            <?php }

                            else {   ?>     

                                        <td><p>Pembayaran telah diterima admin</p>
                                    <a href ="upload_bukti.php?id_transaksi=<?php echo $kon ['id_transaksi']; ?>"
                                                                        ><button class="btn btn-primary"> Barang Sudah Diterima
                                                                            </button>
                                                                        </a>
                                                </td>
                            <?php  } ?>    -->
                       
                   
                    <td>
                        <a href ="rincian_transaksi.php?id_transaksi=<?php echo $kon ['id_transaksi']; ?>"
											><button class="btn btn-secondary">Rincian
												</button>
											</a>
                    </td>

					










					
												 <!-- class="btn btn-danger"><i class='fa fa-power-off'></i></button></a> -->
											
						</div>
						</td>
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