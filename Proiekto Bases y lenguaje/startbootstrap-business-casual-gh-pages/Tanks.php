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

    <section class="page-section">
      <div class="container">
        <div class="product-item">

            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
              <h2 class="section-heading mb-4">
                Panzer VI Tiger (Alemania)
              </h2>
            </div>

          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/Tiger.png" alt="">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0" align ="center">Panzerkampfwagen VI Tiger Ausf. E, Alemaniako tanke astun bat izan zen. 1942tik Bigarren Mundu Gerrako Afrika eta Europako fronteetan erabilia izan zen. Berez, Hirugarren Reichak Sobietar Batasuna bereganatzeko Bizargorri Operazioaren lehenbiziko hilabeteetan T-34 eta KV-1 sobietar tankeez osatutako ezusteko erresistentzia blindatuari erantzun emateko asmoz sortua izan zen, tankearen Tiger ezizena, Ferdinand Porsche ingeniariak eman zion, erromatar zenbakia berriz, ondorengo Panzer VI Tiger II tanketik bereizteko gehitu zitzaion.</p>
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
                M4 Sherman (EEUU)
              </h2>
            </div>

          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/M4_Sherman.png" alt="">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0" align ="center">M4 Sherman, ofizialki Medium Tank, M4, AEBeyako tanke bat izan zen. 1940an diseinatua eta 1941-1945 artean ekoitzia izan zen, eta 1941-1955 artean zerbitzuan egon zen. Bigarren Mundu Gerran AEBej nahiz Aliatuek erabili izan zuten. Koreako Gerran ere erabilia izan zen.
                  Tankearen ekoizpenak 50.100 unitate gainditu zituen. Erresuma Batuan M4 tankeak "Sherman" ezizena jaso zuen, William Tecumseh Sherman jeneralaren omenez, herrialde honetan estatubatuar tankeei AEBetako Gerra Zibileko jeneralen izenak ipintzeko ohitura baizegoen, ondoren AEBetan ere izen hori erabiltzen hasi ziren.</p>
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
                T-34 (URSS)
              </h2>
            </div>

          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/t34.png" alt="">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0" align ="center">T-34, Sobietar Batasunak ekoitzitako tanke bat izan zen. 1940-1958 artean 84.0701 unitate inguru ekoitzi ziren.
                T-26 modeloa ordezkatzeko asmoz garatu zen. Bigarren Mundu Gerran Sobietar Batasuneko su potentzia orekatuena, eta mugikortasun eta babes onena zuen tankea izan zen. 1943eko amaieraldera, T-34-85 bertsio hobetua ekoitzi zen, potentzia handiagoko kanoiarekin.</p>
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
                Churchill (Britaina Handia)
              </h2>
            </div>

          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/churchill.png" alt="">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0" align ="center">Infantry Tank Mk IV (A22) (Bigarren Mundu Gerrako Tank, Infantry, A22) britainiarren tanke astuna izan zen, bere armadura lodiagatik, xasis luze luzea eta bogie anitzek inguratuta zeuden. beldarrak eta haien erabilera ibilgailu espezializatu espezializatuen oinarri gisa. Winston Churchill-en omenez izendatu zuten tanke multzo hau, Erresuma Batuko lehen ministroa eta Defentsa ministroa garai hartan, baina depositua garapenean parte hartu zuen lehen gerra garaian.</p>
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
