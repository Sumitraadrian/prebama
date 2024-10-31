<?php
include "../lib/koneksi.php";
include "../lib/config.php";

$username = trim($_POST['username']);

$email = trim($_POST['email']);
$pass = trim($_POST['password']);
$repass = trim($_POST['repassword']);
$level = trim($_POST['level']);
$status = trim($_POST['status']);
$tanggal = date('Y-m-d');



if (!empty($username)) {
    $querycek = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username='$username'");
    $ketemu = mysqli_num_rows($querycek);
    if ($ketemu > 0) {
        echo    "<script>alert
    alert('Username sudah digunakan!'); 
    window.location = '../index.php';
    </script>";
    }
}

if (
    empty($username) or empty($email) or empty($pass)
) {
    echo    "<script>alert
    alert('Data Harus di Isi Penuh!'); 
    window.location = '../index.php';
    </script>";
} else {


    if ($pass == $repass) {











    $querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_user (username,email,password,level,status_user,tgl_gabung)
    VALUES ('$username','$email','$pass','$level','$status','$tanggal')");


    if ($querySimpan) {
        echo    "<script>alert
        alert('Akun Sudah berhasil dibuat :D, Silahkan login'); 
        window.location = '../index.php#modalr';
        </script>";
    } else {
        echo    "<script>
        alert('Akun Gagal dibuat, Cek data anda'); 
                    ('Data Gagal Dimasukkan');
                    window.location = '../index.php#modalr';
                    </script>";
    }




}else {
    echo "<script>alert('Password yang Anda Masukan Tidak Sama');  ('Data Gagal Dimasukkan');
    window.location = '../index.php#modalr';
    </script>";
    }


    
}
