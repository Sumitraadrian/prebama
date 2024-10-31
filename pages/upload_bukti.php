<?php

include "lib/koneksi.php";


$id_transaksi = $_GET ['id_transaksi'];

$queryp=mysqli_query ($koneksi, " SELECT * FROM tbl_transaksi WHERE id_transaksi='$id_transaksi'");
$bar=mysqli_fetch_array($queryp);
$id_produk = $bar ['id_produk'];

$queryb=mysqli_query ($koneksi, " SELECT * FROM tbl_produk WHERE id_produk='$id_produk'");
$pro=mysqli_fetch_array($queryb);
$nama_p = $pro['nama_p'];
$harga = $pro['harga'];
$total = $pro['harga'] + 5000;
$id_transaksi = $bar ['id_transaksi'];
  $queryuser = mysqli_query ($koneksi, "select * from tbl_user WHERE id_user = '$id_user_session'");
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
                    <a class="btn btn-secondary btn-lg btn-block" href="edit_profile.php?id_user= <?= $id_user; ?>" role="button">Edit Profile</a>
                    <a class="btn btn-secondary btn-lg btn-block" href="pembelian.php?id_user= <?= $id_user; ?>" role="button">Pembelian</a>
                    <a class="btn btn-secondary btn-lg btn-block" href="transaksi.php?id_user= <?= $id_user; ?>" role="button">Transaksi</a>
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
                            <div class="col-lg-8 col-md-9">
                                <div class="col-10 product-name large">
                                Upload Bukti Pembayaran
                                   
                                </div>
                                <div class="col-12 px-0">
                                    <hr>
                                </div>
                                <div class="col-12">
                        
                        <div class="row">
                            <div class="col-12 py-3">
                            <div>
                        <label><strong>Detail Transaksi</strong></label>
                      <table class="table table-borderless">
                        <tr >
                          <td>Id Transaksi  </td>
                          <td>:</td>
                          <td><?= $id_transaksi; ?></td>
                        </tr>
                        <tr>
                          <td>Nama Produk  </td>
                          <td>:</td>
                          <td><?= $nama_p; ?></td>
                        </tr>
                        <tr>
                          <td>Harga  </td>
                          <td>:</td>
                          <td><?= $harga; ?></td>
                        </tr>
                        <tr>
                          <td>Biaya admin  </td>
                          <td>:</td>
                          <td>5000</td>
                        </tr>
                        <tr>
                          <td>Total  </td>
                          <td>:</td>
                          <td><?= $total; ?></td>
                        </tr>
                        <tr class="table-active">
                     
                          <th colspan="3">Lakukan Pembayaran sejumlah total diatas ke Rekber (admin) BRI 12324234513223</th>
                        </tr>
                        

                      </table>
                    </div>
                                <div class="row">  
                                   
                                <form action="aksi/aksi_bukti.php"  enctype="multipart/form-data" method="post">
                    <label><strong>Foto Bukti Pembayaran</strong></label>
                      <div class="custom-file">
             
                        <input type="file" class="imgFile  custom-file-input" id="fotob" name="fotob">
                       
                         <label class="custom-file-label" for="customFile">Choose file</label>
                         
                        </div>  
                      </div>
                   
                        </div>
                        <input type="hidden" id="id_transaksi" name="id_transaksi" value="<?= $id_transaksi; ?>"  >
                        <input type="hidden" id="status" name="status" value="terkirim"  >
                 
               
                    
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <textarea rows="10" cols="100" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">

                                        </textarea>
                                        <p class="help-block"></p>
                                    </div>
                                    <button type="button" class="btn btn-secondary">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                 </div>
                                 
                                    </div>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
              
                </form>












                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
                </main>               <!-- Main Content -->
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $("#inputFile").change(function(event) {  
      fadeInAdd();
      getURL(this);    
    });

    $("#inputFile").on('click',function(event){
      fadeInAdd();
    });

    function getURL(input) {    
      if (input.files && input.files[0]) {   
        var reader = new FileReader();
        var filename = $("#inputFile").val();
        filename = filename.substring(filename.lastIndexOf('\\')+1);
        reader.onload = function(e) {
          debugger;      
          $('#imgView').attr('src', e.target.result);
          $('#imgView').hide();
          $('#imgView').fadeIn(500);      
          $('.custom-file-label').text(filename);             
        }
        reader.readAsDataURL(input.files[0]);    
      }
      $(".alert").removeClass("loadAnimate").hide();
    }

    function fadeInAdd(){
      fadeInAlert();  
    }
    function fadeInAlert(text){
      $(".alert").text(text).addClass("loadAnimate");  
    }
</script>
