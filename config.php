<?php
$host_name = "localhost:port"; //server and port
$database = "HowToBecomeKing"; //database 
$username = "JonSnow"; //user id 
$password = "Ghost"; //password

//opens connection to database with PDO API
try 
{
  $con = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
} 
catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}
?>
