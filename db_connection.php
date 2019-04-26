<?php
function openCon()
{
  $dbhost = "localhost";
  $dbuser = "sory";
  $dbpass = "sory";
  $db = "supervision";
  
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
  
  if($conn->connect_error)
  {
    die("Connection failed: " .$conn->connect_error);
  }
  
  echo "Connected successfully";
}
