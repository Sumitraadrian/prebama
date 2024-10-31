<div class="row">
                            <div class="col-12 py-3">
                                <div class="row">
                                  
                                </div>
                                <div class="row">
                           
                                
                                <?php 
                                                    $queryproduk = mysqli_query ($koneksi, "select * from tbl_produk WHERE id_user = '$id_user'" );
                                                    while ($hasilquery = mysqli_fetch_array ($queryproduk)){
                                                        ?>
                                            <div class="col-lg-3 col-sm-6 my-3">
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
                                                                <button class="btn btn-outline-dark" type="button"><i class=" mr-2"></i>Lihat Detail</button>
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
                                        <div class="col-6  bg-secondary text-white  text-center h-100 product-item ">
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