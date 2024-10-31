
  <?php  
session_start();
if (empty($_SESSION['username'])AND empty ($_SESSION['password'])) {
    echo"<center > untuk mengakses modul ini andha harus login<br>";
    echo"<a href =../../index.php><b>LOGIN</b></a></center>";
} else {
  include "../../../lib/config.php";
include "../../../lib/koneksi.php";
$id_konfirmasi = $_POST['id_konfirmasi'];
$status = 'bayar';
$id_user = $_POST['id_user'];
$id_produk = $_POST['id_produk'];
$tgl = date('Y-m-d');


    $queryedit =mysqli_query($koneksi, "UPDATE tbl_konfirmasi SET status_konfirmasi='$status' WHERE id_konfirmasi='$id_konfirmasi'");

    if ($queryedit){     
        echo "<script> alert ('Transaksi berhasil disetujui '); window.location ='aksi_transaksi.php?id_konfirmasi='+'$id_konfirmasi';</script>";
    }else {
        echo "<script> alert ('Transaksi gagal disetujui'); window.location ='$admin_url'+ 'adminweb.php?module=rekber&id_konfirmasi='+'$id_konfirmasi';</script>";
    }





    
    }

