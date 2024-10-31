<?php
session_start();

if (empty($_SESSION['username']) AND empty($_SESSION['pasword'])) {
    echo "<center>Untuk mengakses modul, Anda harus login </br>";
    echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else {
  include "../lib/config.php";
  include "../lib/koneksi.php";

  $r['username'] = $_SESSION['username'];
  $user = $r['username'];

  $queryAdmin = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username ='$user' ");
  
  $hasilQuery = mysqli_fetch_array($queryAdmin);
    //   $username    = $hasilQuery['username'];
    //   $nama_admin  = $hasilQuery['nama']; 
    //   $foto_profil = $hasilQuery ['foto_profil'];

	$queryProduk=mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah_produk FROM tbl_produk");
	$hasiljml=mysqli_fetch_array($queryProduk);
	$jumlahProduk=$hasiljml['jumlah_produk'];


	$queryuser=mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah_user FROM tbl_user");
	$hasiluser=mysqli_fetch_array($queryuser);
	$jumlahuser=$hasiluser['jumlah_user'];

	$queryuserpen=mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah_userp FROM tbl_user where level = 'penjual'");
	$hasiluserpen=mysqli_fetch_array($queryuserpen);
	$jumlahuserpen=$hasiluserpen['jumlah_userp'];

	$queryuserpem=mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah_userpem FROM tbl_user where level = 'pembeli'");
	$hasiluserpem=mysqli_fetch_array($queryuserpem);
	$jumlahuserpem=$hasiluserpem['jumlah_userpem'];

	$queryuser=mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah_user FROM tbl_user");
	$hasiluser=mysqli_fetch_array($queryuser);
	$jumlahuser=$hasiluser['jumlah_user'];

	$querybrand=mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah_brand FROM tbl_kategori");
	$hasilbrand=mysqli_fetch_array($querybrand);
	$jumlahbrand=$hasilbrand['jumlah_brand'];

	$querykonfirmasi=mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah_konfirmasi FROM tbl_konfirmasi");
	$hasilkonfirmasi=mysqli_fetch_array($querykonfirmasi);
	$jumlahkonfirmasi=$hasilkonfirmasi['jumlah_konfirmasi'];

	$querybkonfirmasi=mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah_belumkonfirmasi FROM tbl_konfirmasi WHERE status_konfirmasi = 'BelumDikonfirmasi'");
	$hasilbkonfirmasi=mysqli_fetch_array($querybkonfirmasi);
	$jumlahbkonfirmasi=$hasilbkonfirmasi['jumlah_belumkonfirmasi'];

	$querytransaksi=mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah_transaksi FROM tbl_transaksi");
	$hasiltransaksi=mysqli_fetch_array($querytransaksi);
	$jumlahtransaksi=$hasiltransaksi['jumlah_transaksi'];

	$querybtransaksi=mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah_belumkonfirmasis FROM tbl_transaksi WHERE status = 'terkirim'");
	$hasilbtransaksi=mysqli_fetch_array($querybtransaksi);
	$jumlahbtransaksi=$hasilbtransaksi['jumlah_belumkonfirmasis'];
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Require meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Dashboard . Reza Admin</title>


    <!-- Social network metas -->
    <meta name="author" content="@FikkriReza">
    <meta name="description" content="Open source responsive admin template with Bootstrap framework">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@FikkriReza">
    <meta name="twitter:creator" content="@FikkriReza">

    <meta property="fb:app_id" content="801699283982913">
    <meta property="og:url" content="https://rezafikkri.github.io/Reza-Admin">
    <meta property="og:title" content="Dashboard . Reza Admin">
    <meta property="og:description" content="Open source responsive admin template with Bootstrap framework">
    <meta property="og:image" content="https://rezafikkri.github.io/Reza-Admin/dist/img/rezaadmin.jpg">

	<!-- Bootstrap CSS first -->
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<!-- then Font Awesome -->
	<link rel="stylesheet" type="text/css" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- and Reza Admin CSS -->
	<link rel="stylesheet" type="text/css" href="dist/css/reza-admin.min.css">
	<!-- Favicon -->
	<link rel="icon" href="dist/img/Reza_Admin.ico">
	<link rel="stylesheet" href="date/dist/css/bootstrap-datepicker.css">

</head>
<body>		
	<!-- navbar -->
	<nav class="navbar navbar-expand-sm navbar--white">
		<a class="navbar__sidebar-toggler" href="#"><span class="fa fa-bars"></span></a>
		<a class="navbar-brand ml-3" href="index.html"><h3>Admin TemanCOD</h3></a>
		<button class="navbar-toggler" data-target="#navbarNav" data-toggle="collapse" type="button">
		    <span class="fa fa-navicon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
		
				<li class="nav-item navbar__avatar dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
						<img src="dist/img/reza.jpg" alt="avatar image">
						<span>Admin</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="adminweb.php?module=admin" class="dropdown-item">Edit akun admin</a>
						<!-- <div class="dropdown-divider"></div> -->
						<a href="../aksi/aksi_logout.php" class="dropdown-item dropdown-item--hover-red">Logout <span class="fa fa-sign-out"></span></a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<!-- sidebar -->
	<aside class="sidebar">
		<ul class="sidebar__nav">
			<li class="sidebar__item sidebar__item--active"><a class="nav-link" href="adminweb.php?module=home"><span class="fa fa-home"></span> Dashboard</a></li>

			<li class="sidebar__item"><a href="adminweb.php?module=brand"><span class="fa fa-th-large"></span> Data Brand</a></li>
			
			<li class="sidebar__item"><a href="adminweb.php?module=kabupaten"><span class="fa fa-th-large"></span> Data Alamat Kabupaten</a></li>
			<li class="sidebar__item"><a href="adminweb.php?module=produk"><span class="fa fa-bar-chart-o"></span> Data Produk</a></li>
			<li class="sidebar__item"><a class="sidebar__btn-dropdown" href="#"><span class="fa fa-building"></span> Transaksi</a>
				<ul class="sidebar__dropdown">
					<li class="sidebar__dropdown-item"><a href="adminweb.php?module=rekber">Konfirmasi Rekber </a></li>
					<li class="sidebar__dropdown-item"><a href="adminweb.php?module=pembayaran">Konfirmasi Pembayaran </a></li>
		
				
				</ul>
			</li>
			<li class="sidebar__item"><a class="sidebar__btn-dropdown" href="#"><span class="fa fa-building"></span> Data User</a>
				<ul class="sidebar__dropdown">
					<li class="sidebar__dropdown-item"><a href="adminweb.php?module=user_pembeli">User Pembeli </a></li>
					<li class="sidebar__dropdown-item"><a href="adminweb.php?module=user_penjual">User Penjual</a></li>
				
				</ul>
			</li>


			<li class="sidebar__item"><a class="sidebar__btn-dropdown" href="#"><span class="fa fa-building"></span> Cetak Laporan</a>
				<ul class="sidebar__dropdown">
					<li class="sidebar__dropdown-item"><a href="adminweb.php?module=cetak_transaksi">Cetak Transaksi </a></li>
		
				
				</ul>
			</li>
		
	
			</li>

	
		
		</ul>
	</aside>


	<?php    
            if ($_GET['module'] == 'home') {
                include "module/home/home.php";
                   	                 
            } elseif ($_GET['module'] == 'brand') {
                include "module/brand/list_brand.php";
            } elseif ($_GET['module'] == 'tambah_brand') {
                include "module/brand/form_tambah.php";
            } elseif ($_GET['module'] == 'edit_brand') {
				include "module/brand/form_edit.php";
				
			} elseif ($_GET['module'] == 'user_pembeli') {
                include "module/user_pembeli/list_user.php";
            } elseif ($_GET['module'] == 'edit_status') {
				include "module/user_pembeli/detail_user.php";
				
			} elseif ($_GET['module'] == 'user_penjual') {
                include "module/user_penjual/list_user.php";
            } elseif ($_GET['module'] == 'edit_status') {
                include "module/user_penjual/detail_user.php";


			} elseif ($_GET['module'] == 'kabupaten') {
                include "module/kabupaten/list_kabupaten.php";
            } elseif ($_GET['module'] == 'tambah_kabupaten') {
                include "module/kabupaten/form_tambah.php";
            } elseif ($_GET['module'] == 'edit_kabupaten') {
				include "module/kabupaten/form_edit.php";
				
			} elseif ($_GET['module'] == 'produk') {
                include "module/produk/list_produk.php";
            } elseif ($_GET['module'] == 'detail_produk') {
                include "module/produk/detail_produk.php";

			} elseif ($_GET['module'] == 'rekber') {
				include "module/rekber/list_konfirm.php";
			} elseif ($_GET['module'] == 'pembayaran') {
				include "module/pembayaran/list_pembayaran.php";
			} elseif ($_GET['module'] == 'detail_pembayaran') {
				include "module/pembayaran/detail_pembayaran.php";
			
			} elseif ($_GET['module'] == 'cetak_transaksi') {
				include "module/cetak_transaksi/list_transaksi.php";
			} elseif ($_GET['module'] == 'detail_transaksi') {
				include "module/cetak_transaksi/detail_transaksi.php";
				
			} elseif ($_GET['module'] == 'admin') {
				include "module/admin/detail_user.php";

            } else {
                include "module/home/home.php";
            }

        ?>

	<!-- main -->


	<!-- footer -->
	<footer class="footer footer--ml-sidebar-width">

	</footer>

	<!-- jQuery first, then Bootstrap JS, and Reza Admin JS-->
    <script src="dist/js/jquery-3.5.1.slim.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/reza-admin.min.js"></script>

    <!-- Optional Javascript -->
    <script src="plugins/Chart.js/Chart.min.js"></script>

	<script type="text/javascript">
		// visitor charts
		const visitorChart = document.querySelector("#visitor_chart").getContext('2d');
		let configVisitorChart = {
			type: 'line',
		    data: {
		        labels: ['Sunday, 11','Monday, 12','Tuesday, 13','Wednesday, 14','Thursday, 15','Friday, 16'],
		        datasets: [{
		            label: 'Visitors',
		            data: [10,6,7,5,1,14],
		            fill: 'origin',
		            backgroundColor: 'rgba(37,151,224,.7)',
		            borderColor: '#2597e0'
		        }]
		    },
		    options: {
		    	maintainAspectRatio: false,
		    	legend: {
		    		display: false,
		        },
		        tooltips: {
                    titleFontFamily: 'sans-serif',
                    bodyFontFamily: 'sans-serif',
                    backgroundColor: '#fff',
                    titleFontColor: '#333',
                    bodyFontColor: '#333',
                    borderColor: '#e2e2e2',
                    borderWidth: '1',
                }
		    }
		}
		new Chart(visitorChart, configVisitorChart);

		// browser usage
		const browserUsageChart = document.querySelector("#browser_usage_chart").getContext('2d');
		let configBrowserUsageChart = {
			type: 'pie',
		    data: {
		        labels: ['Chrome','Mozilla','Uc Browser','Opera Mini'],
		        datasets: [{
		            data: [10,6,7,5],
		            backgroundColor: [
		            	"#1bd741",
	                    "#2597e0",
	                    "#f9a022",
	                    "#dd2525"
		            ]
		        }]
		    },
		    options: {
		    	maintainAspectRatio: false,
		    	legend: {
		    		display: true
		        },
		        tooltips: {
                    titleFontFamily: 'sans-serif',
                    bodyFontFamily: 'sans-serif',
                    backgroundColor: '#fff',
                    titleFontColor: '#333',
                    bodyFontColor: '#333',
                    borderColor: '#e2e2e2',
                    borderWidth: '1',
                }
		    }
		}
		new Chart(browserUsageChart, configBrowserUsageChart);

		// show more btn
		const showMoreBtn = document.querySelector("a.show-more-btn");
		if(showMoreBtn !== null) {
			showMoreBtn.addEventListener('click', function(e) {
				// not aktifkan fungsi default link
				e.preventDefault();

				let targetShowBtnMore = e.target;
				if(!targetShowBtnMore.classList.contains("show-more-btn")) targetShowBtnMore = e.target.parentElement;
				if(targetShowBtnMore.classList.contains("show-more-btn")) {
					targetShowBtnMore.nextElementSibling.classList.remove("d-none");
					setTimeout(function(){
						targetShowBtnMore.nextElementSibling.classList.add("d-none");
					}, 1000);
				}
			});
		}
	</script>
		<script src="date/dist/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript">
		$(function() {
		  $("#dari").datepicker({
		format : 'yyyy-mm-dd',
		autoclose: true,
		todayHightlight: true,
		  });
		});
		</script>
			<script type="text/javascript">
		$(function() {
		  $("#sampai").datepicker({
			format : 'yyyy-mm-dd',
		autoclose: true,
		todayHightlight: true,
		  });
		});
		</script>
</body>
</html>

<?php
}
?>

