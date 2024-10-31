
  <?php  
session_start();
if (empty($_SESSION['username'])AND empty ($_SESSION['password'])) {
    echo"<center > untuk mengakses modul ini andha harus login<br>";
    echo"<a href =../../index.php><b>LOGIN</b></a></center>";
} else {
  include "../../../lib/config.php";
include "../../../lib/koneksi.php";
$id_transaksi = $_GET['id_transaksi'];
$status = 'diterima';


    
    
    $queryedit =mysqli_query($koneksi, "UPDATE tbl_transaksi SET status='$status' WHERE id_transaksi='$id_transaksi'");

    if ($queryedit){
      echo "<script> alert ('Pembayarab berhasil disetujui '); window.location ='$admin_url'+ 'adminweb.php?module=konfirmasi_pembayaran';</script>";
  }else {
      echo "<script> alert ('Transaksi gagal disetujui');</script>";
  }
 }

