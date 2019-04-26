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
                <a class="nav-link text-white" href="historique.php">Historique</a>
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
            <td><h4 class="text-right mr-5">10KM</h4></td>
          </tr>
          <tr>
            <td><h4 class="text-left">Train 2</h4></td>
            <td><h4 class="text-right mr-5">10KM</h4></td>
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
      <h3 class="my-5">Temps pour un tour</h3>
      <table class="table table-hover table-dark">
        <tbody>
          <tr>
            <td><h4 class="text-left">Train 1</h4></td>
            <td><h4 class="text-right mr-5">2 minutes</h4></td>
          </tr>
          <tr>
            <td><h4 class="text-left">Train 2</h4></td>
            <td><h4 class="text-right mr-5">4 minutes</h4></td>
          </tr>
        </tbody>
      </table>
      
    </div>
  </body>
</html>

<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
  
	$c = new Mosquitto\Client;
	$c->onConnect(function() use($c) {
		$c->disconnect();
	});
	$c->onSubscribe('subscribe');
	$c->onMessage('message');
	$c->connect('192.168.5.1');
	$c->subscribe("#", 0);
	$c->loopForever();
	
	function connect($r)
	{
		echo "Recieved response code {r}\n";
	}
	
	function subscribe()
	{
		echo "Subscribed to a topic\n";
	}
	
	function message($message)
	{
		printf("Got a message on topic %s with payload:\n%s\n", $message->topic, $message->payload);
	}
	
	function disconnect()
	{
		echo "Disconnected cleanly\n";
	} 
?>
