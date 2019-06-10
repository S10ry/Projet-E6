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
              <li class="nav-item ">
                <a class="nav-link  text-white" href="index.php">Informations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="parametrage_train1.php">Parametrage</a>
              </li>
              <li class="nav-item bg-success">
                <a class="nav-link text-white" href="historique_vit_1.php">Historique</a>
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
              <a class="nav-link text-white" href="historique_vit_1.php">HIstorique Vitesse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-success" href="historique_arret.php">HIstorique Arret</a>
            </li>
          </ul>
			<h3 class="my-5">Vitesse</h3>
			<table class="table table-hover table-dark">
				<tbody>
					<tr>
						<td><h4 class="text-left">03/06/19 12:51:41</h4></td>
						<td><h4 class="text-left">Train 1</h4></td>
						<td><h4 class="text-right mr-5">10KM</td>
					</tr>
					<tr>
						<td><h4 class="text-left">03/06/19 12:51:41</h4></td>
						<td><h4 class="text-left">Train 2</h4></td>
						<td><h4 class="text-right mr-5">10KM</h4></td>
					</tr>
				</tbody>
			</table>
        </div>
      </div>
    </div>
  </body>
</html>


<?php
      if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['stop']))
      {
        func();
      }
      function func()
      {
        echo 'ok';
      }
?>
  






/
