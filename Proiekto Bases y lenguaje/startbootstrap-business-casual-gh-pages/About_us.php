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
              <a href="http:PHP/index.php"><img src="img/SesioaItxi.png" width="50" height="50"></a>
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
              <a href="http:PHP/index.php"><img src="img/SesioaItxi.png" width="50" height="50"></a>
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
              <a href="http:PHP/index.php"><img src="img/SesioaHasi.png" width="50" height="50"></a>
            </li>
          </ul>

          <?php
            }
          ?>

        </div>
      </div>
    </nav>



    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5" style="color:black">
                <span class="section-heading-lower">ORDUTEGIA</span>
              </h2>
              <ul style="color:black" class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Igandea
                  <span class="ml-auto">ITXITA</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Astelehena
                  <span class="ml-auto">9:00h - 20:00h</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Azteartea
                  <span class="ml-auto">9:00h - 20:00h</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Azteazkena
                  <span class="ml-auto">9:00h - 20:00h</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Osteguna
                  <span class="ml-auto">9:00h - 20:00h</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Ostirala
                  <span class="ml-auto">9:00h - 20:00h</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Larunbata
                  <span class="ml-auto">9:00h - 18:00h</span>
                </li>

              </ul>
              <p class="address mb-5">
                  <font color="black">
                  <strong>Txonta Kalea, Zubi azpian</strong>
                  <br>
                  20600, Eibar
                </font>
              </p>
              <p class="mb-0">
                <small>
                  <font color="black"> Serbitzu teknikoa </font>
                </small>
                <br>
                <font color="black">
                943901731
              </font>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
4



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>


  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
