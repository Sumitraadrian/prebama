
  <?php  
session_start();
if (empty($_SESSION['username'])AND empty ($_SESSION['password'])) {
    echo"<center > untuk mengakses modul ini andha harus login<br>";
    echo"<a href =../../index.php><b>LOGIN</b></a></center>";
} else {
  include "../../../lib/config.php";
include "../../../lib/koneksi.php";
$id_user = $_POST['id_user'];
$status = $_POST ['status'];
    if ($id_user ==""){  echo "<script> alert ('Data Brand gagal diubah karena kosong'); window.location ='$admin_url'+ 'adminweb.php?module=edit_brand&id_brand='+'$id_brand';</script>";
    
    } else{
    
    
    $queryedit =mysqli_query($koneksi, "UPDATE tbl_user SET status_user ='$status' WHERE id_user='$id_user'");

    if ($queryedit){
        echo "<script> alert ('Status user berhasil diubah'); window.location ='$admin_url'+ 'adminweb.php?module=user_pembeli';</script>";
    }else {
        echo "<script> alert ('Status user gagal diubah'); window.location ='$admin_url'+ 'adminweb.php?module=user_pembeli&id_user='+'$id_user';</script>";
    }
    }
}
    ?>