<?php
session_start();
if (empty($_SESSION['username'])AND empty ($_SESSION['passuser'])) {
    echo"<center > untuk mengakses modul ini andha harus login<br>";
    echo"<a href =../../index.php><b>LOGIN</b></a></center>";
} else {
    include "../lib/config.php";
    include "../lib/koneksi.php";

    $id_produk  = $_GET['id_produk'];
    $id_user  = $_GET['id_user'];
  
    $queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_produk  WHERE id_produk='$id_produk'");
 

    if ($queryHapus){
        echo "<script> alert ('Produk Berhasil dihapus'); window.location ='../profile.php?id_user=$id_user';</script>";
    }else {
        echo "<script> alert ('Produk gagal dihapus karena masih ada transaksi dengan produk tersebut'); window.location ='../profile.php?id_user=$id_user';</script>";
    }
}
    ?>