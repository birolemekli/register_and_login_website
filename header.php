<?php session_start() ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assents/css/bootstrap.css">
    <title>Proje</title>
    
  </head>
  <body style="background:#CCC;">
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      
        <div class="container">
          <a href="index.php" class="navbar-brand"> <h3>Proje</h3></a>
            <div class="collapse navbar-collapse">
             <ul class="nav navbar ml-auto">
             <?php
                    if (isset($_SESSION['ID']))
                    {
                      echo '
                            <form action="includes/logout.php" method="POST">
                            <li class="nav-item"> <button type="submit" name="logout" class="btn btn-outline-light ">Çıkış</button></li>
                            </form>
                          ';
                    }
                    else
                    {
                          echo '
                                  <li class="nav-item">  <a href="loginsayfasi.php" class="btn btn-outline-light"> Giriş</a></li>
                                  <li class="nav-item">  <a href="kayitsayfasi.php" class="btn btn-outline-light ml-3"> Kayıt Ol</a></li>
                              ';
                    }
                  ?>
              </ul>
        </div>
      </nav>

      