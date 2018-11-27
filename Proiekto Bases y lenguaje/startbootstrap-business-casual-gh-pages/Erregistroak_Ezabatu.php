<!DOCTYPE html>
    <?php session_start(); ?>
    <html lang="en">

      <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Pans & cosas</title>

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

            </div>
          </div>
        </nav>

        <section class="page-section about-heading">
              <div class="button" align="center">
                  <a href="Erregistroak.php"><input type="submit" class="button_active" value="Erregistro_Guztiak_Ikusi"></a>
                  <a href="Erregistroak_Gehitu.php"><input type="submit" class="button_active" value="Erregistroak_Gehitu_eta_Ezabatu"></a>
                  <a href="Erregistroak_Ezabatu.php"><input type="submit" class="button_active" value="Erregistroak_Eguneratu"></a>
              </div>
        </section>



        </style>

        		<h2>Ogien informazioa</h2>

            <style type="text/css">
            		#content tr td{
            			/*border: 1px solid green;*/
            			color: white;
            			text-align: center;
            			border-bottom: 1px solid white;
            			padding-bottom: 4px;
            		}
            		#content tr th{
            			/*border: 1px solid green;*/
            			padding-bottom: 30px;
            			padding-left: 25px;
            			padding-right: 25px;
            			color: white;
            			font-size: 22px;
                  text-align: center;
            		}
            		#content{
            			/*border: 3px solid green;*/
            			width: auto;
            		}
            		#izena tr td{
            			font-size: 30px;
            			color: white;
            		}
            		#izena input{
            			display: inline-block;
            			font-size: 25px;
            		}
            		#izena, input{
            			display: inline-block;
            		}
            		h2{
            			text-align: center;
            			color: white;
            			font-size: 30px;
            		}

            		#input-custom{
            			width: 120px;
            			text-align: center
            		}
            		#input-custom-id{
            			width: 140px;
            			text-align: center;
            		}
                #input-custom-id2{
                  width: 100px;
                  text-align: center;
                }
            		#input-custom-email{
            			width: 200px;
            			text-align: center;
            		}
            		#input-custom-posta{
            			width: 100px;
            			text-align: center;
            		}
            		#input-custom-mug-nan{
            			width: 140px;
            			text-align: center;
            		}
            		</style>

                <center>
                		<form action="Erregistroak_Ezabatu.php" method= "post">
                		<table id="izena">
                			<tr>
                				<td>IZENA:</td>
                				<td> <input type="text" name="Nombre"> </td>
                				<td><input id="bidali" type="image" src="img/Bilatu.png" width="50" name="save" value="Aurkitu"></td>
                			</tr>
                		</table>
                		</form>
                	</center>


        		<?php
              error_reporting(E_ALL ^ E_NOTICE);
        			include("PHP/Konexioa.php");
        			$link=ConnectDataBase();
        			$Nombre=$_POST["Nombre"];

            	$result=mysqli_query($link,"SELECT * FROM `ogiak` where Izena = '$Nombre'");
            		?>
            		<form action="PHP/Update.php" method= "post">
            			<table id="content" align="center">
                    <tr>
                      <th>Izena</th>
                      <th>Prezioa</th>
                      <th>Vegano</th>
                      <th>Stock</th>

            				<th></th>
            				<th></th>
            			</tr>
            			<?php
            				while($row = mysqli_fetch_array($result))
            				{
            					echo '

            							<tr>
            					   <td><input id="input-custom-id" type="text" name="Izena" value="'.$row['Izena'].'"></td>'.
            						'<td><input id="input-custom-mug-nan" type="number" name="prezioa" value="'.$row['prezioa'].'"></td>'.
            						'<td><input id="input-custom" type="number" name="vegano" value="'.$row['vegano'].'"></td>'.
            						'<td><input id="input-custom" type="number" name="stock" value="'.$row['stock'].'"></td>'.
            						'<td><input type="image" src="img/Gorde.png" width="25" name="save"></td>
            						</tr>
            						';
            				}
            					mysqli_free_result($result);
            			?>
            			</table>
            		</form>
        		</table>


<!-- ----------------------------------------------------------------->
<br><br>
<h2>Bolluen informazioa</h2>

<style type="text/css">
    #content tr td{
      /*border: 1px solid green;*/
      color: white;
      text-align: center;
      border-bottom: 1px solid white;
      padding-bottom: 4px;
    }
    #content tr th{
      /*border: 1px solid green;*/
      padding-bottom: 30px;
      padding-left: 25px;
      padding-right: 25px;
      color: white;
      font-size: 22px;
      text-align: center;
    }
    #content{
      /*border: 3px solid green;*/
      width: auto;
    }
    #izena tr td{
      font-size: 30px;
      color: white;
    }
    #izena input{
      display: inline-block;
      font-size: 25px;
    }
    #izena, input{
      display: inline-block;
    }
    h2{
      text-align: center;
      color: white;
      font-size: 30px;
    }

    #input-custom{
      width: 120px;
      text-align: center
    }
    #input-custom-id{
      width: 140px;
      text-align: center;
    }
    #input-custom-id2{
      width: 100px;
      text-align: center;
    }
    #input-custom-email{
      width: 200px;
      text-align: center;
    }
    #input-custom-posta{
      width: 100px;
      text-align: center;
    }
    #input-custom-mug-nan{
      width: 140px;
      text-align: center;
    }
    </style>

    <center>
        <form action="Erregistroak_Ezabatu.php" method= "post">
        <table id="izena">
          <tr>
            <td>IZENA:</td>
            <td> <input type="text" name="Izena"> </td>
            <td><input id="bidali" type="image" src="img/Bilatu.png" width="50" name="save" value="Aurkitu"></td>
          </tr>
        </table>
        </form>
      </center>


<?php
  error_reporting(E_ALL ^ E_NOTICE);

  $link=ConnectDataBase();
  $Nombre=$_POST["Izena"];

  $result=mysqli_query($link,"SELECT * FROM `bolleria` where Izena = '$Nombre'");
    ?>
    <form action="PHP/UpdateArmak.php" method= "post">
      <table id="content" align="center">
        <tr>
          <th>Izena</th>
          <th>Vegano</th>
          <th>Prezioa</th>
          <th>Stock</th>
        <th></th>
        <th></th>
      </tr>
      <?php
        while($row = mysqli_fetch_array($result))
        {
          echo '

              <tr>
             <td><input id="input-custom-id" type="text" name="Izena" value="'.$row['Izena'].'"></td>'.
            '<td><input id="input-custom-mug-nan" type="number" name="vegano" value="'.$row['vegano'].'"></td>'.
            '<td><input id="input-custom" type="number" name="prezioa" value="'.$row['prezioa'].'"></td>'.
            '<td><input id="input-custom" type="number" name="stock" value="'.$row['stock'].'"></td>'.
            '<td><input type="image" src="img/Gorde.png" width="25" name="save"></td>
            </tr>
            ';
        }
          mysqli_free_result($result);
      ?>
      </table>
    </form>
</table>
<br><br>
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      </body>

    </html>
