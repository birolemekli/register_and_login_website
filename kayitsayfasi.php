<?php  require_once("header.php");?>
 <div class="container"  > 
                <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="card bg-light mt-5">
                                    <div class="card-title bg-primary text-white mt-5">
                                        <h3 class="text-center py-2"> Kayıt Sayfası</h3>                        
                                    </div>   

                                        <!-- Boş Mu Kontrol -->       
                                            <?php
                                                    if(isset($_GET['emp']))
                                                {
                                                    $message=$_GET['emp'];
                                                    $message="Tüm değerleri doldurmanız gerekmektedir.";

                                                ?>
                                                <div class="alert alert-danger text-center"> <?php echo $message ?> </div>
                                                <?php
                                                }
                                                 ?>


                                            <!-- Ad Soyad Karakter Kontrol -->       
                                            <?php
                                                if(isset($_GET['invalid']))
                                                {
                                                    $message=$_GET['invalid'];
                                                    $message="Ad ve Soyad a-z A-Z aralığında olmak zorudnadır.";

                                                ?>
                                                <div class="alert alert-danger text-center"> <?php echo $message ?> </div>
                                                <?php
                                                }
                                                 ?>

                                                 <!-- E Mail Kontrol -->       
                                                <?php
                                                if(isset($_GET['email']))
                                                {
                                                    $message=$_GET['email'];
                                                    $message="Mail formatına uygun bişey giriniz.";

                                                ?>
                                                <div class="alert alert-danger text-center"> <?php echo $message ?> </div>
                                                <?php
                                                }
                                                 ?>
                                                <!-- Kullanıcı var mı kontrol --> 
                                                <?php
                                                if(isset($_GET['user']))
                                                {
                                                    $message=$_GET['user'];
                                                    $message="Kullanıcı adı kullanımda.";

                                                ?>
                                                <div class="alert alert-danger text-center"> <?php echo $message ?> </div>
                                                <?php
                                                }
                                                 ?>
                                                
                                                <!-- E Mail  var mı Kontrol --> 
                                                <?php
                                                if(isset($_GET['Email']))
                                                {
                                                    $message=$_GET['Email'];
                                                    $message="E Mail adresi zaten kayıtlı.";

                                                ?>
                                                <div class="alert alert-danger text-center"> <?php echo $message ?> </div>
                                                <?php
                                                }
                                                 ?>

                                                <!-- Kayıt Başarılı --> 
                                                <?php
                                                if(isset($_GET['success']))
                                                {
                                                    $message=$_GET['success'];
                                                    $message="Kayıt Başarılı.";

                                                ?>
                                                <div class="alert alert-success text-center"> <?php echo $message ?> </div>
                                                <?php
                                                }
                                                 ?>
                                    <div class="card-body">
                                            <form action="includes/kayit.php" method="POST">
                                                <input type="text" name="AD" placeholder="Ad" class="form-control my-2">  
                                                <input type="text" name="SOYAD" placeholder="Soyad" class="form-control my-2">  
                                                <input type="text" name="EMAIL" placeholder="E Mail" class="form-control my-2">  
                                                <input type="text" name="KULLANICIADI" placeholder="KullanıcıAdı" class="form-control my-2">  
                                                <input type="password" name="SIFRE" placeholder="Şifre" class="form-control my-2">   
                                                <button class="btn btn-success mt-3" name="kayit"> Kayıt Ol</button>
                                            </form>
                                    </div>  
                        </div>
                    </div>
            </div>
          </div>
<?php require_once("footer.php"); ?>

