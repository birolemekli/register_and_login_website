<?php
    $servername="localhost"; #server adres
    $username=""; #sql kullanıcı adı
    $password=""; #sql kullanıcı şifre
    $db=""; # db adı

    #Mysql baglantisi
    $con=mysqli_connect($servername,$username,$password,$db);

    if (!$con)
    {
        die("Connection Error".mysqli_error());
    }
?>