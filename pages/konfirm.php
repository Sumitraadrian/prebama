<?php

include "lib/koneksi.php";

  $id_produk = $_GET ['id_produk'];
  $queryproduk = mysqli_query ($koneksi, "select * from tbl_produk WHERE id_produk = '$id_produk'");
  $hasilQuery = mysqli_fetch_array($queryproduk);
  $id_user = $hasilQuery ['id_user'];
  $id_brand = $hasilQuery ['id_kategori'];
  $nama_produk = $hasilQuery ['nama_p'];
  $harga = $hasilQuery ['harga'];
$total =   $harga + 5000;
  $tanggal = date('Y-m-d');

  $queryu = mysqli_query ($koneksi, "select * from tbl_user WHERE id_user = '$id_user'");
  $hasilQueryu = mysqli_fetch_array($queryu);
  $nama = $hasilQueryu ['nama_lengkap'];


?>
<div class="col-12">
                <!-- Main Content -->
                <div class="row">
                    <div class="col-12 mt-3 text-center text-uppercase">
                        <h2><b>Konfirmasi Ke admin</b></h2>
                    </div>
                </div>

                <main class="row">
                    <div class="col-12 bg-white py-3 mb-3">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-10 mx-auto table-responsive">
                                <form class="row" method="post" action="aksi/aksi_konfirm.php">
                                    <div class="col-12">
                                        <table class="table ">
                                            <thead class="thead-dark">
                                            <tr>
                                                <th with = "100px">Nama Produk</th>
                                                <th>Foto Produk</th>
                                                <th>Nama Penjual / Toko</th>

                                                <th>Tanggal Order</th>
                                                <th width="100px">Harga</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                  <?= $nama_produk; ?>
                                                </td>
                                                <td>
                                                <img src="images/produk/<?php echo $hasilQuery['gambar1']?>" class="img-fluid" >
                                                </td>
                                                <td>
                                                    <?= $nama; ?>
                                                </td>
                                                <td>
                                                    <?= $tanggal; ?>
                                                </td>
                                                <td>
                                                <?php $format_angka = number_format($harga, "0", ".", ".");
                                              echo "Rp.".$format_angka;?>
                                                </td>

                                         
                                       
                                            </tr>
                                            <tr>
       <td colspan="4">Biaya Admin </td>
       <td>Rp 5.000</td>
    </tr>
    <tr>

       <td colspan="4">Total bayar </td>
       <td><?php $format_angka_total = number_format($total, "0", ".", ".");
                                              echo "Rp.".$format_angka_total;?></td>
    </tr>
                                          
                                            </tbody>
                                  
                                        </table>
                                        <p>Catatan : 
                                        Tunggu persetejuan dari admin untuk transaksi dengan rekber</p>
                                    </div>

                                    





                                    <input type="hidden" id="id_user_session" name="id_user_session" value="<?=  $id_user_session; ?>"  >
                                    <input type="hidden" id="id_produk" name="id_produk" value="<?=  $id_produk; ?>"  >
                                    <input type="hidden" id="status" name="status" value="BelumDikonfirmasi">
				            

                                    <div class="col-12 text-right">
                                        <button class="btn btn-outline-secondary mr-3" type="submit">Batal</button>
                                        <button type="submit" class="btn btn-outline-primary">Konfirmasi Ke admin</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </main>
                <!-- Main Content -->
            </div>