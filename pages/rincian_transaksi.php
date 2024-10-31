<?php

include "lib/koneksi.php";


$id_transaksi = $_GET ['id_transaksi'];

$queryp=mysqli_query ($koneksi, " SELECT * FROM tbl_transaksi WHERE id_transaksi='$id_transaksi'");
$bar=mysqli_fetch_array($queryp);
$id_produk = $bar ['id_produk'];
$id_penjual = $bar ['id_penjual'];
$id_pembeli = $bar ['id_pembeli'];



$queryb=mysqli_query ($koneksi, " SELECT * FROM tbl_produk WHERE id_produk='$id_produk'");
$pro=mysqli_fetch_array($queryb);
$id_penjual = $pro['id_user'];
$nama_p = $pro['nama_p'];
$harga = $pro['harga'];
$total = $pro['harga'] + 5000;
$id_transaksi = $bar ['id_transaksi'];


$querypen=mysqli_query ($koneksi, " SELECT * FROM tbl_user WHERE id_user='$id_penjual'");
$pen=mysqli_fetch_array($querypen);
$id_kabupaten = $pen['id_kabupaten'];


$querypem=mysqli_query ($koneksi, " SELECT * FROM tbl_user WHERE id_user='$id_pembeli'");
$pem=mysqli_fetch_array($querypem);
$id_kabupatenm = $pem['id_kabupaten'];


$querykab=mysqli_query ($koneksi, " SELECT * FROM tbl_kabupaten WHERE id_kabupaten='$id_kabupaten'");
$kab=mysqli_fetch_array($querykab);

$querykabm=mysqli_query ($koneksi, " SELECT * FROM tbl_kabupaten WHERE id_kabupaten='$id_kabupatenm'");
$kabm=mysqli_fetch_array($querykabm);




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
                            <div class="col-lg-8 col-md-9">
                                <div class="col-10 product-name large">
                                Detail Transaksi
                                   
                                </div>
                                <div class="col-12 px-0">
                                    <hr>
                                </div>
                                <div class="col-12">
                        
                        <div class="row">
                            <div class="col-12 py-3">
                            <table class="table table-borderless">
                            <label><strong>Detail Produk</strong></label>
                  
                  <tr>
                    <td width ="300px">Nama Handphone  </td>
                    <td>:</td>
                    <td><?= $nama_p; ?></td>
                  </tr>
                  <tr>
                    <td>Foto  </td>
                    <td>:</td>
                    <td>     <img  src="images/produk/<?php echo $pro['gambar1']?>" class="img-fluid " style="width:20%" size alt="10x10"></td>
                  </tr>
                  <tr>
                    <td>Harga  </td>
                    <td>:</td>
                    <td><?php echo $harga ?></td>
                  </tr>
              
                  

                </table>
                <?php

include "lib/koneksi.php";

if($level == 'penjual' ) {   ?>     
      <div>
                        <label><strong>Detail Pembeli</strong></label>
                      <table class="table table-borderless">
                  
                        <tr>
                          <td width ="300px">Nama Pembeli  </td>
                          <td>:</td>
                          <td><?php echo $pem['nama_lengkap']; ?></td>
                        </tr>
                        <tr>
                          <td>Email  </td>
                          <td>:</td>
                          <td><?php echo $pem['email']; ?></td>
                        </tr>
                        <tr>
                          <td>No Telphone </td>
                          <td>:</td>
                          <td><?php echo $pem['notlp']; ?></td>
                        </tr>
                        <tr>
                          <td>Kabupaten</td>
                          <td>:</td>
                          <td><?php echo $kabm['nama_kabupaten']; ?></td>
                        </tr>
                        <tr>
                          <td>Detail Alamat  </td>
                          <td>:</td>
                          <td><?php echo $pem['detail_alamat']; ?></td>
                        </tr>
                      </table>
                      <label><b>Status Transaksi :</b>
              
                      <?php



if($bar['status'] == 'diterima') {     ?>    

Pembayaran Sudah Diterima Admin<br>
<li><i>Mohon segera mengirim barang ke pembeli </i> </li>

</ul>
<?php }

elseif($bar['status'] == 'terkirim' ) {   ?>     
<i>Pembeli sudah mengirim bukti pembayaran ke admin dan menunggu konfirmasi dari admin</i>

</ul>
<?php }

elseif($bar['status'] == 'bayar' ) {   ?>     
<i>Penjual belum melakukan pembayaran<p class="text-danger"><?php echo $bar['tgl_tenggat']; ?></i>
<?php }

elseif($bar['status'] == 'ditolak' ) {   ?>     
<i><p class="text-danger">Pembayaran ditolak admin</i>

<?php }

elseif($bar['status'] == 'selesai' ) {   ?>     
      <td><p>Barang Sudah diterima, Admin akan segera mengirim pembayaran</p>
                                   
                                   </td>
<?php  } ?> 

<?php }

