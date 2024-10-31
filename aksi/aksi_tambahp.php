<?php
include "../lib/koneksi.php";

$id_user = $_POST['id_user'];
$id_kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$nama_produk = $_POST['namap'];
$harga_awal = $_POST['harga_awal'];
$kondisi = $_POST['kondisi'];
$merek = $_POST['merek'];
$fungsi = $_POST['fungsi'];
$pemakaian = $_POST['pemakaian'];
$detailp = $_POST['detailp'];
$tgl_post = date('Y-m-d');

// Fungsi untuk menangani unggahan gambar
function uploadImage($file) {
    $image_name = $file['name'];
    $tmp_file = $file['tmp_name'];
    $path = "../images/produk/" . $image_name;

    if (move_uploaded_file($tmp_file, $path)) {
        return $image_name; // Jika berhasil, kembalikan nama gambar
    } else {
        return null; // Jika gagal, kembalikan null
    }
}

// Upload gambar dan simpan nama gambar
$img1 = uploadImage($_FILES['img1']);
$img2 = uploadImage($_FILES['img2']);
$img3 = uploadImage($_FILES['img3']);

// Cek jika semua gambar berhasil diupload
if ($img1 === null || $img2 === null || $img3 === null) {
    echo "<script>alert('Gagal mengunggah salah satu gambar.'); window.location = '../index.php#modalr';</script>";
    exit; // Hentikan eksekusi jika ada yang gagal
}

// Query untuk menyimpan data produk
$query = mysqli_query($koneksi, "INSERT INTO tbl_produk (id_user, id_kategori, harga, nama_p, kondisi, merek, harga_awal, fungsi, lama_pemakaian, gambar1, gambar2, gambar3, detail, tgl_post) VALUES ('$id_user', '$id_kategori', '$harga', '$nama_produk', '$kondisi', '$merek', '$harga_awal', '$fungsi', '$pemakaian', '$img1', '$img2', '$img3', '$detailp', '$tgl_post')");

if ($query) {
    echo "<script>alert('Produk berhasil diposting.'); window.location = '../index.php#modalr';</script>";
} else {
    // Menampilkan pesan error dari query
    echo "<script>alert('Data Gagal Dimasukkan: " . mysqli_error($koneksi) . "'); window.location = '../index.php#modalr';</script>";
}
?>
