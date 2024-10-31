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

                            if(empty($_SESSION['username']) and empty($_SESSION['password'])) { 
                                
                                ?>     

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
                                <a class="btn btn-primary btn-lg btn-block" href="pembelian.php?id_user= <?= $id_user; ?>" role="button"><b>Pembelian</b></a>
                            <?php  } ?>  




                


                    <a class="btn btn-primary btn-lg btn-block" href="transaksi.php?id_user= <?= $id_user; ?>" role="button"><b>Transaksi</b></a>
                    </div>
                

                <?php  } ?>   


                 

    <br>
 
 
    <div style="text-align:justify;width:75%;  padding:8px;"><img src="https://img.icons8.com/ios-glyphs/20/000000/user-male.png" style="float:left; margin:0 8px 4px 0;" /><p class="h6"><b><?= $usernamee; ?></b></p></div>
    <div style="text-align:justify;width:75%;  padding:8px;"><img src="https://img.icons8.com/metro/20/000000/phone.png" style="float:left; margin:0 8px 4px 0;" /><b><?= $tlp; ?></b></div>
        <div style="text-align:justify;width:75%;  padding:8px;"><img src="https://img.icons8.com/fluent-systems-regular/20/000000/email.png" style="float:left; margin:0 8px 4px 0;" /><b><?= $email; ?></b></div>
        <div style="text-align:justify;width:75%;  padding:8px;"><img src="https://img.icons8.com/material/20/000000/worldwide-location--v1.png" style="float:left; margin:0 8px 4px 0;" /><b><?= $nama_kabupaten; ?></b></div>
        <br>
            <a class="btn btn-warning btn-lg btn-block" href="feedback.php?id_user= <?= $id_user; ?>" role="button"><b>Feedback Penjual</b></a>

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
                            <div class="col-14 py-3">
                                <div class="row">
                                  
                                </div>
                                <?php 
                                if ($level == 'pembeli') {  ?>



                  <?php 
                                } else {      ?>
                              
                          
                                
                           


                                <div class="row">
                           
                                
                                <?php 
                                                    $queryproduk = mysqli_query ($koneksi, "select * from tbl_produk WHERE id_user = '$id_user'" );
                                                    while ($hasilquery = mysqli_fetch_array ($queryproduk)){
                                                        ?>
                                            <div class="col-lg-3 col-sm-8 my-3">
                                                    <div class="col-12 bg-white text-center h-100 product-item">
                                                        <div class="row h-100">
                                                            <div class="col-12 p-0 mb-3">
                                                                <a href="produk.php?id_produk= <?= $hasilquery['id_produk']; ?>"> 
                                                                <img  src="images/produk/<?php echo $hasilquery['gambar1']?>" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="col-12 mb-3">
                                                                <a href="product.html" 
                                                                class="product-name"><?= $hasilquery['nama_p']; ?></a>
                                                            </div>
                                                            <div class="col-12 mb-3">
                                                                <span class="product-price-old">
                                                                
                                                                </span>
                                                                <br>
                                                                <span class="product-price">
                                                                Rp 5.000.000
                                                                </span>
                                                            </div>
                                                            <div class="col-12 mb-3 align-self-end">
                                                            <a href="produk.php?id_produk= <?= $hasilquery['id_produk']; ?> "   button class="btn btn-outline-primary" type="button"><i class=" mr-2"></i>Lihat Detail</a>
                                                                <?php

include "lib/koneksi.php";

if(empty($_SESSION['username']) and empty($_SESSION['password'])) {     ?>     

<?php }

elseif($_SESSION['username'] == $hasilQuery ['username'] ) {   ?>   
                                                                  <a href="aksi/aksi_hapus_produk.php?id_produk= <?= $hasilquery['id_produk']; ?>&id_user=<?= $id_user ?>"   button class="btn btn-danger" type="button"><i class=" mr-2"></i>Hapus</a>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <?php } ?>
                                                <?php

                                                    include "lib/koneksi.php";

                                                    if(empty($_SESSION['username']) and empty($_SESSION['password'])) {     ?>     

                                                    <?php }

                                                    elseif($_SESSION['username'] == $hasilQuery ['username'] ) {   ?>     


<div class="col-lg-30 col-sm-6 my-3  ">
                                        <div class="col-16  bg-secondary text-white  text-center h-100 product-item ">
                                            <div class="row h-100">
                                                <div class="col-12 p-0 mb-3  ">
                                                 
                                                </div>
                                                <div class="col-12 mb-3 ">
                                                    <h3>Pasang iklan ?</strong></h3>
                                                </div>
                                                <div class="col-12 mb-3">
                                                  
                                                </div>
                                                <div class="col-12 mb-3 align-self-end">
                                                    <a   href="tambah_produk.php" class="btn btn-outline-light" type="button"><i class="fas fa-cart-plus mr-2"></i>Pasang Iklan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


<?php  } ?>   
                                          
                        

                       
                           

                        
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    
                                                    <?php } ?>
    
                </main>               <!-- Main Content -->
            </div>