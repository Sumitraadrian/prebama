
  <?php  

  include "../lib/koneksi.php";
  include "../lib/config.php";
$id_transaksi = $_GET['id_transaksi'];

$status = 'selesai';

$querytransaksi = mysqli_query ($koneksi, "select * from tbl_transaksi WHERE id_transaksi='$id_transaksi'");
$hasilQuerytrans = mysqli_fetch_array($querytransaksi);
$id_user = $hasilQuerytrans['id_pembeli'];


    
    
    $queryedit =mysqli_query($koneksi, "UPDATE tbl_transaksi SET status='$status' WHERE id_transaksi='$id_transaksi'");

    if ($queryedit){
      echo "<script> 
      alert('barang sudah diterima, transaksi sudah selesai, admin akan segera mengirim pembayaran ke penjual'); 
          
      window.location = '../transaksi.php?id_user=$id_user';
      </script>";
  }else {
      echo "<script> alert ('Transaksi gagal disetujui');</script>";
  }





    
    

