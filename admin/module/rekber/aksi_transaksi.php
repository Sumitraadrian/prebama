
  <?php  
session_start();
if (empty($_SESSION['username'])AND empty ($_SESSION['password'])) {
    echo"<center > untuk mengakses modul ini andha harus login<br>";
    echo"<a href =../../index.php><b>LOGIN</b></a></center>";
} else {
  include "../../../lib/config.php";
include "../../../lib/koneksi.php";

$id_konfirmasi = $_GET ['id_konfirmasi'];
$querykonfirm=mysqli_query ($koneksi, " SELECT * FROM tbl_konfirmasi WHERE id_konfirmasi='$id_konfirmasi'");		 		
$hasilquery=mysqli_fetch_array($querykonfirm);
$id_pembeli = $hasilquery ['id_user'];
$id_produk = $hasilquery ['id_produk'];

$querypenjual=mysqli_query ($koneksi, " SELECT * FROM tbl_produk WHERE id_produk='$id_produk'");		 		
$hasilqueryp=mysqli_fetch_array($querypenjual);
$id_penjual = $hasilqueryp ['id_user'];
$status = 'bayar';

$tgl = date('Y-m-d');


$tanggal_now = date('Y-m-d');
$tambah_tanggal = mktime(0,0,0,date('m')+0,date('d')+1,date('Y')+0); // angka 2,7,1 yang dicetak tebal bisa dirubah rubah // angka 2,7,1 yang dicetak tebal bisa dirubah rubah
 $tambah = date('Y-m-d',$tambah_tanggal);

    
    
$querytambah = mysqli_query($koneksi, "INSERT INTO tbl_transaksi (id_konfirmasi,id_pembeli,id_penjual,id_produk,tgl_tansaksi,tgl_tenggat,status ) 
VALUES ('$id_konfirmasi','$id_pembeli','$id_penjual','$id_produk','$tgl','$tambah','$status')");

    if ($querytambah){
        echo "<script> alert ('Transaksi berhasil disetujui '); window.location ='../../adminweb.php?module=rekber';</script>";
    }else {
        echo "<script> alert ('Transaksi gagal disetujui');</script>";
    }





    
    }