<?php

include "lib/koneksi.php";

if(empty($_SESSION['username']) and empty($_SESSION['password']))
{ echo "<script>alert('Anda Harus Login'); window.location = 'index.php'; </script>";
} else {
  $user = $_SESSION ['username'];
  $queryuser = mysqli_query ($koneksi, "select * from tbl_user WHERE username = '$user'");
  $hasilQuery = mysqli_fetch_array($queryuser);
  $id_user = $hasilQuery ['id_user'];
  $foto = $hasilQuery ['fotop'];
  $username = $hasilQuery ['username'];
  $tlp = $hasilQuery ['notlp'];
  $detail_alamat = $hasilQuery ['detail_alamat'];
  $nama = $hasilQuery ['nama_lengkap'];
  $email = $hasilQuery ['email'];
  $password = $hasilQuery ['password'];
  $fotop = $hasilQuery ['fotop'];
  $norek = $hasilQuery ['norek'];

?>

<div class="col-12">

                <!-- Main Content -->
                <div class="row">
                    <div class="col-12 mt-3 text-center text-uppercase">
                     
                    </div>
                </div>

                <main class="row">
                <div class="col-lg-10 mb-4 mx-auto">
                <form method="POST" enctype="multipart/form-data" action="aksi/aksi_update_profile.php">
                    <!-- Edukasi List -->
                    <div class="col-lg-10 bg-white mb-4 mx-auto">
                        <div class="list-group-item  ">
                        <?php 
                if ($nama == null) {
                    echo " <h4 class='text-center'> <strong>
                    Lengkapi Profile</strong></h4> ";
                } else {
                  echo " <h4 class='text-center'> <strong>
                  Edit Profile</strong></h4> ";
                }
                
                ?>
                           
                        </div>
                        <br>
                    <div class="row">
                         <div class="col-md-4 py-3 my-3 ">
                             <center> 
                         <?php
                          if ($foto == null) {
                            echo" <img id='imgView' src='https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png'  class='rounded-circle z-depth-5' width='70%' > ";
                           
                          } else {
                            echo "<img id='imgView' src='images/foto_profile/$foto'  class='rounded-circle z-depth-5' width='70%' >";
                         
                          }
                         ?>
                            

                             <!-- <img src="no-image.png" id="imgView" class="rounded-circle z-depth-5" width='70%' >   -->
                            <!-- <img id='preview'class="rounded-circle z-depth-5" src='https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png' width='70%' class='border'> -->
                      </center>
                      <br>
                  <div class="col-md-11 mb-10 ">
                  <form action="aksi/aksi_register.php" method="post">
                    <label><strong>Upload Foto Profile</strong></label>
                      <div class="custom-file">
             
                        <input type="file" class="imgFile  custom-file-input" id="inputFile" name="fotop">
                       
                         <label class="custom-file-label" for="customFile">Choose file</label>
                         
                        </div>  
                      </div>
                        </div>
                     
                            <div class="col-md-7">
                                <div class="control-group form-group">
                                <input type="hidden" name="id_user" value="<?= $id_user; ?>">
                                    <div class="controls">
                                        <label><strong>Username</strong></label>
                                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?= $username; ?>" >
                                        <p class="help-block"></p>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>Email</strong></label>
                                        <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $email; ?>">
                                        <p class="help-block"></p>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>Password</strong></label>
                                        <input type="text" class="form-control" name="password" placeholder="Password" value="<?= $password; ?>">
                                        <p class="help-block"></p>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>Nama Lengkap</strong></label>
                                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="<?= $nama; ?>">
                                        <p class="help-block"></p>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>No Telepon</strong></label>
                                        <input rows="10" cols="100" class="form-control" id="tlp" name="tlp" placeholder="No Telpon" value="<?= $tlp; ?>">
                                        <p class="help-block"></p>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>Pilih Kabupaten</strong></label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="kabupaten">
                                        <option>-- Pilih Kabupaten --</option>
                                        <?php
                                        $sql_kabupaten = mysqli_query($koneksi, "SELECT * FROM tbl_kabupaten");
                                        while ($kb = (mysqli_fetch_array($sql_kabupaten))) {
                                        ?>
                                            <option value="<?= $kb['id_kabupaten']; ?>"><?= $kb['nama_kabupaten']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>No Rekening </strong><br><i>(Contoh : kode bank + No Rek. )</i></label>
                                        <input rows="10" cols="100" class="form-control" id="norek" name="norek" placeholder="No Rekening" value="<?= $norek; ?>">
                                        <p class="help-block"></p>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>Detail Alamat</strong></label>
                                        <textarea rows="10" cols="100" class="form-control" id="detail_alamat" name="detail_alamat" placeholder="Detail Alamat" value="<?= $password; ?>">

                                        </textarea>
                                        <p class="help-block"></p>
                                    </div>
                                    <button type="button" class="btn btn-secondary">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                 </div>
                                 
                                    </div>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
              
                </form>
            
                
                </main>
                <!-- Main Content -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $("#inputFile").change(function(event) {  
      fadeInAdd();
      getURL(this);    
    });

    $("#inputFile").on('click',function(event){
      fadeInAdd();
    });

    function getURL(input) {    
      if (input.files && input.files[0]) {   
        var reader = new FileReader();
        var filename = $("#inputFile").val();
        filename = filename.substring(filename.lastIndexOf('\\')+1);
        reader.onload = function(e) {
          debugger;      
          $('#imgView').attr('src', e.target.result);
          $('#imgView').hide();
          $('#imgView').fadeIn(500);      
          $('.custom-file-label').text(filename);             
        }
        reader.readAsDataURL(input.files[0]);    
      }
      $(".alert").removeClass("loadAnimate").hide();
    }

    function fadeInAdd(){
      fadeInAlert();  
    }
    function fadeInAlert(text){
      $(".alert").text(text).addClass("loadAnimate");  
    }
</script>
<?php
}
?>