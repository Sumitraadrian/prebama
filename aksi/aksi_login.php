<?php
include "../lib/koneksi.php";
include "../lib/config.php";

$username = trim($_POST['username']);
$pass = trim($_POST['password']);
// pastikan username dan password adalah berupa huruf atau angka.

if (!ctype_alnum($username) or !ctype_alnum($pass)) {
    echo "
    <script> 
    alert('Isi Username dan Password!'); 
        window.location = '../register_pilih.php';
    </script>
    ";
} else {
    $login = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username='$username' AND password='$pass' ");
    $ketemu = mysqli_num_rows($login);
    $r = mysqli_fetch_array($login);
  

    if ($ketemu > 0) {
      
    
        if ($r ['status_user'] == 'blokir'){
        echo"<script> 
        alert('Akun di blokir'); 
        window.location = '../index.php';
         </script>";
        }
        else if ($r ['status_user'] == 'aktif') {
        if ($r['level'] == 'admin') {
         //login sebagai admin
         session_start();
         $_SESSION['username'] = $r['username'];
         $_SESSION['password'] = $r['password'];
            header("location:../admin/adminweb.php?module=home");
        }
        elseif ($r['nama_lengkap'] == null) {
            session_start();
            $_SESSION['username'] = $r['username'];
            $_SESSION['password'] = $r['password'];
            header("location:../edit_profile.php");
        }
        elseif ($r['level'] == 'penjual') { 
            session_start();
            $_SESSION['username'] = $r['username'];
            $_SESSION['password'] = $r['password'];
            $id_user = $r['id_user'];
              header("location:../profile.php?id_user= $id_user");
        }
        elseif ($r['level'] == 'pembeli') { 
            session_start();
            $_SESSION['username'] = $r['username'];
            $_SESSION['password'] = $r['password'];
            $id_user = $r['id_user'];
              header("location:../pembelian.php?id_user= $id_user");
        }
        else{
            echo    "<script>
            alert('Gagal akhir'); 
                        ('Data Gagal Dimasukkan');
                        window.location = '../register_pilih.php';
                        </script>";
        }

    }
    }
    else {
        echo    "<script>
        alert('Username Dan Password Salah'); 
                    window.location = '../index.php';
                    </script>";
    
}

}
