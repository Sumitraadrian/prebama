<?php
include "../lib/koneksi.php";
include "../lib/config.php";

$id_user = $_POST['id_user'];
$kabupaten = $_POST['kabupaten'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$norek = $_POST['norek'];

$nama_lengkap= $_POST['nama_lengkap'];
$tlp = $_POST['tlp'];
$detail_alamat = $_POST['detail_alamat'];


$nama_file = $_FILES['fotop'] ['name'];
$tmp_file = $_FILES ['fotop'] ['tmp_name'];

$path_foto_profile = "../images/foto_profile/".$nama_file; 
move_uploaded_file($tmp_file, $path_foto_profile);

$query = mysqli_query($koneksi, "UPDATE tbl_user SET
										id_kabupaten = '$kabupaten',
                                        username = '$username',
                                        email = '$email',
                                        password = '$password',
										nama_lengkap = '$nama_lengkap',
                                        notlp = '$tlp',
										detail_alamat = '$detail_alamat',
										fotop = '$nama_file',
										norek = '$norek'
                                         WHERE
										 id_user = '$id_user'");
										 

										 if ($query){
											echo "<script> alert ('Profile berhasil Diperbaharui'); window.location = '../profile.php?id_user= $id_user' </script>";
										}else {
											echo "<script> alert ('Akun gagal Diperbaharui'); window.location = '../Profile_user.php?id_admin= $id_admin' </script>";
										}



?>