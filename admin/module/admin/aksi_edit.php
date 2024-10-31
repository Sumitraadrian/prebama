<?php
  include "../../../lib/config.php";
  include "../../../lib/koneksi.php";

$id_user = $_POST['id_user'];

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$nama_file = $_FILES['fotop']['name'];
$tmp_file = $_FILES ['fotop']['tmp_name'];

$path_foto_profile = "../../../images/foto_profile/".$nama_file; 
move_uploaded_file($tmp_file, $path_foto_profile);

$query = mysqli_query($koneksi, "UPDATE tbl_user SET
                                        username = '$username',
                                        email = '$email',
                                        password = '$password',
										fotop = '$nama_file',
                                         WHERE
										 id_user = '$id_user'");
										 

										 if ($query){
                                           echo "<script> alert ('Status user berhasil diubah'); window.location ='$admin_url'+ 'adminweb.php?module=admin';</script>";
										}else {
                                            echo "<script> alert ('Status user berhasil diubah'); window.location ='$admin_url'+ 'adminweb.php?module=admin';</script>";
										}



?>