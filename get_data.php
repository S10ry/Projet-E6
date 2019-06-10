<?php

$client = new Mosquitto\Client("sup");
$client->onMessage('message');
$client->connect("");
$client->subscribe('#', 0);
$client->loopForever();

function message($message){
	$servername = "localhost";
	$username = "sory";
	$password = "sory";
	$dbname = "supervision";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if($message->topic == "vitesse"){
		$sql = "INSERT INTO supervision (vitesse_train1, created_at) VALUES ($message->payload, NOW());
	}
	
	if($message->topic == "vitesse"){
		$sql = "INSERT INTO supervision (vitesse_train1, created_at) VALUES ($message->payload, NOW());
	}
	
	if($conn->query($sql) === TRUE){
		echo "ok";
	}
	
	$conn->close();
}
	
?>
