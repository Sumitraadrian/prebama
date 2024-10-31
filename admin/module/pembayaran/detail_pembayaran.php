

<?php

include "../lib/koneksi.php";


$id_transaksi = $_GET ['id_transaksi'];

$queryp=mysqli_query ($koneksi, " SELECT * FROM tbl_transaksi WHERE id_transaksi='$id_transaksi'");
$bar=mysqli_fetch_array($queryp);
$id_produk = $bar ['id_produk'];
$id_pembeli = $bar['id_pembeli'];
$id_penjual = $bar['id_penjual'];
$ket = $bar['keterangan'];


//Penjual
$queryb=mysqli_query ($koneksi, " SELECT * FROM tbl_produk WHERE id_produk='$id_produk'");
$pro=mysqli_fetch_array($queryb);

$nama_p = $pro['nama_p'];
$harga = $pro['harga'];
$total = $pro['harga'] + 5000;
$id_transaksi = $bar ['id_transaksi'];
$querypen=mysqli_query ($koneksi, " SELECT * FROM tbl_user WHERE id_user='$id_penjual'");
$pen=mysqli_fetch_array($querypen);
$id_kabupaten = $pen['id_kabupaten'];
$querykab=mysqli_query ($koneksi, " SELECT * FROM tbl_kabupaten WHERE id_kabupaten='$id_kabupaten'");
$kab=mysqli_fetch_array($querykab);





$querypem=mysqli_query ($koneksi, " SELECT * FROM tbl_user WHERE id_user='$id_pembeli'");
$pem=mysqli_fetch_array($querypem);
$id_kabupatenm = $pem['id_kabupaten'];

$querykabm=mysqli_query ($koneksi, " SELECT * FROM tbl_kabupaten WHERE id_kabupaten='$id_kabupatenm'");
$kabm=mysqli_fetch_array($querykabm);

//Pembeli
$queryuser = mysqli_query ($koneksi, "select * from tbl_user WHERE id_user = '$id_pembeli'");
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
<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
				<h4>Detail Transaksi</h4>
			
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
					<h6>Id transaksi :  <?= $id_produk; ?></h6>
					</section><!-- main__box -->
		
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
                    <td>     <img  src="../images/produk/<?php echo $pro['gambar1']?>" class="img-fluid " style="width:20%" size alt="10x10"></td>
                  </tr>
                  <tr>
                    <td>Harga  </td>
                    <td>:</td>
                    <td><?php echo $harga ?></td>
                  </tr>
              
                  

                </table>
                <br>
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
                          <td>Alamat Penjual  </td>
                          <td>:</td>
                          <td><?php echo $kab['nama_kabupaten']; ?></td>
                        </tr>
                        <tr>
                          <td>No Rekening  </td>
                          <td>:</td>
                          <td><b><?php echo $pen['norek']; ?></b></td>
                        </tr>
               
                        
        
                      </table>
                      <br>
                      <label><strong></strong></label>
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
                          <td>Alamat Pembeli  </td>
                          <td>:</td>
                          <td><?php echo $kabm['nama_kabupaten']; ?></td>
                        </tr>
                        <label><strong>Detail Pembeli</strong></label>
                      <table class="table table-borderless">
                  
                        <tr>
                          <td width ="300px">Keterangan Dari Pembeli  </td>
                          <td>:</td>
                          <td><?php echo $bar['keterangan']; ?></td>
                        </tr>
                        <tr>
                          <td>No Rekening  </td>
                          <td>:</td>
                          <td><b><?php echo $pem['norek']; ?></b></td>
                        </tr>
                      
               
                        

                      </table>
                      <br>
          
                      <label><b>Status Transaksi :</b>
            
               
                      <?php



if($bar['status'] == 'diterima') {     ?>    

<p>Pembayaran sudah dikonfirmasi, Segera hubungi penjual untuk mengirim barang <br><br><p>
<center><img src="../images/bukti/<?php echo $bar['bukti_bayar'] ?>" class="img-fluid" style="width:80%" size alt="100x100" "><br><p><i>Fokto bukti bayar</i></p></center><ul>

</ul>
<?php }

elseif($bar['status'] == 'terkirim' ) {   ?>     
<p>Bukti pembyaran belum dikonfirmasi</p>

<center><img src="../images/bukti/<?php echo $bar['bukti_bayar'] ?>" class="img-fluid" style="width:80%" size alt="100x100" "><br><p><i>Fokto bukti bayar</i></p></center><ul> 

<?php }

elseif($bar['status'] == 'bayar' ) {   ?>     
<i>Pembeli akan melakukan transfer sebelum tanggal<p class="text-danger"><?php echo $bar['tgl_tenggat']; ?></i>
<center><img src="../images/bukti/<?php echo $bar['bukti_bayar'] ?>" class="img-fluid" style="width:80%" size alt="100x100" "><br><p><i>Fokto bukti bayar</i></p></center><ul> 
<i>Pembeli akan melakukan transfer sebelum tanggal<p class="text-danger"><?php echo $bar['tgl_tenggat']; ?></i>  
<?php }

elseif($bar['status'] == 'ditolak' ) {   ?>  
<i><p class="text-danger">Pembayaran ditolak</i>

<center><img src="../images/bukti/<?php echo $bar['bukti_bayar'] ?>" class="img-fluid" style="width:80%" size alt="100x100" "><br><p><i>Fokto bukti bayar</i></p></center><ul>   

<?php }

elseif($bar['status'] == 'selesai' ) {   ?>  
<i><br><p><i>Transaksi telah selesai. barang sudah diterima pembeli. Mohon segera melakukan transfer ke user penjual</i> <br>No rekening : <b><?php echo $pen['norek']; ?></b></p></i>
<center><img src="../images/bukti/<?php echo $bar['bukti_bayar'] ?>" class="img-fluid" style="width:80%" size alt="100x100" ">><br><p><i>Fokto bukti bayar</i></p></center><ul>  
<?php  } ?>   


<label><b>Keterangan dari pembeli :</b> <?= $ket; ?></label>

                 
                    
                    
                    
                    
					</label>
					

					
                    </div>


				</div>
			</div><!-- row -->
			</div>
		</div><!-- row -->
	</main>

