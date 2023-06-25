<?php
session_start();

// Change this to your connection info.
$host = 'localhost';
$username = 'root';
$password = "";
$db = 'etle';

// Try and connect using the info above.
$conn = mysqli_connect($host, $username, $password, $db);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>
