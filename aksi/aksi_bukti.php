<?php
include "../lib/koneksi.php";
include "../lib/config.php";

$id_transaksi = $_POST['id_transaksi'];
$keterangan = $_POST['keterangan'];
$status = $_POST['status'];


$nama_file = $_FILES['fotob'] ['name'];
$tmp_file = $_FILES ['fotob'] ['tmp_name'];


$path_foto_bukti = "../images/bukti/".$nama_file; 
move_uploaded_file($tmp_file, $path_foto_bukti);

$query = mysqli_query($koneksi, "UPDATE tbl_transaksi SET
									bukti_bayar = '$nama_file',
										keterangan = '$keterangan',
										status = '$status'
									
                                         WHERE
										 id_transaksi = '$id_transaksi'");
										 

 if ($query){
echo "<script> alert ('Bukti pembayaran berhasil di kirim ke admin'); window.location = '../upload_bukti.php?id_transaksi= $id_transaksi' </script>";
}else {
echo "<script> alert ('Bukti pembayaran gagal di kirim ke admin'); window.location = '../upload_bukti.php?id_transaksi= $id_transaksi' </script>";
}



?>