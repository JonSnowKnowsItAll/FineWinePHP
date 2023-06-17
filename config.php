<?php
$host_name = "localhost:port"; //Change port
$database = "HowToBecomeKing"; // Change your database name
$username = "JonSnow"; // Your database user id 
$password = "Ghost"; // Your password


//////// Do not Edit below /////////
try {
$con = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?>