else {   ?>     
      <div>
                        <label><strong>Detail Penjual</strong></label>
                      <table class="table table-borderless">
                  
                        <tr>
                          <td width ="300px">Nama Toko / Penjual  </td>
                          <td>:</td>
                          <td><?php echo $pen['nama_lengkap']; ?></td>
                        </tr>
                        <tr>
                          <td>Email  </td>
                          <td>:</td>
                          <td><?php echo $pen['email']; ?></td>
                        </tr>
                        <tr>
                          <td>No Telphone </td>
                          <td>:</td>
                          <td><?php echo $pen['notlp']; ?></td>
                        </tr>
                        <tr>
                          <td>Kabupaten </td>
                          <td>:</td>
                          <td><?php echo $kab['nama_kabupaten']; ?></td>
                        </tr>
                        <tr>
                          <td>Detial Alamat  </td>
                          <td>:</td>
                          <td><?php echo $pen['detail_alamat']; ?></td>
                        </tr>
                      </table>
                      <label><b>Status Transaksi :</b>
                      <?php



if($bar['status'] == 'diterima') {     ?>    

Pembayaran Sudah Diterima Admin<br>
<center><img src="images/bukti/<?php echo $bar['bukti_bayar'] ?>" class="img-fluid" style="width:25%" size alt="100x100" "><br><p><i>Fokto bukti bayar</i></p></center><ul>
<li><i>Admin akan segera menghubungi penjual untuk segera mengirim barang </i> </li>
<li><i>Tunggu Penjual mengirim barang. Apabila barang sudah diterima segera konfirmasi barang sudah diterima</i></li>
</ul>
<?php }

elseif($bar['status'] == 'terkirim' ) {   ?>     
<i>Anda Sudah Melakukan Pembayaran. Tunggu admin mengkonfirmasi pembayaran anda</i>
<center><img src="images/bukti/<?php echo $bar['bukti_bayar'] ?>" class="img-fluid" style="width:25%" size alt="100x100" "><br><p><i>Fokto bukti bayar</i></p></center><ul>
<li><i>Tunggu admin mengkonfirmasi pembayaran anda </i> </li>
</ul>
<?php }

elseif($bar['status'] == 'bayar' ) {   ?>     
<i>Anda Belum melakukan transfer, mohon segera transfer ke rekening admin sebelum tanggal<p class="text-danger"><?php echo $bar['tgl_tenggat']; ?></i>
<?php }

elseif($bar['status'] == 'ditolak' ) {   ?>     
<i><p class="text-danger">Maaf Pembayaran anda ditolak</i>

<?php }

elseif($bar['status'] == 'selesai' ) {   ?>     
      <td><p>Barang Sudah diterima, Transaksi selesai</p>
                                   
                                   </td>
<?php  } ?> 

                      
<?php  } ?>  


                      
                    
                     
            
                      
          
                      <!-- <?php

include "lib/koneksi.php";

if($bar['status'] == 'diterima') {     ?>    

Pembayaran Sudah Diterima Admin<br>
<center><img src="images/bukti/<?php echo $bar['bukti_bayar'] ?>" class="img-fluid" style="width:25%" size alt="100x100" "><br><p><i>Fokto bukti bayar</i></p></center><ul>
<li><i>Admin akan segera menghubungi penjual untuk segera mengirim barang </i> </li>
<li><i>Tunggu Penjual mengirim barang. Apabila barang sudah diterima segera konfirmasi barang sudah diterima</i></li>
</ul>
<?php }

elseif($bar['status'] == 'terkirim' ) {   ?>     
<i>Anda Sudah Melakukan Pembayaran. Tunggu admin mengkonfirmasi pembayaran anda</i>
<center><img src="images/bukti/<?php echo $bar['bukti_bayar'] ?>" class="img-fluid" style="width:25%" size alt="100x100" "><br><p><i>Fokto bukti bayar</i></p></center><ul>
<li><i>Tunggu admin mengkonfirmasi pembayaran anda </i> </li>
</ul>
<?php }

elseif($bar['status'] == 'bayar' ) {   ?>     
<i>Anda Belum melakukan transfer, mohon segera transfer ke rekening admin sebelum tanggal<p class="text-danger"><?php echo $bar['tgl_tenggat']; ?></i>
<?php }

elseif($bar['status'] == 'ditolak' ) {   ?>     
<i><p class="text-danger">Maaf Pembayaran anda ditolak</i>

<?php }

elseif($bar['status'] == 'selesai' ) {   ?>     
      <td><p>Barang Sudah diterima, Transaksi selesai</p>
                                   
                                   </td>
<?php  } ?>  -->






                 
                    
                    
                    
                    
                    </label>
                    </div>
                                <div class="row">  
                                   
                              












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
