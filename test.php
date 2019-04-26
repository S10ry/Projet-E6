

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
              <li class="nav-item">
                <a class="nav-link text-white" href="parametrage_train1.php">Parametrage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="historique.php">Historique</a>
              </li>
              <li class="nav-item bg-success">
                <a class="nav-link text-white" href="test.php">Test</a>
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
              <a class="nav-link btn btn-success" href="parametrage_train1.php">Train 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="parametrage_train2.php">Train 2</a>
            </li>
          </ul>
        </div>
      </div>
      <form method="post" action="test.php">
        <button type="submit" class="btn btn-danger mt-5" name="test1">TEST 1</button>
      </form>
      <form method="post" action="test.php">
        <button type="submit" class="btn btn-danger mt-5" name="test2">TEST 2</button>
      </form>
      <form method="post" action="test.php">
        <button type="submit" class="btn btn-danger mt-5" name="test3"></button>
      </form>
      
    </div>
  </body>
</html>

<?php

$client = new Mosquitto\Client;
$client->onConnect('connect');
$client->onDisconnect('disconnect');
$client->onSubscribe('subscribe');
$client->onMessage('message');
$client->connect("192.168.5.1");
$client->subscribe('#', 0); // Subscribe to all messages

$client->loopForever();

function connect($r) {
	echo "Received response code {$r}\n";
}

function subscribe() {
	echo "Subscribed to a topic\n";
}

function message($message) {
	printf("Got a message on topic %s with payload:\n%s\n", $message->topic, $message->payload);
}

function disconnect() {
	echo "Disconnected cleanly\n";
}
	
	
	
	


?>



