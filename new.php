<?php

$client = new Mosquitto\Client("new");
$client->onConnect('connect');
$client->onDisconnect('disconnect');
$client->onSubscribe('subscribe');
$client->onMessage('message');
$client->connect("192.168.5.1", 1883, 60);
$client->subscribe('#', 1); // Subscribe to all messages

$client->loopForever();

function connect($r) {
	// echo "Received response code {$r}\n";
	// echo "<br>";
}

function subscribe() {
	// echo "Subscribed to a topic\n";
	// echo "<br>";
}

function message($message) {
	$tab = array("orange", "banana");
	if($message->topic == "CC72001/motor/pwm"){
		array_push($tab, $message->topic);
	}
	
	if($message->topic == "CC70002/motor/pwm"){
		array_push($tab, $message->topic);
	}
	
	print_r($tab);
	echo "<br>";
	echo "<br>";
	
	
	 
	 
	/*if(isset($tab['vitesse_train1']) && isset($tab['vitesse_train2'])){
		echo "ok";
	}
	else {
		echo "nope";
	}*/	
		
	
	// printf("Got a message on topic %s with payload:\n%s\n", $message->topic, $message->payload);
	
	
}

function disconnect() {
	echo "Disconnected cleanly\n";
	
}
