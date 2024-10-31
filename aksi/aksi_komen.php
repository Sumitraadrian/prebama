<?php

include "../lib/koneksi.php";

$id_user = $_POST['id_user'];
$id_produk = $_POST ['id_produk'];
$komen = $_POST ['komen'];
$tanggal = date('Y-m-d');
if ($komen ==""){  echo "<script> alert ('masukkan komen jangan kosong gan ); </script>";
    
} else{
    $querySimpan = mysqli_query ($koneksi, "INSERT INTO tbl_komen ( id_user,id_produk,isi_komen,tgl_komen) VALUES ('$id_user','$id_produk','$komen','$tanggal')");
if ($querySimpan){
    header("location:../produk.php?id_produk= $id_produk");
}else {
    
}
}
?>