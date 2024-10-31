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
                                Feedback Dari Pembeli
                                  
                                </div>
                                <div class="col-12 px-0">
                                    <hr>
                                </div>
                                <div class="col-12">
                        
               
                                  

 <!-- Add Review -->
 <div class="row">
                                      
                                        </div>
                                    </div>
                                    <!-- Add Review -->

                                    <div class="row">
                                        <div class="col-12 px-md-3 px-0">
                  
                                        </div>
                                    </div>

                                    <!-- Review -->
                                    <div class="row">
                                        <div class="col-12">
                                        <?php 
           
           $komen = mysqli_query ($koneksi, "select * from tbl_feedback where id_penjual = '$id_user'" );
           while ($hasilkomen = mysqli_fetch_array ($komen)){
                 ?>
                   <?php
                     $id_pembeli = $hasilkomen['id_user'];
                 $user = mysqli_query ($koneksi, "select * from tbl_user where id_user = '$id_pembeli'" );
                 $hasiluser = mysqli_fetch_array ($user);
                 $username = $hasiluser ['username'];
              

                 ?>
                                            <!-- Comments -->
                                            <div class="col-12 text-justify py-2 mb-3 bg-gray">
                                                <div class="row">
                                                    <div class="col-12">
                                                    <strong class="mr-2"><?= $username; ?></strong>
                                           
                                                    </div>
                                                    <div class="col-12">
                                                    <?php echo $hasilkomen ['isi_feedback']; ?>
                                                    </div>
                                                    <div class="col-12">
                                                        <small>
                                                        <i class="fas fa-clock mr-2"></i><?php echo $hasilkomen ['tgl_feedback']; ?>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>

                                            <!-- Comments -->
                                           
                                            <!-- Comments -->
                                            <?php
                        if (empty($_SESSION['username'])AND empty ($_SESSION['passuser'])) {
       
                        } else  { 

                         $queryp=mysqli_query ($koneksi, " SELECT * FROM tbl_transaksi WHERE status='selesai' AND id_pembeli = '$id_user_session' AND id_penjual = '$id_user' ");
                         $bar=mysqli_fetch_array($queryp);
                            if (empty($bar['id_pembeli'])) {
                                echo "<b>Feedback hanya boleh di inputkan oleh user yang telah selesai transaksi di Penjual ini </b>";
                            } else {
                               
                        $hasilQueryuser = mysqli_fetch_array($queryuser);
                        ?>
                        <div class="col-12">
                        <h4>Tambahkan Review</h4>
                    </div>
                    <div class="col-12">
                    <form action="aksi/aksi_feedback.php" method="POST">
                    <input type="hidden" name ="id_user" value ="<?php echo $id_user_session ?>">
                         <input type="hidden" name ="id_penjual" value ="<?php echo $id_user ?>">
                          
                                                <div class="form-group">
                                                    <textarea class="form-control" name = "isi" placeholder="Masukkan Komentar"></textarea>
                                                </div>
                                         
                                                <div class="form-group">

                                                    <button class="btn btn-outline-dark">Post Komen</button>
                                                </div>
                                            </form>
                    </div>
                        <?php } ?>

                             
                        
                       
                 
                                    
                                    <?php } ?> 
                                    </div>
                                  
                                </div>
                                                    
                           

                        
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    
                                              
    
                </main>               <!-- Main Content -->
            </div>