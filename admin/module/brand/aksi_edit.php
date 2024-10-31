
  <?php  
session_start();
if (empty($_SESSION['username'])AND empty ($_SESSION['password'])) {
    echo"<center > untuk mengakses modul ini andha harus login<br>";
    echo"<a href =../../index.php><b>LOGIN</b></a></center>";
} else {
  include "../../../lib/config.php";
include "../../../lib/koneksi.php";
$id_brand = $_POST['id_brand'];
$nama_brand = $_POST ['nama_brand'];
    if ($nama_brand ==""){  echo "<script> alert ('Data Brand gagal diubah karena kosong'); window.location ='$admin_url'+ 'adminweb.php?module=edit_brand&id_brand='+'$id_brand';</script>";
    
    } else{
    
    
    $queryedit =mysqli_query($koneksi, "UPDATE tbl_brand SET nama_brand='$nama_brand' WHERE id_brand='$id_brand'");

    if ($queryedit){
        echo "<script> alert ('Data Brand Berhasil diubah'); window.location ='$admin_url'+ 'adminweb.php?module=brand';</script>";
    }else {
        echo "<script> alert ('Data Brand gagal diubah'); window.location ='$admin_url'+ 'adminweb.php?module=edit_brand&id_brand='+'$id_brand';</script>";
    }
    }
}
    ?>