<?php

$client = new Mosquitto\Client("new_pub");
$client->connect("192.168.5.1", 1883, 60);

while ($client->loop() == 0) {
	$message = "stop train1 storm";
	$client->publish('CC70002/motor/stopstation', $message, 0, false);
	$client->loop();
	sleep(1);
}

?>
