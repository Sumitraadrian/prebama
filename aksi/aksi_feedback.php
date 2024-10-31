<?php

include "../lib/koneksi.php";

$id_user = $_POST['id_user'];
$id_penjual = $_POST['id_penjual'];
$isi = $_POST ['isi'];
$tanggal = date('Y-m-d');
if ($isi ==""){  echo "<script> alert ('masukkan feedback jangan kosong gan ); </script>";
    
} else{
    $querySimpan = mysqli_query ($koneksi, "INSERT INTO tbl_feedback (id_user,id_penjual,isi_feedback,tgl_feedback) VALUES ('$id_user','$id_penjual','$isi','$tanggal')");
if ($querySimpan){
    header("location:../feedback.php?id_user= $id_penjual");
}else {
    
}
}
?>