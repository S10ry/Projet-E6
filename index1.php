<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$c = new Mosquitto\Client;
$c->onConnect(function() use($c) {
	$c->disconnect();
});

$c->connect('192.168.5.1');

$c->publish("site_web","stop train1 storm", 0);

$c->loopForever();

echo "Finished\n";
