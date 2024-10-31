<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>PreBaMa</title>

    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid">

        <div class="row min-vh-100">
            <div class="col-12 ">
                <header class="row">
                    <!-- Top Nav -->
                    <div class="col-12 bg-dark py-2 d-md-block d-none">
                        <div class="row">
                            <div class="col-auto mr-auto">
                                <ul class="top-nav">
                           
                            
                              
                             
                                
                              
                            </div>
                            <div class="col-auto ml-auto ">
                                <ul class="top-nav ">

                                <?php

                                    include "lib/koneksi.php";

                                    if(empty($_SESSION['username']) and empty($_SESSION['password'])) { ?>
                                    <li>
                                    <button   type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalr"><i class="fas fa-user-edit mr-2"></i>Register</button>
                 
                                    <div class="modal fade" id="modalr" role="dialog" arialabelledby = "modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-tittle">Register</h3>
                                                                <button type="button" class="close" data-dismiss = "modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                        <div class="col-sm-15">
                    
                                                        <div class="row">
                                                        <div class="col-12">
                                <form action="aksi/aksi_register.php" method="post">
                                    <div class="form-group">
                                        <label for="name">Username</label>
                                        <input type="text" id="name" name="username" class="form-control" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Re Password</label>
                                        <input type="password" id="repassword" name="repassword" class="form-control" placeholder="Password" required>
                                    </div>
                             
               <label>Pilih Akun </label>
                                    <div class="form-check">
             
         <input class="form-check-input" type="radio" name="level" value="penjual" checked />
         <label class="form-check-label" for="gridRadios1">
            Penjual
          </label>
        </div>
        <div class="form-check">
             
             <input class="form-check-input" type="radio" name="level" value="pembeli"  />
             <label class="form-check-label" for="gridRadios1">
                Pembeli
              </label>
            </div>
                  
                             
                                    <input type="hidden" id="status" name="status" value="aktif"  >
                                  
                                    <div class="form-group">
                               
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-dark">Register</button>
                                    </div>
                                </form>
                            </div>
                         </div>
                        </div>


                               
                                    <li>
                         
                                        <button   type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal"><i class="fas fa-sign-in-alt mr-2"></i>Login</button>
                                                <div class="modal fade" id="modal" role="dialog" arialabelledby = "modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-tittle">Login</h3>
                                                                <button type="button" class="close" data-dismiss = "modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                        <div class="col-sm-15">
                    
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <form action="aksi/aksi_login.php" method="post">
                                                                        <div class="form-group">
                                                                            <label for="email">Username</label>
                                                                            <input type="text" id="email" name="username" class="form-control" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="password">Password</label>
                                                                            <input type="password" id="password" name="password" class="form-control" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                  
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <button type="submit" class="btn btn-outline-dark">Login</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                    </li>

                                    </li>
                                                <?php
                                                } else {
                                                $user = $_SESSION ['username'];
                                                $queryuser_session = mysqli_query ($koneksi, "select * from tbl_user WHERE username = '$user'");
                                                $hasilQuery_session = mysqli_fetch_array($queryuser_session);
                                                $id_user_session = $hasilQuery_session ['id_user'];
                                                $level_user_session = $hasilQuery_session ['level'];
                                          
                                        
                                                $foto_session = $hasilQuery_session ['fotop'];
                                                
                                             

                                                ?>
                                                                                 
                                                                                <a href="aksi/aksi_logout.php"   type="button" class="btn btn-primary" ><i class="fas fa-sign-in-alt mr-2"></i>Log Out</a>
                                            <!-- <li class="nav-item dropdown ">     
                                                

                                            <img class="rounded-circle py-1 my-1 "  style="max-width:5%;"  src="images/foto_profile/
                                            data-holder-rendered="true" ><img src="https://img.icons8.com/metro/26/000000/expand-arrow.png"/>
                                              
                                                     <div class="dropdown-menu" aria-labelledby="electronics">
                                                     <a class="dropdown-item" href="category.html"><p class="text-dark">Profile</p></a>
                                       
                                                     <a class="dropdown-item" href="aksi/aksi_logout.php"><p class="text-dark">Log Out</p></a>
                                                
                                            </div>
                                    </li> -->
                            
                                    <?php } ?>
                                </ul>
                                
                            </div>
                        </div>
                        
                    </div>


                    
                    <!-- Top Nav -->

                    <!-- Header -->
                    <div class="col-12 bg-white pt-4">
                        <div class="row">
                        <div class="col-lg-auto">
                                <div class="site-logo text-center text-lg-left">
                                <a href="index.php">PreBaMa</a>
                                </div>
                            </div>
                            <div class="col-lg-5 mx-auto mt-4 mt-lg-0">
                                <form  method="POST"  action="pencarian.php">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control border-dark" name="search" placeholder="Search..." required>
                                            <div class="input-group-append">
                                                <button type="submit"  class="btn btn-outline-dark"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-1">
                                
                            <div class="nav-item dropdown ">
                                     
                            <?php

                                include "lib/koneksi.php";

                                if(empty($_SESSION['username']) and empty($_SESSION['password'])) { ?>        
                                <?php
                                                } else {
                                          
                                                

                                                ?>
                                                <img class="rounded-circle py-1 my-1  "  style="max-width:60%;"  src="images/foto_profile/<?= $foto_session; ?>"
                                                data-holder-rendered="true" >  <img src="https://img.icons8.com/metro/10/000000/expand-arrow.png"/>
                                                <div class="dropdown-menu dropdown-menu-right">
                        <a href="profile.php?id_user=<?=  $id_user_session; ?>" class="dropdown-item"><b>Profile</b></a>
                        <div class="dropdown-divider"></div>
                        <?php

if($level_user_session == 'penjual' ) {   ?>     
           <a href=profile.php?id_user=<?= $id_user_session; ?>" class="dropdown-item dropdown-item--hover-red"><b> Penjualan</b> <span class="fa fa-sign-out"></span></a>

<?php }

else {   ?>     
         <a href=pembelian.php?id_user=<?= $id_user_session; ?>" class="dropdown-item dropdown-item--hover-red"><b>Pembelian</b> <span class="fa fa-sign-out"></span></a>
<?php  } ?>  

                    
                       
                       
                        <div class="dropdown-divider"></div>
                        <a href="transaksi.php?id_user=<?= $id_user_session; ?>" class="dropdown-item dropdown-item--hover-red"><b>Transaksi</b><span class="fa fa-sign-out"></span></a>
                        <div class="dropdown-divider"></div>
						<a href="aksi/aksi_logout.php" class="dropdown-item dropdown-item--hover-red"><b>Logout</b><span class="fa fa-sign-out"></span></a>
					</div>

<!--                                                 
                                                         <div class="dropdown-menu" aria-labelledby="electronics">
                                                         <a class="dropdown-item" href="profile.php?id_user=<?=  $id_user_session; ?>"><p class="text-dark">Profile</p></a>
                                           
                                                         <a class="dropdown-item" href="aksi/aksi_logout.php"><p class="text-dark">Log Out</p></a>
                                                   
                                                </div> -->
                                                <?php } ?>
                                                </div>
                                           
                                  
                               
                            </div>
                        </div>

                        <!-- Nav -->
                        <div class="row">
                            <nav class="navbar navbar-expand-lg navbar-light bg-white col-12">
                                <button class="navbar-toggler d-lg-none border-0" type="button" data-toggle="collapse" data-target="#mainNav">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="mainNav">
                                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.php"><b>Home</b><span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="electronics" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Kategori</b></a>

                                            <div class="dropdown-menu" aria-labelledby="electronics">
                                            <?php 
                                        $querybrand = mysqli_query ($koneksi, "select * from tbl_kategori" );
                                        while ($hasilquerybrand = mysqli_fetch_array ($querybrand)){
                                            $id_kategori = $hasilquerybrand ['id_kategori'];

                                            ?>
                                                <a class="dropdown-item" href="produk_by_brand.php?id_brand=<?= $id_brand; ?>"><b><?php echo $hasilquerybrand ['nama_kategori']?></b></a>
                                           <?php } ?>
                                   
                                            </div>
                                        </li>
     
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Nav -->

                    </div>
                