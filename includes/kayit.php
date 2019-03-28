<?php

require_once('connection.php');

if(isset($_POST['kayit']))
{
    if(empty($_POST['AD']) || empty($_POST['SOYAD']) || empty($_POST['EMAIL']) || empty($_POST['KULLANICIADI']) || empty($_POST['EMAIL']) || empty($_POST['SIFRE']) )
    {
        header("location:../kayitsayfasi.php?emp");
        exit();
    }
    else
    {
        $AD=mysqli_real_escape_string($con,$_POST['AD']);
        $SOYAD=mysqli_real_escape_string($con,$_POST['SOYAD']);
        $EMAIL=mysqli_real_escape_string($con,$_POST['EMAIL']);
        $KULLANICIADI=mysqli_real_escape_string($con,$_POST['KULLANICIADI']);
        $SIFRE=mysqli_real_escape_string($con,$_POST['SIFRE']);
        
        # Ad ve soyad karakter kontrolü
        if(!preg_match("/^[a-zA-Z]*$/",$AD) || !preg_match("/^[a-zA-Z]*$/",$SOYAD) )
        {
            header("location: ../kayitsayfasi.php?invalid");
            exit();
        }
        else
        {
            # E mail adresi format kontrolü
            if(!filter_var($EMAIL,FILTER_VALIDATE_EMAIL))
            {
                header("location: ../kayitsayfasi.php?email");
                exit();

            }
            else
            {
                $query=" select * from users where KULLANICIADI='".$KULLANICIADI."'";
                $result=mysqli_query($con,$query);

                # Kullanıcı adı kontrolü
                if(mysqli_fetch_assoc($result))
                {
                    header("location: ../kayitsayfasi.php?user");
                    exit();
                }
                else
                {
                    # E mail kullanım kontrolü
                    $query="select * from users where EMAIL='".$EMAIL."'";
                    $result=mysqli_query($con,$query);

                    if (mysqli_fetch_assoc($result))
                    {
                        header("location: ../kayitsayfasi.php?Email");
                        exit();

                    }
                    else
                    {
                        # Tüm kontroller yapıldıktan sonra veritabanına kaydetme işlemi
                        #$hash = hash('sha256',$SIFRE);
                        $query=  "insert into users(AD,SOYAD,EMAIL,KULLANICIADI,SIFRE) values('$AD','$SOYAD','$EMAIL','$KULLANICIADI','$SIFRE')";
                        $result = mysqli_query($con,$query);
                        header("location: ../kayitsayfasi.php?success");
                        exit(); 
                    }
                }

            }

        }
    }
}
else
{
    header("location: ../index.php");
    exit();
}
?>
