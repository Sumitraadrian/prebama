

            <div class="col-12">
                <!-- Main Content -->
                <main class="row">

                    <!-- Slider -->
                    <div class="col-12 px-0">
                        <div id="slider" class="carousel slide w-100" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#slider" data-slide-to="0" class="active"></li>
                                <li data-target="#slider" data-slide-to="1"></li>
                                <li data-target="#slider" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="images/slide.jpg" class="slider-img">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slide.jpg" class="slider-img">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slide.jpg" class="slider-img">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!-- Slider -->

                    <!-- Featured Products -->
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 py-3">
                                <div class="row">
                                    <div class="col-12 text-left text-uppercase">
                                        <h2>LIST PRODUK</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <?php 
                                        $queryproduk = mysqli_query ($koneksi, "select * from tbl_produk" );
                                        while ($hasilquery = mysqli_fetch_array ($queryproduk)){
                                 
                                            ?>
                                    <!-- Product -->
                                    <div class="col-lg-3 col-sm-6 my-3">
                                        <div class="col-12 bg-white text-center h-100 product-item">
                                            <div class="row h-100">
                                                <div class="col-12 p-0 mb-3">
                                                    <a href="produk.php?id_produk= <?= $hasilquery['id_produk']; ?>"> 
                                                    <img  src="images/produk/<?php echo $hasilquery['gambar1']?>" class="img-fluid "  style="max-width:100%;"  >
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

       