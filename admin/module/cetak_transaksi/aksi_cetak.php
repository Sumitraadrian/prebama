<?php
include "../../../lib/koneksi.php";

$dari = $_POST['dari'];
$sampai = $_POST['sampai'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cetak Laporan Penjualan</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        function printContent(el) {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }
    </script>
    <style>
        .container {
            margin: auto;

        }

        table {
            font-size: 8pt;
        }
    </style>
</head>

<body>

    <div class="container">
        <div>
            <a class="btn btn-primary" style="margin-top:20px;" href="../../adminweb.php?module=cetak_transaksi">Kembali</a>
            <button class="btn btn-success" style="margin-top:20px; float:right" onclick="printContent('cetak')">Cetak</button>
        </div>

        <div id="cetak">
            <h2><center>Website Marketplace TemanCOD</center></h2>
            <h3><center>Laporan Transaksi</center></h3>
            <p><center>Tanggal : <?= date('d M Y', strtotime($dari)); ?> s/d <?= date('d M Y', strtotime($sampai)); ?></center></p>
            <table class="table table-bordered" cellpadding="7">
                <thead>
                    <tr>
                    <th width="150px" >Id transaksi</th>
						<th width="150px">Tanggal</th>
		
						<th >Nama Penjual / Toko</th>
                        <th >Nama Pembeli</th>
                        <th >Nama Handphone</th>
                        <th >Harga Handphone</th>
                        <th >Biayar Rekber (Admin) </th>
                        <th >Total dibayar </th>
                  
       
                    
                    </tr>
                    <?php
$t = 0;
    $kuerikonfirm=mysqli_query ($koneksi, "select * from tbl_transaksi WHERE tgl_tansaksi BETWEEN '$dari' AND '$sampai' AND status = 'selesai'");
	while ($kon=mysqli_fetch_array($kuerikonfirm))

	{
		//penjual
		$id_produk =$kon['id_produk'];
		$queryp=mysqli_query ($koneksi, " SELECT * FROM tbl_produk WHERE id_produk='$id_produk'");
		$bar=mysqli_fetch_array($queryp);
		$id_userp = $bar['id_user'];
        $namap = $bar['id_user'];
        $total = $bar['harga'] + 5000;

			//mnama penjual
			$querypuser=mysqli_query ($koneksi, " SELECT * FROM tbl_user WHERE id_user='$id_userp'");
			$userp=mysqli_fetch_array($querypuser);

		//pembeli
		$id_userb =$kon['id_pembeli'];
		$querybuser=mysqli_query ($koneksi, " SELECT * FROM tbl_user WHERE id_user='$id_userb'");
		$userb=mysqli_fetch_array($querybuser);

	

        ?>
        <tr>
        <td><?php echo $kon['id_transaksi']; ?></td>
						<td><?php echo $kon['tgl_tansaksi']; ?></td>
						<td><?php echo $userp['nama_lengkap']; ?></td>
                        <td width ="150"><?php echo $userb['nama_lengkap']; ?></td>
                        <td><?php echo $bar['nama_p']; ?></td>
                        <td> <?php $format_angka = number_format($bar['harga'], "0", ".", ".");
                                              echo "Rp.".$format_angka;?></td>
                          <td> <?php $format_angka = number_format(5000, "0", ".", ".");
                                              echo "Rp.".$format_angka;?></td>
                                                 <td> <?php $format_angka = number_format($total, "0", ".", ".");
                                              echo "Rp.".$format_angka;?></td>
                                        

  
        <?php 
           $jmlh_total_produk[$t] = $bar['harga'];
        $jmlh_total[$t] = $total;
        $jmlh_total_rekber[$t] = 5000;
        $t++;
    } ?>
        </tr>
        <th colspan="5">Total : </th>
        <td width ="100">Rp. <?php echo number_format(array_sum($jmlh_total_produk),"0", ".", "."); ?></td> 
        <td width ="100">Rp. <?php echo number_format(array_sum($jmlh_total_rekber),"0", ".", "."); ?></td> 
        <td width ="100">Rp. <?php echo number_format(array_sum($jmlh_total),"0", ".", "."); ?></td> 
                        </tr>

                </thead>
                <tbody>
   
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>