<?php
session_start();
if (empty($_SESSION['username'])AND empty ($_SESSION['passuser'])) {
    echo"<center > untuk mengakses modul ini andha harus login<br>";
    echo"<a href =../../index.php><b>LOGIN</b></a></center>";
} else {
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idbrand = $_GET ['id_brand'];
  
    $queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_brand  WHERE id_brand='$idbrand'");
 

    if ($queryHapus){
        echo "<script> alert ('Data Brand Berhasil dihapus'); window.location ='$admin_url'+ 'adminweb.php?module=brand';</script>";
    }else {
        echo "<script> alert ('Data Brand gagal dihapus'); window.location ='$admin_url'+ 'adminweb.php?module=brand';</script>";
    }
}
    ?>