<!DOCTYPE html>
    <?php session_start(); ?>
    <html lang="en">

      <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>World of Tanks</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/business-casual.min.css" rel="stylesheet">

      </head>

      <body>

        <h1 class="site-heading text-center text-white d-none d-lg-block">
          <span class="site-heading-lower">World of Tanks</span>
        </h1>

        <!-- Navigation -->


        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
          <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">World of Tanks</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item active px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="Tanks.php">Tanks</a>
                </li>
                <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="Weapons.php">Weapons</a>
                </li>
                <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="About_us.php">About us</a>
                </li>

              </ul>

                <?php
                  if (isset($_SESSION['user_id'])){
                      if (37==($_SESSION['user_id'])){
                 ?>
                 <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="info.php">Info</a>
                </li>
                <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="Erregistroak.php">Erregistroak</a>
                </li>
                </ul>
                <li>
                  <a href="http:PHP/logout.php"><img src="img/SesioaItxi.png" width="50" height="50"></a>
                </li>
                 <?php
               }
             }
                 ?>


                <?php

                if (isset($_SESSION['user_id'])){
                  if (37!=($_SESSION['user_id'])){

                 ?>
                 <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="info.php">Info</a>
                </li>
                </ul>
                <li>
                  <a href="http:PHP/logout.php"><img src="img/SesioaItxi.png" width="50" height="50"></a>
                </li>

                <?php
              }
            }
                ?>



              <?php

                    if (!isset($_SESSION['user_id'])){

              ?>

              <ul class = "nav navbar-nav navbar-rigth">
                <li>
                  <a href="http:PHP/login.php"><img src="img/SesioaHasi.png" width="50" height="50"></a>
                </li>
              </ul>

              <?php
                }
              ?>

            </div>
          </div>
        </nav>

<br><br>
<h2 align ="center"> INFORMAZIOA: </h2>
<br>


        <center>
            <form action="info.php" method= "post">
            <table id="izena">
              <tr>
                <td>Fabrikantea:</td>
                <td> <input type="text" name="Nombre"> </td>
                <td><input id="bidali" type="image" src="img/Bilatu.png" width="50" name="save" value="Aurkitu"></td>
              </tr>
            </table>
            </form>
            </center>
            <br><br>

            <h2 align="center">Tankeen informazioa</h2>
            <br>
        <?php
              error_reporting(E_ALL ^ E_NOTICE);
              include("PHP/Konexioa.php");
              $link=ConnectDataBase();
              $Nombre=$_POST["Nombre"];
              $result=mysqli_query($link,"SELECT * FROM `tanques` where Fabri = '$Nombre'");
            ?>

            <style type="text/css">
                     table tr td{
                       border: 1px solid white;
                       text-align: center;
                     }
                     table tr th{
                       border: 1px solid white;
                       text-align: center;
                     }
                     table{
                       border: 3px solid white;
                     }
            </style>

            <table align = "center">
              <tr>
                <th>Izena</th>
                <th>Herrialdea</th>
                <th>Mota</th>
                <th>Kainoia</th>
                <th>Serbitzu Urtea</th>
                <th>Kantitate Sortuak</th>
                <th>Pisua</th>
                <th>Blindaje</th>
                <th>Arma Printzipala</th>
                <th>Arma Sekundarioa</th>
                <th> Kostua </th>
                <th>Fabrikantea</th>
              </tr>

              <?php
                while($row = mysqli_fetch_array($result))
                {
                  printf("
                      <tr>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                      </tr>
                    " , $row["Nombre"], $row["Pais"], $row["Tipo"], $row["CalCanon"], $row["Anodeservicio"], $row["Cantidadcreados"], $row["Peso"], $row["Blindaje"], $row["ArmaPrimaria"], $row["ArmaSecundaria"],$row["CostePorUnidad"],$row["Fabri"]);
                }
                  mysqli_free_result($result);

              ?>
            </table>
            <br><br>
            <h2 align="center">Armen informazioa</h2>
            <br>
            <?php

                $result=mysqli_query($link,"SELECT * FROM `armak` where Fabri = '$Nombre'");
                ?>

                <style type="text/css">
                         table tr td{
                           border: 1px solid white;
                           text-align: center;
                         }
                         table tr th{
                           border: 1px solid white;
                           text-align: center;
                         }
                         table{
                           border: 3px solid white;
                         }
                </style>

                <table align = "center">
                  <tr>
                    <th>Izena</th>
                    <th>Herrialdea</th>
                    <th>Urtea</th>
                    <th>Kostua</th>
                    <th>Fabrikantea</th>
                  </tr>

                  <?php
                    while($row = mysqli_fetch_array($result))
                    {
                      printf("
                          <tr>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%s</td>
                          </tr>
                        " , $row["Izena"], $row["Herrialdea"], $row["Urtea"], $row["Kostua"], $row["Fabri"]);
                    }
                      mysqli_free_result($result);
                      mysqli_close($link);
                  ?>
                </table>



        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      </body>

    </html>
