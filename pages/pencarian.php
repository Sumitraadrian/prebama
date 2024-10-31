

            <div class="col-12">
                <!-- Main Content -->
                <main class="row">

                    <!-- Slider -->
            
                    <!-- Slider -->

                    <!-- Featured Products -->
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 py-3">
                                <div class="row">
                    
                                </div>
                                <div class="row">
                                <div class="col-12 text-left text-uppercase">
                                    <?php 
                                                  $search = $_POST['search'];
                                    ?>
                                        <h2>Hasil Pencarian <?= $search; ?> </h2>
                                    </div>
                                    <?php 
   
                         $queryproduk = mysqli_query ($koneksi, "select * from tbl_produk WHERE nama_p LIKE '%$search%'" );
       
                                        while ($hasilquery = mysqli_fetch_array ($queryproduk)){
                                 
                                            ?>
                                    <!-- Product -->
                                    <div class="col-lg-3 col-sm-6 my-3">
                                        <div class="col-12 bg-white text-center h-100 product-item">
                                            <div class="row h-100">
                                                <div class="col-12 p-0 mb-3">
                                                    <a href="produk.php?id_produk= <?= $hasilquery['id_produk']; ?>"> 
                                                    <img  src="images/produk/<?php echo $hasilquery['gambar1']?>" class="img-fluid " style="width:100%" width="80%" >
                                                    </a>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <a href="produk.php?id_produk= <?= $hasilquery['id_produk']; ?>" 
                                                    class="product-name"><b><?= $hasilquery['nama_p']; ?></b></a>
                                                </div>
                                                <div class="col-12 mb-3">
                                           
                                              
                                                    <span class="product-price">
                                                    <?php $format_angka = number_format($hasilquery['harga'], "0", ".", ".");
                                              echo "Rp.".$format_angka;?>
                                                    </span>
                                                </div>
                                                <div class="col-12 mb-3 align-self-end">
                                                <a href="produk.php?id_produk= <?= $hasilquery['id_produk']; ?>"   button class="btn btn-outline-primary" type="button"><i class=" mr-2"></i>Lihat Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- Product -->

                                    <!-- Product -->
                             
                                    <!-- Product -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Featured Products -->

             

                    <!-- Latest Product -->
              
                    <!-- Latest Products -->

                  

                    <!-- Top Selling Products -->
               
                    <!-- Top Selling Products -->

                
                </main>
                <!-- Main Content -->
            </div>

       