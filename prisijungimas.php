<?php

# https://www.simplilearn.com/tutorials/php-tutorial/php-login-form

include "db-admin.php";

$conn = OpenCon();

$name = $_POST['name'];
$password = $_POST['password'];

if (isset($_POST['name']) == false || isset($_POST['password']) == false) {
	header("Location: tuscias-laukelis.html");
	exit();
}

if (isset($_POST['name']) && isset($_POST['password'])) {
	$sql = "Select * FROM Vartotojai WHERE username='$name' AND password='$password'";
	$user = $conn -> query($sql);
	#$row = $user -> fetch_assoc();
	#echo $row['username'];
	#echo $row['password'];
	#echo mysqli_num_rows($user);

	if (mysqli_num_rows($user) == 1) {
		$row = $user -> fetch_assoc();
		if ($row['username'] == $name && $row['password'] == $password && $row['isAdmin'] == 1) {
			echo "Prisijungta kaip admin";
			header("Location: admin.php");
			exit();
		} elseif ($row['username'] == $name && $row['password'] == $password && $row['isAdmin'] == 0) {
			echo "Prisijungta kaip vartotojas";
			header("Location: vartotojas.php");
			exit();
		} else {
			echo "Nepavyko prisijungti";
			header("Location: neteisingi-duomenys.html");
			exit();
		}
	}
}

CloseCon($conn);

?>
