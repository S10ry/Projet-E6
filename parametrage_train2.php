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
              <li class="nav-item ">
                <a class="nav-link  text-white" href="index.php">Informations</a>
              </li>
              <li class="nav-item bg-success">
                <a class="nav-link text-white" href="parametrage_train1.php">Parametrage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="historique.php">Historique</a>
              </li>
            </ul>
        </div>
      </nav>
    <div class="container text-center">
      <h2 class="text-center my-5 bg-success text-white"> Paramétrage </h2>
      <div class="row justify-content-center">
        <div class="col-6 my-3">
          <ul class="nav nav-pills nav-fill bg-primary ">
            <li class="nav-item">
              <a class="nav-link text-white" href="parametrage_train1.php">Train 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-success" href="parametrage_train2.php">Train 2</a>
            </li>
          </ul>
        </div>
      </div>
      <form method="post" action="parametrage_train2.php">
        <button type="submit" class="btn btn-danger mt-5" name="stop">ARRET EN GARE</button>
      </form>
      <form method="post" action="parametrage_train2.php">
        <button type="submit" class="btn btn-danger mt-5" name="stop">ARRET EN GARE 2</button>
      </form>
      
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
  






