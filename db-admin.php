<?php
// https://www.cloudways.com/blog/connect-mysql-with-php/
function OpenCon() {
	$dbhost = "localhost";
	$dbuser = "admin";
	$dbpass = "adminpasswd";
	$db = "parduotuve";

	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connection failed: %s\n". $conn -> error);

	return $conn;
}

function CloseCon($conn) {
	$conn -> close();
}
?>
