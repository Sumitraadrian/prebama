<?php
include "../../../lib/config.php";
include "../../../lib/koneksi.php";

$namabrand = $_POST['nama_brand'];
if ($namabrand ==""){  echo "<script> alert ('Data Kategori gagal dimasukkan karena data kosong'); window.location ='$admin_url'+ 'adminweb.php?module=tambah_brand';</script>";
    
} else{
$querytambah = mysqli_query($koneksi, "INSERT INTO tbl_brand (nama_brand ) VALUES ('$namabrand')");
if ($querytambah){
    echo "<script> alert ('Data Brand Berhasil ditambah'); window.location ='$admin_url'+ 'adminweb.php?module=brand';</script>";
}else {
    echo "<script> alert ('Data Brand gagal ditambah'); window.location ='$admin_url'+ 'adminweb.php?module=brand';</script>";
}
}
?>