<?php

$servername = "localhost";
$username = "sory";
$password = "sory";
$dbname = "supervision";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM vitesse";
$result = $conn->query(" select vitesse, created_at from vitesse where train='Train 2' order by id desc limit 50");

if (!$result)
{
	printf("Message d'erreur : %s\n", $conn->error);
}

mysqli_close($conn);

?>


<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Supervision des trains LMS</title>
  </head>
  <body>
	  <nav class="navbar navbar-dark bg-primary">
		  <div class="container">
			  <a class="navbar-brand" href="index.php">Trains LMS</a>
			  <ul class="nav justify-content-end">
				<li class="nav-item">
					  <a class="nav-link  text-white" href="index.php">Informations</a>
				</li>
              <li class="nav-item">
                <a class="nav-link text-white" href="parametrage_train1.php">Parametrage</a>
              </li>
              <li class="nav-item bg-success">
                <a class="nav-link text-white" href="historique.php">Historique</a>
              </li>
            </ul>
        </div>
      </nav>
    <div class="container text-center">
      <h2 class="text-center my-5 bg-success text-white">Historique</h2>
      <div class="row justify-content-center">
        <div class="col-6 my-3">
			<ul class="nav nav-pills nav-fill bg-primary ">
            <li class="nav-item">
              <a class="nav-link btn btn-success" href="historique_vit_1.php">HIstorique Vitesse</a>
            </li>
            <!--
            <li class="nav-item">
              <a class="nav-link text-white" href="historique_arret.php">HIstorique Arret</a>
            </li>
            -->
          </ul>
          <ul class="nav nav-pills nav-fill bg-primary my-5">
            <li class="nav-item">
              <a class="nav-link text-white" href="historique_vit_1.php">Train 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-success" href="historique_vit_2.php">Train 2</a>
            </li>
          </ul>
			<h3 class="my-5">Vitesse</h3>
			<table class="table table-hover table-dark">
				<tbody>
					<?php 
						while($row = mysqli_fetch_array($result)){
							echo "<tr><td>".$row['created_at']."</td><td>".$row['vitesse']."PWM</td></tr>";
						}
					?>
				</tbody>
			</table>
        </div>
      </div>
    </div>
  </body>
</html>

