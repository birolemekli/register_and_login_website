<?php
    session_start();
    require_once('connection.php');
    if(isset($_POST['login']))
    {
        # Kullanıcı adı şifre girmeye zorlama
        if(empty($_POST['kullaniciad']) || empty($_POST['sifre']))
        {
            header("location: ../loginsayfasi.php?empty");
            exit();
        }
        else
        {

            $kullaniciadi=mysqli_real_escape_string($con,$_POST['kullaniciad']);
            $sifre=mysqli_real_escape_string($con,$_POST['sifre']);
            $query="select * from users where KULLANICIADI='".$kullaniciadi."' and SIFRE='".$sifre."'";

            $result=mysqli_query($con,$query);

            # Kullanıcı adı ve şifre veritabanında varsa sorgunun sonucunun diziye dönüştürülmesi
            if ($row=mysqli_fetch_assoc($result))
            {
                $_SESSION['ID']=$row['ID'];
                $_SESSION['AD']=$row['AD'];
                $_SESSION['SOYAD']=$row['SOYAD'];
                $_SESSION['EMAIL']=$row['EMAIL'];
                $_SESSION['KULLANICIADI']=$row['KULLANICIADI'];
                header("location: ../account.php?well");
            }
            else
            {
                # Kullanıcı ad veya şifre kontrolü başarısız olursa yönlendirme
                header("location: ../loginsayfasi.php?tanimsiz");
                exit();
            }
        }
    }
    else
    {
        header("location: ../loginsayfasi.php");
        exit();
    }
?>