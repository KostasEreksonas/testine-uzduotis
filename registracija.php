<?php

# https://stackoverflow.com/questions/18523569/sorting-input-from-user-into-database

include 'db-admin.php';

$conn = OpenCon();

$name = $_POST['name'];
$password = $_POST['password'];

# Pridėti naują vartotoją į lentelę "Vartotojai"
$register = $conn -> query("INSERT INTO Vartotojai (username, password, isAdmin) VALUES ('".$name."', '".$password."', 0)");

# Užregistravus vartotoją nukreipti jį į pagrindinį puslapio langą
if ($register == true) {
	header("Location: registruota.html");
	exit();
}

CloseCon($conn);

?>
