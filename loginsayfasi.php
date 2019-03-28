<?php  require_once("header.php");?>
        <div class="container"  > 
            <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="card bg-light mt-5">
                                <div class="card-title bg-primary text-white mt-5">
                                    <h3 class="text-center py-2"> Giriş Sayfası</h3>                        
                                </div>   
                                <!-- Kullanıcı adı ve şifre girmeye zorunlu kılmak --> 
                                <?php
                                        if(isset($_GET['empty']))
                                        {
                                            $message=$_GET['empty'];
                                            $message="Kullanıcı Adı ve Şifre girmelisiniz..."    
                                ?>
                                        <div class="alert alert-danger text-center"><?php echo $message ?></div>
                                <?php
                                     }
                                ?>
                                
                                <!-- Kullanıcı var mı kontrolu --> 
                                <?php
                                        if(isset($_GET['tanimsiz']))
                                        {
                                            $message=$_GET['tanimsiz'];
                                            $message="Tanımsız kullanıcı"    
                                            
                                ?>
                                        <div class="alert alert-danger text-center"><?php echo $message ?> </div>
                                <?php
                                     }
                                ?>
                                <div class="card-body">
                                        <form action="includes/login.php" method="POST">
                                            <input type="text" name="kullaniciad" placeholder="Kullanıcı adı veya Mail Adresi giriniz" class="form-control my-2">  
                                            <input type="password" name="sifre" placeholder="Şifre" class="form-control my-2">   
                                            <button class="btn btn-success mt-3" name="login"> Giriş Yap</button>
                                        </form>
                                </div>  
                        </div>
                    </div>
            </div>
          </div>
<?php require_once("footer.php"); ?>



