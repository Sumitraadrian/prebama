<?php

    include "../lib/koneksi.php";
    $id_produk = $_POST['id_produk'];
    $id_user = $_POST['id_user_session'];
    $status = $_POST['status'];

    $tanggal = date("Y-m-d");

    $querytambah = mysqli_query($koneksi, "INSERT INTO tbl_konfirmasi (id_user,status_konfirmasi,id_produk,date ) VALUES ('$id_user','$status','$id_produk','$tanggal')");
    if ($querytambah){
        echo    "<script>
        alert('Konfirmasi sudah dikirim ke admin tunggu pesetejuan dari admin'); 
          
                    window.location = '../pembelian.php?id_user=$id_user';
                    </script>";
    }else {
        echo "";
    }


?> 