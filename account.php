<?php

    require_once('header.php');
    if(isset($_GET['well']))
    {
        if($_SESSION['ID'])
        {
            echo '<div class="display-4 mt-5 text-center"> Hoşgeldin  </div>';
        }
        else
        {
            header("location: ../loginsayfasi.php");
            exit();
        }
    }
    else
    {
        header("location: ../loginsayfasi.php");
        exit();
    }
    require_once('footer.php');
?>
