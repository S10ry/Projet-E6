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
$result = $conn->query("select vitesse from vitesse where train='Train 1' order by id desc limit 1");

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
          <a class="navbar-brand" href="#">Trains LMS</a>
            <ul class="nav justify-content-end">
              <li class="nav-item bg-success">
                <a class="nav-link active text-white" href="index.php">Informations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="parametrage_train1.php">Parametrage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="historique_vit_1.php">Historique</a>
              </li>
            </ul>
        </div>
      </nav>
    <div class="container text-center">
      <h2 class="text-center mt-5 bg-success text-white"> Les informations liées au trafic </h2>
      <h3 class="my-5">Vitesse</h3>
      <table class="table table-hover table-dark">
        <tbody>
          <tr>
            <td><h4 class="text-left">Train 1</h4></td>
            <td><h4 class="text-right mr-5">
				<?php 
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo $row["vitesse"]; 
						}
						}
						else {
							echo "0 results";
							}
							?>PWM</h4></td>
          </tr>
          <tr>
            <td><h4 class="text-left">Train 2</h4></td>
            <td><h4 class="text-right mr-5">10PWM</h4></td>
          </tr>
        </tbody>
      </table>
      <h3 class="my-5">Nombre d'arrêt par tour</h3>
      <table class="table table-hover table-dark">
        <tbody>
          <tr>
            <td><h4 class="text-left">Train 1</h4></td>
            <td><h4 class="text-right mr-5">2 Arrêts</h4></td>
          </tr>
          <tr>
            <td><h4 class="text-left">Train 2</h4></td>
            <td><h4 class="text-right mr-5">1 Arrêt</h4></td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>


