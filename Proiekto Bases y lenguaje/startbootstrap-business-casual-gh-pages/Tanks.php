<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pans & Cosas</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->


    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">World of Tanks</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul id="logoa">
          <li>
              <a href="index.php"> 
                <img src="img/Ogia.png" width="100" height="100"> 
              </a>
            </li>
          </ul>

          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Hasiera
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="Tanks.php">Produktuak</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="Weapons.php">Informazioa</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="About_us.php">Nortzuk gara</a>
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

    <section class="page-section">
      <div class="container">
        <div class="product-item">

            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
              <h2 class="section-heading mb-4">
                Tostada
              </h2>
            </div>

          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/tostada.png" style="width:300px; height:4 00px;" alt="">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0" align ="center">Deliciosas tostadas de gran tamaño para servir sobre ellas todo tipo de bocados. Proceden de una masa extra hidratada de larga fermentación con masa madre. El ideal para los amantes de la rebanada crujiente.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section">
      <div class="container">
        <div class="product-item">

            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
              <h2 class="section-heading mb-4">
                Hanburgesa ogia
              </h2>
            </div>

          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/burger.png"style="width:250px; height:300px; alt="">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0" align ="center">Para los fanáticos de la hamburguesa que saben que una buena carne, con ingredientes de primera, no se puede acompañar de un pan cualquiera. Nuestra Burger Clásica ofrece un pan exquisito con toda la resistencia que necesitas para rellenar tu hamburguesa con tus ingredientes preferidos y todo el sabor del pan artesano y fresco.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section">
      <div class="container">
        <div class="product-item">

            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
              <h2 class="section-heading mb-4">
                Baguette
              </h2>
            </div>

          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/baguette.png" alt="">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0" align ="center">Una baguette​ (en francés literalmente 'varita') o baguete​ es una variedad de pan que se caracteriza por emplear harina de trigo, por ser mucho más largo que ancho y por su corteza crujiente. Es ideal para la elaboración de bocadillos.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section">
      <div class="container">
        <div class="product-item">

            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
              <h2 class="section-heading mb-4">
                Croissant
              </h2>
            </div>

          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/croisant.png" alt="">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0" align ="center">El cruasán, ​ también escrito abundantemente en su grafía sin adaptar croissant, es una pieza de panadería de origen austriaco, cuya versión hojaldrada se desarrolló en Francia. Está hecho con una masa de hojaldre específica que contiene levadura, mantequilla o margarina.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
